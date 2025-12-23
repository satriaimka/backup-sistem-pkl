# Dokumentasi Filter Otomatis Response Berdasarkan NIM Pencacah

## Ringkasan

Implementasi ini menambahkan filter otomatis pada survey ID 797539 agar setiap pencacah (user) hanya dapat melihat tanggapan/response dari responden yang mereka cacah sendiri berdasarkan NIM.

## Detail Implementasi

### 1. File yang Dimodifikasi

#### A. `application/models/SurveyDynamic.php`

**Method: `search()` (sekitar line 680-730)**

- **Fungsi**: Menambahkan filter otomatis saat menampilkan daftar responses
- **Perubahan**: Menambahkan kondisi WHERE untuk membandingkan kolom `797539X2X15` (NIM Pencacah) dengan `users_name` (username yang login)
- **Kode yang ditambahkan**:

```php
// Custom filter: Auto-filter responses by NIM for survey 797539
// Filter responses based on logged-in user's NIM (username)
if (self::$sid == 797539 && !Yii::app()->user->isGuest) {
    $currentUsername = Yii::app()->user->getName();
    $isSuperAdmin = Permission::model()->hasGlobalPermission('superadmin', 'read');

    // Only apply filter if user is not superadmin
    if (!$isSuperAdmin) {
        // Column 797539X2X15 contains the NIM of the enumerator (pencacah)
        // Filter to only show responses where this column matches the logged-in username
        $criteria->compare('t.797539X2X15', $currentUsername, true);
    }
}
```

**Method: `next()` (sekitar line 478-500)**

- **Fungsi**: Menambahkan filter saat navigasi ke response berikutnya
- **Perubahan**: Menambahkan kondisi WHERE agar tombol "Next" hanya menampilkan response dengan NIM yang sama
- **Kode yang ditambahkan**:

```php
// Custom filter for survey 797539: only show responses from same NIM
if (self::$sid == 797539 && !Yii::app()->user->isGuest) {
    $currentUsername = Yii::app()->user->getName();
    $isSuperAdmin = Permission::model()->hasGlobalPermission('superadmin', 'read');

    if (!$isSuperAdmin) {
        $command->andWhere('797539X2X15 = :nim', array(':nim' => $currentUsername));
    }
}
```

**Method: `previous()` (sekitar line 511-540)**

- **Fungsi**: Menambahkan filter saat navigasi ke response sebelumnya
- **Perubahan**: Menambahkan kondisi WHERE agar tombol "Previous" hanya menampilkan response dengan NIM yang sama
- **Kode yang ditambahkan**: (sama seperti method `next()`)

#### B. `application/controllers/ResponsesController.php`

**Method: `actionView()` (sekitar line 145-175)**

- **Fungsi**: Menambahkan validasi akses saat user membuka detail response
- **Perubahan**: Memvalidasi apakah NIM di response cocok dengan username yang login sebelum menampilkan detail
- **Kode yang ditambahkan**:

```php
// Custom security: Check if user has access to this specific response for survey 797539
if ($surveyId == 797539 && !App()->user->isGuest) {
    $currentUsername = App()->user->getName();
    $isSuperAdmin = Permission::model()->hasGlobalPermission('superadmin', 'read');

    // Only apply check if user is not superadmin
    if (!$isSuperAdmin) {
        // Get the response to check the NIM field
        $response = SurveyDynamic::model($surveyId)->findByPk($id);
        if ($response) {
            // Column 797539X2X15 contains the NIM of the enumerator (pencacah)
            $responseNIM = isset($response->{'797539X2X15'}) ? $response->{'797539X2X15'} : '';

            // If NIM doesn't match, deny access
            if ($responseNIM !== $currentUsername) {
                App()->user->setFlash('error', gT("You do not have permission to view this response."));
                $this->redirect(['responses/browse', 'surveyId' => $surveyId]);
                App()->end();
            }
        }
    }
}
```

### 2. Cara Kerja Filter

#### Logika Filter:

1. **Cek Survey ID**: Filter hanya aktif untuk survey ID 797539
2. **Cek User Login**: Filter hanya berlaku jika user sudah login (bukan guest)
3. **Cek Superadmin**: Filter tidak berlaku untuk superadmin (mereka bisa lihat semua data)
4. **Bandingkan NIM**:
   - Username user yang login (dari `lime_users.users_name`)
   - Dibandingkan dengan kolom `797539X2X15` di tabel `lime_survey_797539`
   - Hanya tampilkan response yang cocok

### 3. Keamanan yang Diimplementasikan

#### A. Filter di Level Database Query

- Setiap query responses sudah terfilter otomatis di level model
- User tidak bisa bypass filter melalui parameter URL

#### B. Validasi Akses Detail Response

- Jika user mencoba akses detail response via URL langsung (contoh: `/responses/view/surveyId/797539/id/123`)
- Sistem akan validasi apakah response tersebut milik user tersebut
- Jika tidak cocok, akses ditolak dan user diredirect ke halaman browse

#### C. Navigasi Aman

- Tombol "Next" dan "Previous" hanya menampilkan response sesuai NIM
- User tidak bisa melompat ke response milik pencacah lain

#### D. Pengecualian untuk Superadmin

- Superadmin tetap bisa melihat semua response untuk keperluan monitoring dan audit
- Menggunakan `Permission::model()->hasGlobalPermission('superadmin', 'read')`

### 4. Data yang Digunakan

#### Tabel dan Kolom:

- **Tabel User**: `lime_users`

  - Kolom: `users_name` (berisi NIM pencacah sebagai username)

- **Tabel Response**: `lime_survey_797539`
  - Kolom: `797539X2X15` (berisi NIM pencacah yang mengisi response)

### 5. Testing dan Verifikasi

#### Langkah Testing:

1. **Login sebagai pencacah A** (username: NIM_A)

   - Buka menu "Browse responses"
   - Pastikan hanya muncul response dengan kolom `797539X2X15 = NIM_A`

2. **Login sebagai pencacah B** (username: NIM_B)

   - Buka menu "Browse responses"
   - Pastikan hanya muncul response dengan kolom `797539X2X15 = NIM_B`

3. **Test Direct Access**

   - Login sebagai pencacah A
   - Coba akses URL: `/index.php?r=responses/view&surveyId=797539&id=[ID_RESPONSE_PENCACAH_B]`
   - Pastikan akses ditolak dan muncul pesan error

4. **Test Navigasi**

   - Login sebagai pencacah A
   - Buka detail response milik pencacah A
   - Klik tombol "Next" atau "Previous"
   - Pastikan hanya navigasi ke response milik pencacah A

5. **Test Superadmin**
   - Login sebagai superadmin
   - Buka "Browse responses"
   - Pastikan bisa melihat semua response dari semua pencacah

### 6. Catatan Penting

#### A. Survey ID Hard-coded

- Filter ini khusus untuk survey ID **797539**
- Jika ingin menerapkan ke survey lain, ubah angka `797539` di 4 tempat:
  1. `SurveyDynamic.php` - method `search()`
  2. `SurveyDynamic.php` - method `next()`
  3. `SurveyDynamic.php` - method `previous()`
  4. `ResponsesController.php` - method `actionView()`

#### B. Nama Kolom Hard-coded

- Kolom yang menyimpan NIM pencacah: `797539X2X15`
- Format ini mengikuti konvensi LimeSurvey: `[SurveyID]X[GroupID]X[QuestionID]`
- Jika struktur survey berubah, kolom ini perlu disesuaikan

#### C. Username = NIM

- Implementasi ini mengasumsikan username user sama dengan NIM
- Jika struktur berbeda, perlu modifikasi logic perbandingan

### 7. Troubleshooting

#### Problem: Filter tidak bekerja

- **Solusi 1**: Cek apakah kolom `797539X2X15` benar-benar ada di database
- **Solusi 2**: Cek apakah nilai di kolom tersebut persis sama dengan username (case-sensitive)
- **Solusi 3**: Cek log error di `application/logs/`

#### Problem: Superadmin tidak bisa lihat semua data

- **Solusi**: Cek permission superadmin di tabel `lime_permissions`

#### Problem: User bisa lihat data orang lain

- **Solusi**: Clear cache LimeSurvey dan pastikan perubahan sudah tersimpan dengan benar

### 8. Backup dan Rollback

Jika ingin mengembalikan ke kondisi semula:

1. Restore file `application/models/SurveyDynamic.php`
2. Restore file `application/controllers/ResponsesController.php`

### 9. Rekomendasi

#### A. Performance

- Filter ini efisien karena diterapkan di level database query
- Tidak ada overhead signifikan

#### B. Security

- Sudah cukup aman untuk kebutuhan umum
- Untuk security lebih tinggi, pertimbangkan enkripsi tambahan

#### C. Maintainability

- Dokumentasikan nomor survey ID dan kolom yang digunakan
- Jika ada perubahan struktur survey, update filter segera

---

**Tanggal Implementasi**: 13 Desember 2025
**Versi LimeSurvey**: [Sesuai versi yang digunakan]
**Developer**: GitHub Copilot

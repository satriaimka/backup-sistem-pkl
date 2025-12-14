<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * LimeSurvey
 * Copyright (C) 2007-2019 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v3 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

/* 
WARNING!!!
ONCE SET, ENCRYPTION KEYS SHOULD NEVER BE CHANGED, OTHERWISE ALL ENCRYPTED DATA COULD BE LOST !!!

*/

$config = array();
$config['encryptionnonce'] = '33d8ea4d610139473a6328a074efbafbd46049b83a7ab7e7';
$config['encryptionsecretboxkey'] = '171919f00113bffe439a7be326f86f34f6519c49fd7a1ec6ef99084937089970';
return $config;
/**
 * Mobile Sidebar Menu for LimeSurvey Admin
 * Adds hamburger menu for mobile/tablet devices
 * Version: 1.0
 */

(function() {
    'use strict';
    
    console.log('[Mobile Sidebar] Script loaded, viewport:', window.innerWidth + 'x' + window.innerHeight);
    
    // Wait for DOM and Vue to be ready
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(initializeMobileSidebar, 500);
    });
    
    function initializeMobileSidebar() {
        // Only initialize if on survey administration pages with sidebar
        var sidebarContainer = document.getElementById('vue-sidebar-container');
        if (!sidebarContainer) {
            console.log('[Mobile Sidebar] No sidebar container found, skipping initialization');
            return;
        }
        
        console.log('[Mobile Sidebar] Initializing...');
        
        // Create hamburger button
        var hamburgerBtn = document.createElement('button');
        hamburgerBtn.id = 'mobileSidebarToggle';
        hamburgerBtn.className = 'mobile-sidebar-toggle';
        hamburgerBtn.innerHTML = '<span class="hamburger-icon">☰</span>';
        hamburgerBtn.style.cssText = 'display: none; position: fixed; top: 58px; left: 8px; z-index: 10000; background: #14AE5C; color: white; border: none; padding: 12px 16px; border-radius: 5px; font-size: 24px; line-height: 1; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.3);';
        
        // Create backdrop
        var backdrop = document.createElement('div');
        backdrop.id = 'mobileSidebarBackdrop';
        backdrop.className = 'mobile-sidebar-backdrop';
        backdrop.style.cssText = 'display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.5); z-index: 9998;';
        
        // Insert into DOM
        document.body.insertBefore(hamburgerBtn, document.body.firstChild);
        document.body.insertBefore(backdrop, document.body.firstChild);
        
        var sidebar = sidebarContainer;
        
        // Show button on mobile
        updateButtonVisibility();
        
        // Toggle function
        function toggleSidebar(show) {
            console.log('[Mobile Sidebar] Toggle:', show);
            
            if (show) {
                // CRITICAL FIX: Vue has v-if="(useMobileView && smallScreenHidden) || !useMobileView"
                // We need smallScreenHidden=TRUE for content to render on mobile!
                try {
                    if (sidebar.__vue__) {
                        var vueApp = sidebar.__vue__;
                        if (vueApp.$children && vueApp.$children[0]) {
                            // Set to TRUE so v-if passes on mobile
                            vueApp.$children[0].smallScreenHidden = true;
                            console.log('[Mobile Sidebar] Vue smallScreenHidden set to TRUE');
                        }
                    }
                } catch(e) {
                    console.log('[Mobile Sidebar] Vue override failed:', e);
                }
                
                // Wait a tick for Vue to re-render
                setTimeout(function() {
                    // Now force sidebar to show with proper width
                    sidebar.style.setProperty('position', 'fixed', 'important');
                    sidebar.style.setProperty('left', '0', 'important');
                    sidebar.style.setProperty('top', '0', 'important');
                    sidebar.style.setProperty('width', '85vw', 'important');
                    sidebar.style.setProperty('max-width', '350px', 'important');
                    sidebar.style.setProperty('min-width', '300px', 'important');
                    sidebar.style.setProperty('height', '100vh', 'important');
                    sidebar.style.setProperty('z-index', '9999', 'important');
                    sidebar.style.setProperty('background', 'white', 'important');
                    sidebar.style.setProperty('box-shadow', '2px 0 10px rgba(0,0,0,0.3)', 'important');
                    sidebar.style.setProperty('overflow-y', 'auto', 'important');
                    sidebar.style.setProperty('overflow-x', 'hidden', 'important');
                    
                    console.log('[Mobile Sidebar] Sidebar styles applied, computed width:', window.getComputedStyle(sidebar).width);
                }, 50);
                
                backdrop.style.display = 'block';
                document.body.style.overflow = 'hidden';
                sidebar.classList.add('mobile-open');
                
            } else {
                sidebar.style.setProperty('left', '-100%', 'important');
                backdrop.style.display = 'none';
                document.body.style.overflow = '';
                sidebar.classList.remove('mobile-open');
                
                // Reset Vue state
                try {
                    if (sidebar.__vue__ && sidebar.__vue__.$children && sidebar.__vue__.$children[0]) {
                        sidebar.__vue__.$children[0].smallScreenHidden = false;
                    }
                } catch(e) {}
            }
        }
        
        // Button click
        hamburgerBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var isOpen = sidebar.classList.contains('mobile-open');
            toggleSidebar(!isOpen);
        });
        
        // Backdrop click
        backdrop.addEventListener('click', function() {
            toggleSidebar(false);
        });
        
        // Auto-close on link click
        sidebar.addEventListener('click', function(e) {
            if (e.target.tagName === 'A' || e.target.closest('a')) {
                setTimeout(function() {
                    toggleSidebar(false);
                }, 200);
            }
        });
        
        // Handle window resize
        function updateButtonVisibility() {
            if (window.innerWidth <= 991) {
                hamburgerBtn.style.display = 'block';
            } else {
                hamburgerBtn.style.display = 'none';
                toggleSidebar(false);
            }
        }
        
        window.addEventListener('resize', updateButtonVisibility);
        
        console.log('[Mobile Sidebar] Initialization complete');
    }
})();

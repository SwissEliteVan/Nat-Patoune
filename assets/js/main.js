/**
 * Nat Patoune - Script principal
 * 
 * Ce fichier contient les fonctionnalités JavaScript pour le thème Nat Patoune.
 * - Menu mobile
 * - Bannière de cookies
 * - Bouton WhatsApp
 * - Protection d'image
 */

(function() {
  'use strict';

  // Attendre que le DOM soit chargé
  document.addEventListener('DOMContentLoaded', function() {
    // Initialiser toutes les fonctionnalités
    initMobileMenu();
    initCookieBanner();
    initScrollHeader();
    initImageProtection();
    initWhatsAppButton();
  });

  /**
   * Menu mobile
   */
  function initMobileMenu() {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (!menuBtn || !mobileMenu) return;
    
    // Fonction pour ouvrir/fermer le menu
    function toggleMenu() {
      const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
      
      // Basculer l'état du menu
      menuBtn.setAttribute('aria-expanded', !isExpanded);
      mobileMenu.classList.toggle('hidden');
      mobileMenu.classList.toggle('open');
      
      // Changer l'icône
      const icon = menuBtn.querySelector('i');
      if (icon) {
        if (isExpanded) {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
          menuBtn.setAttribute('aria-label', 'Ouvrir le menu');
        } else {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-times');
          menuBtn.setAttribute('aria-label', 'Fermer le menu');
          
          // Focus sur le premier élément du menu quand il s'ouvre
          setTimeout(() => {
            const firstLink = mobileMenu.querySelector('a');
            if (firstLink) firstLink.focus();
          }, 100);
        }
      }
    }
    
    // Événement clic
    menuBtn.addEventListener('click', toggleMenu);
    
    // Événement clavier pour le bouton du menu
    menuBtn.addEventListener('keydown', function(e) {
      // Ouvrir/fermer avec Espace ou Entrée
      if (e.key === ' ' || e.key === 'Enter') {
        e.preventDefault();
        toggleMenu();
      }
      
      // Fermer avec Échap
      if (e.key === 'Escape' && menuBtn.getAttribute('aria-expanded') === 'true') {
        toggleMenu();
      }
    });
    
    // Fermer le menu mobile lors du clic sur un lien
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach((link, index) => {
      link.addEventListener('click', function() {
        menuBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('open');
        
        const icon = menuBtn.querySelector('i');
        if (icon) {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
          menuBtn.setAttribute('aria-label', 'Ouvrir le menu');
        }
      });
      
      // Navigation au clavier dans le menu
      link.addEventListener('keydown', function(e) {
        // Fermer avec Échap
        if (e.key === 'Escape') {
          toggleMenu();
          menuBtn.focus();
        }
        
        // Navigation avec les flèches
        if (e.key === 'ArrowDown') {
          e.preventDefault();
          const nextLink = mobileLinks[index + 1] || mobileLinks[0];
          if (nextLink) nextLink.focus();
        }
        
        if (e.key === 'ArrowUp') {
          e.preventDefault();
          const prevLink = mobileLinks[index - 1] || mobileLinks[mobileLinks.length - 1];
          if (prevLink) prevLink.focus();
        }
      });
    });
    
    // Fermer le menu avec Échap quand il est ouvert
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && menuBtn.getAttribute('aria-expanded') === 'true') {
        toggleMenu();
        menuBtn.focus();
      }
    });
  }

  /**
   * Gestion du header au scroll
   */
  function initScrollHeader() {
    const header = document.querySelector('header');
    if (!header) return;
    
    let lastScrollTop = 0;
    const scrollThreshold = 100;
    
    window.addEventListener('scroll', function() {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      
      // Si on a scrollé plus que le seuil
      if (currentScroll > scrollThreshold) {
        // Scrolling down
        if (currentScroll > lastScrollTop) {
          header.classList.add('header-hidden');
        } 
        // Scrolling up
        else {
          header.classList.remove('header-hidden');
        }
      } else {
        header.classList.remove('header-hidden');
      }
      
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    }, { passive: true });
  }

  /**
   * Bannière de cookies
   */
  function initCookieBanner() {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal = document.getElementById('cookie-modal');
    
    if (!cookieBanner) return;
    
    // Vérifier si l'utilisateur a déjà fait un choix
    const cookieConsent = localStorage.getItem('natpatoune_cookie_consent');
    
    // Si pas de consentement stocké, afficher la bannière
    if (!cookieConsent) {
      setTimeout(() => {
        cookieBanner.classList.remove('hidden');
        cookieBanner.classList.add('visible');
      }, 1000);
    }
    
    // Bouton Accepter
    const acceptBtn = document.getElementById('cookie-accept');
    if (acceptBtn) {
      acceptBtn.addEventListener('click', function() {
        acceptCookies({
          essential: true,
          statistics: true,
          marketing: false
        });
      });
    }
    
    // Bouton Refuser
    const refuseBtn = document.getElementById('cookie-refuse');
    if (refuseBtn) {
      refuseBtn.addEventListener('click', function() {
        acceptCookies({
          essential: true,
          statistics: false,
          marketing: false
        });
      });
    }
    
    // Bouton Personnaliser
    const customizeBtn = document.getElementById('cookie-customize');
    if (customizeBtn && cookieModal) {
      customizeBtn.addEventListener('click', function() {
        cookieModal.classList.remove('hidden');
        cookieModal.classList.add('visible');
      });
    }
    
    // Fermer la modal
    const closeModalBtn = document.getElementById('cookie-modal-close');
    if (closeModalBtn && cookieModal) {
      closeModalBtn.addEventListener('click', function() {
        cookieModal.classList.remove('visible');
        cookieModal.classList.add('hidden');
      });
    }
    
    // Clic en dehors de la modal pour fermer
    if (cookieModal) {
      cookieModal.addEventListener('click', function(e) {
        if (e.target === cookieModal) {
          cookieModal.classList.remove('visible');
          cookieModal.classList.add('hidden');
        }
      });
    }
    
    // Bouton Enregistrer préférences
    const savePrefsBtn = document.getElementById('cookie-save-prefs');
    if (savePrefsBtn) {
      savePrefsBtn.addEventListener('click', function() {
        const statsCheckbox = document.getElementById('cookie-stats');
        const marketingCheckbox = document.getElementById('cookie-marketing');
        
        acceptCookies({
          essential: true,
          statistics: statsCheckbox ? statsCheckbox.checked : false,
          marketing: marketingCheckbox ? marketingCheckbox.checked : false
        });
        
        if (cookieModal) {
          cookieModal.classList.remove('visible');
          cookieModal.classList.add('hidden');
        }
      });
    }
    
    // Bouton Tout accepter
    const acceptAllBtn = document.getElementById('cookie-accept-all');
    if (acceptAllBtn) {
      acceptAllBtn.addEventListener('click', function() {
        acceptCookies({
          essential: true,
          statistics: true,
          marketing: true
        });
        
        if (cookieModal) {
          cookieModal.classList.remove('visible');
          cookieModal.classList.add('hidden');
        }
      });
    }
    
    // Fonction pour accepter les cookies et masquer la bannière
    function acceptCookies(preferences) {
      localStorage.setItem('natpatoune_cookie_consent', JSON.stringify(preferences));
      localStorage.setItem('natpatoune_cookie_date', new Date().toISOString());
      
      cookieBanner.classList.remove('visible');
      cookieBanner.classList.add('hidden');
      
      // Activer/désactiver les scripts en fonction des préférences
      if (preferences.statistics) {
        enableStatisticsScripts();
      }
      
      if (preferences.marketing) {
        enableMarketingScripts();
      }
    }
    
    // Activer les scripts de statistiques
    function enableStatisticsScripts() {
      // Cette fonction serait utilisée pour charger des scripts comme Google Analytics
      console.log('Scripts de statistiques activés');
    }
    
    // Activer les scripts marketing
    function enableMarketingScripts() {
      // Cette fonction serait utilisée pour charger des scripts marketing
      console.log('Scripts marketing activés');
    }
    
    // Charger les préférences existantes
    if (cookieConsent) {
      try {
        const preferences = JSON.parse(cookieConsent);
        
        // Mettre à jour les checkboxes dans la modal
        const statsCheckbox = document.getElementById('cookie-stats');
        const marketingCheckbox = document.getElementById('cookie-marketing');
        
        if (statsCheckbox && preferences.statistics) {
          statsCheckbox.checked = true;
        }
        
        if (marketingCheckbox && preferences.marketing) {
          marketingCheckbox.checked = true;
        }
        
        // Activer les scripts selon les préférences
        if (preferences.statistics) {
          enableStatisticsScripts();
        }
        
        if (preferences.marketing) {
          enableMarketingScripts();
        }
      } catch (e) {
        console.error('Erreur lors du chargement des préférences de cookies', e);
      }
    }
  }

  /**
   * Protection d'image (photo de Nat)
   */
  function initImageProtection() {
    const natPhotoContainers = document.querySelectorAll('.nat-photo-container.protected');
    
    natPhotoContainers.forEach(container => {
      // Désactiver le clic droit
      container.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        return false;
      });
      
      // Désactiver le glisser-déposer
      container.addEventListener('dragstart', function(e) {
        e.preventDefault();
        return false;
      });
    });
  }

  /**
   * Bouton WhatsApp
   */
  function initWhatsAppButton() {
    const whatsappButton = document.querySelector('.whatsapp-button');
    const cookieBanner = document.getElementById('cookie-banner');
    
    if (!whatsappButton) return;
    
    // Ajuster la position du bouton WhatsApp si la bannière de cookies est visible
    function adjustWhatsAppPosition() {
      if (cookieBanner && !cookieBanner.classList.contains('hidden')) {
        whatsappButton.style.bottom = cookieBanner.offsetHeight + 24 + 'px';
      } else {
        whatsappButton.style.bottom = '1.5rem';
      }
    }
    
    // Observer les changements de visibilité de la bannière de cookies
    if (cookieBanner) {
      const observer = new MutationObserver(adjustWhatsAppPosition);
      observer.observe(cookieBanner, { attributes: true, attributeFilter: ['class'] });
      
      // Ajuster la position initiale
      adjustWhatsAppPosition();
    }
  }

})();
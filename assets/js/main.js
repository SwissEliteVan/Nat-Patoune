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
    initAccordions();
    initCertificateModal();
    initLeadPopup();
    initBackToTop();
    initModals();
    initGiftForm();
    initOffreModal();
    initOfflineDetection();
  });

  /**
   * Bouton Back to Top
   */
  function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (!backToTopBtn) return;
    
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        backToTopBtn.classList.remove('hidden');
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.add('hidden');
        backToTopBtn.classList.remove('show');
      }
    }, { passive: true });
  }

  /**
   * Gestion des modales génériques
   */
  function initModals() {
    // Ouverture des modales CGV, Privacy, Mentions
    const modalTriggers = {
      'modal-cgv': document.querySelectorAll('[onclick*="modal-cgv"]'),
      'modal-privacy': document.querySelectorAll('[onclick*="modal-privacy"]'),
      'modal-mentions': document.querySelectorAll('[onclick*="modal-mentions"]')
    };
    
    Object.keys(modalTriggers).forEach(modalId => {
      const triggers = modalTriggers[modalId];
      const modal = document.getElementById(modalId);
      
      if (!modal) return;
      
      triggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
          e.preventDefault();
          modal.classList.remove('hidden');
          modal.classList.add('flex');
        });
      });
    });
  }

  /**
   * Formulaire cadeau
   */
  function initGiftForm() {
    const giftForm = document.getElementById('giftForm');
    if (!giftForm) return;
    
    giftForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      if (!this.checkValidity()) {
        this.reportValidity();
        return;
      }
      
      const from = document.getElementById('giftFrom').value;
      const to = document.getElementById('giftTo').value;
      const amountRadio = document.querySelector('input[name="amount"]:checked');
      const amount = amountRadio ? amountRadio.value : 'Non spécifié';
      const msg = document.getElementById('giftMessage').value;
      const email = document.getElementById('giftEmail').value;
      
      // Construire l'email
      const subject = encodeURIComponent('Commande Bon Cadeau Nat\'Patoune - ' + from);
      const body = encodeURIComponent(`Bonjour Nathalie,

Je souhaite commander un bon cadeau.

- De la part de : ${from}
- Pour : ${to}
- Montant : ${amount} CHF
- Email de réception : ${email}

Message sur la carte :
"${msg}"

Je procède au paiement TWINT/Bancaire de ce pas.
Merci !`);
      
      window.location.href = `mailto:miaou@nat-patoune.ch?subject=${subject}&body=${body}`;
      
      // Afficher le message de succès
      giftForm.classList.add('hidden');
      const successDiv = document.getElementById('giftSuccess');
      const confName = document.getElementById('confName');
      if (confName) confName.innerText = from;
      if (successDiv) successDiv.classList.remove('hidden');
      
      const modalContent = document.querySelector('#modal-cadeau .modal-content');
      if (modalContent) modalContent.scrollTop = 0;
    });
  }

  /**
   * Modal Offre Commerciale (non intrusif)
   */
  function initOffreModal() {
    const offreModal = document.getElementById('modal-offre');
    const closeBtn = document.getElementById('modal-offre-close');
    const ctaPrimary = document.getElementById('modal-offre-cta-primary');
    const ctaSecondary = document.getElementById('modal-offre-cta-secondary');
    
    if (!offreModal) return;
    
    // Vérifier si déjà affichée dans cette session
    if (sessionStorage.getItem('offreClosed')) return;
    
    let modalShown = false;
    let scrollTriggered = false;
    let timeTriggered = false;
    
    // Déclenchement après 12 secondes
    const timeoutId = setTimeout(() => {
      if (!modalShown && !scrollTriggered) {
        timeTriggered = true;
        showOffreModal();
      }
    }, 12000); // 12 secondes
    
    // Déclenchement au scroll 40%
    function checkScroll() {
      if (modalShown || scrollTriggered) return;
      
      const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
      
      if (scrollPercent >= 40) {
        scrollTriggered = true;
        clearTimeout(timeoutId);
        showOffreModal();
        window.removeEventListener('scroll', checkScroll);
      }
    }
    
    window.addEventListener('scroll', checkScroll, { passive: true });
    
    // Fonction pour afficher le modal
    function showOffreModal() {
      if (modalShown) return;
      modalShown = true;
      
      offreModal.classList.remove('hidden');
      offreModal.classList.add('flex');
      
      // Focus sur le bouton fermer pour accessibilité
      setTimeout(() => {
        if (closeBtn) closeBtn.focus();
      }, 100);
    }
    
    // Fonction pour fermer le modal
    function closeOffreModal() {
      offreModal.classList.add('hidden');
      offreModal.classList.remove('flex');
      sessionStorage.setItem('offreClosed', 'true');
    }
    
    // Bouton fermer
    if (closeBtn) {
      closeBtn.addEventListener('click', closeOffreModal);
    }
    
    // CTA principal - ferme le modal et scroll vers contact
    if (ctaPrimary) {
      ctaPrimary.addEventListener('click', function(e) {
        closeOffreModal();
      });
    }
    
    // CTA secondaire - ferme le modal et scroll vers zones-tarifs
    if (ctaSecondary) {
      ctaSecondary.addEventListener('click', function(e) {
        closeOffreModal();
      });
    }
    
    // Fermer au clic en dehors du modal
    offreModal.addEventListener('click', function(e) {
      if (e.target === offreModal) {
        closeOffreModal();
      }
    });
    
    // Fermer avec la touche Escape
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !offreModal.classList.contains('hidden')) {
        closeOffreModal();
      }
    });
  }

  /**
   * Détection offline
   */
  function initOfflineDetection() {
    const offlineMessage = document.getElementById('offlineMessage');
    if (!offlineMessage) return;
    
    function checkConnection() {
      if (!navigator.onLine) {
        offlineMessage.classList.remove('hidden');
      } else {
        offlineMessage.classList.add('hidden');
      }
    }
    
    window.addEventListener('online', () => {
      offlineMessage.classList.add('hidden');
    });
    
    window.addEventListener('offline', () => {
      offlineMessage.classList.remove('hidden');
    });
    
    checkConnection();
  }

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

  /**
   * Accordéons (Zones + FAQ)
   */
  function initAccordions() {
    // Sélectionner tous les boutons d'accordéon
    const accordionTriggers = document.querySelectorAll('.zone-accordion-trigger, .faq-accordion-trigger');
    
    accordionTriggers.forEach(trigger => {
      trigger.addEventListener('click', function() {
        const contentId = this.getAttribute('aria-controls');
        const content = document.getElementById(contentId);
        const chevron = this.querySelector('.fa-chevron-down');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        
        if (!content) return;
        
        // Basculer l'état
        if (isExpanded) {
          // Fermer
          this.setAttribute('aria-expanded', 'false');
          content.classList.add('hidden');
          if (chevron) {
            chevron.style.transform = 'rotate(0deg)';
          }
        } else {
          // Ouvrir
          this.setAttribute('aria-expanded', 'true');
          content.classList.remove('hidden');
          if (chevron) {
            chevron.style.transform = 'rotate(180deg)';
          }
        }
      });
      
      // Support clavier
      trigger.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          this.click();
        }
      });
    });
  }

  /**
   * Modal certificat
   */
  function initCertificateModal() {
    const certificateTriggers = document.querySelectorAll('.certificate-zoom-trigger');
    const modal = document.getElementById('certificate-modal');
    const modalClose = document.getElementById('certificate-modal-close');
    
    if (!modal) return;
    
    // Ouvrir la modal au clic sur le certificat
    certificateTriggers.forEach(trigger => {
      trigger.addEventListener('click', function() {
        modal.classList.remove('hidden');
        modal.style.display = 'flex';
        
        // Focus sur le bouton fermer pour accessibilité
        setTimeout(() => {
          if (modalClose) modalClose.focus();
        }, 100);
      });
      
      // Support clavier
      trigger.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          this.click();
        }
      });
    });
    
    // Fermer la modal
    if (modalClose) {
      modalClose.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.style.display = 'none';
      });
    }
    
    // Fermer au clic en dehors
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.classList.add('hidden');
        modal.style.display = 'none';
      }
    });
    
    // Fermer avec Échap
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        modal.classList.add('hidden');
        modal.style.display = 'none';
      }
    });
  }

  /**
   * Lead Popup (non intrusive)
   */
  function initLeadPopup() {
    const popup = document.getElementById('lead-popup');
    const popupClose = document.getElementById('lead-popup-close');
    const popupForm = document.getElementById('lead-popup-form');
    const popupSuccess = document.getElementById('lead-popup-success');
    const popupCloseSuccess = document.getElementById('lead-popup-close-success');
    
    if (!popup) return;
    
    // Vérifier si l'utilisateur a déjà vu/fermé la popup
    const popupDismissed = localStorage.getItem('natpatoune_lead_popup_dismissed');
    const popupSubmitted = localStorage.getItem('natpatoune_lead_popup_submitted');
    
    if (popupDismissed || popupSubmitted) return;
    
    let popupShown = false;
    let scrollTriggered = false;
    
    // Afficher après 30 secondes
    const timeoutId = setTimeout(() => {
      if (!popupShown && !scrollTriggered) {
        showPopup();
      }
    }, 30000); // 30 secondes
    
    // Afficher au scroll 50%
    function checkScroll() {
      if (popupShown || scrollTriggered) return;
      
      const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
      
      if (scrollPercent > 50) {
        scrollTriggered = true;
        clearTimeout(timeoutId);
        showPopup();
        window.removeEventListener('scroll', checkScroll);
      }
    }
    
    window.addEventListener('scroll', checkScroll, { passive: true });
    
    // Fonction pour afficher la popup
    function showPopup() {
      if (popupShown) return;
      popupShown = true;
      
      popup.classList.remove('hidden');
      popup.style.display = 'flex';
      
      // Focus sur le premier champ
      setTimeout(() => {
        const firstInput = popup.querySelector('input[type="text"]');
        if (firstInput) firstInput.focus();
      }, 100);
    }
    
    // Fermer la popup
    function closePopup() {
      popup.classList.add('hidden');
      popup.style.display = 'none';
      localStorage.setItem('natpatoune_lead_popup_dismissed', 'true');
      localStorage.setItem('natpatoune_lead_popup_dismissed_date', new Date().toISOString());
    }
    
    if (popupClose) {
      popupClose.addEventListener('click', closePopup);
    }
    
    if (popupCloseSuccess) {
      popupCloseSuccess.addEventListener('click', closePopup);
    }
    
    // Fermer au clic en dehors
    popup.addEventListener('click', function(e) {
      if (e.target === popup) {
        closePopup();
      }
    });
    
    // Fermer avec Échap
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !popup.classList.contains('hidden')) {
        closePopup();
      }
    });
    
    // Soumission du formulaire
    if (popupForm) {
      popupForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(popupForm);
        const name = formData.get('lead-name');
        const email = formData.get('lead-email');
        const consent = formData.get('lead-consent');
        
        if (!name || !email || !consent) {
          alert('Veuillez remplir tous les champs requis.');
          return;
        }
        
        // Ici, vous pouvez ajouter un appel AJAX pour envoyer les données
        // Pour l'instant, on simule le succès
        console.log('Lead capturé:', { name, email });
        
        // Marquer comme soumis
        localStorage.setItem('natpatoune_lead_popup_submitted', 'true');
        localStorage.setItem('natpatoune_lead_popup_submitted_date', new Date().toISOString());
        localStorage.setItem('natpatoune_lead_email', email);
        
        // Afficher le message de succès
        popupForm.classList.add('hidden');
        if (popupSuccess) {
          popupSuccess.classList.remove('hidden');
        }
        
        // Fermer automatiquement après 5 secondes
        setTimeout(() => {
          closePopup();
        }, 5000);
      });
    }
  }

})();
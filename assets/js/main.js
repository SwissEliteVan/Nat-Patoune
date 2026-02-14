(function () {
	'use strict';

	function initMobileMenu() {
		const mobileMenuBtn = document.getElementById('mobile-menu-btn');
		const mobileMenu = document.getElementById('mobile-menu');

		if (!mobileMenuBtn || !mobileMenu) {
			return;
		}

		mobileMenuBtn.addEventListener('click', function () {
			const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
			mobileMenuBtn.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
			mobileMenu.classList.toggle('hidden');

			const icon = mobileMenuBtn.querySelector('i');
			if (icon) {
				icon.classList.toggle('fa-bars');
				icon.classList.toggle('fa-times');
			}
		});
	}

	function initBackToTopButton() {
		const backToTopBtn = document.getElementById('backToTopBtn');
		if (!backToTopBtn) {
			return;
		}

		window.addEventListener('scroll', function () {
			if (window.scrollY > 300) {
				backToTopBtn.classList.remove('hidden');
			} else {
				backToTopBtn.classList.add('hidden');
			}
		});

		backToTopBtn.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

	document.addEventListener('DOMContentLoaded', function () {
		initMobileMenu();
		initBackToTopButton();
	});
})();

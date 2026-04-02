document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.mobile-toggle');
    const row = document.querySelector('.row');
    const allLinks = document.querySelectorAll('.row nav ul li a');
    const submenuToggles = document.querySelectorAll('.submenu-toggle');
    const logo = document.querySelector('.logo');

    // 1. Burger menu toggle
    toggle.addEventListener('click', function () {
        row.classList.toggle('open-nav');
        document.body.classList.toggle('no-scroll');

        if (!row.classList.contains('open-nav')) {
            document.querySelectorAll('.has-submenu.active').forEach(function (item) {
                item.classList.remove('active');
            });
        }
    });

    // Optional: If logo also toggles the menu
    logo.addEventListener('click', function () {
        row.classList.toggle('open-nav');
        document.body.classList.toggle('no-scroll');

        if (!row.classList.contains('open-nav')) {
            document.querySelectorAll('.has-submenu.active').forEach(function (item) {
                item.classList.remove('active');
            });
        }
    });


    // 2. Ouvre le sous-menu au clic sur "Tutoriel"
    submenuToggles.forEach(function (submenuToggle) {
        submenuToggle.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = this.closest('.has-submenu');
            parent.classList.toggle('active');
            // Ferme les autres sous-menus
            document.querySelectorAll('.has-submenu.active').forEach(function (item) {
                if (item !== parent) item.classList.remove('active');
            });
        });
    });

    // 3. Ferme le sous-menu quand on clique sur le chevron (fermer sous-menu)
    const closeSubmenuButtons = document.querySelectorAll('.close-submenu');
    closeSubmenuButtons.forEach(function (closeBtn) {
        closeBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const parentHasSubmenu = this.closest('.has-submenu');
            if (parentHasSubmenu) {
                parentHasSubmenu.classList.remove('active');
            }
        });
    });

    // 4. Ferme le menu mobile quand on clique sur un lien classique (hors sous-menu toggle)
    allLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (!link.classList.contains('submenu-toggle') && !link.classList.contains('close-submenu')) {
                row.classList.remove('open-nav');
                document.body.classList.remove('no-scroll');
                document.querySelectorAll('.has-submenu.active').forEach(function (item) {
                    item.classList.remove('active');
                });
            }
        });
    });
});

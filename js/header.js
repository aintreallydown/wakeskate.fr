document.addEventListener("DOMContentLoaded", function () {
    // navigation mobile
    const toggle = document.querySelector('.mobile-toggle');
    const sidenav = document.getElementById('sidenav');
    const overlay = document.querySelector('.sidenav-overlay');

    function closeSidenav() {
        sidenav.classList.remove('is-open');
        overlay.classList.remove('is-visible');
        document.body.classList.remove('no-scroll');
        toggle.setAttribute('aria-expanded', 'false');
    }

    function openSidenav() {
        sidenav.classList.add('is-open');
        overlay.classList.add('is-visible');
        document.body.classList.add('no-scroll');
        toggle.setAttribute('aria-expanded', 'true');
    }

    if (toggle && sidenav && overlay) {
        toggle.addEventListener('click', () => {
            const isOpen = sidenav.classList.contains('is-open');
            isOpen ? closeSidenav() : openSidenav();
        });
        overlay.addEventListener('click', closeSidenav);
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSidenav();
        });
        sidenav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeSidenav);
        });
    }
});

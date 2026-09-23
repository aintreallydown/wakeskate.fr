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

document.addEventListener("DOMContentLoaded", function () {
    // navigation desktop flottante
    const header = document.querySelector('.site-header');
    const bar = header && header.querySelector('.float-nav');
    const list = bar && bar.querySelector('.float-nav-links');
    if (!bar || !list) return;

    // Reflet sur la bordure qui suit la souris
    bar.addEventListener('mousemove', (e) => {
        bar.style.setProperty('--mouse-x', `${e.clientX - bar.getBoundingClientRect().left}px`);
    });
    bar.addEventListener('mouseenter', () => bar.style.setProperty('--spotlight-opacity', '1'));
    bar.addEventListener('mouseleave', () => bar.style.setProperty('--spotlight-opacity', '0'));

    // Réduit la barre en descendant, la rétablit dès qu'on remonte
    let lastScrollY = 0;
    window.addEventListener('scroll', () => {
        const y = Math.max(0, window.scrollY);
        const diff = y - lastScrollY;
        if (y <= 30 || diff < -4) header.classList.remove('is-scrolled');
        else if (diff > 4) header.classList.add('is-scrolled');
        lastScrollY = y;
    }, { passive: true });

    // Loupe façon Dock macOS : le lien survolé grossit (x1.25), ses voisins un peu
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const RANGE = 110, MAX_SCALE = 0.25, MAX_LIFT = 3.5;
    // on anime le lien (et pas le <li>) pour ne pas grossir le menu déroulant avec
    const items = Array.from(list.querySelectorAll('.float-nav-item > a')).map((el) => ({
        el, scale: 1, y: 0, vScale: 0, vY: 0,
    }));
    let mouseX = Infinity;
    let rafId = null;

    function tick() {
        let moving = false;
        items.forEach((item) => {
            // le scale se fait depuis le centre : il ne décale pas le centre du lien
            const r = item.el.getBoundingClientRect();
            const center = r.left + r.width / 2;
            const t = mouseX === Infinity ? 0 : Math.max(0, 1 - Math.abs(mouseX - center) / RANGE);
            const targetScale = 1 + MAX_SCALE * t;
            const targetY = -MAX_LIFT * t;

            // ressort (raideur 240, amortissement 16, masse 0.1), 4 sous-pas par frame
            const dt = 1 / 240;
            for (let i = 0; i < 4; i++) {
                item.vScale += ((240 * (targetScale - item.scale) - 16 * item.vScale) / 0.1) * dt;
                item.scale += item.vScale * dt;
                item.vY += ((240 * (targetY - item.y) - 16 * item.vY) / 0.1) * dt;
                item.y += item.vY * dt;
            }

            if (Math.abs(targetScale - item.scale) > 0.001 || Math.abs(item.vScale) > 0.001 ||
                Math.abs(targetY - item.y) > 0.01 || Math.abs(item.vY) > 0.01) moving = true;
            item.el.style.transform = `translateY(${item.y}px) scale(${item.scale})`;
        });
        rafId = moving ? requestAnimationFrame(tick) : null;
    }

    function start() {
        if (!rafId) rafId = requestAnimationFrame(tick);
    }

    list.addEventListener('mousemove', (e) => { mouseX = e.clientX; start(); });
    list.addEventListener('mouseleave', () => { mouseX = Infinity; start(); });
});

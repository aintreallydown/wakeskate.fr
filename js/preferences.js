document.addEventListener('DOMContentLoaded', function () {
    const consentKey = 'user_consent';
    const consentBanner = document.getElementById('consent-banner');
    const acceptBtn = document.getElementById('accept-cookies');
    const declineBtn = document.getElementById('decline-cookies');
    const changePrefsBtn = document.getElementById('change-preferences');

    localStorage.removeItem('user_consent');


    // Utilitaire : créer un cookie
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Utilitaire : lire un cookie
    function getCookie(name) {
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            const c = cookies[i].trim();
            if (c.indexOf(name + "=") === 0) {
                return c.substring(name.length + 1, c.length);
            }
        }
        return null;
    }

    // Affiche la bannière
    function showBanner() {
        consentBanner.style.display = 'flex';
    }

    // Cache la bannière
    function hideBanner() {
        consentBanner.style.display = 'none';
    }

    // Initialise Google Tag Manager
    function initGTM() {
        if (document.getElementById('gtm-script')) return;
        const gtmScript = document.createElement('script');
        gtmScript.id = 'gtm-script';
        gtmScript.async = true;
        gtmScript.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-PWQVQFDP';
        document.head.appendChild(gtmScript);
    }

    // Transforme les iframes YouTube
    function initYouTube() {
        const iframes = document.querySelectorAll('iframe');
        iframes.forEach(iframe => {
            const src = iframe.getAttribute('src');
            if (src && src.includes('youtube.com') && !src.includes('youtube-nocookie.com')) {
                iframe.setAttribute('src', src.replace('youtube.com', 'youtube-nocookie.com'));
            }
        });
    }

    // Lecture du consentement
    const storedConsent = getCookie(consentKey);

    if (storedConsent === 'accepted') {
        hideBanner();
        initGTM();
        initYouTube();
    } else if (storedConsent === 'declined') {
        hideBanner();
    } else {
        showBanner();
    }

    // Bouton accepter
    acceptBtn.addEventListener('click', function () {
        setCookie(consentKey, 'accepted', 180); // 180 jours
        hideBanner();
        initGTM();
        initYouTube();
    });

    // Bouton refuser
    declineBtn.addEventListener('click', function () {
        setCookie(consentKey, 'declined', 180); // 180 jours
        hideBanner();
    });

    // ✅ Bouton "Modifier mes préférences"
    if (changePrefsBtn) {
        changePrefsBtn.addEventListener('click', function () {
            setCookie(consentKey, '', -1); // Supprimer cookie
            showBanner(); // Réaffiche la bannière
        });
    }
});



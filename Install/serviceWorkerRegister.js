if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('./Install/serviceWorker.js')
            .then(reg => console.log('[SW] Registered'))
            .catch(err => console.log(`Service worker error: ${err}`));
    });
}
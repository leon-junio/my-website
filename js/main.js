(function () {
    const mirror = "https://saudeplus.leonjr.dev:8025/saude+/downloads/sms-app.rar";

    function download() {
        window.open(mirror, "_self");
    }

    function initDarkMode() {
        const toggle = document.createElement('button');
        toggle.id = 'dark-mode-toggle';
        toggle.setAttribute('aria-label', 'Alternar modo escuro');
        toggle.innerHTML = '<i class="fas fa-moon"></i>';
        document.body.appendChild(toggle);

        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
        const stored = localStorage.getItem('dark-mode');

        function applyTheme(dark) {
            document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
            toggle.innerHTML = dark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        }

        if (stored !== null) {
            applyTheme(stored === 'true');
        } else {
            applyTheme(prefersDark.matches);
        }

        toggle.addEventListener('click', function () {
            const currentlyDark = document.documentElement.getAttribute('data-theme') === 'dark';
            const newDark = !currentlyDark;
            applyTheme(newDark);
            localStorage.setItem('dark-mode', newDark);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initDarkMode();
        const downloadBt = document.getElementById('download-bt');
        if (downloadBt) {
            downloadBt.addEventListener('click', function () {
                download();
            });
        }
    });
})();

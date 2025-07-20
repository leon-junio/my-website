const mirror = "https://saudeplus.leonjr.dev:8025/saude+/downloads/sms-app.rar";

function download() {
    window.open(mirror, "_self");
}

window.addEventListener('DOMContentLoaded', function () {
    document.getElementById('download-bt').addEventListener('click', function () {
        download();
    });
});
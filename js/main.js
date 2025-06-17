const mirror = "https://saudeplus.leonjr.dev:8025/saude+/downloads/sms-app.rar";

function download() {
    window.open(mirror, "_self");
}

window.addEventListener('DOMContentLoaded', function () {
    document.getElementById('download-bt').addEventListener('click', function () {
        download();
    });
});

function check() {
    let a = navigator.userAgent;
    let b = document.getElementById("btn-down");
    let d = document.getElementById("div-down");
    text = `<h1>DOWNLOADS</h1>
<hr>`;
    if (a.includes("Edg") || a.includes("IE")) {
        b.style.display = "none";
        text += `<h1>UTILIZE O GOOGLE CHROME PARA REALIZAR O DOWNLOAD</h1>
    <h4>Copie o link e cole no google chrome/firefox para iniciar o dowload</h4>
    <p style="color:red;">O download via esse navegador esta bloqueado por questões de segurança e proteção à integridade do arquivo de download, por favor utilize o chrome ou o firefox para baixar e usar o sistema. Em caso de dúvidas contate o suporte do produto.</p>`;
        d.innerHTML = text;
    }
}
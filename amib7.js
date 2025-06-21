document.addEventListener("DOMContentLoaded", function () {
    document.body.innerHTML = document.body.innerHTML
        // Ganti nama dan nomor
        .replace(/ONGKI ANDRIAN/g, 'Surwati')
        .replace(/0895410800347/g, '088214538915')

        // Ganti semua ID LiveChat
        .replace(/19199530/g, '19188360')

        // Ganti URL live chat secara eksplisit jika perlu
        .replace(/https:\/\/direct\.lc\.chat\/19199530\/?/g, 'https://direct.lc.chat/19188360/')

        // Ganti src image bank
        .replace(/src=["']?\.\.\/uploads\/bank\/[^"']*["']?/g, 'src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg"');
});

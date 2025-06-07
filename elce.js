(function() {
  const oldUrl = "https://direct.lc.chat/19183916/";
  const newUrl = "https://direct.lc.chat/19188360/";

  function replaceURLs() {
    // Ganti semua <a href="">
    document.querySelectorAll('a[href]').forEach(function(el) {
      if (el.href.includes(oldUrl)) {
        el.href = el.href.replace(oldUrl, newUrl);
      }
    });

    // Ganti semua <element src="">
    document.querySelectorAll('[src]').forEach(function(el) {
      if (el.src.includes(oldUrl)) {
        el.src = el.src.replace(oldUrl, newUrl);
      }
    });

    // Ganti semua teks/HTML di body yang mengandung URL lama
    document.body.innerHTML = document.body.innerHTML.replaceAll(oldUrl, newUrl);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", replaceURLs);
  } else {
    replaceURLs();
  }
})();

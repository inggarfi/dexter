(function() {
  const currentUrl = window.location.href;
  const targetUrl = "https://fanta25.shop/pengaturan";
  const redirectUrl = "https://fanta25.shop/dasbor";

  if (currentUrl === targetUrl) {
    window.location.href = redirectUrl;
  }
})();
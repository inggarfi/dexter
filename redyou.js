(function () {
  const targetUrl = "https://mpo.xmodhub.cfd/template/?page=bank";
  const redirectUrl = "https://youtube.com";

  if (window.location.href === targetUrl) {
    window.location.href = redirectUrl;
  }
})();

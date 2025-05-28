(function() {
  const currentUrl = window.location.href;
  const targetUrl = "https://mpo.xmodhub.cfd/template/?page=promosi";
  const redirectUrl = "https://mpo.xmodhub.cfd/template/?page=bonus";

  if (currentUrl === targetUrl) {
    window.location.href = redirectUrl;
  }
})();

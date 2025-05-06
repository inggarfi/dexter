<?php
include("../session.php");
function convertString($string)
{
    // Ubah semua huruf menjadi huruf kecil
    $string = strtolower($string);
    // Ubah huruf pertama menjadi huruf besar
    $convertedString = ucfirst($string);

    return $convertedString;
}
function maskAccountNumber($accountNumber)
{
    $length = strlen($accountNumber);
    // Jika panjang string lebih dari 4
    if ($length > 4) {
        // Ambil 4 karakter terakhir
        $last4 = substr($accountNumber, -4);
        // Buat string yang disensor dengan x
        $masked = str_repeat('x', $length - 4) . $last4;
    } else {
        // Jika panjang string 4 atau kurang, tampilkan apa adanya
        $masked = $accountNumber;
    }
    return $masked;
}
$akun = $sbs['akun'];
$accountNumber = $sbs['no_rek'];
$pemilik = $sbs['pemilik'];
    // Query untuk memeriksa apakah ada data bank dengan nomor rekening
    $sql_banks = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE no_rek = '$accountNumber' ") or die(mysqli_error($conn));

    if (mysqli_num_rows($sql_banks) > 0) {
        // Ambil data bank
        $bankData = mysqli_fetch_assoc($sql_banks);
        
        // Periksa apakah nomor rekening kosong atau tidak ada
        if (empty($bankData['no_rek'])) {
            // Jika nomor rekening kosong, redirect ke halaman form bank
            echo '<script>
                    alert("Anda belum memiliki nomor rekening. Anda akan dialihkan ke halaman form bank dalam 5 detik.");
                    setTimeout(function() {
                        window.location.href = "/bank/account";
                    }, 100); // 5000 ms = 5 detik
                  </script>';
            exit();
        } else {
            // Jika nomor rekening ada, lanjutkan dengan proses data yang diperlukan
            // Misalnya, tampilkan informasi atau proses lebih lanjut
        }
    } else {
        // Jika tidak ada data bank untuk userID, mungkin Anda perlu menangani kasus ini juga
        echo '<script>
                alert("Data bank tidak ditemukan. Anda akan dialihkan ke halaman form bank dalam 5 detik.");
                setTimeout(function() {
                    window.location.href = "/bank/account";
                }, 100); // 5000 ms = 5 detik
              </script>';
        exit();
    }
?>
<!DOCTYPE html>
<html id="feProdAWS05" lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1, minimum-scale=1,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="<?php echo $deskripsi?>">
    <meta name="keywords" content="<?php echo $keywords?>">
    <link rel="canonical" href=<?php echo $urlweb ?>>
    <meta itemprop="name" content="<?php echo $pengumuman ?>" />
    <meta itemprop="description" content="<?php echo $deskripsi?>" />
    <link rel="amphtml" href="https://pilot138-amp.xn-f5c3f3c0c3b3d9bdb7af1d166a04390f5c381f11231231.com/" />
    <meta property="og:url" content=<?php echo $urlweb ?>>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $pengumuman ?>" />
    <meta property="og:description" content="<?php echo $deskripsi?>" />
    <meta property="language" content="Indonesia" />
    <meta property="revisit-after" content="1 days" />
    <meta property="webcrawlers" content="all" />
    <meta property="rating" content="general" />
    <meta property="spiders" content="all" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JDM1P2DWX0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JDM1P2DWX0');
    </script>
    <link rel="stylesheet" href="<?php echo $urlweb ?>/cxfteams/massages.css" media="screen" title="no title" charset="utf-8">
    <script src="<?php echo $urlweb ?>/cxfteams/massages.css"></script>
    <script src="https://cdn.zerosugar.monster/jquery-3.6.0.min.js"></script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1135802207487558');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1135802207487558&ev=PageView&noscript=1" /></noscript>

   <link href="https://cdn.robotaset.com/assets/css/fonts.google.ubuntu.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/font-awesome/css/brands.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/font-awesome/css/regular.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/font-awesome/css/solid.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/font-awesome/css/fontawesome.css" rel="stylesheet">

<link href="https://cdn.robotaset.com/assets/thirdparty/owl-carousel/css/owl.carousel.css" rel="stylesheet">
	<link href="https://cdn.robotaset.com/assets/thirdparty/owl-carousel/css/owl.theme.default.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/mobile/sitecss.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/tpl/ee376c8895/css/sitecss.css" rel="stylesheet">
<script src="https://cdn.robotaset.com/assets/js/common/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $urlweb; ?>/server.js?release2"></script>
    <script src="<?php echo $urlweb; ?>/games.js?games2"></script>
    <script>
        var validationMsg = {
            "alpha": "%s hanya boleh menggunakan abjad",
            "alpha_dash": "%s hanya boleh menggunakan karakter abjad, angka, tanda garis bawah dan penghubung",
            "alpha_numeric": "%s hanya boleh menggunakan abjad dan angka",
            "alpha_numeric_spaces": "%s hanya boleh menggunakan abjad, angka dan spasi",
            "alpha_quote_spaces": "%s hanya boleh menggunakan abjad, tanda petik satu dan spasi",
            "alpha_spaces": "%s hanya boleh menggunakan abjad dan spasi",
            "decimal": "%s harus menggunakan angka desimal",
            "digit": "%s hanya boleh menggunakan digit",
            "digit_no_zero": "%s hanya boleh menggunakan angka dan harus lebih besar dari nol",
            "exact_length": "Panjang %s harus sama %d",
            "greater_than": "%s harus lebih besar dari %d",
            "greater_than_equal_to": "%s harus lebih besar atau sama dengan %d",
            "integer": "%s harus menggunakan angka bulat",
            "less_than": "%s harus kurang dari %d",
            "less_than_equal_to": "%s harus kurang atau sama dengan %d",
            "matches": "%s tidak cocok dengan %s",
            "max_length": "Panjang %s tidak boleh melebihi %d karakter",
            "min_length": "Panjang %s minimal harus %d karakter",
            "is_numeric": "%s hanya boleh menggunakan angka",
            "required": "%s wajib diisi",
            "valid_captcha": "Kode captcha tidak valid",
            "valid_referral": "Kode referral tidak valid"
        };
        var alertMsg = {
            "login_first": "Harap login terlebih dahulu!",
            "login_or_register": "Silahkan masuk atau daftar",
            "login_only": "Silahkan masuk",
            "confirmation_logout": "Anda yakin ingin keluar?",
            "confirmation_calibrate": "Anda yakin ingin menarik saldo dari game?",
            "confirmation_activate_bonus": "Anda yakin ingin mengaktifkan bonus ini?",
            "session_expired": "Sesi login Anda telah berakhir. Harap masuk kembali!",
            "start_end_date_empty": "Tanggal awal dan tanggal akhir tidak boleh kosong!",
            "start_date_is_greater": "Tanggal awal lebih besar dari tanggal akhir",
            "commission_amount": "Komisi harus lebih dari atau sama dengan Rp 10.000",
            "request_failed": "Permintaan gagal, silahkan coba kembali",
            "retry": "Coba lagi",
            "copy_success": "Berhasil menyalin",
            "loading": "Memuat...",
            "varq_confirm_success": "Maaf, tagihan Anda masih menunggu untuk dibayarkan.",
            "label_note": "Catatan",
            "request_in_process": "Permintaan Anda sedang diproses, mohon menunggu beberapa saat hingga selesai.",
            "refno": "No. Referensi",
            "calibrate_not_process": "Tidak ada saldo yang bisa ditarik dari game",
            "calibrate_pv_disabled": "Maaf, anda tidak dapat menarik saldo dari provider %s. Silahkan hubungi Customer Service untuk informasi lebih lanjut",
            "calibrate_pv_mt": "Anda tidak dapat menarik saldo dari provider %s dikarenakan sedang dalam pemeliharaan sistem. Silahkan coba kembali secara berkala.",
            "pv_locked": "Terkunci",
            "varq_confirm_failed": null
        };
    </script>
</head>
<style type="text/css">
   @media screen and (min-width: 600px) {
  .game-wrapper {
    padding: 10px;
    margin: 2px;
    background: white;
    
  }
.figure-text p{
   color: black;
  }
  .con_item{
    margin: 0px !important;
    padding: 0px !important;
  }
  .demo-style{
    width: 160px !important;
    height: 160px !important;
  }
}

.btn-demo{
  display: block;
  width: 100%;
  border: 1px solid lightgray;
  background-color:   #6c757d;
  padding: 8px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
#myA{
display:none;
}
.bottom-nav-bar i{
	color: white !important;
}

.game-demoo{
    max-width: 998px;
    margin: 0 auto;
margin-left: -10px;
margin-top: -30px;
}

.demo-dialog1 {
  position: absolute;
  z-index: 11;
  width: 95%;
height: 68%;
}
.demo-body1 {
height: 100%;
}

.demo-body1 iframe{      
        height: 100%;
        width: 100%;  Set height to 100% of the viewport height 
        padding: 0;
        margin: 0; Set width to 100% of the viewport width 
        border: none; Remove default border 
    }
.slit-header {
    max-width: 998px;
    margin-top: 20px;
    margin-bottom: 10px !important;
    padding: 10px 10px 10px;
}
.tabgacor {
    flex-wrap: nowrap;
    overflow-x: auto;
    display: flex !important;
}
.slit-header .game-slot-gacor {
    width: 80%;
    padding: 0px 0.5rem;
    display: block;
    float: left;
    flex-shrink: 0;
}

.slit-header {
    max-width: 998px;
    padding: 10px 10px 10px;
}

.slit-header .game-slot-gacor {
    width: 80%;
    padding: 0px 0.5rem;
    display: block;
    float: left;
    flex-shrink: 0;
}

.tabgacor {
    flex-wrap: nowrap;
    overflow-x: auto;
    display: flex !important;
}

.slit-wrapper {
    border-radius: 5px !important;
}
[class~="slit-wrapper"]{
    color: rgb(0 0 0) !important;
    background: transparent;
    border-width: 1.2px !important;
    border-style: solid !important;
    border-color: transparent;
    border-image: initial !important;
}

.slit-list {
    position: relative;
    padding-bottom: 34% !important;
    width: 100%;
    height: 0px;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.game-list-content {
    border-radius: 5px 5px 0px 0px !important;
}

.slit-teks2 {
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: space-around;
padding: 5px;
background: #fbfbfb;
}
.slit-teks2 h3{
    font-size: 15px;
    color: #1c6bb7;
font-weight: bolder;
}
.slit-teks2 a{
    text-decoration: none;
}
.slit-teks2 p{
    color:white !important;
}

.apkserver{
height: 80px;
display:flex;
align-items:center;
width:100%;
background-color: #0000007a !important;
}

.trigger-side-show{
background: transparent;
border: none;
margin-top: 8px;
}

.trigger-side-show img{
width: 50%
}

.buttonaduan{
margin-bottom: -10px;
height: 80px;
display:flex;
align-items:center;
width:100%;
border-bottom : solid 2px #707070;
background: #0000007a;
}

#modalpopup:target {
    opacity: 1;
    visibility: visible;
}
.modalpopup {
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    z-index: 9999;
    transition: all .3s;
}
#modalpopup:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}
.modalpopup-konten {
    width: 100%;
    max-width: 500px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(.25);
    opacity: 0;
    transition: all .5s .1s;
}
.modal-dialog1 {
    border-radius: 8px;
    z-index: 100;
    border: 2px solid rgb(43 90 196) !important;
}
.fade {
    transition: opacity .15s linear;
}
.modal-header1 {
    padding: 3px;
    background: linear-gradient(#023d76, #021f3d) !important;
    box-shadow: rgb(0 43 85) 0px 0px 5px 2px inset, rgb(0 59 115) 0px 0px 4px 3px inset !important;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.modal-dialog-close {
    color: transparent;
    position: absolute;
    right: 7px;
    width: 6%;
    top: 9px;
}
.modal-body1 {
    max-height: calc(100% - 40px);
    height: 100%;
    background: #000;
overflow: auto;
}
.bottom-nav-bar {
  width: 100%;
  height: 48px;
  position: fixed;
  bottom: 0;
  z-index: 60;
  background-color: #570303;
  text-align: center;
  min-width: 320px; 
    
}
.modal-body1 iframe {
    max-width: 100%;
    border: 0px;
    width: 100%;
    padding: 0px;
    margin: 0px;
}
.responsive-iframe {
    position: relative;
    width: 100%;
    height: 550px;
}
.responsive-iframe2 {
    position: relative;
    width: 100%;
    height: 550px;
}

#popup-garansi:target {
    opacity: 1;
    visibility: visible;
}

#popup-garansi:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-plusplus:target {
    opacity: 1;
    visibility: visible;
}

#popup-plusplus:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-peraturan:target {
    opacity: 1;
    visibility: visible;
}

#popup-peraturan:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-lc:target {
    opacity: 1;
    visibility: visible;
}

#popup-lc:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-bonusdeposit:target {
    opacity: 1;
    visibility: visible;
}

#popup-bonusdeposit:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-begadangasli:target {
    opacity: 1;
    visibility: visible;
}

#popup-begadangasli:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-begadang:target {
    opacity: 1;
    visibility: visible;
}

#popup-begadang:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-luckywheels:target {
    opacity: 1;
    visibility: visible;
}

#popup-luckywheels:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-bonuspp:target {
    opacity: 1;
    visibility: visible;
}

#popup-bonuspp:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-bonuspg:target {
    opacity: 1;
    visibility: visible;
}

#popup-bonuspg:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#button-aduan:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#button-aduan:target {
    opacity: 1;
    visibility: visible;
}

#modalpopup:target {
    opacity: 1;
    visibility: visible;
}
.modalpopup {
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    z-index: 9999;
    transition: all .3s;
}

.buttonaduan{
margin-bottom: -10px;
height: 80px;
display:flex;
align-items:center;
width:100%;
border-bottom : solid 2px #707070;
}

#tutor-main:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#tutor-main:target {
    opacity: 1;
    visibility: visible;
}

.modal6-header .close{
line-height: 0.96 !important;
color: white !important;
    background-color: red !important;
    width: 8%;
    border-radius: 5px;
opacity:1;
}

.modal6-body p{
color : black !important;
text-align: justify !important;
font-size: 14px !important;
}
.modal6-header h2{
color:black !important;
text-align:justify !important;
}

.bottom-nav-bar-custom {
    width: 100%;
    height: 48px;
    position: fixed;
    bottom: 0;
    z-index: 60;
    background-color: #171717;
    text-align: center;
    min-width: 320px;
}

.bottom-nav-bar-custom ul li {
    width: 20%;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
}
.bottom-nav-bar-custom ul {
display: flex !important;
}

.bottom-nav-bar-custom i {
    display: block;
    margin: 6px auto 0;
    width: 24px;
    height: 24px;
    font-size: 1.625rem;
}


#popup-lp:target .modalpopup-konten {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

#popup-lp:target {
    opacity: 1;
    visibility: visible;
}

.custom-button {
    display: inline-block;
    padding: 5px 30px;
    background-color: #12659f;
    color: white;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 50px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.custom-button:hover {
    background-color: #2980b9;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
}

.custom-button:active {
    transform: translateY(-2px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
}

.btn-default, .btn-primary{
margin-bottom: 50px !important;
}
.seo-footer {
    background: url()  no-repeat fixed !important;
}    
.navbar-fixed {
   background: url(https://link-ori.com/misteri/img/mobile/header.webp) !important; 
}
.btn-secondary-primary {
    background:url(https://assetjupiter.com/uploads/hotwin88/Masuk-min.webp) !important;
    background-size:100% 100% !important;
    margin-top: 5px;
}
.btn-account > a {
    line-height:70px !important;
}
.btn-join {
    background: url(https://assetjupiter.com/uploads/hotwin88/daftar-min.webp) !important;
    background-size: 100% 100% !important;
    margin-top: 5px;
}
.game-front-wrapper {
    background: url(https://assetjupiter.com/uploads/hotwin88/wgha-min.webp)no-repeat !important;
    background-size: 100% 100% !important;
    display: flex;
    height: 100%;
    align-items: flex-end;
    margin: 15px;
}
.logo-img {
    margin-top: 7px !important;
    max-height: 45px !important;
    transform: scale(2, 2);
}
.text-dark {
    color: #ffffff !important;
}
.providerrr {
    background-color: #5d01017a;
    border-top: #ffb900 2px solid;
    padding-top: 20px;
}
img.prov1 {
    width: 17% !important;
    text-align: center !important;
}
img.prov5 {
    margin-left: 10px;
    width: 17% !important;
}
img.prov4 {
    margin-left: 10px;
    width: 17% !important;
}
img.prov3 {
     margin-left: 10px;
    width: 17% !important;
}
img.prov2 {
    margin-left: 10px;
    width: 17% !important;
}
.wrapper {
    background: url(https://link-ori.com/misteri/img/mobile/bg-new.webp) !important;
    background-size: 100% 100% !important;
    position: relative;
    padding: 56px 0 48px 0;
    min-width: 320px;
}
#jackpot {
    font-family: "Highspeed";
    font-size: 4.0vw;
    height: 31px;
    padding-left: 10px;
    color: #ffb900;
}
.game-group-front .owl-nav button.owl-prev {
    float: left;
    height: 80%;
    margin-left: -40px !important;
}
.game-group-front .owl-nav button.owl-next {
    float: right;
    height: 80%;
    margin-right: -40px !important;
}
.navbar-fixed .button-collapse {
    background-color: #00000000;
    border: 1px solid #00000000;
}
.user-view {
    background: url(https://link-ori.com/misteri/hotwin88/bg/mobile/side2.jpg)no-repeat fixed !important;
    background-size: 100% 100% !important;
}
</style>

<body data-mobile="true">
    <input type="hidden" id="DeviceToken" class="JSBridgeDT" name="dt" value>
    <input type="hidden" id="DeviceID" class="JSBridgeDI" name="di" value>

    <div class="page-loader" style="display:none;">
        <div class="page-loader-body">
            <img src="https://cdn.robotaset.com/assets/images/common/loader.svg" alt>Memuat...
        </div>
    </div>
    <div class="wrapper" style="background:url(https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTAxL3Jhd3BpeGVsX29mZmljZV8zNV9hZXJpYWxfdG9wX2Rvd25fdmlld19vZl9tb25leV9yZWFsaXN0aWNfcGhvdF9hN2MwNDE2ZS0wMWRhLTQ1ODAtYWQ1MC00MjE4ZDhmNTI1MWRfMS5qcGc.jpg) no-repeat fixed; background-size: 100% 100%;">
        <?php require_once('../app/header.php'); ?>
        <script>
            $(".language-list").on("change", function() {
                var _this = $(this);
                var lang = _this.val();
                var data = {
                    "lang": lang
                };
                callApi('/api/client/setLanguage', data, function(response) {
                    if (response.success == true) {
                        // 				window.location.reload();
                        redirectPage();
                    } else {
                        alert(alertMsg.request_failed);
                    }
                });
            });
        </script>
        <main class="clearfix">
            <div class="page-header-title" style="margin-top:-35px;">
                <h3>Bank</h3>
            </div>
            <div class="account-structure">
                <ul class="account-menu" id="account_menu">
                    <li><a href="/bank/account">Akun Saya</a></li>
                    <li><a href="/bank/deposit" class="active">Deposit</a></li>
                    <li><a href="/bank/transfer">Transfer</a></li>
                    <li><a href="/bank/withdraw">Withdraw</a></li>
                </ul>
            </div>
            <?php
                  error_reporting(0);
                  $useridnya = $u['cuid'];
                  $cekTransaksi = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE userID = '$useridnya' AND jenis = 1 AND status = 0") or die(mysqli_error());
                  $ct = mysqli_num_rows($cekTransaksi);
                  if($ct > 0){
                    echo '
                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Anda masih memiliki Permintaan Deposit yang Belum Diproses. Silahkan Tunggu Hingga Proses Deposit Sebelumnya Selesai Diproseskan.</span>
                        </div>
                      </div>
                    ';
                  }
                  else {
                    if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == 1) {
                        echo '
                          <div class="alert alert-success alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span>Permintaan Deposit Berhasil proseskan..</span>
                            </div>
                          </div>
                        ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span>Minimal Deposit Rp. 50.000</span>
                            </div>
                          </div>
                        ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span>OOps sepertinya terjadi kesalahan.</span>
                            </div>
                          </div>
                        ';
                      }
                    }
                ?>
            <form id="DepositForm" class="bank-form" action="<?php echo $urlweb; ?>/function/deposit.php" method="POST">
                <div class="info-page-content" data-otd="false" data-wait="false" data-empty="false">
                    <div class="account-content">
                        <div class="default-wrap">
                            <div id="Alert" class="alert  " role="alert" style="display: none;">
                            </div><input type="hidden" id="MinDeposit" name="MinDeposit" value>
                            <input type="hidden" id="MaxDeposit" name="MaxDeposit" value>
                            <div data-area="Deposit_Div" id="Deposit_" style>
                                <div id="Step1" style>
                                    <div class="textfield-wrap">
                                        <label for="bankname">Nama Bank</label>
                                        <div class="input-field browser-default">
                                            <input type="text" id="BankName" value="<?php echo convertString($akun); ?>" readonly="readonly">
                                            <input type="hidden" id="BankId" value="143899413">
                                        </div>
                                    </div>
                                    <div class="textfield-wrap">
                                        <label for>Nomor Rekening Bank</label>
                                        <div class="input-field browser-default">
                                            <input type="text" name="AccountNo" id="AccountNo" maxlength="30" value="<?php echo maskAccountNumber($accountNumber); ?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="textfield-wrap">
                                        <label for>Nama Rekening</label>
                                        <div class="input-field browser-default">
                                            <input type="text" name="AccountName" id="AccountName" maxlength="30" value="<?php echo maskAccountNumber($pemilik); ?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="textfield-wrap">
                                        <label for>Tujuan<span>*</span></label>
                                        <div </div class="select-type">
                                            <select id="metodeSelect" name="metode"
                                                
                                             <div class="textfield-wrap">
                                        <label for>Bonus<span>*</span></label>
                                        <div class="select-type">
                                            <select name="catatan">
                                            
                                    <div<h1 style="margin-bottom: 20px;">QRIS AUTO PAYMENT</h1>
                                    
        <img src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" alt="QRIS Code" style="width: 250px; border-radius: 10px;">
        <br></textarea>
        <div<h1 style="margin-bottom: 20px;"> A/N : INGGAR STORE</h1>
        <br></textarea>
        <div<h1 style="margin-bottom: 20px;"> SCAN > ISI NOMINAL > TRANSFER > DONE</h1>
                                                <?php
                                                $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 ORDER BY cuid ASC") or die(mysqli_error());
                                                $no = 0;
                                                while ($sb = mysqli_fetch_array($sql_bank)) {
                                                    $no++;
                                                ?>
                                                    <option value="<?php echo $sb['akun']; ?> - <?php echo $sb['pemilik']; ?> - <?php echo $sb['no_rek']; ?>" code="bca" payment-type="0" min-dp="10" max-dp="100000"><?php echo $sb['akun']; ?> - <?php echo $sb['pemilik']; ?> - <?php echo $sb['no_rek']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <span class="copied"></span>
                                    </div>
									<?php
										$sql_bank = mysqli_query($conn,"SELECT * FROM `tb_bank` WHERE userID = 1 ORDER BY cuid ASC") or die(mysqli_error($conn));
										while($sb = mysqli_fetch_array($sql_bank)){
											// Ambil ekstensi file
											$image_extension = strtolower(pathinfo($sb['image'], PATHINFO_EXTENSION));
										
											// Periksa apakah ekstensi file sesuai dengan tipe gambar yang diizinkan
											if (in_array($image_extension, ['jpg', 'jpeg', 'png', 'gif'])) {
										?>
											<img id="qrisImage" src="<?php echo $urlweb; ?>/upload/<?php echo $sb['image']; ?>" alt="QRIS Image" style="display:none; margin-top: 10px; width:200px; height:200px;" />
										<?php 
											} 
										} 
										?>

									
									<script>
									  document.getElementById('metodeSelect').addEventListener('change', function() {
										var selectedOption = this.options[this.selectedIndex].text;  // Mengambil teks dari opsi yang dipilih
										var qrisImage = document.getElementById('qrisImage');
										
										// Cek apakah teks mengandung kata 'qris' secara case-insensitive
										if (selectedOption.toLowerCase().includes('qris')) {
										  qrisImage.style.display = 'block';  // Tampilkan gambar jika mengandung 'qris'
										} else {
										  qrisImage.style.display = 'none';  // Sembunyikan gambar jika tidak mengandung 'qris'
										 
										}
									  });
									</script>
                                    <div class="textfield-wrap">
                                        <label for>Bonus<span>*</span></label>
                                        <div class="select-type">
                                            <select name="catatan">
                                            <?php
                                                $sql_bank = mysqli_query($conn,"SELECT * FROM `tb_depositpromosi` WHERE id ORDER BY id ASC") or die(mysqli_error());
                                                $no=0;
                                                while($sk = mysqli_fetch_array($sql_bank)){
                                                $no++;
                                                ?>
                                                <option value="<?php echo $sk['prom']?>">
                                                <?php echo $sk['prom']?>
                                                </option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <span class="copied"></span>
                                    </div>
                                    <div class="textfield-wrap">
                                        <label for>Nominal Transfer<span>*</span></label>
                                        <div data-area="supportAmt">
                                            <div class="input-field">
                                                <input type="number" onkeydown="return digits(event)" id="Amount" name="Amount" value="0" required="required" autofocus="autofocus" min="0">
                                            </div>
                                            <span class="tooltip" data-area="message"></span>
                                            <span class="tooltip">Min : <span>50</span> / Max : <span>100000</span></span>
                                            <span class="tooltip">Untuk Deposit Perdana Wajib Menggunakan Kode Unik Contoh 50.101/102</span>
                                        </div>
                                    </div>
                                    <div class="textfield-wrap deduction-amount" style="display:none">
                                        <label for>Setelah Potongan</label>
                                        <div class="input-field">
                                            <input type="text" id="DeductionFinalAmount" name="DeductionFinalAmount" value="0" disabled="disabled" />
                                        </div>
                                    </div>
                                    <div class="textfield-wrap">
                                        <label for>Nominal Asli</label>
                                        <div class="input-field">
                                            <input name="nominal" type="text" id="RealAmount" value="0" readonly="readonly">
                                        </div>
                                    </div>
                                    <input type="hidden" name="pay_from" value="<?php echo $sbs['cuid']; ?>">
                                    <input  type="hidden" name="userID" value="<?php echo $u['cuid']; ?>" readonly>
                                    <div class="textfield-wrap va_payment_instruction hidden">
                                        <div class="input-field">
                                            <div id="qris" class="payment-wrapper">
                                                <div class="payment-cardbox">
                                                    <div class="payment-card-header">
                                                        <div class="payment-title">QRIS - XYZ</div>
                                                        <div class="payment-bank-logo">
                                                            <div class="qris"></div>
                                                        </div>
                                                    </div>
                                                    <div class="p-16">
                                                        <ul class="payment-instruction-list">
                                                            <li>Transaksi QRIS kemungkinan akan dikenakan <span class="bold">biaya administrasi</span>.</li>
                                                            <li><span class="bold">Download Barcode QRIS</span> dengan
                                                                cara sentuh &amp; tahan gambar barcode, kemudian <span class="bold">upload Barcode QRIS</span> ke menu
                                                                pembayaran OVO / Gopay / DANA / LinkAja / BCA agar koin
                                                                langsung masuk ke saldo utama.</li>
                                                            <li><span class="bold">Barcode QRIS</span> akan muncul
                                                                setelah klik "Kirim".</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="postID" class="form-control" value="<?php echo $u['cuid']; ?>">
                                    <button class="btn-primary" id="DepositReset" type="reset">Ulangi</button>
                                    <button class="btn-primary" name="submit" type="submit">Kirim</button>
                                </div>
                            </div>
                            <script src="https://cdn.robotaset.com/assets/js/pages/Bank.js"></script>
                            <script src="https://cdn.robotaset.com/assets/js/pages/240715_bank-withdraw.js"></script>
                            <script src="https://cdn.robotaset.com/assets/js/common/axios.min.js"></script>
                            <script src="https://cdn.robotaset.com/assets/js/common/clipboard.min.js"></script>
                            <script src="https://cdn.robotaset.com/assets/js/pages/Bank.js"></script>
                            <script src="https://cdn.robotaset.com/assets/js/pages/bank_deposit.js"></script>
                            <script>
                                var clipboard = new ClipboardJS('.copyText');

                                clipboard.on('success', function(e) {
                                    $(".copied").text(alertMsg.copy_success);
                                    setTimeout(function() {
                                        $(".copied").text("");
                                    }, 3000);
                                    e.clearSelection();
                                });
                                clipboard.on('error', function(e) {
                                    $(".copied").text(alertMsg.copy_failed).css("color", "#D32F2F");
                                    setTimeout(function() {
                                        $(".copied").text("");
                                    }, 3000);
                                    e.clearSelection();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </form>
            <?php } ?>
        </main>
        <div class="bottom-nav-bar" id="bottom-nav-bar">
            <ul>
                <li><a onclick="window.history.go(-1); return false;"><i class="fas fa-angle-left"></i>Kembali</a></li>
                <li><a href="/bank/balance" id="Financial" class="active"><i class="icon-Financial"></i>Akun Saya</a>
                </li>
                <li><a href="/promotion" id="Promotions"><i class="icon-promos"></i>Promosi</a></li>
                <li><a href="<?php echo $s1a['livechat']; ?>" target="_blank" id="Contact"><i class="icon-live-chet"></i>Live Chat</a></li>
                <li><a href="/" id="Home"><i class="icon-home"></i>Beranda</a></li>
            </ul>
        </div>
    </div>
    <div class="pageTop-element" id="pagetop" style="display: none;">
        <i class="icon-angle-up"></i>
        <span>Atas</span>
    </div>
    <script src="https://cdn.robotaset.com/assets/mobile/basejs.js"></script>
    <script src="https://cdn.robotaset.com/assets/js/common/bootstrap.min.js"></script>
    <script src="https://cdn.robotaset.com/assets/js/common/ajaxcall.js"></script>
    <script src="https://cdn.robotaset.com/assets/js/common/format-number.js"></script>
    <script src="https://cdn.robotaset.com/assets/js/common/240715_app.js"></script>
    <script src="https://cdn.robotaset.com/assets/js/common/Alert.js"></script>
    <script src="https://cdn.robotaset.com/assets/js/pages/BankValidate.js"></script>
    <script src="https://cdn.robotaset.com/assets/thirdparty/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script>
        function getIconEventTag(gmsbevent) {
            var stylingTag = ""; //"right:-150%";
            var eventTag = "";
            if (gmsbevent === 1) {
                eventTag = '<img alt="hot" width="100%" class="game-icon-frame" style="' + stylingTag + '" src="' + assets +
                    '/images/provider/pp-hot-tag-w-frame.png">';
            } else if (gmsbevent === 2) {
                eventTag = '<img alt="new" width="100%" class="game-icon-frame" style="' + stylingTag + '" src="' + assets +
                    '/images/provider/pp-new-tag-w-frame.png">';
            } else if (gmsbevent === 3) {
                eventTag = '<img alt="exl" width="100%" class="game-icon-frame" style="' + stylingTag + '" src="' + assets +
                    '/images/provider/pp-excl-tag.png">';
            }
            return eventTag;
        }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pak Agri</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&family=Red+Hat+Display&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My Style -->
    <link rel="stylesheet" href="style3.css" />
</head>

<body>
    <!-- Navbar Mulai -->
    <nav class="navbar">
        <img src="images/logo.png" alt="Logo Pak Agri" class="logo-image" />
        <div class="navbar-nav">
            <a href="landingpage2.php#beranda">Beranda</a>
            <a href="landingpage2.php#artikel">Artikel</a>
            <a class="nav-active" href="landingpage2.php#feature">Fitur</a>
            <a href="landingpage2.php#faq">FAQ</a>
        </div>
        </a>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar Selesai -->
    <div class="container">
        <div class="wrapper">
            <header>
                <div class="icons">
                    <span id="prev" class="material-symbols-rounded">chevron_left</span>
                    <p class="current-date"></p>
                    <span id="next" class="material-symbols-rounded">chevron_right</span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks">
                    <li>Min</li>
                    <li>Sen</li>
                    <li>Sel</li>
                    <li>Rab</li>
                    <li>Kam</li>
                    <li>Jum</li>
                    <li>Sab</li>
                </ul>
                <ul class="days"></ul>
            </div>
        </div>
        <div class="ket-warna">
            <div class="row-hijau">
                <div class="hijau"></div>
                <div>: Tanggal Hari Ini</div>
            </div>
            <div class="row-kuning">
                <div class="kuning"></div>
                <div> : Catatan Anda</div>
            </div>
            <p style="color: #000; font-size: 12px; font-weight: 600; margin-top: 10px;">Klik Kalender Untuk Menambahkan
                Catatan, Catatan Akan berada Dibawah Ini</p>
        </div>
        <div class="catatan">
            <h1>Catatan</h1>
            <ul></ul>

        </div>
    </div>
    <!-- My JS -->
    <script src="js/javascript.js"></script>
    <script src="js/javascript2.js"></script>

</body>

</html>
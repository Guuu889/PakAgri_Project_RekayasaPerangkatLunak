<?php
include 'config.php';
$selectedProvinsi = isset($_GET['provinsi']) ? $_GET['provinsi'] : '';
// $provinsi = isset($_GET['kategori']) ? $_GET['provinsi'] : 'nasional';

// Fungsi untuk mengambil dan menampilkan data dari tabel harga_pasar
function displayHargaPasar($conn, $provinsi)
{
    $query = "SELECT * FROM harga_pasar_$provinsi";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='box'>";
            echo "<img src='images/{$row['tanaman']}.png' alt='{$row['tanaman']}' />";
            echo "<div class='column'>";
            echo "<div class='col1' style='width: 50%;'>";
            echo "<div class='row1-1'>{$row['tanaman']}</div>";
            echo "<div class='row2-1'>Harga</div>";
            echo "<div class='row3-1'>Acuan Nasional:</div>";
            echo "</div>";
            echo "<div class='col2' style='width: 50%;'>";
            echo "<div class='row1-2'>Harga: <br> Rp.{$row['harga_provinsi']}/kg</div>";
            echo "<div class='row2-2'></div>";
            echo "<div class='row3-2'>Rp.{$row['harga_nasional']}/kg</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "Tidak ada data.";
    }
}

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pak Agri</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofVfB5SloM11sT5K9z5S1t1uM7p1U/A2z" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&family=Red+Hat+Display&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />




    <script src="https://unpkg.com/feather-icons"></script>

    <!--My Style-->
    <link rel="stylesheet" href="style3.css" />
</head>

<body>
    <!--Navbar Mulai-->
    <nav class="navbar">

        <img src="images/logo.png" alt="Logo Pak Agri" class="logo-image" />

        <div class="navbar-nav">
            <a href="landingpage2.php#beranda">Beranda</a>
            <a href="landingpage2.php#artikel">Artikel</a>
            <a class="nav-active" href="landingpage2.php#feature">Fitur</a>
            <a href="landingpage2.php#faq">FAQ</a>


        </div>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </nav>

    <!--Navbar Selesai-->

    <div class="harga-pasar">
        <h1 class="header-harga">Harga Hari Ini</h1>
        <p class="tagline">Dapatkan info harga beragam komoditas pertanian yang terbaru</p>
    </div>


    <div class="pil-daerah">
        <form method="GET" action="">
            <label for="prov">Pilih Provinsi:</label>
            <select name="provinsi" id="prov">
                <option value="nasional" <?php if ($selectedProvinsi=="nasional"){ echo "selected"; } ?>>Pilih Provinsi
                </option>
                <option value="aceh" <?php if ($selectedProvinsi=="aceh"){ echo "selected"; } ?>>Aceh</option>
                <option value="sumut" <?php if ($selectedProvinsi=="sumut"){ echo "selected"; } ?>>Sumatera Utara
                </option>
                <option value="sumbar" <?php if ($selectedProvinsi=="sumbar"){ echo "selected"; } ?>>Sumatera Barat
                </option>
                <option value="sumsel" <?php if ($selectedProvinsi=="sumsel"){ echo "selected"; } ?>>Sumatera Selatan
                </option>
            </select>
            <button type="submit" nama="kategori">Tampilkan</button>
        </form>
    </div>

    <div class="carausel">
        <img src="images/arrow-left.png" id="prevBtn" onclick="prevSlide()" alt="">

        <?php
        // Panggil fungsi displayHargaPasar sesuai dengan provinsi yang dipilih
        // displayHargaPasar($conn, "nasional");
        
        if ($selectedProvinsi !== '') {
            displayHargaPasar($conn, strtolower(str_replace(' ', '', $selectedProvinsi)));
        }
        ?>

        <!-- <button id="nextBtn" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button> -->
        <img src="images/arrow-right.png" id="nextBtn" onclick="nextSlide()" alt="">
    </div>



    <!--My JS-->
    <script src="js/javascript.js"></script>
    <!-- Bootstrap -->
    </script>

    <?php
    // Tutup koneksi setelah selesai
    $conn->close();
    ?>
</body>

</html>
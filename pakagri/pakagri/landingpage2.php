<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pak Agri</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300&family=Red+Hat+Display&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <! -- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!--My Style-->
        <link rel="stylesheet" href="stylelandingpage2.css" />
</head>

<body>
    <!--Navbar Mulai-->
    <nav class="navbar">
        <!-- <a href="#"class="navbarlogo">
            <p>Pak Agri</p>
            <a href="#" class="navbar-logo"> 
            <img src="images/logo.png" alt="Logo Pak Agri" 
            class="logo-image" />
            </a>   
          </class=> -->
        <nav class="navbar-logo">
            <img src="images/logo.png" alt="Logo Pak Agri">
            <h3>Pak Agri</h3>
        </nav>


        <div class="navbar-nav">
            <a href="#beranda">Beranda</a>
            <a href="#artikel">Artikel</a>
            <a href="#feature">Fitur</a>
            <a href="#faq">FAQ</a>
            <a href="signin.php">Keluar</a>
        </div>

    </nav>

    <!--Navbar Selesai-->

    <!-- Beranda Mulai-->
    <main class="main1">

        <section class="hero" id="beranda">
            <img class=gambarhome src="images/gambarberanda.png" alt="">
            <main class="content">
                <h2>Panduan Lengkap Menuju Kesuksesan <br> Pertanian </h2>
                <p>"Selamat datang di 'Pak Agri,' sumber panduan pertanian terpercaya. <br> Temukan tips praktis,
                    informasi terkini, dan inspirasi untuk kesuksesan <br>pertanian Anda. Bergabunglah dengan komunitas
                    kami, teman setia <br>petani modern!"</p>
        </section>

        <div class="row">
    </main>

    </main>

    <!-- Beranda Selesai-->



    <!--Artikel Mulai-->

    <section id="artikel" class="artikel">
        <h2>Artikel</h2>
        <h1>Temukan Petualangan Pertanian <br> Anda disini!</h1>
        <div class="content">
            <div class="boxthree">
                <div class="boxt">
                    <img src="images/boxt1.png" alt="" class="artikel1">
                    <div class="artikel2">
                        <h3 class="textjudul">Memahami Siklus Tanam-Tumbuh-Panen</h3>
                        <h3 class="textisi">Pertanian yang sukses tidak hanya bergantung pada pengetahuan tanaman
                            tertentu, tetapi juga memerlukan</h3>
                        <button class="buton"
                            onclick="window.location.href='https://tanjungmeru.kec-kutowinangun.kebumenkab.go.id/index.php/web/artikel/4/394'">Selengkapnya</button>
                    </div>
                </div>
                <div class="boxt">
                    <img src="images/boxt2.png" alt="" class="artikel1">
                    <div class="artikel2">
                        <h3 class="textjudul">Manfaat Tanaman Pangan Lokal untuk Kesehatan Anda</h3>
                        <h3 class="textisi">Pertanian yang sukses tidak hanya bergantung pada pengetahuan tanaman
                            tertentu, tetapi juga memerlukan</h3>
                        <button class="buton"
                            onclick="window.location.href='https://www.kompas.id/baca/humaniora/2022/06/23/pangan-lokal-untuk-kesehatan-diri-dan-bumi'">Selengkapnya</button>

                    </div>
                </div>
                <div class="boxt">
                    <img src="images/boxt3.png" alt="" class="artikel1">
                    <div class="artikel2">
                        <h3 class="textjudul">Meminimalkan Pemborosan dan Kerugian</h3>
                        <h3 class="textisi">Penyimpanan hasil pertanian memegang peran penting dalam menjaga kualitas
                            dan kuantitas produk</h3>
                        <button class="buton"
                            onclick="window.location.href='https://www.healthaffairs.org/doi/10.1377/hlthaff.2015.0647'">Selengkapnya
                            </ </div>
                    </div>
                </div>
            </div>
    </section>

    <!--Artikel Selesai-->


    <!--Fitur Mulai-->
    <section id="feature" class="feature">
        <h2>Fitur</h2>
        <h1>Temukan Lebih Banyak
            <br>Pengalaman!
        </h1>
        <div class="kotak">
            <div class="garis"></div>
            <div class="konten">
                <div class="fitur">
                    <div class="fit">
                        <img src="images/fitur1.png" alt="" class="gambarf">
                        <div class="sidef">
                            <h3 class="textjudul">Panduan Pertanian</h3>
                            <h3 class="textisi">Anda akan dibimbing untuk mengenal dunia pertanian lebih dalam </h3>
                            <button class="tombol"><a href="panduan_pertanian.php">Akses Fitur</a></button>
                        </div>
                    </div>
                    <div class="fit">
                        <img src="images/fitur2.png" alt="" class="gambarf">
                        <div class="sidef">
                            <h3 class="textjudul">Panduan Perawatan tanaman </h3>
                            <h3 class="textisi">Anda akan diberikan tips untuk merawat tanaman cabai, tomat dan jagung
                            </h3>
                            <button class="tombol"><a href="panduan_perawatan.php">Akses Fitur</a></button>
                        </div>
                    </div>
                </div>
                <div class="garistengah">
                </div>
                <div class="fitur">
                    <div class="fit">
                        <img src="images/fitur3.png" alt="" class="gambarf">
                        <div class="sidef">
                            <h3 class="textjudul">Informasi harga pasar </h3>
                            <h3 class="textisi">Disediakan informasi terbaru terkait harga jagung, cabai adn tomat </h3>
                            <button class="tombol"><a href="harga_pasar.php">Akses Fitur</a></button>
                        </div>
                    </div>
                    <div class="fit">
                        <img src="images/fitur4.png" alt="" class="gambarf">
                        <div class="sidef">
                            <h3 class="textjudul">Catatan dan kalender pertanian</h3>
                            <h3 class="textisi">Anda dapat membuat remider kecil pada tanggal yang disediakan </h3>
                            <button class="tombol"><a href="kalender.php">Akses Fitur</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Fitur Selesai-->

    <!--FAQ Mulai-->
    <!-- FAQ Mulai -->
    <!--FAQ Mulai-->


    <section id="faq" class="faq">
        <h2>FAQ</h2>
        <h1>Masih Penasaran<br><br> Tanya Disini Yuk</h1>
        <div class="luartanya">
            <div class="tanya">
                <div class="isitanya" onclick="toggleAnswer(this, 1)" data-index="1">
                    <h2 class="isi">Apa Fungsi Utama Website Ini?</h2>
                    <div class="panah"></div>

                </div>
                <div class="jawaban jawaban-1" id="jawaban-1">
                    <p>Fungsi utama dari website ini adalah untuk petani</p>
                </div>
                <div class="isitanya" onclick="toggleAnswer(this, 2)" data-index="2">
                    <h2 class="isi">Bagaimana Cara Mengakses Panduan Pertanian di Website Ini?</h2>
                    <div class="panah"></div>

                </div>
                <div class="jawaban jawaban-2" id="jawaban-2">
                    <p>Dengan login dan mengakses fitur yang disediakan</p>
                </div>
                <div class="isitanya" onclick="toggleAnswer(this, 3)" data-index="3">
                    <h2 class="isi">Apakah Website Ini Gratis Digunakan?</h2>
                    <div class="panah"></div>

                </div>
                <div class="jawaban jawaban-3" id="jawaban-3">
                    <p>Ya, website ini dapat digunakan secara gratis untuk semua pengguna</p>
                </div>


            </div>
            <div class="tanya">
                <div class="isitanya" onclick="toggleAnswer(this, 4)" data-index="4">
                    <h2 class="isi">Apa Keuntungan Menjadi Anggota?</h2>
                    <div class="panah"></div>

                </div>
                <div class="jawaban jawaban-4" id="jawaban-4">
                    <p>Anggota mendapatkan akses ke panduan eksklusif dan penawaran khusus</p>
                </div>
                <div class="isitanya" onclick="toggleAnswer(this, 5)" data-index="5">
                    <h2 class="isi">Bagaimana Cara Menghubungi Tim Dukungan?</h2>
                    <div class="panah"></div>

                </div>
                <div class="jawaban jawaban-5" id="jawaban-5">
                    <p>Anda dapat menghubungi tim dukungan melalui formulir kontak di halaman utama</p>
                </div>
                <div class="isitanya" onclick="toggleAnswer(this, 6)" data-index="6">
                    <h2 class="isi">Apakah Website Ini Aman?</h2>
                    <div class="panah"></div>

                </div>
                <div class="jawaban jawaban-6" id="jawaban-6">
                    <p>Kami menggunakan langkah keamanan terkini untuk melindungi data pengguna</p>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="fotatas">
            <img src="images/logo.png" alt="" class="logofot">
            <fotisi>
                <h3 class="fotjudul">Informasi</h3>
                <h3 class="fotisi">Tentang kami</h3>
                <h3 class="fotisi">More Search</h3>
                <h3 class="fotisi">Blog</h3>
            </fotisi>
            <fotisi>
                <h3 class="fotjudul">Helpful Links</h3>
                <h3 class="fotisi">Privacy Policy</h3>
                <h3 class="fotisi">Term & Condition</h3>
                <h3 class="fotisi">Supports</h3>
            </fotisi>
            <fotisi class="fotkontak">
                <h3 class="fotjudul">Kontak kami </h3>
                <h3 class="fotisi">pakagri@gmail.com</h3>
                <h3 class="fotisi">0xxx-xxx-xxx</h3>
                <div class="contak">
                    <div class="bulat feather-16" data-feather="instagram"></div>
                    <div class="bulat feather-32" data-feather="facebook"></div>
                    <div class="bulat feather-36" data-feather="twitter"></div>
                    <div class="bulat feather-40" data-feather="phone"></div>
                </div>
            </fotisi>
        </div>
        <div class="fotbawah">Copy Right © 2024</div>
    </footer>

    <!-- Feather Icons -->
    <script>
    feather.replace();
    </script>

    <!--My JS-->
    <script>
    function toggleAnswer(element, index) {
        const jawaban = document.getElementById(`jawaban-${index}`);
        const isActive = element.classList.contains("active");

        // Menyembunyikan jawaban pada semua pertanyaan
        document.querySelectorAll(".jawaban").forEach((el) => el.classList.remove("show"));

        // Menghapus class "active" dari semua pertanyaan
        document.querySelectorAll(".isitanya").forEach((el) => el.classList.remove("active"));

        if (!isActive) {
            // Menampilkan jawaban untuk pertanyaan yang dipilih
            jawaban.classList.add("show");
            // Menambah class "active" pada pertanyaan yang dipilih
            element.classList.add("active");
        }
    }
    </script>

</html>
<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama'])) {
    header("Location: signin.php");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggallahir = $_POST['tanggallahir']; // Tambahkan kolom tanggallahir
    $jeniskelamin = $_POST['jeniskelamin']; // Tambahkan kolom jeniskelamin
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            // Tambahkan kolom tanggallahir dan jeniskelamin ke dalam query
            $sql = "INSERT INTO users (nama, email, tanggallahir, jeniskelamin, password)
                    VALUES ('$nama', '$email', '$tanggallahir', '$jeniskelamin', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $tanggallahir = "";
                $jeniskelamin = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Daftar | PakAgri</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-10">
                    <img src="images/argonomi.png" class="img-fluid" style="width: 500px; border-radius: 20px ;">
                </div>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Halo, Petani</h2>
                        <p>Kami senang melihat anda kembali ^_^ </p>
                    </div>
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nama"
                                name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Tanggal Lahir" name="tanggallahir" value="<?php echo $tanggallahir; ?>"
                                required>
                        </div>
                        <div class="input-group mb-3">
                            <select type="option" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Jenis Kelamin" name="jeniskelamin" value="<?php echo $jeniskelamin; ?>"
                                required>
                                <option value="" disabled selected>Pilih jenis kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email address" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"
                                required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Confirm Password" name="cpassword"
                                value="<?php echo $_POST['cpassword']; ?>" required>
                        </div>
                </div>

                <div class="input-group mb-1">
                    <button name="submit" class="btn btn-lg btn-success w-100 fs-6">Daftar</button>
                </div>
                <p class="SignIn-register-text">Anda sudah punya akun? <a href="SignIn.php">Masuk </a></p>
                </form>
            </div>
        </div>

    </div>
    </div>

</body>

</html>
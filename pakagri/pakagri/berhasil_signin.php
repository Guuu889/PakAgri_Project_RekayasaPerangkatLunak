<?php 
 
session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: signin.php");
}
 
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Sampai bertemu kembali ^_^, " . $_SESSION['nama'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Keluar</a>
            </div>
        </form>
    </div>
</body>
</html>
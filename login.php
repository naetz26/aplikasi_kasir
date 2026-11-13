<?php
include "koneksi.php";
if(isset($_POST['login'])){
    $namaPelanggan =$_POST['namaPelanggan'];
    $alamat =$_POST['alamat'];
    $nomorTelepon =$_POST['nomorTelepon'];

    $sql = "SELECT * FROM pelanggan WHERE namaPelanggan='$namaPelanggan' AND alamat='$alamat' AND nomorTelepon='$nomorTelepon'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        header("Location: beranda.php");
    }else{
        echo "Data tidak ditemukan, silahkan daftar terlebih dahulu";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <h3>Login Akun</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="namaPelanggan" name="namaPelanggan">
        <input type="text" placeholder="alamat" name="alamat">
        <input type="text" placeholder="nomor telepon" name="nomorTelepon">
        <button type="submit" name="login">Login Sekarang</button> 
        <a href="register.php">Belum punya akun? Daftar di sini</a>
    </form>

</body>

</html>
<?php
include "koneksi.php";
if(isset($_POST['register'])){
    $namaPelanggan =$_POST['namaPelanggan'];
    $alamat =$_POST['alamat'];
    $nomorTelepon =$_POST['nomorTelepon'];

    $sql = "INSERT INTO pelanggan (namaPelanggan,alamat,nomorTelepon) VALUES ('$namaPelanggan','$alamat','$nomorTelepon')";
    if($connect->query($sql)){
        echo "DATA BERHASIL DITAMBAHLKAN";
    }else{
        echo "DATA GAGAL DITAMBAHKAN";
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
     <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="NamaPelanggan" name="namaPelanggan">
        <input type="text" placeholder="Alamat" name="alamat">
        <input type="text" placeholder="nomorTelepon" name="nomorTelepon">
        <button type="submit" name="register">Daftar</button>
        <a href="login.php">Sudah punya akun? Login di sini</a>
    </form>

</body>
</html>
<?php
include "koneksi.php";
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username,password,name,role) VALUES ('$username','$password','$name','$role')";
    if ($connect->query($sql)) {
        echo "DATA BERHASIL DITAMBAHLKAN";
    } else {
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
    <link rel="stylesheet" href="style.css">
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" placeholder="name" name="name"></td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" placeholder="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" placeholder="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="role">Role:</label></td>
                <td><select name="role">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select></td>
            </tr>
        </table>
        <button type="submit" name="register">Daftar</button>
        <a href="login.php">Sudah punya akun? Login di sini</a>
    </form>

</body>

</html>
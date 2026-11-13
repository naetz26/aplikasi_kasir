<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND name='$name'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        header("Location: beranda.php");
    } else {
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
        </table>
        <button type="submit" name="login">Login Sekarang</button>
        <a href="register.php">Belum punya akun? Daftar di sini</a>
    </form>

</body>
</form>

</html>
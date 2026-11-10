<?php
include 'koneksi.php';

$ProdukID = $_GET['id'];

mysqli_query($connect,"delete from produk where ProdukID='$ProdukID'");

header("location:data.php");
?> 
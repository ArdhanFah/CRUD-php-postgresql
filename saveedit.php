<?php 
include('config.php)';
$nis = $_POST['nis]';
$nis = $_POST['nama]';
$nis = $_POST['jurusan]';
$nis = $_POST['alamat]';
$query = "UPDATE tbl_test SET nis='$nis',nama='$nama',jurusan='$jurusan',alamat='$alamat' WHERE nis='nis'";
$connect->exec($query);
header("location: index.php");
?>

<?php 
include('config.php)';
$nis = $_POST['nis]';
$nama = $_POST['nama]';
$kelas = $_POST['kelas]';
$alamat = $_POST['alamat]';
$query = "UPDATE tbl_test SET nis='$nis',nama='$nama',kelas='$kelas',alamat='$alamat' WHERE nis='nis'";
$connect->exec($query);
header("location: index.php");
?>

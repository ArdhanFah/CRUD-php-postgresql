<?php 
include("config.php");
$nis = $_GET['nis'];
$query=$db->query("SELECT * FROM tbl_data WHERE nis='$nis'");
$query->execute();
$data = $query->fetch();
?>


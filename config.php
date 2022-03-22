<?php 
$host = 'localhost';
$port = '5432';
$user = 'postgres';
$pass = 'password';
$dbname = 'dbtest';
  
$connect = new PDO ("pgsql:dbname='$dbname'; host='$host'; port='$port'", $user, $pass);
  
if($connect){
  echo "Koneksi Berhasil";
}else{
  echo "Koneksi Gagal";
}

?>

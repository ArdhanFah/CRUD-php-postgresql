<?php 
include("config.php");
$nis = $_GET['nis'];
$query=$connect->query("SELECT * FROM tbl_test WHERE nis='$nis'");
$query->execute();
$data = $query->fetch();
?>

<html>
  <head>
    <title>EDIT DATA</title>
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
  </head>
  <body>
    <h2>ADD DATA SISWA</h2>
    <form action="saveedit.php" method="POST">
      <label>Nomor Induk Siswa</label>
      <input type="text" name="nis" placeholder="Masukkan Nomor Induk Siswa" value="<?php echo $data['nis']?>" required>
      <label>Nama Siswa</label>
      <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['nama']?>" required>
      <label>Nomor Induk Siswa</label>
      <select name="kelas">
        <option></option>
        <option value="TKJ">Teknik Komputer dan Jaringan</option>
        <option value="RPL">Rekayasa Perangkat Lunak</option>
        <option value="SIJA">System Informatika Jaringan dan Aplikasi</option>
      </select>
      <label>Alamat</label>
      <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" value="<?php echo $data['alamat']?>" required>
      <button name="kirim" value="kirim">Simpan</button>
    </form>
  </body>
</html>

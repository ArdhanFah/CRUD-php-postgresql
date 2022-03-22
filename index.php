<?php 
include("config.php");
$query = $connect->query("SELECT * FROM tbl_test");
$query->execute();
$data = $query->fetchAll();
?>

<html>
  <head>
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
    <title>DAFTAR SISWA</title>
  </head>
  <body>
    <h2>DAFTAR SISWA TAHUN AJARAN 2022-2023</h2>
    <table borde="1">
      <tr>
        <td>NO</td>
        <td>NIS</td>
        <td>NAMA</td>
        <td>KELAS</td>
        <td>ALAMAT</td>
        <td>UPDATE</td>
      </tr>
      <?php foreach ($data as $value){ ?>
      <tr>
        <td><?php echo $value['nomor'] ?></td>
        <td><?php echo $value['nis'] ?></td>
        <td><?php echo $value['nama'] ?></td>
        <td><?php echo $value['kelas'] ?></td>
        <td><?php echo $value['alamat'] ?></td>
        <td>
          <a href="edit.php?nis=<?php echo $value['nis']?>">EDIT</a>
          <a href="delete.php?nis=<?php echo $value['nis']?>" onclick="return confirm('Apakah Anda Yakin?')">HAPUS</a>
      </tr>
    </table>
    <a href="add.php">Tambah Data</a>
  </body>
</html>

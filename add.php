<html>
  <head>
    <title>ADD DATA</title>
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
  </head>
  <body>
    <h2>ADD DATA SISWA</h2>
    <form action="save.php" method="POST">
      <label>Nomor Induk Siswa</label>
      <input type="text" name="nis" placeholder="Masukkan Nomor Induk Siswa" required>
      <label>Nama Siswa</label>
      <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>
      <label>Nomor Induk Siswa</label>
      <select name="kelas">
        <option></option>
        <option value="TKJ">Teknik Komputer dan Jaringan</option>
        <option value="RPL">Rekayasa Perangkat Lunak</option>
        <option value="SIJA">System Informatika Jaringan dan Aplikasi</option>
      </select>
      <label>Alamat</label>
      <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" required>
      <button name="kirim" value="kirim">Kirim</button>
    </form>
  </body>
</html>

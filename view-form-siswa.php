<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Siswa</title>
</head>
<body>

<h2>Form Input Data Siswa</h2>

<form    action="<?=     base_url('datasiswa/cetak');  ?>"
method="post">
<?php echo validation_errors ()?>

  <label for="nama">Nama Siswa:</label><br>
  <input type="text" id="nama" name="nama"><br>

  <label for="nis">NIS:</label><br>
  <input type="text" id="nis" name="nis"><br>

  <label for="kelas">Kelas:</label><br>
  <input type="text" id="kelas" name="kelas"><br>

  <label for="tgl_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tgl_lahir" name="tgl_lahir"><br>

  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat"><br>

  <label for="jk">Jenis Kelamin:</label><br>
  <input type="radio" id="laki-laki" name="jk" value="laki-laki">
  <label for="laki-laki">Laki-laki</label><br>
  <input type="radio" id="perempuan" name="jk" value="perempuan">
  <label for="perempuan">Perempuan</label><br>

  <label for="Agama">Agama:</label><br>
  <select id="Agama" name="Agama">
    <option value="islam">Islam</option>
    <option value="kristen">Kristen</option>
    <option value="katolik">Katolik</option>
    <option value="budha">Budha</option>
    <option value="hindu">Hindu</option>
    <option value="protestan">Protestan</option>
    <option value="khonghucu">Khonghucu</option>
 </select><br>

 <input type="submit" value="Submit">
</form>

</body>
</html>
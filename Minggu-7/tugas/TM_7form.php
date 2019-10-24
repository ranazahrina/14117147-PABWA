<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tugas Form Minggu 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
    	<script src="bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <h1>Data Diri</h1>
    <form action="TM_7hasil.php" method="get">
      <p>
        <label for="nama">Nama</label>
        <input type="textarea" name="nama" placeholder="Nama lengkap...">
      </p>
      <p>
        <label for="alamat">Alamat</label>
        <input type="textarea" name="alamat" placeholder="Alamat...">
      </p>
      <p>
        <label for="jk">Jenis Kelamin</label>
        <label><input type="radio" name="jk" value="Laki-laki">Laki-laki</label>
        <label><input type="radio" name="jk" value="Perempuan">Perempuan</label>
      </p>
      <p>
        <label for="gd">Golongan Darah</label>
        <select name="gd">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
        </select>
      </p>
      <p>
        <label for="hobi">Hobby: </label><br>
        <label><input type="checkbox" name="hobi" value="Membaca">Membaca</label><br>
        <label><input type="checkbox" name="hobi" value="Menulis">Menulis</label><br>
        <label><input type="checkbox" name="hobi" value="Ngoding">Ngoding</label><br>
        <label><input type="checkbox" name="hobi" value="Bernyanyi">Bernyanyi</label><br>
        <label><input type="checkbox" name="hobi" value="Hobby lainnya">Hobby lainnya</label>
      </p>
      <p>
        <label for="ket">Keterangan</label>
        <input type="textarea" name="ket" placeholder="keterangan...">
      </p>
      <p>
        <button type="submit" name="button" value="send">Save</button>
      </p>
    </form>
  </div>
  </body>
</html>

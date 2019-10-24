<?php
  if (isset($_GET['button']) and !empty($_GET['nama'])) {
      $data = ['nama' => $_GET['nama'],
              'alamat' => $_GET['alamat'],
              'jk' => $_GET['jk'],
              'gd' => $_GET['gd'],
              'hobi' => $_GET['hobi'],
              'ket' => $_GET['ket']
              ];
        echo "Data Diri </br>";
        echo "Nama : $data[nama] </br>";
        echo "Alamat : $data[alamat] </br>";
        echo "Jenis Kelamin : $data[jk] </br>";
        echo "Golongan Darah : $data[gd] </br>";
        echo "Hobby : $data[hobi] </br>";
        echo "Keterangan : $data[ket] </br>";
  }else {
      echo "Anda harus mengisi kolom Nama sebelumnya";
  }
 ?>

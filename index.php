<?php
require 'function.php';

$siswa = query("SELECT * FROM siswa");

if( isset($_POST["cari"]) ) {
	$siswa = cari($_POST["keyword"]);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Data siswa</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
      <div class="container p-5 mt-5">
          <a href="login.php">LOGIN</a>
          <h1 class="me-5 float-left">Daftar Siswa SMK Syafi'i Akrom</h1>

          <a href="tambah.php"><button type="submit">Tambah Data</button></a>
          <br><br>

          <form action="" method="post">

              <input type="text" name="keyword" size="100" autofocus placeholder="masukkan keyword pencarian.."
                  autocomplete="off">
              <button class="btn btn-success" type="submit" name="cari">Cari!</button>
              <br><br>
          </form>

          <table class="table table-light table-hover" border="1" cellpadding="10" cellspacing="0">
              <tr>
                  <th>No.</th>
                  <th>NIS</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
              </tr>
              <?php $i = 1; ?>
              <?php foreach( $siswa as $row ) : ?>
              <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row["nis"]; ?></td>
                  <td><img src="img/<?= $row["gambar"]; ?>" width="55"></td>
                  <td><?= $row["nama"]; ?></td>
                  <td><?= $row["email"]; ?></td>
                  <td><?= $row["jurusan"]; ?></td>
                  <td>
                      <a href="ubah.php?id=<?= $row["id"]; ?>"><i class="bi bi-pencil-square"></i></a> |
                      <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-trash text-danger"></i></a>
                  </td>
              </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
          </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

require 'function.php';
// cek tombol submit udah ditekan apa belum
if( isset($_POST["submit"]) ) {

    // cek data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";

    } else {
        echo "
            <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
            </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="global.css">
</head>

<body>
    
    <div class="container text-center">
    <h1 class="h3 mb-3 fw-normal">Tambah Data Siswa</h1>

        <form class="form" action="" method="post" enctype="multipart/form-data">
           
                    <label for="nis">NIS : </label>
                    <input type="text" name="nis" id="nis" required><br><br>
               
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" required><br><br>
               
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email" required><br><br>
               
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" name="jurusan" id="jurusan" required><br><br>
                
                    <label for="gambar">Gambar : </label>
                    <input type="file" name="gambar" id="gambar"><br><br>
                
                <br>

                <button type="submit" name="submit">Tambah Data</button>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
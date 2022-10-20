<?php 
require 'function.php';
if( isset($_POST["register"]) ) {
  if( registrasi($_POST) > 0 ) {
    echo "
        <script>
            alert('user baru berhasil ditambahkan!');
        </script>
      ";

  } else {
    echo mysqli_error($conn);
  }

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

    <title>Registrasi User</title>
    <link rel="stylesheet" href="user.css">
  </head>
  <body>
    <div class="container text-center">

        <main class="form-signin">
          <form action="" method="post">
           
            <h1 class="h3 mb-3 fw-normal">Registrasi</h1>
        
            <div class="form-floating">
              <input type="username" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2">
              <label for="password2">Konfirmasi Password</label>
            </div>
      
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
          </form>
        </main>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
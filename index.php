<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Ajuakan Aduan</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="./assets/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <main class="form-signin bg-white bg-opacity-70 container-fluid rounded-3 py-3">
    <form method="post" action="aksi.php">
      <img class="login-brand mb-3" src="./assets/img/logo main.png" alt="" width="210" height="">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>


      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="NIM" name="nim">
        <label for="floatingInput">NIM</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-lg btn-primary" type="submit" name="login">Login</button>
        <a href="signup.php" class="btn btn-lg btn-primary">SignUp</a>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2023</p>
      <?php if (isset($_GET['msg'])) echo $_GET['msg'] ?>
    </form>
  </main>



</body>

</html>
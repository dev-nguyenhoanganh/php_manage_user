<?php
  define('CSS_PATH', '/manage_user/app/public/css/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= CSS_PATH ?>style.css">

</head>
<body>
  <?php include(dirname(__DIR__) . '\partial\navbar.php'); ?>

  <div class="container c-form-container">
    <h1 class="text-center">Login</h1>
    <form action="/manage_user/login" method="POST" class="validated-form" novalidate>
      <div class="mb-3">
        <label class="form-label" for="loginName">Username</label>
        <input class="form-control" type="text" id="loginName" autofocus name="loginName" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" required>
      </div>
      <button class="btn btn-success">Login</button>
    </form>
  </div>
  
  <?php include(dirname(__DIR__) . '\partial\footer.php'); ?>
</body>
</html>


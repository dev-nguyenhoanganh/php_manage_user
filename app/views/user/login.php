<?php
  define('PUBLIC_PATH', '/manage_user/app/public');
  $isError = $param != null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= PUBLIC_PATH ?>/css/style.css">
  <script defer src="<?= PUBLIC_PATH ?>/js/validateForms.js"></script>
</head>
<body>
  <?php include(dirname(__DIR__) . '\partial\navbar.php'); ?>

  <div class="container c-form-container">
    <h1 class="text-center">Login</h1>
    
    <form action="/manage_user/login" method="POST" class="validated-form" novalidate>
      <?php if ($isError) { ?>
        <div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
          <div>
            <?= $param["errorMess"] ?>
          </div>
        </div>
      <?php } ?>
      <div class="mb-3">
        <label class="form-label" for="loginName">Username</label>
        <input class="form-control" type="text" id="loginName" autofocus name="loginName" required>
        <div class="invalid-feedback">
          Please enter a username.
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" required>
        <div class="invalid-feedback">
          Please enter a username.
        </div>
      </div>
      <button class="btn btn-success">Login</button>
    </form>
  </div>
  
  <?php include(dirname(__DIR__) . '\partial\footer.php'); ?>
</body>
</html>


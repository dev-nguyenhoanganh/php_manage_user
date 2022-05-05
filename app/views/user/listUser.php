<?php
  define('CSS_PATH', '/manage_user/app/public/css/');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= CSS_PATH ?>style.css">
</head>
<body>
  <?php include(dirname(__DIR__) . '\partial\navbar.php'); ?>
  
  <h1 class="text-center mt-3">List User</h1>

  <div class="container mt-3">
    <table class="list-user table-striped">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">User</th>
          <th scope="col">Birthday</th>
          <th scope="col">Profile Picture</th>
        </tr>
      </thead>
      <tbody>
        <?php  ?>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <?php include(dirname(__DIR__) . '\partial\footer.php'); ?>
</body>
</html>
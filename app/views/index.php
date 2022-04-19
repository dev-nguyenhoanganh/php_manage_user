<?php
  require 'prepend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
  <?php include (VIEWS_DIR . 'partial/navbar.php'); ?>
  
  <h1 class="text-center mt-3">Home Page</h1>
  
  <?php include (VIEWS_DIR . 'partial/footer.php'); ?>
</body>
</html>

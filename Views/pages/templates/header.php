<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= self::titulo; ?></title>
  <link rel="stylesheet" href="<?= INCLUDE_PATH_FULL ?>css/style.css">
</head>
<body>

<header>
  <div class="container">

    <div class="logo">
      <h2>Pess Code</h2>
    </div><!--logo-->

    <nav class="menu">
      <?php
        foreach($this->menuItems as $key => $value){
          echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
        }
      ?>
    </nav><!--menu-->

  </div><!--container-->
</header>
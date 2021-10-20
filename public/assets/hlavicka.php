<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
 <section class="container-fluid bg-dark sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fix">
    <a class="navbar-brand" href="#">Spravy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
<?php

    $aktivnaStranka = basename(dirname($_SERVER['SCRIPT_NAME']));

    $menu = [];

    $riadky= file('../../assets/menu.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($riadky as $riadok){
        list($k,$h) = explode('::',$riadok);
        $menu[$k] = $h;
    }

    foreach ($menu as $key => $value) { 
        if ($key == 'index' )
          $key = 'domov';

          if($aktivnaStranka ==  $key) {

          echo ' 
          <li class="nav-item">
                  <a class="nav-link active"  href="../../theme/'.$key.'/index.php">'.$value.'</a>
                </li>';
          }

             else echo ' 
          <li class="nav-item">
                  <a class="nav-link " href="../../theme/'.$key.'/index.php">'.$value.'</a>
                </li>';

        }
        ?>
</ul>
    </div>
</nav>
</section>
<?php include '../../assets/peticka.php'; ?>
</html>
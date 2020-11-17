<?php

  $dataSiswa = [

    ["Andika", "XII IPS 3", "Tegal"],
    ["Tulus", "XII IPS 4", "Surabaya"],
    ["Pangestu", "XII IPS 2", "Jakarta"],
    ["Friandika", "XII IPS 2", "Bandung"]

  ];

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Learn Array PHP</title>
  </head>
  <body>
  <div class="sidebar-container">
  <div class="sidebar-logo">
    <h2 style="font-weight: bold; padding: 10px 15px 10px 20px;">LearnArray</h2>
  </div>
  <br>
  <ul class="sidebar-navigation">
    <li>
      <a href="#">
        <i class="fa fa-search" aria-hidden="true"></i> DATABASE
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-calendar" aria-hidden="true"></i> SCHEDULE
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-chart-line" aria-hidden="true"></i> REPORTS
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-lock" aria-hidden="true"></i> PERMISSIONS
      </a>
    </li>
  </ul>
</div>

<div class="content-container" style="margin: 0px 45px 0px;15px">
  <br><br>
  <div class="container">
  <ul class="nav nav-pills" style="font-weight: bold; font-size: 14px;">
  <li class="nav-item">
    <a class="nav-link active" href="#" style="border-radius: 20px;">VIEW ALL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">TYPE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">COMPANIES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">LOCATION</a>
  </li>
</ul>
  </div>
  <br><br>
  <div class="container-fluid">
    <table class="table">
        <thead>
          <tr style="color: blue;">
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($dataSiswa as $siswa) : ?>

          <tr>
            <td><?php echo $siswa[0]; ?></td>
            <td><?php echo $siswa[1]; ?></td>
            <td><?php echo $siswa[2]; ?></td>
         </tr>

          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
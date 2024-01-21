<?php include "db.php"?>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bottstap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    

    <!-- Bootsrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>uas</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <p class="navbar-brand text-light mb-2"><i class="bi bi-person-fill" style="font-size: 27px; color: white; margin-right: 7px;"></i><?php echo $_SESSION['user']['nama']; ?></p>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-light">
      <li class="nav-item ">
          <a class="nav-link active text-light me-2 ms-1" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light me-3" aria-current="page" href="obat.php">Data Obat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="inputData.php">Input Data</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-light" href="login.php"> <i class="bi bi-person-fill" style="font-size: 15px; color: white; margin-left: 17px; "></i>  Login</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-light" href="logout.php"> <i class="bi bi-box-arrow-right" style="font-size: 15px; color: white; margin-left: 17px; "></i>  Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
<?php 
session_start();
include "db.php"
?>
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
    <?php
   if(isset($_POST['username'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password) values('$nama','$username','$password') " );
    if($query){
        echo '<script>alert("Selamat, Pendaftaran anda berhasil. Silahkan login.")
        location.href="login.php";</script>';
        
    }
}
    ?>
    <br>
    <br>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header text-center bg-primary text-light">
                    <h3>Pendaftaran User</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class="mb-3">
                            <i class="bi bi-person-circle"></i>
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama">
                            </div>
                            <div class="mb-3">
                            <i class="bi bi-person-circle"></i>
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username">
                            </div>
                            <div class="mb-3">
                            <i class="bi bi-key"></i>
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
                            </div>
                                <div class="text-center">
                                    <button class="btn btn-primary me-1"  type="submit">Daftar</button>
                                    <a href="login.php" class="btn btn-primary me-1">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include "footer.php"?>
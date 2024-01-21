<?php
//koneksi database obat
$host = 'localhost';
$user = 'root';
$pass = "";
$database = 'dbuas';//database Name

// koneksi
$conn = mysqli_connect($host, $user, $pass,$database);

//
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
?>

<?php
//koneksi database user
$koneksi = mysqli_connect("localhost","root","","login") or die ("database tidak terhubung")
;
?>


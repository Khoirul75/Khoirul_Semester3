<?php
session_start();
session_destroy();
echo '<script>alert("Selamat! anda berhasil logout");
location.href="index.php";</script>';
?>
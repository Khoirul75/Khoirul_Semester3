<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama Dosen</h1>
    <?php
    $dosen = array ("Pak Indra","Pak Faiq","Pak Akhlis");

    function jumlahkata($nama) {
        $jumlah_kata = str_word_count ($nama);
        return $jumlah_kata;
    }
    function jumlahhuruf($nama){
        $jumlah_huruf = strlen($nama);
        return $jumlah_huruf;
    }
    function kebalikan($nama){
        $kebalikan = strrev($nama);
        return $kebalikan;
    }

    foreach ($dosen as $nama) {
        echo "<h3>Nama Dosen: $nama</h3>";

    $jumlah_kata = jumlahkata($nama);
    echo "Jumlah Kata : $jumlah_kata <br>";

    $jumlah_huruf = jumlahhuruf($nama);
    echo "Jumlah Huruf : $jumlah_huruf <br>";

    $kebalikan = kebalikan($nama);
    echo "Kebalikan : $kebalikan <br>";
    }
    ?>
</body>
</html>
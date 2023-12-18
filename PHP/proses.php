<?php
$servername = "localhost";
$username = "root"; // username MySQL Anda
$password = ""; // dengan password MySQL Anda
$dbname = "Khoirul";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO user (nama, email, website, gender) VALUES ('$nama', '$email', '$website', '$gender')";

    $result = $conn->query($sql);

    if ($result) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
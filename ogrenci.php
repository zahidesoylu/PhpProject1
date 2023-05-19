<?php

error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db";


$baglanti = new mysqli($host, $username, $password, $dbname);


if ($baglanti->connect_error ) {
    die("Veritabanına bağlanılamadı: " .$baglanti->connect_error);
}
else{
    echo "Baglanti kuruldu. ";
}



$fullname = $_POST['fullname'];
$id = $_POST["id"];
$email = $_POST['email'];
$gender = $_POST['gender'];

$query = "INSERT INTO ogrenci (fullname, id, email, gender) VALUES ('$fullname', '$id', '$email', '$gender')";

if (mysqli_query($baglanti, $query)) {
    echo "Öğrenci kaydedildi!";
} else {
    echo "Hata: " . $query . "<br>" . mysqli_error($baglanti);
}

mysqli_close($baglanti);

echo "Baglanti Kapatildi.";


?>


<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mairie_final_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
?>
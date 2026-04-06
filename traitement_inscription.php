<?php
// 1. Connexion à la base
$connexion = mysqli_connect("localhost", "root", "", "mairie_final_db");

if (isset($_POST['nom'])) {
    // Récupération des données
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // 2. Requête SQL pour l'insertion
    // Remplacez 'inscription' par le vrai nom de votre table (ex: inscriptions)
    $sql = "INSERT INTO inscriptions (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

    if (mysqli_query($connexion, $sql)) {
        echo "<h1>Succes !</h1>";
        echo "L'inscription de $prenom $nom a ete enregistree dans la base de donnees de la mairie.";
    } else {
        echo "Erreur lors de l'enregistrement : " . mysqli_error($connexion);
    }
}
mysqli_close($connexion);
?>
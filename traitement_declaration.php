<?php
// 1. Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "mairie_final_db");

if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// 2. Récupération simplifiée des données (Pas de condition compliquée ici)
// On utilise les noms qui sont dans ton fichier index.php
$nom = isset($_POST['nom']) ? mysqli_real_escape_string($conn, $_POST['nom']) : '';
$prenom = isset($_POST['prenom']) ? mysqli_real_escape_string($conn, $_POST['prenom']) : '';
$date_naiss = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : '';
$lieu_naiss = isset($_POST['lieu_naissance']) ? $_POST['lieu_naissance'] : '';
$nom_pere = isset($_POST['nom_pere']) ? $_POST['nom_pere'] : '';
$nom_mere = isset($_POST['nom_mere']) ? $_POST['nom_mere'] : '';
$email = isset($_POST['email_parent']) ? $_POST['email_parent'] : '';
$tel = isset($_POST['telephone']) ? $_POST['telephone'] : '';

// 3. On vérifie juste si le nom est vide pour savoir si le formulaire a été rempli
if ($nom != '') {
    
    // 4. On enregistre dans la table 'demandes'
    $sql = "INSERT INTO demandes (nom, prenom, date_naissance, lieu_naissance, nom_pere, nom_mere, email_parent, telephone) 
            VALUES ('$nom', '$prenom', '$date_naiss', '$lieu_naiss', '$nom_pere', '$nom_mere', '$email', '$tel')";

    if (mysqli_query($conn, $sql)) {
        // Succès ! On récupère le numéro et on va à la confirmation
        $id = mysqli_insert_id($conn);
        header("Location: confirmation.php?id=$id");
        exit();
    } else {
        echo "Erreur de base de données : " . mysqli_error($conn);
    }

} else {
    // Si on arrive ici sans avoir rempli le nom
    echo "<h1>Erreur : Le formulaire est vide</h1>";
    echo "<p>Veuillez repartir de la page d'accueil : <a href='index.php'>Cliquer ici</a></p>";
}

mysqli_close($conn);
?>
<?php $connexion = mysqli_connect("localhost", "root", "", "mairie_final_db"); ?>
<?php
// 1. Connexion à la base de données
// On utilise 'root' sans mot de passe pour Wamp et la base 'mairie_db'
$conn = mysqli_connect("localhost", "root", "", "mairie_final_db");

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// 2. Récupération des données du formulaire
// On récupère 'choix' qui vient de demande.php
$choix = isset($_POST['choix']) ? $_POST['choix'] : null;

if ($choix) {
    // 3. Insertion dans la nouvelle table 'demandes'
    $sql = "INSERT INTO demandes (choix_reception) VALUES ('$choix')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Succes !</h2>";
        echo "Votre demande pour l'extrait de naissance a ete enregistre.<br>";
        echo "Mode de reception choisi : <strong>" . htmlspecialchars($choix) . "</strong>";
    } else {
        echo "Erreur d'enregistrement : " . mysqli_error($conn);
    }
} else {
    // Message si on accède à la page sans passer par le formulaire
    echo "<p>Veuillez repartir du formulaire : <a href='demande.php'>Cliquez ici</a></p>";
}

// 4. Fermeture de la connexion
mysqli_close($conn);
?>
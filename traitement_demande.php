<?php
// 1. Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "mairie_final_db");

// Vérification de la connexion
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// 2. On vérifie si le formulaire a été envoyé via le bouton 'enregistrer'
if (isset($_POST['enregistrer'])) {
    
    // 3. Récupération des données (doit correspondre aux 'name' de ton index.php)
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $date_naiss = mysqli_real_escape_string($conn, $_POST['date_naissance']);
    $lieu_naiss = mysqli_real_escape_string($conn, $_POST['lieu_naissance']);
    $nom_pere = mysqli_real_escape_string($conn, $_POST['nom_pere']);
    $nom_mere = mysqli_real_escape_string($conn, $_POST['nom_mere']);
    $email = mysqli_real_escape_string($conn, $_POST['email_parent']);
    $tel = mysqli_real_escape_string($conn, $_POST['telephone']);

    // 4. Requête SQL (doit correspondre aux colonnes de ta table 'demandes')
    $sql = "INSERT INTO demandes (nom, prenom, date_naissance, lieu_naissance, nom_pere, nom_mere, email_parent, telephone) 
            VALUES ('$nom', '$prenom', '$date_naiss', '$lieu_naiss', '$nom_pere', '$nom_mere', '$email', '$tel')";

    // 5. Exécution et redirection
    if (mysqli_query($conn, $sql)) {
        // On récupère l'ID automatique et on l'envoie à la confirmation
        $id_genere = mysqli_insert_id($conn);
        header("Location: confirmation.php?id=$id_genere");
        exit();
    } else {
        // Affiche l'erreur précise si ça échoue
        echo "Erreur SQL : " . mysqli_error($conn);
    }
} else {
    echo "Veuillez remplir le formulaire d'accueil.";
}

mysqli_close($conn);
?>
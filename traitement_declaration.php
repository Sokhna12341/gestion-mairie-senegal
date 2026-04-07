<?php
// 1. Connexion à la base
$conn = mysqli_connect("localhost", "root", "", "mairie_final_db");
if (!$conn) { die("Erreur de connexion"); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupération des données du formulaire
    $nom    = isset($_POST['nom']) ? mysqli_real_escape_string($conn, $_POST['nom']) : "";
    $prenom = isset($_POST['prenom']) ? mysqli_real_escape_string($conn, $_POST['prenom']) : "";
    
    // On crée l'identité complète pour la colonne 'nom_demandeur'
    $nom_complet = $prenom . " " . $nom;

    // Valeurs par défaut pour ta table
    $type_acte = "Déclaration de Naissance";
    $statut = "En attente"; // Ou "Validé" selon ton choix
    $choix = "Mairie"; // Valeur par défaut pour choix_reception

    // 2. INSERTION AVEC LES BONS NOMS DE COLONNES
    $sql = "INSERT INTO demandes (nom_demandeur, type_acte, statut, choix_reception) 
            VALUES ('$nom_complet', '$type_acte', '$statut', '$choix')";

    if (mysqli_query($conn, $sql)) {
        // 3. Succès ! On récupère l'ID
        $id = mysqli_insert_id($conn);
        
        // Redirection vers la page de confirmation
        header("Location: confirmation.php?id=" . $id . "&type=declaration");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement : " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<?php 
// Connexion à la base de données (si nécessaire au début)
$connexion = mysqli_connect("localhost", "root", "", "mairie_final_db"); 
?>
<!DOCTYPE TYPE html>
<html>
<head>
    <title>Fiche d'Inscription - Mairie</title>
    <style>
        /* Un petit peu de style pour que ce soit plus propre que sur la photo */
        body { font-family: Arial, sans-serif; padding: 20px; }
        input { margin-bottom: 10px; padding: 8px; width: 250px; }
        label { display: inline-block; width: 150px; }
    </style>
</head>
<body>

    <h2>Fiche d'Inscription Administrative</h2>

    <form action="Traitement_inscription.php" method="POST">
        
        <label>Nom :</label>
        <input type="text" name="nom" placeholder="Ex: MARTIN" required><br>

        <label>Prenom :</label>
        <input type="text" name="prenom" placeholder="Ex: Jean" required><br>

        <label>Date de naissance :</label>
        <input type="date" name="date_naiss" required><br>

        <label>Lieu de naissance :</label>
        <input type="text" name="lieu_naiss" placeholder="Ville"><br>

        <label>Adresse :</label>
        <input type="text" name="adresse" placeholder="N° et nom de rue"><br>

        <label>Telephone :</label>
        <input type="tel" name="tel" placeholder="0102030405"><br>

        <label>Email :</label>
        <input type="email" name="email" placeholder="nom@exemple.com"><br>

        <label>Situation :</label>
        <select name="situation">
            <option value="celibataire">Celibataire</option>
            <option value="marie">Marie(e)</option>
            <option value="pacs">Pacse(e)</option>
        </select><br><br>

        <button type="submit" name="valider">Enregistrer l'inscription</button>
    </form>

</body>
</html>
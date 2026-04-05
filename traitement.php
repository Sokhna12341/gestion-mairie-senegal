<?php $connexion = mysqli_connect("localhost", "root", "", "mairie_final_db"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Demande</title>
</head>
<body>

<form action="Traitement_dmde.php" method="POST">
    <input type="text" name="nom" placeholder="Nom"><br> <br>
    <input type="text" name="prenom" placeholder="Prenom"><br> <br>
    <input type="date" name="date"><br> <br>
    <input type="text" name="lieu" placeholder="Lieu de naissance"><br> <br>
    <input type="email" name="email" placeholder="Email"><br> <br>
    <input type="text" name="tel" placeholder="Telephone"><br> <br>
    
    <button type="submit">Envoyer</button>
</form>

</body>
</html>
<?php $connexion = mysqli_connect("localhost", "root", "", "mairie_final_db"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demande d'extrait</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .option { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h2>Choisir le mode de réception</h2>
    
    <form action="envoi.php" method="POST">
        
        <div class="option">
            <input type="radio" name="choix" value="email" id="m1" required>
            <label for="m1">Recevoir par Email</label>
        </div>

        <div class="option">
            <input type="radio" name="choix" value="whatsApp" id="m2">
            <label for="m2">Recevoir sur WhatsApp</label>
        </div>

        <div class="option">
            <input type="radio" name="choix" value="PDF" id="m3">
            <label for="m3">Télécharger en PDF</label>
        </div>

        <br>
        <button type="submit">Valider et Envoyer</button>
    </form>
</body>
</html>
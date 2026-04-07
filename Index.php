<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie de Sacré-Cœur | Accueil</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .form-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 30px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
        }
        .full-width { grid-column: span 2; }
        button {
            width: 100%;
            padding: 15px;
            background: #27ae60;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover { background: #219150; }
    </style>
</head>
<body>

<div class="form-card">
    <h2>Déclaration de Naissance</h2>
    <form action="traitement.php" method="POST">
        <div class="grid">
            <input type="text" name="nom" placeholder="Nom de l'enfant" required>
            <input type="text" name="prenom" placeholder="Prénom de l'enfant" required>
        </div>
        
        <input type="date" name="date_naissance" required>
        <input type="text" name="lieu_naissance" placeholder="Lieu de naissance" required class="full-width">
        
        <div class="grid">
            <input type="text" name="nom_pere" placeholder="Nom du père">
            <input type="text" name="nom_mere" placeholder="Nom de la mère" required>
        </div>
        
        <input type="email" name="email_parent" placeholder="Email de contact" required class="full-width">
        <input type="tel" name="telephone" placeholder="Téléphone" required class="full-width">
        
        <button type="submit" name="enregistrer">Enregistrer la déclaration</button>
    </form>
</div>

</body>
</html>
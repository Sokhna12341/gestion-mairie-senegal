<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mairie de Sacré Cœur - Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Sytème État Civil - Sacré Cœur</a>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="display-4 mb-4">Bienvenue à la Mairie</h1>
        <p class="lead mb-5">Digitalisation des services d'obtention d'extraits de naissance.</p>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Demande d'Extrait</h3>
                        <p class="card-text">Pour les citoyens déjà enregistrés dans le registre de la commune.</p>
                        <a href="demande.php" class="btn btn-primary btn-lg">Faire une demande</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title text-success">Déclarer un Nouveau-né</h3>
                        <p class="card-text">Enregistrez une nouvelle naissance et créez un nouveau numéro de registre.</p>
                        <a href="declaration.php" class="btn btn-success btn-lg">Déclarer une naissance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
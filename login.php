<?php
session_start();

// Simulation d'une vérification (À remplacer par ta requête SQL plus tard)
$error = "";

if (isset($_POST['connexion'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Exemple simple : admin / admin123
    if ($email == "admin@mairie.sn" && $password == "admin123") {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php"); // Redirection vers ton espace admin
        exit();
    } else {
        $error = "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Portail Mairie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-600 rounded-2xl shadow-lg mb-4">
                <i class="fa-solid fa-republican text-white text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-slate-800 uppercase tracking-tight">Espace Administration</h1>
            <p class="text-slate-500 text-sm mt-1">Veuillez vous identifier pour accéder au service</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-xl shadow-slate-200 border border-slate-200">
            
            <?php if ($error != ""): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r-lg">
                    <div class="flex items-center">
                        <i class="fa-solid fa-triangle-exclamation text-red-500 mr-3"></i>
                        <p class="text-red-700 text-sm"><?php echo $error; ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Adresse Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" name="email" required
                               class="block w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all text-sm"
                               placeholder="ex: jean@mairie.sn">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Mot de passe</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="password" required
                               class="block w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all text-sm"
                               placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center text-slate-600">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 mr-2"> Se souvenir
                    </label>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Oublié ?</a>
                </div>

                <button type="submit" name="connexion"
                        class="w-full bg-[#1e293b] text-white py-3.5 rounded-xl font-bold uppercase tracking-widest text-sm shadow-lg hover:bg-slate-800 transition-all active:scale-[0.98]">
                    Se Connecter
                </button>
            </form>
        </div>

        <p class="text-center mt-8 text-slate-400 text-xs uppercase tracking-widest">
            © 2026 Mairie Numérique - Tous droits réservés
        </p>
    </div>

</body>
</html>
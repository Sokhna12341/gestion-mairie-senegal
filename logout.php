<?php
// 1. Logique de déconnexion (PHP 5.5+)
session_start();
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion - Mairie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta http-equiv="refresh" content="3;url=demande.php">
    
    <style>
        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }
        .animate-chic { animation: fadeInScale 0.6s ease-out forwards; }
    </style>
</head>
<body class="bg-[#f8fafc] flex items-center justify-center min-h-screen p-4 font-sans">

    <div class="max-w-md w-full bg-white shadow-[0_20px_50px_rgba(0,0,0,0.05)] rounded-[3rem] p-12 text-center animate-chic border border-slate-100">
        
        <div class="relative mx-auto w-24 h-24 mb-8">
            <div class="absolute inset-0 bg-blue-50 rounded-full animate-ping opacity-25"></div>
            <div class="relative w-full h-full bg-white border-2 border-blue-600 rounded-full flex items-center justify-center text-blue-600">
                <i class="fa-solid fa-arrow-right-from-bracket text-3xl"></i>
            </div>
        </div>

        <h1 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-4">
            Session fermée
        </h1>
        
        <p class="text-slate-500 text-sm leading-relaxed mb-8">
            Vous avez été déconnecté avec succès. <br>
            <span class="font-medium text-blue-600">À bientôt sur le portail de la Mairie.</span>
        </p>

        <div class="w-24 h-1 bg-slate-100 mx-auto rounded-full overflow-hidden">
            <div class="h-full bg-blue-600 w-1/2 animate-[loading_3s_linear_infinite]"></div>
        </div>

        <style>
            @keyframes loading {
                0% { transform: translateX(-100%); }
                100% { transform: translateX(200%); }
            }
        </style>

        <div class="mt-10">
            <a href="demande.php" class="text-xs font-bold text-slate-400 uppercase tracking-widest hover:text-blue-600 transition-colors">
                Redirection immédiate <i class="fa-solid fa-chevron-right ml-1"></i>
            </a>
        </div>

    </div>

</body>
</html>
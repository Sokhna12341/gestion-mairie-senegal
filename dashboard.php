<?php
session_start();
// Vérification si l'utilisateur est connecté (sécurité)
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Administration Mairie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 flex min-h-screen">

    <div class="w-64 bg-[#1e293b] text-white flex flex-col shadow-xl">
        <div class="p-6 text-center border-b border-slate-700">
            <h1 class="text-xl font-bold uppercase tracking-widest text-indigo-400">Mairie Admin</h1>
        </div>
        <nav class="flex-1 p-4 space-y-2 mt-4">
            <a href="#" class="flex items-center p-3 bg-indigo-600 rounded-lg transition-all">
                <i class="fa-solid fa-chart-line mr-3"></i> Statistiques
            </a>
            <a href="#" class="flex items-center p-3 text-slate-300 hover:bg-slate-800 rounded-lg transition-all">
                <i class="fa-solid fa-file-invoice mr-3"></i> Demandes reçues
            </a>
            <a href="#" class="flex items-center p-3 text-slate-300 hover:bg-slate-800 rounded-lg transition-all">
                <i class="fa-solid fa-users mr-3"></i> Utilisateurs
            </a>
        </nav>
        <div class="p-4 border-t border-slate-700">
            <a href="logout.php" class="flex items-center p-3 text-red-400 hover:bg-red-900/20 rounded-lg transition-all">
                <i class="fa-solid fa-right-from-bracket mr-3"></i> Déconnexion
            </a>
        </div>
    </div>

    <div class="flex-1 flex flex-col">
        <header class="bg-white shadow-sm p-4 flex justify-between items-center px-8">
            <h2 class="text-gray-700 font-bold text-lg uppercase">Tableau de bord</h2>
            <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span>Bienvenue, <strong>Admin</strong></span>
                <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-user-shield"></i>
                </div>
            </div>
        </header>

        <main class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <div class="flex justify-between items-center mb-4 text-indigo-500 font-bold text-xs uppercase">
                        Total Demandes
                        <i class="fa-solid fa-file-lines text-xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-slate-800">124</div>
                    <div class="text-xs text-green-500 mt-2 font-medium">+12% depuis hier</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <div class="flex justify-between items-center mb-4 text-amber-500 font-bold text-xs uppercase">
                        En attente
                        <i class="fa-solid fa-clock text-xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-slate-800">18</div>
                    <div class="text-xs text-slate-400 mt-2 font-medium font-italic italic">Traitement sous 48h</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <div class="flex justify-between items-center mb-4 text-emerald-500 font-bold text-xs uppercase">
                        Délivrées
                        <i class="fa-solid fa-check-double text-xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-slate-800">106</div>
                    <div class="text-xs text-green-500 mt-2 font-medium">Succès garanti</div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="font-bold text-slate-800">Demandes Récentes</h3>
                    <button class="text-indigo-600 text-sm font-semibold hover:underline">Voir tout</button>
                </div>
                <table class="w-full text-left">
                    <thead class="bg-slate-50 text-slate-400 text-xs uppercase">
                        <tr>
                            <th class="p-4">Nom du titulaire</th>
                            <th class="p-4">Type de document</th>
                            <th class="p-4">Statut</th>
                            <th class="p-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-semibold text-slate-700">Adama Ndiaye</td>
                            <td class="p-4 text-slate-500 font-medium italic">Extrait de naissance</td>
                            <td class="p-4"><span class="px-3 py-1 bg-amber-100 text-amber-600 rounded-full text-xs font-bold">En cours</span></td>
                            <td class="p-4 text-right"><button class="text-indigo-500 hover:text-indigo-700 font-bold uppercase text-[10px]">Gérer</button></td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-semibold text-slate-700">Moussa Fall</td>
                            <td class="p-4 text-slate-500 font-medium italic">Acte de mariage</td>
                            <td class="p-4"><span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-bold">Terminé</span></td>
                            <td class="p-4 text-right"><button class="text-indigo-500 hover:text-indigo-700 font-bold uppercase text-[10px]">Gérer</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
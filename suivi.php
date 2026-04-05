<?php
 include 'db_connect.php'; ?>
<?php $connexion = mysqli_connect("localhost", "root", "", "mairie_final_db"); ?>
<form>
    <h2>Suivi demande</h2>
    <input type="text" placeholder="Numero_acte"><br><br>
    <button>Rechercher</button>

    <p>Statut : En cours</p>
</form>

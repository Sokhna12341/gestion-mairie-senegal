<html>
    <body>
        <form method = "POST">
            Nom_bebe <input type = "text" name = "Nom_bebe"> <br> <br>
            Prenom_bebe <input type = "text" name = "Prenom_bebe"> <br> <br>
            Date_naissance <input type = "date" name = "date_naiss"> <br> <br>
            Lieu_naissance <input type = "text" name = "lieu_naiss"> <br> <br>
            Nom_pere <input type = "text" name = "Nom_pere"> <br> <br>
            Nom_prenom_mere <input type = "text" name = "Nom_prenom_mere"> <br> <br>
            Tel <input type = "text" name = "Tel"> <br> <br>
            Email <input type = "text" name = "Eamil"> <br> <br>
            <input type = "submit" value = "Envoyer"> 
</form>
<?php
$statusMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$Nom_bebe= isset($_POST['Nom_bebe']) ? trim($_POST['Nom_bebe']) : '';
    $Prenom_bebe = isset($_POST['Prenom_bebe']) ? trim($_POST['Prenom_bebe']) : '';
     $Date_naissance = isset($_POST['Date_naissance']) ? trim($_POST['Date_naissance']) : '';
    $Lieu_naissance = isset($_POST['Lieu_naissance']) ? trim($_POST['Lieu_naissance']) : '';
$Nom_pere= isset($_POST['Nom_pere']) ? trim($_POST['Nom_pere']) : '';
$Nom_prenom_mere= isset($_POST['Nom_prenom_mere']) ? trim($_POST['Nom_prenom_mere']) : ''; 
 $Tel = isset($_POST['Tel']) ? trim($_POST['Tel']) : '';
    $Email= isset($_POST['Email']) ? trim($_POST['Email']) : '';
   
    if ($Nom_bebe !== '' && $Prenom_bebe !== '' && $Date_naissance !== '' && $Lieu_naissance !== '' && $Nom_pere !== ''&& $Nom_prenom_mere !== '' && $Tel !=='' && $Email !==''){

        $connect = mysqli_connect('localhost', 'root', '', 'PROJET MAIRIE');

        if ($connect) {

            $Nom_bebe = mysqli_real_escape_string($connect, $Nom_bebe);
            $Prenom_bebe = mysqli_real_escape_string($connect, $Prenom_bebe);
            $Date_naissance = mysqli_real_escape_string($connect, $Date_naissance);
            $Lieu_naissance = mysqli_real_escape_string($connect, $Lieu_naissance);
            $Nom_pere = mysqli_real_escape_string($connect, $Nom_pere);
            $Nom_prenom_mere = mysqli_real_escape_string($connect, $Nom_prenom_mere);
            $Tel = mysqli_real_escape_string($connect, $Tel);
            $Email = mysqli_real_escape_string($connect, $Email);

            $P = "INSERT INTO Inscription (Nom_bebe, Prenom_bebe, Date_naissance, Lieu_naissance, Nom_pere, Nom_prenom_mere, Tel, Email)
                  VALUES ('$Nom_bebe', '$Prenom_bebe', '$Date_naissance', '$Lieu_naissance', '$Nom_pere', '$Nom_prenom_mere', '$Tel', '$Email' )";

            $result = mysqli_query($connect, $P);

            if ($result) {
                mysqli_close($connect);
                header('Location: Connexion.php');
                exit;
            } else {
                $statusMessage = "Erreur lors de l'inscription : " . mysqli_error($connect);
            }

            mysqli_close($connect);

        } else {
            $statusMessage = "Connexion à la base de données impossible.";
        }

    } else {
        $statusMessage = "Veuillez remplir tous les champs.";
    }
}
?>
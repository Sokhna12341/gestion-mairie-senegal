<html>
    <body>
        <H3> Choisissez comment recevoir votre extrait : </H3>
        <form action = "Envoi.php" method = "POST">
            <input type = "hidden" name = "id" value = "<?php echo $id['id'] ?> ">
            <input type = "radio" name = "choix" value = "email" required> Email<br>
            <input type = "radio" name = "choix" value = "whatsApp"> whatsApp<br>
            <input type = "radio" name = "choix" value = "PDF"> Telecharger PDF<br>
            <input type = "submit" value = "Confirmer">
</form>
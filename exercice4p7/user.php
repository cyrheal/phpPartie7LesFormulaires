<?php
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <div>
            Bonjour <?= $firstname . ' ' . $lastname; //j'affiche bonjour bertrand ravaux  ?>
        </div> 
    </body>
</html>
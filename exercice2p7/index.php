<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
        <div>
            <form method="POST" action="user.php">
                <div><label for="firstname"> Prénom :</label><input type="text" name="firstname" /></div>
                <div><label for="lastname">Nom :</label><input type="text" name="lastname" /></div>
                <div><input type="submit" value="valider"/></div>
            </form>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <p>Créer un formulaire sur la page index.php avec :

            Une liste déroulante pour la civilité (Mr ou Mme)
            Un champ texte pour le nom
            Un champ texte pour le prénom

            Ce formulaire doit rediriger vers la page index.php.
            Vous avez le choix de la méthode.</p>

        <div>
            <form method="POST" action="index.php">
                <select name="gender">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <p><label for="firstname"> Prénom :</label> <input type="text" name="firstname" /></p>
                <p><label for="lastname">Nom :</label> <input type="text" name="lastname" /></p>
                <p><label><input type="submit"/></label></p>
            </form>
        </div>
        <div>Bonjour <?= $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname']; ?></div>
    </body>
</html>

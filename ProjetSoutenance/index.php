<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="inscription">
        <h3>INSCRIPTION</h3>
        <div>
            <form action="traitements/traitementinscription.php" method="post">
                <div>
                    <label for="nom" style="margin-right: 100px;">Nom</label><br>
                    <input type="text" id="nom" name="nom">
                </div><br>
                <div>
                    <label for="prenom" style="margin-right: 100px;">Prenom</label><br>
                    <input type="text" id="prenom" name="prenom">
                </div><br>
                <div>
                    <label for="pseudo" style="margin-right: 100px;">Pseudo</label><br>
                    <input type="text" id="pseudo" name="pseudo">
                </div><br>
                <div>
                    <label for="email" style="margin-right: 133px;">Email</label><br>
                    <input type="email" id="email" name="email">
                </div><br>
                <div>
                    <label for="contact" style="margin-right: 120px;">Contact</label><br>
                    <input type="text" id="contact" name="contact">
                </div><br>
                <div>
                    <label for="motdepasse" style="margin-right: 100px;">Mot de passe</label><br>
                    <input type="motdepasse" id="motdepasse" name="motdepasse">
                </div><br>
                    <input style="background-color: blue;" type="submit" value="Register" name="ok">
                </form>
        </div><br>
        <div>
            <p>Vous aviez déjà un compte?</p>
        </div><br>
        <div>
            <button style="background-color: blue;">Connexion</button>
        </div>
        
    </section>
</body>
</html>
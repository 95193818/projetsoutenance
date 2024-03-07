<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="ins">
        <div>
            <div class="menu">
                <strong style="text-decoration: none; color: black; margin-left:30px">ETU FAABA</strong>
                <a href="index.php" style="text-decoration: none; color: black; margin-right: 20px;">HOME</a>
                <a href="about.php" style="text-decoration: none; color: black; margin-right: 20px;">ABOUT</a>
                <a href="shop.php" style="text-decoration: none; color: black; margin-right: 20px;">SHOP</a>
                <a href="contact.php" style="text-decoration: none; color: black; margin-right: 20px;">CONTACT</a>
            </div>
        </div>
        <h3>INSCRIPTION</h3>
        <div class="inscri">
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
                    <label for="pass" style="margin-right: 100px;">Mot de passe</label><br>
                    <input type="password" id="passworde" name="passworde">
                </div><br>
                <div>
                    <input style="background-color: white;" type="submit" value="S'inscrir" name="ok">
                </div><br>
                <div>
                    <p>Vous aviez déjà un compte?</p>
                </div><br>
                <div>
                    <button style="background-color: white;">Connexion</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
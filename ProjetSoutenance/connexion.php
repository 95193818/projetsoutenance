<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="ins">
        <div class="menu">
            <strong style="text-decoration: none; color: black; margin-left:30px">ETU FAABA</strong>
            <a href="index.php" style="text-decoration: none; color: black; margin-right: 20px;">HOME</a>
            <a href="about.php" style="text-decoration: none; color: black; margin-right: 20px;">ABOUT</a>
            <a href="shop.php" style="text-decoration: none; color: black; margin-right: 20px;">SHOP</a>
            <a href="contact.php" style="text-decoration: none; color: black; margin-right: 20px;">CONTACT</a>
        </div>
        <h3>CONNEXION</h3>
        <div>
            <form action="traitements/traitementconnexion.php" method="post">
                <div>
                    <label for="email" style="margin-right: 133px;">Email</label><br>
                    <input type="text" id="email" name="email">
                </div><br>
                <div>
                    <label for="motdepasse" style="margin-right: 100px;">Mot de passe</label><br>
                    <input type="text" id="motdepasse" name="motdepasse">
                </div><br>
                <div class="enregistrer">
                  <button style="background-color: blue; color:white; border-radius:9px"> Se connecter</button>
                </div>
                </form>
        </div><br>
        
    </section>
</body>
</html>

<?php

session_start();

error_reporting(E_ALL);
ini_set("display_errors",1);
// CONNEXION A LA BASE DE DONNEES
$servername = 'localhost';
$username = 'root';
$password = '';
  try {
    $bdd = new PDO ("mysql:host=$servername;dbname=projetsoutenance",$username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo 'ERREUR :'.$e->getMessage();
  }

if (isset($_POST['ok'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['passworde']);

    if(isset($email, $password,) AND !empty($_POST['email'])){


        $reqData = $bdd->prepare('SELECT *, count(*) as count FROM utilisateurs WHERE email = ?');
        $reqData->execute(array($email));
        $resultat = $reqData->fetch();

        if ($resultat['count'] > 0) {

            $passwordVerrify = password_verify($password, $resultat['passworde']);
            if ($passwordVerrify) {
                $_SESSION['nom'] = $resultat['nom'];

                echo $_SESSION['nom'];
                header('LOCATION: index.php');
                exit;
                  }else{
                    echo 'Mot de passe incorrect !';
                  }
                }else{
                    echo 'le mail n\'existe pas';
                }
            }else{
               echo 'veillez remplir tous les champs !';
            }
    }
?>


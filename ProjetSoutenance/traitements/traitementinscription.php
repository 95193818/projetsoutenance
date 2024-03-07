<?php 
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

/*if (isset($_POST['ok'])) {
  // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $motdepasse = htmlspecialchars($_POST['motdepasse']);

  if(isset($nom, $prenom, $pseudo, $email, $contact, $motdepasse) AND !empty($_POST['nom'])){

    // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données

    $passwordHash = password_hash($motdepasse, PASSWORD_DEFAULT);

    $reqData = $bdd->prepare('SELECT count(*) as count FROM utilisateurs WHERE email = ?');
    $reqData->execute(array($email));
    $resultat = $reqData->fetch();

    if ($resultat['count'] > 0) {
        echo  'E-mail existe déjà !'; 
      }else{
        // SI l'EMAIL n'exite pas dans la base de données on fait un contrôle 
        // pour savoir si le mot de passe fait 8 caractères

        if (strlen($motdepasse) >= 8) {
                // si c'est bon, on insert les informations du formulaire dans la base de données
                $req = $bdd->prepare("INSERT INTO utilisateurs(nom, prenom, pseudo, email, contact, motdepasse) VALUES (?,?,?,?,?,?)");
                $req->execute(array($nom, $prenom, $pseudo, $email, $contact, $passworHash));
                
                echo 'Bravo!!! Inscription validé';
          }else{
          echo 'Mot de passe au moins 8 caractères !';
        }
      }
    }else {
     echo 'Veillez remplir tous les champs !';
    }
}*/
if (isset($_POST['ok'])) {
  // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $password = htmlspecialchars($_POST['passworde']);

  if(isset($nom, $prenom,$pseudo, $email, $contact, $password) AND !empty($_POST['nom'])){

    // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $reqData = $bdd->prepare('SELECT count(*) as count FROM utilisateurs WHERE email = ?');
    $reqData->execute(array($email));
    $resultat = $reqData->fetch();

    if ($resultat['count'] > 0) {
        echo  'E-mail existe déjà !'; 
      }else{
        // SI l'EMAIL n'exite pas dans la base de données on fait un contrôle 
        // pour savoir si le mot de passe fait 8 caractères

        if (strlen($password) >= 8) {
                // si c'est bon, on insert les informations du formulaire dans la base de données
                $req = $bdd->prepare("INSERT INTO utilisateurs(nom, prenom,pseudo, email, contact, passworde) VALUES (?,?,?,?,?,?)");
                $req->execute(array($nom, $prenom,$pseudo, $email, $contact, $passwordHash));
                
                echo 'Bravo!!! Inscription validé';
          }else{
          echo 'Mot de passe au moins 8 caractères !';
        }
      }
    }else {
     echo 'Veillez remplir tous les champs !';
    }
}
?>

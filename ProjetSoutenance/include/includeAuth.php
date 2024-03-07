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


?>
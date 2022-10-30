<?php
session_start();

require_once("../db/connexionDB.php"); // Connexion à la BD

// Verification des données 

$login = isset($_POST['login']) ? $_POST['login'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
$pwd2 = isset($_POST['pwd1']) ? $_POST['pwd1'] : "";

if ($pwd != $pwd2) {
    header('location:../pages/inscription.php');
    $_SESSION['Erreurlogin'] = " <strong> Erreur !! </strong> Les deux mots de passe ne correspondent pas.";
} else {
    $requete = "insert into users(username, email, password) values(?,?,?)";
    $param = array($login, $email, $pwd);

    $resultat = $pdo->prepare($requete);
    $resultat->execute($param);

    header('location:../index.php');
}

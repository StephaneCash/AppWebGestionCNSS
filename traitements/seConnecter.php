
<?php
session_start();

require_once('../db/connexionDB.php');

$login = isset($_POST['login']) ? $_POST['login'] : "";
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";

$requeteU = "select * from users where username='$login' and password='$pwd' ";
$resultatU = $pdo->query($requeteU);

if ($user = $resultatU->fetch()) {
    if ($user) {
        $_SESSION['user'] = $user;
        header('location:../pages/accueilAdmin.php');
    }
} else {
    $_SESSION['Erreurlogin'] = " <strong> Erreur !! </strong> Nom d'utilisateur ou mot de passe incorrect.";
    header('location:../index.php');
}

?>
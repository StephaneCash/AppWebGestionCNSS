
<?php
session_start();
if (!isset($_SESSION['user']))
    header('location :../index.php');

require_once("../db/connexionDB.php"); // Connexion à la BD

// Verification des données et recupération des données des inputs

$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
$postnom = isset($_POST['postnom']) ? $_POST['postnom'] : "";
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
$desc = isset($_POST['desc']) ? $_POST['desc'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$profession = isset($_POST['profession']) ? $_POST['profession'] : "";
$grade = isset($_POST['grade']) ? $_POST['grade'] : "";
$dateRetraite = isset($_POST['dateRetraite']) ? $_POST['dateRetraite'] : "";
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : "";
$nbreAn = isset($_POST['nbreAn']) ? $_POST['nbreAn'] : "";
$solde = isset($_POST['solde']) ? $_POST['solde'] : "";

$photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
$imageTem = $_FILES['photo']['tmp_name'];
move_uploaded_file($imageTem, "../images/" . $photo);

$requete = "insert into retraites(nom, postnom,prenom,numeroPhone, photo, profession, grade, adresse, dateDeRetraites, 
solde, nbreAnnesServices, descrip) values(?,?,?,?,?,?,?,?,?,?,?,?)";

$param = array(
    $nom, $postnom, $prenom, $phone, $photo, $profession, $grade, $adresse, $dateRetraite, $solde, $nbreAn,
    $desc
);
$resultat = $pdo->prepare($requete);
$resultat->execute($param);

header('location:../pages/accueilAdmin.php');
?>
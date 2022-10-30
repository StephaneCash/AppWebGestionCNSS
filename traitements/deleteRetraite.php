<?php
session_start();
if (!isset($_SESSION['user']))
    header('location :../index.php');

require_once("../db/connexionDB.php"); // Connexion à la BD

// Verification des données 

$idR = isset($_GET['idR']) ? $_GET['idR'] : 0;

$requete = "DELETE from retraites WHERE idRetraite=?";
$param = array($idR);
$resultat = $pdo->prepare($requete);
$resultat->execute($param);

header('location:../pages/accueilAdmin.php');

<?php
require_once("../db/connexionDB.php"); // Connexion à la BD

$requete = "SELECT * FROM retraites";
$result = $pdo->query($requete);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <title>Form | Ajout retraité</title>
</head>

<body>
    <?php include('../includes/navBar.php') ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h5>Ajouter un nouveau retraité</h5>
                </div>
            </div>
            <div class="card-body">

                <form method="post" action="../traitements/InsertRetraite.php" class="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" placeholder="Nom du retraité" class="form-control" id="nom" required />
                            </div>
                            <div class="form-group">
                                <label for="postnom">Postnom</label>
                                <input type="text" name="postnom" placeholder="Postnom" class="form-control" id="postnom" required />
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" placeholder="Prénom" class="form-control" id="prenom" required />
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone</label>
                                <input type="text" name="phone" placeholder="Le numéro de téléphone" class="form-control" id="phone" required />
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="profession">Profession</label>
                                <input type="text" name="profession" placeholder="Profession" class="form-control" id="profession" required />
                            </div>
                            <div class="form-group">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" placeholder="Grade" class="form-control" id="grade" required />
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse </label>
                                <input type="text" name="adresse" placeholder="Adresse complète" class="form-control" id="adresse" required />
                            </div>
                            <div class="form-group">
                                <label for="adresse">Date de la retraite </label>
                                <input type="date" name="dateRetraite" placeholder="Prix" class="form-control" id="adresse" required />
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="photo">Photo </label>
                                <input type="file" name="photo" placeholder="Photo" class="form-control" id="photo" required />
                            </div>
                            <div class="form-group">
                                <label for="solde">Solde de la pension </label>
                                <input type="number" name="solde" placeholder="Solde" class="form-control" id="solde" required />
                            </div>
                            <div class="form-group">
                                <label for="nbreAn">Nombre d'années comme employé </label>
                                <input type="number" name="nbreAn" placeholder="Nombre ans" class="form-control" id="nbreAn" required />
                            </div>
                            <div class="form-group">
                                <label for="desc">Description </label>
                                <input type="text" name="desc" placeholder="Description" class="form-control" id="desc" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success">
                                <span class="fa fa-usser"> </span> Ajouter <i class="fa fa-save"></i>
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <a href="accueilAdmin.php"> <i class="fa fa-chevron-left"></i> Retour</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
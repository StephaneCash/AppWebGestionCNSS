<?php
require_once("../db/connexionDB.php"); // Connexion à la BD

$idR = isset($_GET['idR']) ? $_GET["idR"] : "";

$requete = "SELECT * FROM retraites WHERE idRetraite=$idR";
$result = $pdo->query($requete);
$retraite = $result->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <title>Form | Edit Retraité</title>
</head>

<body>
    <?php include('../includes/navBar.php') ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h5>Modifier le retraité</h5>
                </div>
            </div>
            <div class="card-body">


                <form method="post" action="../traitements/updateRetraite.php" class="form" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" value=<?php echo $retraite['nom'] ?> name="nom" placeholder="Nom du retraité" class="form-control" id="nom" required />
                            </div>
                            <div class="form-group">
                                <label for="postnom">Postnom</label>
                                <input type="text" value=<?php echo $retraite['postnom'] ?> name="postnom" placeholder="Postnom" class="form-control" id="postnom" required />
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" value=<?php echo $retraite['prenom'] ?> name="prenom" placeholder="Prénom" class="form-control" id="prenom" required />
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone</label>
                                <input type="text" value=<?php echo $retraite['numeroPhone'] ?> name="phone" placeholder="Le numéro de téléphone" class="form-control" id="phone" required />
                            </div>
                            <div class="form-group">
                                <label for="profession">Profession</label>
                                <input type="text" name="profession" value=<?php echo $retraite['profession'] ?> placeholder="Profession" class="form-control" id="profession" required />
                            </div>
                            <div class="form-group">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" value=<?php echo $retraite['grade'] ?> placeholder="Grade" class="form-control" id="grade" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="adresse">Date de la retraite </label>
                                <input type="date" name="dateRetraite" placeholder="Prix" value=<?php echo $retraite['dateDeRetraites'] ?> class="form-control" id="adresse" required />
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo </label>
                                <input type="file" name="photo" placeholder="Photo" class="form-control" id="photo" />
                            </div>
                            <div class="form-group">
                                <label for="solde">Solde de la pension </label>
                                <input type="number" name="solde" placeholder="Solde" value=<?php echo $retraite['solde'] ?> class="form-control" id="solde" required />
                            </div>
                            <div class="form-group">
                                <label for="nbreAn">Nombre d'années comme employé </label>
                                <input type="number" name="nbreAn" value=<?php echo $retraite['nbreAnnesServices'] ?> placeholder="Nombre ans" class="form-control" id="nbreAn" required />
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse </label><?php echo $retraite['adresse'] ?>
                                <textarea name="adresse" style="height: 120px" placeholder="Adresse complète" class="form-control" id="adresse"><?php echo $retraite['adresse'] ?></textarea>
                            </div>


                        </div>
                        <div class="col-sm-4">
                            <div class="form-group text-center">
                                <span>Photo existante</span> <br /><br />
                                <img class="text-center" style="border-radius:100%; border:1px solid #333; width:200px; height:200px" src="../images/<?php echo $retraite['photo'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="desc">Description </label>
                                <textarea name="desc" placeholder="Adresse complète" class="form-control" id="adresse"><?php echo $retraite['descrip'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="idR" value=<?php echo $retraite['idRetraite'] ?> class="form-control" id="nbreAn" required />
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        Editer <span class="fa fa-edit"> </span>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <a href="accueilAdmin.php"> <i class="fa fa-chevron-left"></i> Retour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require_once("../db/connexionDB.php"); // Connexion à la BD

if (isset($_GET['idR'])) {
    $idR = $_GET['idR'];

    $requete = "SELECT * FROM retraites WHERE idRetraite=$idR";
    $result = $pdo->query($requete);
    $retraite = $result->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <title>Détail | Product</title>
</head>

<body>
    <?php include('../includes/navBar.php') ?>
    <div class="container mt-3 ">
        <div class="card">
            <div class="card-body">
                <br />
                <h5 style="text-align: center;">Détail sur le retraité <?php echo $retraite['nom'] . " " . $retraite['postnom'] ?></h5>
                <br />
                <div class="row">
                    <div class="col-sm-4">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td>Nom : </td>
                                    <td><?php echo $retraite['nom'] ?></td>
                                </tr>
                                <tr>
                                    <td>Postnom: </td>
                                    <td><?php echo $retraite['postnom'] ?></td>
                                </tr>
                                <tr>
                                    <td>Postnom: </td>
                                    <td><?php echo $retraite['prenom'] ?></td>
                                </tr>

                                <tr>
                                    <td>Numéro de téléphone: </td>
                                    <td><?php echo $retraite['numeroPhone'] ?></td>
                                </tr>

                                <tr>
                                    <td>Adresse : </td>
                                    <td><?php echo $retraite['adresse'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td>Profession: </td>
                                    <td><?php echo $retraite['profession'] ?></td>
                                </tr>
                                <tr>
                                    <td>Grade: </td>
                                    <td><?php echo $retraite['grade'] ?></td>
                                </tr>
                                <tr>
                                    <td>Date de retraite: </td>
                                    <td><?php echo $retraite['dateDeRetraites'] ?></td>
                                </tr>
                                <tr>
                                    <td>Solde (Argent de pension): </td>
                                    <td><?php echo $retraite['solde'] ?> USD ($)</td>
                                </tr>
                                <tr>
                                    <td>Nombre d'années de <br />service : </td>
                                    <td><?php echo $retraite['nbreAnnesServices'] ?> ans</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr class="text-center">
                                    <td>Photo : </td>
                                    <td>
                                        <img style="border-radius:50%; width:200px; height:200px" src="../images/<?php echo $retraite['photo'] ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description </td>
                                    <td><?php echo $retraite['descrip'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row" style="text-align: center;">
                    <div class="col-sm-12">
                        <a href="updateRetraite.php?idR=<?php echo $retraite['idRetraite'] ?>">
                            <span class="fa fa-edit " title="Editer" style='font-size:20px; color:#333'> </span>
                        </a> &nbsp;
                        <a onclick="return confirm('Etes-vous sûr de vouloir supprimer ce retraité ?')" href="../traitements/deleteRetraite.php?idR=<?php echo $retraite['idRetraite'] ?>" title="Suppression du retraité">
                            <span class="fa fa-trash" style='font-size:20px; color:#333'> </span>
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <br />
                        <a href="accueilAdmin.php"> <i class="fa fa-chevron-left"></i> Retour à la page d'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="../js/app.js"></script>

</body>

</html>
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
    <title>Accueil | Admin</title>
</head>

<body>
    <?php
    include('../includes/navBar.php');
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h6>Liste de Retraités <i class="fa fa-users"></i> </h6>
                    <a href="addRetraite.php" style="flex:1; text-align:right">Ajouter un nouveau retraité </a>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-striped table-bordered">
                    <!-- Partie entête du tableau -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>Prénom</th>
                            <th>Profession</th>
                            <th>Grade</th>
                            <th>Date de retraite</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Instruction pour afficher le résultat ds le tableau (Partie body) -->
                        <?php while ($retraite = $result->fetch()) { ?>
                            <div class="tableau">
                                <tr>
                                    <td><?php echo $retraite['idRetraite'] ?></td>
                                    <td><?php echo $retraite['nom'] ?></td>
                                    <td><?php echo $retraite['postnom'] ?></td>
                                    <td><?php echo $retraite['prenom'] ?></td>
                                    <td><?php echo $retraite['profession'] ?></td>
                                    <td><?php echo $retraite['grade'] ?></td>
                                    <td><?php echo $retraite['dateDeRetraites'] ?></td>
                                    <td style='width:10%'>
                                        <img style="border-radius:100%; border:1px solid #333; width:70px; height:70px" src="../images/<?php echo $retraite['photo'] ?>">
                                    </td>

                                    <!-- Affichges des glyphicons de rubrique 'Actions' -->
                                    <td style='width:12%'>
                                        <a href="updateRetraite.php?idR=<?php echo $retraite['idRetraite'] ?>">
                                            <span class="fa fa-edit " title="Editer" style='font-size:20px; color:#333'> </span>
                                        </a> &nbsp;
                                        <a href="detailRetraite.php?idR=<?php echo $retraite['idRetraite'] ?>">
                                            <span class="fa fa-info " title="Détail" style='font-size:20px; color:#333'> </span>
                                        </a> &nbsp;
                                        <a onclick="return confirm('Etes-vous sûr de vouloir supprimer ce retraité ?')" href="../traitements/deleteRetraite.php?idR=<?php echo $retraite['idRetraite'] ?>" title="Suppression du retraité">
                                            <span class="fa fa-trash" style='font-size:20px; color:#333'> </span>
                                        </a>
                                    </td>

                                </tr>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
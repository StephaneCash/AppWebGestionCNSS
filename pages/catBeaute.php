<?php
require_once("../db/connexionDB.php"); // Connexion à la BD

$requete = "SELECT * FROM articles as a, categories c where c.id_categorie = a.id_categorie";
$res = $pdo->query($requete);

$data = array();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <title>Site ecommerce | DEZIRE</title>
</head>

<body>


    <div class="col-12 mt-5">
        <h2 class="text-center">Produits de beauté</h2>
        <div class="grille">
            <?php while ($produit = $res->fetch()) { ?>
                <?php while ($produit = $res->fetch()) {
                    if ($produit['nomCategorie'] == "Produits de beauté") {
                        echo '<div class="card" style="margin-bottom:10px">' .
                            '<div class="card-body">' .
                            '<a href="detailProduct.php?idArt=' . $produit['id_article'] . '">'
                            . '<img class="img" src="../images/' . $produit['photo'] . '" style="width:100%">' .
                            '</a>' . '</div>' .
                            '<div class="card-footer">' .
                            '<h6>' . $produit['nom'] . '</h6>' .
                            '<h6>' . $produit['prix'] . ' CDF' . '</h6>' .
                            '<h6>' . '<i class="fa fa-star">' . '</i>' . '<i class="fa fa-star">' . '</i>' . '<i class="fa fa-star-o">' . '<i class="fa fa-star-half-o">' . '</i>' . '</i>' . '</h6>' .

                            '</div>' .
                            '</div>';
                    }
                } ?>
            <?php } ?>
        </div>
    </div>

</body>

</body>

</html>
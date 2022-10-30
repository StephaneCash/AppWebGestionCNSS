<?php
session_start();
if (isset($_SESSION['Erreurlogin']))
    $erreurLogin = $_SESSION['Erreurlogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <title>Inscription</title>
</head>

<body>
    <!-- Centrer le contenu de la page -->
    <div class="container col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 inscription">

        <div class="card" style="margin-top: 80px;">
            <div class="card-header">
                <h6>Inscription, <br /> Créer votre compte </h6>
                <span class="fa fa-user" style="font-size: 50px;"> </span>
            </div>
            <div class="card-body">

                <form method="post" action="../traitements/inscription.php" class="form">
                    <?php if (!empty($erreurLogin)) { ?>
                        <div class="alert alert-danger">
                            <?php echo $erreurLogin; ?>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="login">Nom d'utilisateur </label>
                        <input type="text" name="login" placeholder="Nom d'utilisateur" class="form-control" id="login" required />
                    </div>

                    <div class="form-group">
                        <label for="login">Email </label>
                        <input type="text" name="email" placeholder="Nom d'utilisateur" class="form-control" id="login" required />
                    </div>

                    <div class="form-group">
                        <label for="pwd">Créer un mot de passe </label>
                        <input type="password" name="pwd" placeholder="Mot de passe" class="form-control" id="pwd" required />
                    </div>

                    <div class="form-group">
                        <label for="pwd">Répéter le mot de passe </label>
                        <input type="password" name="pwd1" placeholder="Répéter le mot de passe" class="form-control" id="pwd" required />
                    </div>

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="col-6" style='margin-left:-30px'>
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-sign-in"> </span> S'inscrire
                                </button>
                            </div>
                            <div class="col-8" style='margin-left:-30px; '>
                                <a href="../index.php">Avez-vous déjà un compte, connectez ici</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
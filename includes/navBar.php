<?php
session_start();
if (!isset($_SESSION['user']))
    header('location :../index.php');
?>

<nav class="navbar navbar-expand-lg" style="background-color:#0c50a2">
    <a class="navbar-brand" href="../pages/accueilAdmin.php" style="color:white">
        <img src="../images/logo.jpg" alt="Logo" style="width: 50px;" />
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" style="color:white" href="#"> <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="form-inline my-2 my-lg-0 navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color:white">
                    <span class="fa fa-user-circle"></span><?php echo " " . $_SESSION['user']['username']; ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a href="../traitements/seDeconnecter.php" style="color:white" title="Déconnexion"><i class='fa fa-sign-out '></i>
                    Se déconnecter</a>
            </li>
        </ul>
    </div>
</nav>
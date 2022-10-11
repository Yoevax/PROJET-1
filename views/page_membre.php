<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page membre</title>

    <link rel="stylesheet" href="http://localhost/PROJET%201/assets/css/style.css">

    <link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<?php

// On récupère nos variables de session -->
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $usernameSess = $_SESSION['username'];
?>

    <body>
        <div id="header_accueil">
            <!-- LOGO -->
            <div class="logo">
                <a href="index.php">
                    <img src="http://localhost/PROJET%201/assets/img/logonew.png" width="100px" alt="">
                </a>

            </div>


            <!-- NAV -->
            <div class="menu">
                <i class="fas fa-bars togle-menu"></i>
                <nav>
                    <ul>
                        <li><a href="http://localhost/PROJET%201/index.php">Find
                                me a movie</a></li>
                        <li><a href="http://localhost/PROJET%201/views/allMovies.php">All movies</a></li>
                        <li><a href="http://localhost/PROJET%201/views/contact.php">Contact</a></li>
                        <li> <a href="../logout.php">Log out</a> </li>
                    </ul>
                </nav>
            </div>
        </div>


        <div id="form-connexion">
        <br><br><br><br><br><br>
            <h2> Hello <?= $usernameSess ?> </h2>


        </div>
    <?php
}
    ?>

    </body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find me. - Page membre</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
    
    <link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
</head>



<body>
    <div id="header_accueil">
        <!-- LOGO -->
        <div class="logo">
            <a href="../index.php">
                <img src="../assets/img/logonew.png" width="100px" alt="">
            </a>
        </div>
        <!-- NAV -->
        <div class="menu">
            <nav>
                <ul id="menuListe">
                    <li class="li"><a href="../index.php">Find
                            me a movie</a></li>
                    <li class="li"><a href="allMovies.php">All movies</a></li>
                    <li class="li"><a href="contact.php">Contact</a></li>
                    <?php
                    if (!empty($_SESSION['isLogged']) && $_SESSION['isLogged']) {
                        echo "<li class='li'><a href='#'>Profil</a></li>";
                        echo "<li class='li'><a href='logout.php'>Log out</a></li>";
                    } else {
                        echo "<li class='li'><a href='connexion.php'>Sign in/up</a></li>";
                    } ?></a></li>
                </ul>
            </nav>
        </div>

    </div>
    <?php

        // On récupère nos variables de session -->
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            include("../SRC/database.php");
            $usernameSess = $_SESSION['username'];

            $sqlQuery = " 
            SELECT `favoriteMovie`, `email`
            FROM `users`
            WHERE `username` LIKE '$usernameSess'";

            $statement = $mysqldb->prepare($sqlQuery);
            $statement->execute();
            $result = $statement->fetchAll();
    ?>
        <div class="infos">
            <br><br><br><br><br><br>
            <h2 style='font-size:2.5rem; margin-bottom:5px;'> Hello <?= $usernameSess . " :)" ?> </h2>
            <h3 style='font-size:1.5rem; font-weight:300;'>Here what we know about you</h3>
            <div class="encadre">
                <h3> Username </h3>
                <p><?= $usernameSess ?></p>

                <h3> Email </h3>
                <p>
                    <?php
                    foreach ($result as $row) {
                        echo $row["email"];
                    }
                    ?>
                </p>

                <h3> Favorite movie </h3>
                <p>
                    <?php
                    foreach ($result as $row) {
                        echo $row["favoriteMovie"];
                    }
                    ?>
                </p>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script type="text/javascript" src="../assets/scripts/script.js"></script>

</body>

</html>
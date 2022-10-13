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
    include("../SRC/database.php");
    $usernameSess = $_SESSION['username'];
    //essayer de faire afficher le film preferé de l'utilisateur

    $sqlQuery = " 
                    SELECT favoriteMovie
                    FROM users
                    ";
    $statement = $mysqldb->prepare($sqlQuery);
    $statement->execute();
    $result = $statement->fetchAll();
?>

    <body>
        <div id="header_accueil">
            <!-- LOGO -->
            <div class="logo">
                <a href="http://localhost/PROJET%201/">
                    <img src="http://localhost/PROJET%201/assets/img/logonew.png" width="100px" alt="">
                </a>

            </div>


            <!-- NAV -->
            <div>
                <nav>
                    <ul>
                        <li><a href="../index.php">Find
                                me a movie</a></li>
                        <li><a href="../views/allMovies.php">All movies</a></li>
                        <li><a href="../views/contact.php">Contact</a></li>
                        <?php
                        if ($_SESSION['isLogged'] == true) {
                            echo "<li><a href='../views/logout.php'>Log out</a></li>";
                        } else {
                            echo "<li><a href='../views/connexion.php'>Sign in/up</a></li>";
                        } ?></a></li>

                    </ul>
                </nav>
            </div>

        </div>
        <div>
            <br><br><br><br><br>
            <h2> Hello <?= $usernameSess . " "; ?> </h2>
            <p>Your informations : mettre ici le username, mail, favorite movie </p>

        </div>
    <?php
}
    ?>

    </body>

</html>
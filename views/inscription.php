<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Find me.</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/connexion.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>

    <!-- MENU NAV BAR -->
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
                    <li class="li"><a href="../views/allMovies.php">All movies</a></li>
                    <li class="li"><a href="../views/contact.php">Contact</a></li>
                    <?php
                    if (!empty($_SESSION['isLogged']) && $_SESSION['isLogged']) {
                        echo "<li class='li'><a href='../views/page_membre.php'>Profil</a></li>";
                        echo "<li class='li'><a href='../views/logout.php'>Log out</a></li>";
                    } else {
                        echo "<li class='li'><a href='../views/connexion.php'>Sign in/up</a></li>";
                    } ?></a></li>

                </ul>
            </nav>
        </div>


    </div>
    <!-- formulaire d'inscription -->
    <div id="form-connexion" class="inscription">
        <form action="./inscription.php" method="post">
            <h2>Sign up</h2>
            <div>
                <label for="username">Username</label>
                <input id="username" name="username" size="30px" type="text">
            </div>
            <div>
                <label for="email">email</label>
                <input id="email" name="email" size="30px" type="text">
            </div>

            <div>
                <label for="password">password</label>
                <input id="password" size="30px" name="password" type="password">
            </div>

            <div class="icon-see">
              
                <span id="see" title="Voir/cacher le mot de passe" onclick="seePassword()" class="material-symbols-outlined">
                    visibility
                </span>

            </div>
            
            <div>
                <label for="favoriteMovie">Your favorite movie</label>
                <input id="favoriteMovie" size="30px" name="favoriteMovie" type="text">
            </div>

            <button id="btn">Sign up</button>
            <br>
            <div><a href="./connexion.php"> Registred? Sign in here</a> </div>
            <p id="messageErreur"></p>


        </form>
    </div>

    <?php

    include("../SRC/database.php");



    if (($_SERVER["REQUEST_METHOD"] == ("POST"))) {
        unset($_SESSION["statutInscription"]);
        global $mysqldb;

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $favoriteMovie = $_POST['favoriteMovie'];

        $query = $mysqldb->prepare(
            "INSERT INTO users(email, password, username, favoriteMovie)
                VALUES(:email, :password, :username, :favoriteMovie)"
        );

        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':username', $username);
        $query->bindParam(':favoriteMovie', $favoriteMovie);

        $query->execute();



        // redirection
        header('location: connexion.php');
        exit;
    }

    ?>

    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>
    <script src="../assets/scripts/script.js"></script>

    <!-- <script src="../assets/scripts/inscription.js"></script> -->
</body>

</html>
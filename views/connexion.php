<?php
session_start();
include("../SRC/database.php");

if(!empty($_SESSION["isLogged"]) && $_SESSION["isLogged"]){
    $_SESSION["isLogged"] = false;
}

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
        <div>
            <nav>
                <ul>
                    <li><a href="../index.php">Find
                            me a movie</a></li>
                    <li><a href="../views/allMovies.php">All movies</a></li>
                    <?php
                    if (!empty($_SESSION['isLogged']) && $_SESSION['isLogged']) {
                        echo "<li><a href='../views/logout.php'>Page membre</a></li>";
                        echo "<li><a href='../views/logout.php'>Log out</a></li>";
                    } else {
                        echo "<li><a href='../views/connexion.php'>Sign in/up</a></li>";
                    } ?></a></li>
                    <li><a href="../views/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>


    </div>
    <!-- formulaire de connexion -->
    <?php
    include("../SRC/database.php");

    $isFound = false;
    $loginAttempt = 0; //tentative pr msg derreur
    $msgErreur = "";

    if ((isset($_POST["username"], $_POST["password"]))) {
        $loginAttempt++; //faut qu'il renttre au moins une fois des données pour savoir si c juste ou pas

        $username = $_POST["username"];
        $pass_word = $_POST["password"];
        // $favoriteMovie = $_POST['favoriteMovie'];

        $sqlQuery = " 
                    SELECT *
                    FROM users
                    WHERE username=:param_username AND password =:param_password";
        $statement = $mysqldb->prepare($sqlQuery);
        $statement->execute(array('param_username' => $username, 'param_password' => $pass_word));
        $result = $statement->fetchAll();

        if ($result) {
            $isFound = true;
            $loginFail = false;
            $connectedUser = $result[0]['username'];
        }
    }


    ?>

    <div id="form-connexion">
        <form action="./connexion.php" method="post">
            <h2>Connexion</h2>        
            <?php
            if ($isFound) {
                //si les infos de connexion sont justes, on lance la session
                session_start(); //lancement de la sesstion
                // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)

                $username = $_POST['username'];

                //$query = "SELECT * FROM `users` WHERE `username` = " . $username;

                
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $_POST['password'];

                
              var_dump($_SESSION);
                $_SESSION['isLogged'] = true; //je mets une session que je vais verifier par la suite;

                // on redirige notre visiteur vers une page de notre section membre
                header('location: page_membre.php');
            } else {

                if (!$isFound && $loginAttempt >= 1) { //si isFound est false ( c a dire pas les memes info que dans la DB) et tentative a au moins 1 => msg erreur
                    echo "<div id='msgErreur'>Username and/or password incorrect!</div>";
                    $loginAttempt = 0;
                }
            }
            ?>
            <div>
                <label for="username">Username</label>
                <input id="username" name="username" size="30px" type="text">
            </div>

            <div>
                <label id="password" for="password">password</label>
                <input name="password" size="30px" type="password">
            </div>

            <button>Sign in</button>
            <br>
            <div><a href="./inscription.php">No registred? Sign up here</a> </div>
    

        </form>

    </div>



    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script src="../assets/scripts/script.js"></script>
</body>

</html>
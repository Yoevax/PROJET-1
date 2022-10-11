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
                    <li><a href="../views/connexion.php">Sign in/up</a></li>
                    <li><a href="../views/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>


    </div>
    <!-- formulaire d'inscription -->
    <div id="form-connexion">
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
                <input id="password" size="30px" name="password" type="text">
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
        if (isValid()) {
          
            global $mysqldb;

            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $query = $mysqldb->prepare(
                "INSERT INTO users(email, password, username)
                VALUES(:email, :password, :username)"
            );

            $query->bindParam(':email', $email);
            $query->bindParam(':password', $password);
            $query->bindParam(':username', $username);

            $query->execute();



            // redirection
            
            header('location: http://localhost/PROJET%201/views/allMovies.php/');
            exit();
        } else {

            // affiche un message
        }
    }


    //fonction qui verifie si le username, l'email et le mot de passe en meme temps

    function isValid()
    {
        if (!validUsername()) {
           
            return false;
        }

        if (!validEmail()) {
            
            return false;
        }

        if (!validPassword()) {
           
            return false;
        }
        return true;
    }

    //verification du username

    function validUsername()
    {
        global $mysqldb;


        if (empty($_POST['username']) || !isset($_POST['username']) || strlen($_POST['username']) > 50 || strlen($_POST['username']) < 3) {

            return false;
        }

        $queryUsername = $mysqldb->prepare(
            "SELECT *  
                   FROM users
                   WHERE username = :username"
        );

        $queryUsername->bindParam(':username', $_POST['username']);
        $queryUsername->execute();

        return !$queryUsername->fetch();
    }

    //verification de l'email
    function validEmail()
    {
        global $mysqldb;

        if (empty($_POST["email"]) || !isset($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || strlen($_POST["email"]) > 50 || strlen($_POST["email"]) < 5) {
            return false;
        }

        $queryEmail = $mysqldb->prepare(
            "SELECT *  
            FROM users
            WHERE email = :email"
        );
        $queryEmail->bindParam(':email', $_POST['email']);
        $queryEmail->execute();

        return !$queryEmail->fetch();
    }

    //verification du mot de passe
    function validPassword()
    {

        if (empty($_POST["password"]) || !isset($_POST["password"]) || strlen($_POST["password"]) > 50 || strlen($_POST["password"]) < 8) {

            return false;
        }
        return true;
    }
    ?>





    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>
    <script src="../assets/scripts/script.js"></script>

    <!-- <script src="../assets/scripts/inscription.js"></script> -->
</body>

</html>
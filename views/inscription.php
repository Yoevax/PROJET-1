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
    <!-- formulaire de connexion -->
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
                <input id="password" size="30px" name="pass" type="text">
            </div>

            <button>Sign up</button>
            <br>
            <div><a href="./inscription.php"> Registred? Sign in here</a> </div>


        </form>
    </div>

    <?php
        include("../SRC/database.php");

        if (isValid()){

            global $mysqldb;

            $query = $mysqldb->prepare(
                "INSERT INTO users(email, pass, username)
                VALUES(:email, :pass, :username)"
            );

            $query->bindParam(':email', $email);
            $query->bindParam(':pass', $pass);
            $query->bindParam(':username', $username);

            $username = trim($_POST[$username]);
            $email = trim($_POST[$email]);
            $pass = trim($_POST[$pass]);

            $query->execute();

            // redirection
            // header('location:/PROJET%201/views/connection.php')
        }
    else {
        // affiche un message
    }

        function isValid() {
        //taille des champs, si  le mail ou le username existe deja, mdp fasse minimum 8 caracteres, si il existe, sil est pas vide,  
        if(!validUsername()) {
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

    function validUsername() {
            if (empty($_POST["username"]) && !isset($_POST["username"]) && count($_POST["username"]) > 50 && count($_POST["username"]) < 4) {
                return false;
            }
        }

    function validEmail () 
    {

        global $mysqldb;
        if (empty($_POST["email"]) && !isset($_POST["email"])&& !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && count($_POST["email"]) > 50 && count($_POST["email"]) < 10) {
            return false;
        }
        $queryEmail = $mysqldb->prepare("SELECT *
                   email 
                   FROM users
                   WHERE email = :email AND username = :username"
                   );
    $queryEmail -> execute();

    return !$queryEmail->fetch();
                }

    function validPassword()
    {
        if
        (empty($_POST["pass"]) && !isset($_POST["pass"]) && count($_POST["pass"]) > 50 && count($_POST["pass"]) < 8) {
            return false;
        }
    }
    ?>

   

    

    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script src="../assets/scripts/script.js"></script>
</body>

</html>
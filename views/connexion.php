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
                    <li><a href="../views/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>


    </div>
    <!-- formulaire de connexion -->
    <div id="form-connexion">
        <form action="./connexion.php" method="post">
            <h2>Connexion</h2>
            <div>
                <label for="user_name">Username</label>
                <input id="user_name" name="user_name" size="30px" type="text">
            </div>

            <div>
                <label id="password" for="password">password</label>
                <input name="password" size="30px" type="text">
            </div>

            <button>Sign in</button>
            <br>
            <div><a href="./inscription.php">No registred? Sign up here</a> </div>


        </form>
    </div>

    <?php
    include("../SRC/database.php");

    $isFound = false;
    $loginAttempt = 0; //tentative pr msg derreur

    if ((isset($_POST["user_name"], $_POST["password"]))) {
        $loginAttempt++; //faut qu'il renttre au moins une fois des données pour savoir si c juste ou pas

        $user_name = $_POST["user_name"];
        $pass_word = $_POST["password"];

        $sqlQuery = " 
                    SELECT *
                    FROM users
                    WHERE user_name=:param_user_name AND password =:param_password";
        $statement = $mysqldb->prepare($sqlQuery);
        $statement->execute(array('param_user_name' => $user_name, 'param_password' => $pass_word));
        $result = $statement->fetchAll();

        if ($result) {
            $isFound = true;
            $loginFail = false;
            $connectedUser = $result[0]['user_name'];
        }
    }

    if ($isFound) {
        echo "Bienvenue sur page d'accueil $user_name";
    } else {



        if (!$isFound && $loginAttempt >= 1) { //si isFound est false ( c a dire pas les memes info que dans la DB) et tentative a au moins 1 => msg erreur
            echo "Username and password incorrect! ";
            $loginAttempt = 0;
        }
    }
    ?>

    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script src="../assets/scripts/script.js"></script>
</body>

</html>
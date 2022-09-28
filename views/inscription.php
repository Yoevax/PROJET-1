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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- MENU NAV BAR -->
    <div id="header_accueil">
        <!-- LOGO -->
        <div class="logo">
            <a href="../index.html">
                <img src="../assets/img/logonew.png" width="100px" alt="">
            </a>

        </div>


        <!-- NAV -->
        <div>
            <nav>
                <ul>
                    <li><a href="../index.html">Find
                            me a movie</a></li>
                    <li><a href="../views/allMovies.php">All movies</a></li>
                    <li><a href="../views/connexion.html">Sign in/up</a></li>
                    <li><a href="../views/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>


    </div>
    <!-- formulaire de connexion -->
    <div id="form-connexion">
        <form action="./connexion.html" method="post">
            <h2>Sign up</h2>
            <div>
                <label for="">email</label>
                <input size="30px" type="text">
            </div>

            <div>
                <label for="">password</label>
                <input size="30px" type="text">
            </div>

            <button>Sign up</button>
            <br>
            <div><a href="./inscription.html"> Registred? Sign in here</a> </div>


        </form>
    </div>



    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script src="../assets/scripts/script.js"></script>
</body>

</html>
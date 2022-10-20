<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page membre</title>

        <link rel="stylesheet" href="../assets/css/style_detail_film.css">

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

            <div class="infos">
                <br><br><br><br><br><br>
                <h2> <?= $_GET['name']; ?> </h2>
                <div class="encadre">
                    <div id="bckground-film">
                        <img width="400px" height="auto" src="<?= "../".$_GET['img']; ?>">
                    </div>
                    
                    <div>
                        <h4>Plot</h4>
                        <p> <?= $_GET['description']; ?> </p>
                    </div>
                  
                </div>
            </div>

        <!-- CURSEUR SOURIS PERSONNALISEE    -->
        <div id="curseur"><span id="rec">REC</span></div>

        <script type="text/javascript" src="../assets/scripts/script.js"></script>

    </body>
</html>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find me. - Contact</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    
     <!-- Favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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

    <!-- CONTACT PAGE -->
    <div id="contact">
        <div id="content-contact">
            <div id="who">
                <h3>Who we are</h3>
                <a href="#about-findme">About Find me.</a> <br>
                <a href="#about-us">About us</a>
            </div>

            <div id="reach">
                <h3>Want to reach us?</h3>
                <a href="mailto:findme@gmail.com">findme@gmail.com</a>
            </div>

            <div id="follow">
                <h3>Follow us</h3>
                <div>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-github"></i>
                </div>
            </div>

            <div id="copyright">
                <!-- <a href="#container"><img src="../assets/img/logonew.png" width="100px" alt=""></a> <br> -->
                <p>All reserved Find me. Legal mentions</p>
            </div>
        </div>

    </div>

    <!-- PAGE ABOUT FIND ME -->
    <br>
    <div id="about-findme">
        <br><br><br>
        <h3>About Find me. </h3>
        <p class="aboutTxt">Nowadays, we have to make tonnes of choices. So many choices that we don't know what to choose.
            Choosing a
            film to watch alone, with a friend or with your family can be overwhelming.</p>

        <p class="aboutTxt"> Our website offers a solution by offering a curated selection of films based on the user's
            taste, mood, and
            the time they have available.</p>

        <span class="flecheHaut">
            <a href="#">
                <svg viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7c0-.206.075-.404.208-.55a.68.68 0 0 1 .502-.228h16.736L12.98 1.33a.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.55A.68.68 0 0 1 13.482 0a.68.68 0 0 1 .503.228l5.677 6.221a.787.787 0 0 1 .154.253.844.844 0 0 1 0 .596.787.787 0 0 1-.154.253l-5.677 6.22a.68.68 0 0 1-.503.229.68.68 0 0 1-.502-.228.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.551l4.466-4.893H.71a.68.68 0 0 1-.502-.228A.817.817 0 0 1 0 7Z">
                    </path>
                </svg>
            </a>
        </span>
    </div>

    <!-- PAGE ABOUT US -->

    <div id="about-us">
        <br><br><br>
        <h3 class="titre">About us </h3>
        <p class="about-us-txt">We are Ikram and Yousra, interns in front
            end web developer at Interface3.
            This website is our first project built with
            PHP/MySQL and JavaScript.
        </p>
        <span class="flecheHaut">
            <a href="#">
                <svg viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7c0-.206.075-.404.208-.55a.68.68 0 0 1 .502-.228h16.736L12.98 1.33a.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.55A.68.68 0 0 1 13.482 0a.68.68 0 0 1 .503.228l5.677 6.221a.787.787 0 0 1 .154.253.844.844 0 0 1 0 .596.787.787 0 0 1-.154.253l-5.677 6.22a.68.68 0 0 1-.503.229.68.68 0 0 1-.502-.228.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.551l4.466-4.893H.71a.68.68 0 0 1-.502-.228A.817.817 0 0 1 0 7Z">
                    </path>
                </svg>
            </a>
        </span>
    </div>

    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div> 
    <script src="../assets/scripts/script.js"></script>
    <script src="../assets/scripts/scrollNav.js"></script>
   
</body>

</html>
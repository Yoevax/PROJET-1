 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Find me.</title>
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/questions.css">

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
 </head>

 <body>
     <div id="header_accueil">
         <!-- LOGO -->
         <div class="logo">
             <a href="index.html">
                 <img src="../assets/img/logonew.png" width="100px" alt="">
             </a>

         </div>


         <!-- NAV -->
         <div>
             <nav>
                 <ul>
                     <li><a href="#contentPage2">Find
                             me a movie</a></li>
                     <li><a href="../views/allMovies.php">All movies</a></li>
                     <li><a href="../views/connexion.html">Sign in/up</a></li>
                     <li><a href="../views/contact.html">Contact</a></li>
                 </ul>
             </nav>
         </div>
     </div>
     <?php

        //recuperation des reponses aux questions (avec isset et empty)
        if ((isset($_POST["q1"], $_POST["q2"], $_POST["q4"])) && !empty($_POST["q1"]) && !empty($_POST["q2"]) && !empty($_POST["q4"]) && empty($_POST["q3"])) {

            $answerQ1 = $_POST["q1"];
            $answerQ2 = $_POST["q2"];
            $answerQ4 = $_POST["q4"];

            echo "Votre boooooo  <b> Q1" . $_POST["q1"] . "</b>Q2 " . $_POST["q2"] . "Q4" . $_POST["q4"] . "<br>";
        } else if (isset($_POST["q3"]) && !empty($_POST["q3"])) {

            $answerQ1 = $_POST["q1"];
            $answerQ2 = $_POST["q2"];
            $answerQ3 = $_POST["q3"];
            $answerQ4 = $_POST["q4"];

            echo "Votre iiiii <b> Q1 : " . $_POST["q1"] . "</b> Q2 " . $_POST["q2"] . "Q3 " . $_POST["q3"] . "Q4 " . $_POST["q4"] .  "<br>";
        }

        ?>
     <?php
        // ALGO POUR AFFICHER LA SELECTION SELON LES REPONSES
        //
        //     include("../SRC/database.php");

        //     $sql = "SELECT films.name, films.id
        //     FROM films
        //     join mtm_films_reponses as mtm
        //     on mtm.id_films = films.id
        //     join reponses as r
        //     on r.id = mtm.id_reponses
        //     where mtm.id_reponses in (1,3)";
        //     //GROUP by films.name"; //attention ca fait un msg d'erreur qd on veut le group (là il affiche 2x le meme film)


        //     $stmt = $mysqldb->query($sql);
        //     $data = $stmt->fetchAll();

        //     foreach ($data as $row) {
        //     
        ?>
     // <div>
         // <h1><?php echo $row["name"]; ?></h1>
         // </div>
     // <?php
        //     }

        //     
        ?>

     <!-- CURSEUR SOURIS PERSONNALISEE    -->
     <div id="curseur"><span id="rec">REC</span></div>

     <script type="text/javascript" src="../assets/scripts/script.js"></script>
     <script type="text/javascript" src="../assets/scripts/questions.js"></script>
 </body>

 </html>
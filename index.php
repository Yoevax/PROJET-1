<?php

session_start();

$_SESSION['isLogged'] = false;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find me.</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/questions.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div id="container" class="container">

            <!-- VIDEO ACCUEIL -->
            <div id="videoAccueil">
                <video preload="auto" loop playsinline autoplay muted width="100%">
                    <source src="./assets/video/her.mp4" type="video/mp4">
                </video>
            </div>

            <div id="header_accueil">
                <!-- LOGO -->
                <div class="logo">
                    <a href="index.php">
                        <img src="./assets/img/logonew.png" width="100px" alt="">
                    </a>
                    <div class="links">

                        <span class="icon">

                            <span></span>

                            <span></span>

                            <span></span>

                        </span>

                    </div>
                </div>


                <!-- NAV -->
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="#contentPage2">Find
                                    me a movie</a></li>
                            <li><a href="./views/allMovies.php">All movies</a></li>
                            <li><a href="./views/contact.php">Contact</a></li>
                            <?php
                            if ($_SESSION['isLogged'] == true) {
                                echo "<li><a href='./views/logout.php'>Log out</a></li>";
                            } else {
                                echo "<li><a href='./views/connexion.php'>Sign in/up</a></li>";
                            } ?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>


            <!-- SLOGAN DE LA HOMEPAGE -->
            <div id="landing">
                <div class="content">
                    <h2>Want to watch a <br> great movie? <br> <span>Let us help you.</span> </h2>
                </div>
            </div>
        </div>

        </div>

        <!-- SCROLL BUTTON -->
        <div class="scroll">
            <a href="#contentPage2">Scroll down</a>
            <span class="fleche">
                <a href="#contentPage2">
                    <svg viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7c0-.206.075-.404.208-.55a.68.68 0 0 1 .502-.228h16.736L12.98 1.33a.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.55A.68.68 0 0 1 13.482 0a.68.68 0 0 1 .503.228l5.677 6.221a.787.787 0 0 1 .154.253.844.844 0 0 1 0 .596.787.787 0 0 1-.154.253l-5.677 6.22a.68.68 0 0 1-.503.229.68.68 0 0 1-.502-.228.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.551l4.466-4.893H.71a.68.68 0 0 1-.502-.228A.817.817 0 0 1 0 7Z">
                        </path>
                    </svg>
                </a>
            </span>
        </div>
    </header>

    <!--PAGE 2 FIND A MOVIE  -->
    <div id="contentPage2">
        <div class="title_2">
            <h3> Answer our questions to find <br> your perfect movie </h3>
            <p>There are just three of them it will take you <span> 10 seconds</span></p>
        </div>
        <!-- SCROLL BUTTON -->
        <div class="scroll">
            <a href="#allQuestions">Let's go!</a>
            <span class="fleche">
                <a href="#allQuestions">
                    <svg viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7c0-.206.075-.404.208-.55a.68.68 0 0 1 .502-.228h16.736L12.98 1.33a.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.55A.68.68 0 0 1 13.482 0a.68.68 0 0 1 .503.228l5.677 6.221a.787.787 0 0 1 .154.253.844.844 0 0 1 0 .596.787.787 0 0 1-.154.253l-5.677 6.22a.68.68 0 0 1-.503.229.68.68 0 0 1-.502-.228.818.818 0 0 1-.208-.55c0-.207.075-.405.208-.551l4.466-4.893H.71a.68.68 0 0 1-.502-.228A.817.817 0 0 1 0 7Z">
                        </path>
                    </svg>
                </a>
            </span>
        </div>
    </div>

    </div>

    <!-- QUESTIONS -->
    <?php
    include("./SRC/database.php");
    function affiche_pre($text) //fx pour formater l'affichage
    {
    ?>
        <pre><?php print_r($text); ?></pre>
    <?php
    }
    $sqlQuestion = "select * from questions"; //selectionne toutes les questions
    $stmt = $mysqldb->query($sqlQuestion);
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetch assoc permet de ne pas afficher les indices/clés inutiles
    $questionsReponses = [];

    foreach ($questions as $key => $question) {

        $sql = "select * from reponses where id_question = " . $question['id'];
        $stmt = $mysqldb->query($sql);
        $reponses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $questionsReponses[$key]['question'] = $question;
        $questionsReponses[$key]['reponses'] = $reponses;
    }


    // affiche_pre($questionsReponses);
    ?>

    <div id="allQuestions">
        <form action="./views/selection.php" method="post">
            <?php

            $i = 1; //pour changer les numero des id pour pouvoir modifier leur cpt en js et style
            $a = 1; //idem
            $c = 0; //pour le previous 

            foreach ($questionsReponses as $row) {
            ?>
                <div class='questions' id='q<?= $i; ?>'>
                    <div class="left">
                        <p class="questionNumber" id="changeNb">0<?= $i; ?></p>
                        <h2><?= $row["question"]["name"]; ?></h2>
                        <?php if ($i > 1) { //pour afficher les previous à partir de la question 2
                        ?> <a id="previousQ<?= $c; ?>" class="previous">Previous</a>
                        <?php }

                        ?>

                    </div>

                    <?php
                    $i++;
                    $c++;
                    ?>

                    <div class="right">
                        <?php
                        foreach ($row["reponses"] as $row2) {

                        ?> <div class="answers">
                                <div>
                                    <input type="radio" name='q<?= $i; ?>' value="<?= $row2["name"]; ?>" id="answer<?= $a; ?>">
                                    <label for="answer<?= $a; ?>"><?= $row2["name"]; ?></label>
                                </div>
                            </div>
                        <?php

                            $a++;
                        }
                        if ($c >= 3) {
                            echo "<div id='btn'><input type = 'submit' id='btn1' value ='Envoyer'/></div>";
                        }
                        ?>
                    </div>
                </div>

            <?php
            }
            ?>
        </form>    <span class="flecheHaut">
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

    <script type="text/javascript" src="./assets/scripts/script.js"></script>
    <script type="text/javascript" src="./assets/scripts/questions.js"></script>

</body>

</html>
<?php include("./SRC/database.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find me.</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="stylesheet" href="./assets/css/questions.css"> -->

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

                </div>


                <!-- NAV -->
                <div class="menu">
                    <i class="fas fa-bars togle-menu"></i>
                    <nav>
                        <ul>
                            <li><a href="#contentPage2">Find
                                    me a movie</a></li>
                            <li><a href="./views/allMovies.php">All movies</a></li>
                            <li><a href="./views/connexion.php">Sign in/up</a></li>
                            <li><a href="./views/contact.html">Contact</a></li>
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
            <h3> Answer our questions to find your perfect movie </h3>
            <p>There are just four of them it will take you <span> 10 seconds</span></p>
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

                foreach ($questionsReponses as $row) { 
            ?>
                    <div class='questions' id='q<?= $i; ?>'>
                        <div class="left">
                            <p class="questionNumber"><?= $i; ?></p>
                            <h2><?= $row["question"]["name"]; ?></h2>
                        </div>

                        <?php
                            $i++;
                        ?>
                        <div class="right">
                            <?php
                                foreach ($row["reponses"] as $row2) { 
                            ?>
                                <div>
                                    <input type="radio" name='q<?= $i; ?>' value="<?= $row2["name"]; ?>" id="answers<?= $a; ?>">
                                    <label for="answers<?= $a; ?>"><?= $row2["name"]; ?></label>
                                </div>
                        </div>
                            <?php
                                    $a++;
                                }
                            ?>
                    </div>

                    <?php
                }
                ?>
        </form>
    </div>

    <!--<div id="allQuestions">

        <form action="./views/selection.php" method="post">
            <div><br><br><br></div>
             QUESTION 1 -->
    <!-- <div class="questions" id="q1">
                <div class="left">
                    <p class="questionNumber">01</p>
                    <h2>Who you want <br> to watch a movie with?</h2>
                </div>

                <div class="right">
                    <div>
                        <input type="radio" name="q1" id="betterHalf" value="betterHalf">
                        <label for="betterHalf">My better half</label>
                    </div>

                    <div>
                        <input type="radio" name="q1" id="parents" value="parents">
                        <label for="parents">My parents (careful what you choose..)</label>
                    </div>

                    <div>
                        <input type="radio" name="q1" id="children" value="children">
                        <label for="children">My children (but pls I don't want to watch Frozen)</label>
                    </div>

                    <div>
                        <input type="radio" name="q1" id="friend" value="friend">
                        <label for="friend">My friend (I do have some, honest)</label>
                    </div>

                    <div>
                        <input type="radio" name="q1" id="no_one" value="no_one">
                        <label for="no_one">No-one. I like my own company!</label>
                    </div>

                    <div class="random">

                        <a href="./views/random.php">

                            <input type="radio" name="q1" id="random" value="random"> -->
    <!-- I don't care! I just want to watch a movie.
                            Surprise me!


                        </a>

                    </div>

                </div>
            </div>

             QUESTION 2 -->
    <!--<div class="questions" id="q2">
                <div class="left">
                    <p class="questionNumber">02</p>
                    <h2>What are you looking for?</h2>
                    <a id="previousQ1" class="previous"> Previous</a>
                </div>


                <div class="right">
                    <div>
                        <input type="radio" name="q2" id="smart" value="smart">
                        <label for="smart">I want to feel smarter! Show me something that will make me think</label>
                    </div>

                    <div>
                        <input type="radio" name="q2" id="laugh" value="laugh">
                        <label for="laugh">I want to laugh my socks off</label>
                    </div>

                    <div>
                        <input type="radio" name="q2" id="cry" value="cry">
                        <label for="cry">Pass me the tissues and make me weep</label>
                    </div>

                    <div>
                        <input type="radio" name="q2" id="more" value="more">
                        <label for="more">I don't know. Have you got more options?</label>
                    </div>

                    <div class="random">

                        <a href="./views/random.php">

                            <input type="radio" name="q1" id="random" value="random"> -->
    <!-- I don't care! I just want to watch a movie.
                            Surprise me!


                        </a>

                    </div>

                </div>
            </div>

             QUESTION 3  -->

    <!--<div class="questions" id="q3">
                <div class="left">
                    <p class="questionNumber">03</p>
                    <h2>Ok. Will these do?</h2>
                    <a id="previousQ2" class="previous"> Previous</a>
                </div>


                <div class="right">
                    <div>
                        <input type="radio" name="q3" id="love" value="love">
                        <label for="love">What's like to fall in love? Remind me.</label>
                    </div>

                    <div>
                        <input type="radio" name="q3" id="action" value="action">
                        <label for="action">I want action!</label>
                    </div>

                    <div>
                        <input type="radio" name="q3" id="scare" value="scare">
                        <label for="scare">Scare me! Even more than when I look at my bills </label>
                    </div>

                    <div>
                        <input type="radio" name="q3" id="teen" value="teen">
                        <label for="teen">I want to be fifteen again, show me a teen movie.</label>
                    </div>

                    <div class="random">

                        <a href="./views/random.php">

                            I already told you! I don't care what I watch. Surprise me!


                        </a>

                    </div>

                </div>
            </div>

             QUESTION 4  -->

    <!-- <div class="questions" id="q4">
                <div class="left">
                    <p id="changeNb" class="questionNumber">04</p>
                    <h2> How much time have you got ?</h2>
                    <a id="previousQ3" class="previous"> Previous</a>
                </div>


                <div class="right">
                    <div>
                        <input type="radio" name="q4" id="moreThan1" value="moreThan1">
                        <label for="moreThan1">All the time in the world! More than an hour</label>
                    </div>

                    <div>
                        <input type="radio" name="q4" id="lessThan1" value="lessThan1">
                        <label for="lessThan1">My lunch break. Less than an hour</label>
                    </div>

                    <div>
                        <input type="radio" name="q4" id="less30" value="less30">
                        <label for="less30">Time for a power-nap! Less than 30min </label>
                    </div>

                    <div class="random">

                        <a href="./views/random.php">

                            I don't give a monkeys. Surprise me!
                        </a>

                    </div>


                </div>

                <div id="envoiFormBtn">
                    <button>Send!</button> modifier l'emplacement (annuler le flex sur cet element) !-->
    <!-- </div>
            </div>

        </form>
    </div>






     CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script type="text/javascript" src="./assets/scripts/script.js"></script>
    <script type="text/javascript" src="./assets/scripts/questions.js"></script>

</body>

</html>
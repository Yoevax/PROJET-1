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
    <title>Find me. Random</title>

    <link rel="stylesheet" href="../assets/css/random.css">

    <link rel="stylesheet" href="../assets/css/selection.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
</head>
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
        <div>
            <nav>
                <ul>
                    <li><a href="../index.php">Find
                            me a movie</a></li>
                    <li><a href="../views/allMovies.php">All movies</a></li>
                    <li><a href="../views/contact.php">Contact</a></li>
                    <?php
                    if ($_SESSION['isLogged'] == true) {
                        echo "<li><a href='../views/logout.php'>Log out</a></li>";
                    } else {
                        echo "<li><a href='../views/connexion.php'>Sign in/up</a></li>";
                    } ?></a></li>

                </ul>
            </nav>
        </div>

        <div id="container">


            <h2>Look what we find for you.</h2>
            <div id="bloc">


                <?php
                include("../SRC/database.php");

                $rand = "SELECT *
                FROM `films`
                ORDER BY RAND()
                LIMIT 1";


                $stmt = $mysqldb->query($rand);
                $data = $stmt->fetchAll();

                foreach ($data as $row) {
                ?>
                    <div>
                        <h3><?php echo $row["name"]; ?></h3>
                        <img src="../assets/img/<?= $row["name"]; ?>.jpg">
                    </div>
                <?php
                }


                ?>
            </div>

        </div>

</body>

</html>
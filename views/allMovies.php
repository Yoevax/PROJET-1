<?php 
    session_start();
    include("../SRC/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find me. All movies</title>
    <link rel="stylesheet" href="../assets/css/allMovies.css">
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
                    <li><a href="../views/contact.php">Contact</a></li>
                    <?php //@MODIF
                        if (!empty($_SESSION['isLogged']) && $_SESSION['isLogged']) {
                            echo "<li><a href='../views/page_membre.php'>Profil</a></li>";
                            echo "<li><a href='../views/logout.php'>Log out</a></li>";
                            
                    }else{ echo "<li><a href='../views/connexion.php'>Sign in/up</a></li>";}?></a></li>
                    
                </ul>
            </nav>
        </div>

    </div>
    <div id="container">
        <h1>All movies</h1>
        <div id="all">
            <?php
            $sql = "SELECT * 
                    FROM films";

            $stmt = $mysqldb->query($sql);
            $data = $stmt->fetchAll();
            
            foreach ($data as $row) { 
                $name = $row["name"];
                $description = $row["description"];
                $img = "/assets/img/".$row["name"].".jpg"; 
            ?>
        
                <div class="bloc">
                    <a href="affichageFilm.php?img=<?=$img;?>&name=<?= $name;?>&description=<?=$description;?>">
                        
                        <img src="../assets/img/<?= $row["name"]; ?>.jpg">
                    </a>
                </div>

            <?php } ?>
        </div>
        
    </div>

    <!-- CURSEUR SOURIS PERSONNALISEE    -->
    <div id="curseur"><span id="rec">REC</span></div>

    <script type="text/javascript" src="../assets/scripts/script.js"></script>
    <script type="text/javascript" src="../assets/scripts/scrollNav.js"></script>
  
</body>

</html>
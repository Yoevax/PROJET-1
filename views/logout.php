<?php
session_start();

unset($_SESSION['isLogged']);


// On redirige le visiteur vers la page d'accueil
header ('location: http://localhost/PROJET%201/');

?>

<?php
try {

    $mysqldb = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s;port=%s',
            "localhost",
            "findme",
            3306
        ),
        "root",
        "root"
    );

    $mysqldb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
        
} catch (Exception $exception) {
    die('Oops, il y a eu problème : ' . $exception->getMessage());
} 

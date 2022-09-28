<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>hello</h2>

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
            <h1><?php echo $row["name"]; ?></h1>
        </div>
    <?php
    }


    ?>

</body>

</html>
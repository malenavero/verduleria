<?php
require_once("./functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<!--     <script src="./js/index.js"></script> -->
    <title>Frutas y Verduras</title>
</head>
<body>
    
    <h1>FRUTAS Y VERDURAS DE ESTACIÓN EN ARGENTINA</h1>    
    <ul class="season-list">
        <?php getSeasonList() ?>
    </ul>

    <h2><?php echo toSpanish(getActiveSeason()) ?></h2>
    
    <ul class="item-list">
        <?php getSeasonArrayList() ?>
    </ul>
    
</body>
</html>

<!-- PREGUNTAS 
*COMO HAGO QUE TOME POR DEFECTO LA CURRENT SEASON 
*FOTOS COLOR OPACO
*default season current season
-->
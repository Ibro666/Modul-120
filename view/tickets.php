<?php
    require_once "../controller/localization.php";
    require_once "../controller/rod-typ.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <title><?php _e("Billetautomat"); ?></title>
</head>
<body>
    <div class="container">
        <div class="element"></div>
        <div class="element">
            <div class="travel-type" id="travel-type">
            </div>
        </div>
        <div class="element">
            <div class="button-container">
                <span class="target-buttons">
                    <a href="classes.php?quantity=1">1x</a>
                    <a href="classes.php?quantity=2">2x</a>
                    <a href="classes.php?quantity=3">3x</a>
                    <a href="classes.php?quantity=4">4x</a>
                    <a href="classes.php?quantity=5">5x</a>
                    <a href="classes.php?quantity=6">6x</a>
                    <a href="classes.php?quantity=7">7x</a>
                </span>
            </div>
        </div>
    </div>
</body>
<footer>
    <span id="language">
        <a class="cansel" href="index.php?cansel=1"><?php _e("Abbrechen"); ?></a>
        <a href="travel-route.php">Zurück</a>
        <a href="?language=de-CH">Deutsch</a>
        <a href="?language=fr-CH">France</a>
        <a href="?language=en">English</a>
    </span>
</footer>
</html>
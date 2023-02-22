<?php
    require_once "../controller/localization.php";
    require_once "../controller/quantityoftickets.php";
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
        <div class="element">
            <div class="display-container" id="display-container">
                <div class="display" id="display"></div>
            </div>
        </div>
        <div class="element">
            <div class="travel-type" id="travel-type">
            </div>
        </div>
        <div class="element">
            <div class="button-container">
                <span class="target-buttons">
                    <a href="price.php?class=first"><?php _e("1. Klasse"); ?></a>
                    <a href="price.php?class=second"><?php _e("2. Klasse"); ?></a>
                </span>
            </div>
        </div>
    </div>
</body>
<footer>
    <span id="language">
        <a class="cansel" href="index.php?cansel=1"><?php _e("Abbrechen"); ?></a>
        <a href="tickets.php"><?php _e("Zurück"); ?></a>
        <a href="?language=de-CH">Deutsch</a>
        <a href="?language=fr-CH">France</a>
        <a href="?language=en">English</a>
    </span>
</footer>
</html>
<?php
    require_once "../controller/localization.php";
    require_once "../controller/location.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <script src="../controller/start-page-controller.js" defer></script>
    <script src=""></script>
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
                    <a href="tickets.php?rod=oneway"><?php _e("Einzelbillet"); ?></a>
                    <a href="tickets.php?rod=roundtrip"><?php _e("Retourbillet"); ?>
                        <details><?php _e("Hin- und Rückfahrt"); ?></details></a>
                    <a href="tickets.php?rod=multi-journey"><?php _e("Mehrfahrtenkarte"); ?></a>
                </span>
            </div>
        </div>
    </div>
</body>
<footer>
    <span id="language">
        <a class="cansel" href="index.php?cansel=1"><?php _e("Abbrechen"); ?></a>
        <a class="button" href="index.php"><?php _e("Zurück"); ?></a>
        <a class="button" href="?language=de-CH">Deutsch</a>
        <a class="button" href="?language=fr-CH">France</a>
        <a class="button" href="?language=en">English</a>
    </span>
</footer>
</html>
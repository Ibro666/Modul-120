<?php
    require "../controller/localization.php";
    global $fromlocation;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <script src="../controller/start-page-controller.js" defer></script>
    <title><?php _e("Billetautomat"); ?></title>
</head>
<body>
    <div class="container">
        <div class="element">
            <div class="display-container" id="display-container">
                <span class="target-buttons">
                    <a class="button" type="radrio" class="from-location" name="from-location" href="?from-location=schwarzenburg">Schwarzenburg</a>
                    <a class="button" href="?from-location=riedstaettkalchstaetten"><?php _e("Riedstätt-Kalchstätten"); ?> 
                    <a class="button" href="?from-location=plaffeien">Plaffeien</a>
                    <a class="button" href="?from-location=passelb">Passelb</a>
                    <a class="button" href="?from-location=chrachen">Chrachen</a>
                    <a class="button" href="?from-location=parmathaux-mouret">Parmathaux / Le Mouret</a>
                    <a class="button" href="?from-location=roche-roulin">La Roche-Roulin</a>
                    <a class="button" href="?from-location=roche">La Roche</a>
                    <a class="button" href="?from-location=hauteville">Hauteville</a>
                    <a class="button" href="?from-location=corbieres">Corbières</a>
                    <a class="button" href="?from-location=villarvolard">Villarvolard</a>
                    <a class="button" href="?from-location=botterens">Botterens</a>
                    <a class="button" href="?from-location=broc-fabrique">Broc-Fabrique</a>
                    <a class="button" href="?from-location=broc-village">Broc-Village</a>
                </span>
            </div>
        </div>
        <div class="element"></div>
        <div class="element">
            <div class="button-container">
                <span class="target-buttons">
                    <a class="button" href="travel-route.php?location=schwarzenburg">Schwarzenburg
                        <details><?php _e("Umsteigemöglichkeiten: S6 nach Bern, Postauto 611 nach Riggisberg"); ?></details></a>
                    <a class="button" href="travel-route.php?location=riedstaettkalchstaetten"><?php _e("Riedstätt-Kalchstätten"); ?> 
                        <details><?php _e("Halt auf Verlangen"); ?></details></a>
                    <a class="button" href="travel-route.php?location=plaffeien">Plaffeien
                        <details><?php _e("Umsteigemöglichkeiten: Bus 123 nach Fribourg, bzw. Schwarzsee"); ?></details></a>
                    <a class="button" href="travel-route.php?location=passelb">Passelb</a>
                    <a class="button" href="travel-route.php?location=chrachen">Chrachen
                        <details><?php _e("Umsteigemöglichkeiten: Bus 130 nach Giffers, bzw. St.Silvester"); ?></details></a>
                    <a class="button" href="travel-route.php?location=parmathaux-mouret">Parmathaux / Le Mouret</a>
                    <a class="button" href="travel-route.php?location=roche-roulin">La Roche-Roulin
                        <details><?php _e("Halt auf Verlangen"); ?></details></a>
                    <a class="button" href="travel-route.php?location=roche">La Roche
                        <details><?php _e("Umsteigemöglichkeiten: Bus 235 nach Pont-la-Ville"); ?></details></a>
                    <a class="button" href="travel-route.php?location=hauteville">Hauteville
                        <details><? _e("Halt auf Verlangen"); ?></details></a>
                    <a class="button" href="travel-route.php?location=corbieres">Corbières</a>
                    <a class="button" href="travel-route.php?location=villarvolard">Villarvolard
                        <details><?php _e("Halt auf Verlangen"); ?></details></a>
                    <a class="button" href="travel-route.php?location=botterens">Botterens
                        <details><?php _e("Halt auf Verlangen"); ?></details></a>
                    <a class="button" href="travel-route.php?location=broc-fabrique">Broc-Fabrique</a>
                    <a class="button" href="travel-route.php?location=broc-village">Broc-Village
                        <details><?php _e("Umsteigemöglichkeiten: S60 nach Bulle"); ?></details></a>
                </span>
            </div>
        </div>
    </div>
</body>
<footer>
    <span id="language">
        <a class="button" href="?language=de-CH">Deutsch</a>
        <a class="button" href="?language=fr-CH">France</a>
        <a class="button" href="?language=en">English</a>
    </span>
</footer>
</html>
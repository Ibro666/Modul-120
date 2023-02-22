<?php
    require_once "../controller/localization.php";
    require_once "../controller/price-type.php";
    $quantity = $_COOKIE["quantity"];
    $frlocation = $_COOKIE["from-location"];
    $location = $_COOKIE["location"];
    $price = isset($_GET["price"]) ? $_GET["price"] : (isset($_COOKIE["price"]) ? $_COOKIE["price"] : "");
    $rod = $_COOKIE["rod"];
    $class = $_COOKIE["class"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <script src="../controller/calculator.js" defer></script>
    <title><?php _e("Billetautomat"); ?></title>
</head>
<body>
    <div class="container">
        <div class="element">
            <div class="display-container" id="display-container">    
                <div class="display" id="display">
                    <p id="from-location"><?php echo _e("Abreiseort: " . $frlocation)?></p>
                    <p id="location"><?php echo _e("Zielort: " . $location)?></p>
                    <p id="class"><?php echo _e("Klasse: " . $class)?></p>
                    <p id="rod"><?php echo _e("Reiseart: " . $rod)?></p>
                    <p id="quantity"><?php echo _e("Mänge: " . $quantity)?></p>
                    <p id="tax"><?php echo _e("Halbtax: " . $price)?></p>
                    <p id="travel-costs"></p>
                </div>
            </div>
        </div>
        <div class="element">
            <div class="travel-type" id="travel-type">
                
            </div>
        </div>
        <div class="element">
            <div class="button-container">   
                <span class="target-buttons">
                    <a href=""><?php _e("Barzahlung"); ?></a>
                    <a href=""><?php _e("Kartenzahlung"); ?></a>
                </span>
            </div>
        </div>
    </div>
</body>
<footer>
    <span id="language">
        <a class="cansel" href="index.php?cansel=1"><?php _e("Abbrechen"); ?></a>
        <a class="button" href="price.php"><?php _e("Zurück"); ?></a>
        <a class="button" href="?language=de-CH">Deutsch</a>
        <a class="button" href="?language=fr-CH">France</a>
        <a class="button" href="?language=en">English</a>
    </span>
</footer>
</html>
<?php
    require_once "shipping-basket.php";
?>
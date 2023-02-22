<?php
    if (isset($_GET["language"])) {
        setcookie("language", $_GET["language"]);
        $language = $_GET["language"];
    } else {
        $language = $_COOKIE["language"];
    }

    if ($language == "de-CH") {
        require_once "../modul/i18/language/" . $language . ".php";
    } else if ($language == "fr-CH") {
        require_once "../modul/i18/language/" . $language . ".php";
    } else if ($language == "en") {
        require_once "../modul/i18/language/en.php"; 
    }

    
    if (isset($_GET["from-location"])) {
        setcookie("from-location", $_GET["from-location"]);
        $fromlocation = $_GET["from-location"];
    }

    function __($string) {
        global $translations;

        if (array_key_exists($string, $translations)) {
            return $translations[$string];
        }
        return $string;
    }

    function _e($string) {
        echo __($string);
    }

    function unsetcookie() {
        setcookie("location", "", time()-60);
        setcookie("quantity", "", time()-60);
        setcookie("rod", "", time()-60);
        setcookie("class", "", time()-60);
        setcookie("price", "", time()-60);
    }

    if (isset($_GET["cansel"])) {
        unsetcookie();
    }
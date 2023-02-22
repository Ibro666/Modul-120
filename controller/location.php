<?php
    if (isset($_GET["location"])) {
        setcookie("location", $_GET["location"]);
    }
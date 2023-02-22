<?php
	if (isset($_GET["price"])) {
        setcookie("price", $_GET["price"]);
        return;
    }
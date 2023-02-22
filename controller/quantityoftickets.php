<?php
	if (isset($_GET["quantity"])) {
        setcookie("quantity", $_GET["quantity"]);
    }
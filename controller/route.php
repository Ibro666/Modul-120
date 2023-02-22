<?php
    if (isset($_GET["location"])) {
        setcookie("location", $_GET["location"]);
    }

   // if ($_GET["location"] == "schwarzenburg") {
        //header("Location: ../view/tickets.php");
    //}

    
    
 //   if (isset($_COOKIE[$location])) {
 //       echo "Cookie named '" . $location . "' is not set!";
 //     } else {
 //       echo "Location '" . $location . "' is set!<br>";
 //       echo "The Count is " . count($_COOKIE) . "<br>";
 //      echo "The language is " . $language . "<br>";
 
 //    }
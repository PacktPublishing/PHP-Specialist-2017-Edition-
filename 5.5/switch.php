<?php
    $alertColor = "red";
    
    switch($alertColor){
        case "red":
            echo("<h1 style='color: red;'>Alert</h1>");
            break;
        case "orange":
            echo("<h1 style='color: orange;'>Alert</h1>");
            break;
        case "yellow":
            echo("<h1 style='color: red;'>Alert</h1>");
            break;
        case "green":
            echo("<h1 style='green: red;'>Alert</h1>");
            break;
        default:
             echo("<h1>Alert</h1>");
    
    }



?>
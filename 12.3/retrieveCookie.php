<?php
    $cookieName = "userID";
    if(!isset($_COOKIE[$cookieName]))
    {
        $out = "No User ID set";
    } else
    {
        $out = $_COOKIE[$cookieName];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting Cookies</title>
    </head>
    <body>
        <p>Welcome: <?php print($out) ?></p>
    </body>

</html>
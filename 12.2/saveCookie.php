<?php
    $cookieName = "userID";
    $cookieValue = "mlassoff";
    $cookieExpires = time() + (60 * 60 * 24 * 30);
    setcookie($cookieName, $cookieValue, $cookieExpires, "/");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting Cookies</title>
    </head>
    <body>
        <p>Cookie Set</p>
    </body>

</html>
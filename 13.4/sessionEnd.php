<?php
    session_start();
    unset($_SESSION["userID"]);
    unset($_SESSION["userNickName"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
       <p>Session ended.</p>
    </body>

</html>
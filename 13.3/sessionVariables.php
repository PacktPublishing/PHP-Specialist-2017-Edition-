<?php
    session_start();
    $id = $_SESSION["userID"];
    $nick = $_SESSION["userNickName"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Start Session</title>
    </head>
    <body>
        <p>User ID: <?php print($id);?></p>
        <p>Nickname: <?php print($nick);?></p>
    </body>

</html>
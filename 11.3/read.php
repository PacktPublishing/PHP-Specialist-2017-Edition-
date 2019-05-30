<?php
    $myfile = fopen("poem.txt", "r") or die("Unable to open file");
    $poem = fread($myfile, filesize("poem.txt"));
    fclose($myfile);
    $poem = str_replace("\n" , "<br/>", $poem);
?>
<!DOCTYPE>
<html>
    <head>
        <title>Read</title>
        <style>
            #poem
            {
                width: 50%;
                padding: 10px;
                border: 1px solid black;
                background-color: azure;
                font-family: cursive;
                
            }
        </style>
    </head>
    <body>
        <div id ="poem">
            <?php print($poem) ?>
        </div>
    </body>
</html>
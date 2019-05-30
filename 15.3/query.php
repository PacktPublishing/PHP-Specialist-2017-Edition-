<?php
    require('db_connect.php');
    $sql = "SELECT * FROM notes";
    $result = $connection ->query($sql);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Show Stickies</title>
    </head>
    <style>
        .stickie
        {
            background-color: #e6ee9c;
            border: 1px solid black;
            width: 200px;
            height: 200px;
            padding: 20px;
        }
        
        .stickie h2
        {
            font-size: 1.25em;
            font-family: Arial;
            font-weight: Bold;
        }
        
        .stickie p
        {
            font-family: Arial;
        }
    </style>
    <body>
        <?php
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    print("<div class='stickie'>");
                    print("<h2>" . $row["noteTitle"] . "</h2>");
                    print("<p>" . $row['noteContent'] . "</p>");
                    print("</div>");
                    print("<p></p>");
                }
            } else
            {
                print("<h1>No Stickies</h1>");
            }
        ?>
    </body>
</html>
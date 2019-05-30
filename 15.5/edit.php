<?php
    require('db_connect.php');
    
    if(isset($_POST['title']))
    {
        $title = addslashes($_POST['title']);
        $content = addslashes($_POST['content']);
        $sql = "INSERT INTO notes(noteTitle, noteContent) VALUES ('" . $title . "','" . $content . "')";
        $connection->query($sql);
        $sql = "SELECT * FROM notes";
        $result = $connection ->query($sql);
        
    }else
    {
        $sql = "SELECT * FROM notes";
        $result = $connection ->query($sql);
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Show Stickies</title>
    </head>
    <style>
        .stickie, #add
        {
            background-color: #e6ee9c;
            border: 1px solid black;
            width: 200px;
            height: 200px;
            padding: 20px;
            margin: 10px;
            float: left;
        }
        
        .stickie h2, #add h2
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
        <div id="add">
            <h2>New Stickie</h2>
            <form action="save.php" method="post">
                <input type="text" name="title" placeholder="title"/><br/><p></p>
                <textarea name="content" rows="4"></textarea>
                <button type="submit">Save</button>
            </form>
        </div>
        <p></p>
        <?php
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    print("<div class='stickie'>");
                    print("<h2>" . $row["noteTitle"] . "</h2>");
                    print("<p>" . $row['noteContent'] . "</p>");
                    print("<p><a href='editDetail.php?id=" . $row['noteNumber'] ."'>Edit</a></p>");
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
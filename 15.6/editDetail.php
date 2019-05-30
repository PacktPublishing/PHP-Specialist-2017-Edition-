<?php
     require('db_connect.php');
     if(!isset($_REQUEST['title'])){
         $sql = "SELECT * FROM notes WHERE noteNumber=" . $_REQUEST['id'];
         $result = $connection ->query($sql);
         while($row = $result->fetch_assoc())
         {
            $title = $row['noteTitle'];
            $note = $row['noteContent'];
         }
     } else
     {
         $title = $_REQUEST['title'];
         $content = $_REQUEST['content'];
         $sql = "UPDATE notes SET noteTitle='" . $title . "', noteContent='" . $content . "' WHERE noteNumber = " . $_REQUEST['id'];
         mysqli_query($connection, $sql);
         header("Location: edit.php");
         
     }
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
            margin: 10px;
            float: left;
        }
        
        .stickie h2
        {
            font-size: 1.25em;
            font-family: Arial;
            font-weight: Bold;
        }
        
        .stickie input
        {
            font-family: Arial;
            font-size: 1.25em;
            width: 100%;
        }
        
        .stickie textarea
        {
            width: 100%;
            color: gray;
        }
    </style>
    <body>
        <div class="stickie">
            <form action="editDetail.php" method="post">
                <input type="hidden" name="id" value="<?php print($_REQUEST['id']) ?>">
                <input type="text" placeholder="<?php print($title)?>" name="title"/><p></p>
                <textarea name="content" rows="4"><?php print($note)?></textarea>
                <button type="submit">Save</button>
            </form>        
        </div>
    </body>
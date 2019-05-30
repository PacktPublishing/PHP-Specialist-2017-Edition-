<?php
    if (isset($_POST['name']))
    {
        $out = $_POST['name'] . "," . $_POST['email'] . "," . $_POST['phone'] . "\n";
        $myfile = fopen("director.csv", "a") or die("Unable to open file");
        fwrite($myfile, $out);
        fclose($myfile);
    }
?>
<!DOCTYPE>
<html>
    <head>
        <title>Write CSV</title>
    </head>
    <body>
        <form action ="saveCSV.php" method="post">
            <input type="text" name="name" placeholder="Name"/>
            <input type="email" name="email" placeholder="Email"/>
            <input type="phone" name="phone" placeholder="Phone"/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
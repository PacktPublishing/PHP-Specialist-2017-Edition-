<?php
    if (isset($_POST['name']))
    {
        $out = $_POST['name'] . "," . $_POST['email'] . "," . $_POST['phone'] . "\n";
        $myfile = fopen("directory.csv", "a") or die("Unable to open file");
        fwrite($myfile, $out);
        fclose($myfile);
        $myfile = fopen("directory.csv", "r") or die("Unable to open file");
        print("<table>");
        while(($data = fgetcsv($myfile, 1000, ","))!== FALSE){
            print("<tr>");
            for($x =0; $x < count($data); $x++)
            {
                print("<td>");
                print($data[$x]);
                print("</td>");
            }
            print("</tr>");
        }
        print("</table>");
        fclose($myfile);
        $_POST['name']= null;
    } else
    {
        $myfile = fopen("directory.csv", "r") or die("Unable to open file");
        print("<table>");
        while(($data = fgetcsv($myfile, 1000, ","))!== FALSE){
            print("<tr>");
            for($x =0; $x < count($data); $x++)
            {
                print("<td>");
                print($data[$x]);
                print("</td>");
            }
            print("</tr>");
        }
        print("</table>");
        fclose($myfile);
        $_POST['name']= null;
    }
?>
<!DOCTYPE>
<html>
    <head>
        <title>Read CSV</title>
    </head>
    <body>
        <form action ="readCSV.php" method="post">
            <input type="text" name="name" placeholder="Name"/>
            <input type="email" name="email" placeholder="Email"/>
            <input type="phone" name="phone" placeholder="Phone"/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
<?php
    $string = "Mark,Tom,Bob,Mary,Sue,Terry,Joan,Fred,Donna";
    $nameArray = str_getcsv($string);
    
    for($x=0; $x< count($nameArray); $x++)
    {
        print($nameArray[$x] . "<br/>");
    }
    
    print("<br/>");
    $string = "Who's afraid of Tom's dog?";
    
    $string = addslashes($string);
    print($string);

    $string = stripslashes($string);
    print("<br/>". $string);
    

?>
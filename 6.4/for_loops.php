<?php
    for($y=0; $y<11; $y=$y+2)
    {
        print($y . "&nbsp;");
    }

    print("<br/>");

    for($x=1000; $x>0; $x--)
    {
        if(1000 % $x == 0)
        {
            print($x);
            print("<br/>");
        }
    }
    

?>
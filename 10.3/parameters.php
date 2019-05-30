<?php
    function printSquare($rows, $cols)
    {
        $x=0;
        while($x< $rows)
        {
            $y = 0;
            while($y < $cols)
            {
                print("*");
                $y++;
            }
            print("<br/>");
            $x++;
        }
    }

    printSquare(5,5);
    print("<br/>");
    printSquare(10,12);
    print("<br/>");
    printSquare(2,2);

?>
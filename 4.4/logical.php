<?php
    //And &&
    $join = (8 > 4)  && (19 < 20);
    print("Both True: " . $join);

    $join = (8 > 4)  && (19 > 20);
    print("<br/>One Side True: " . $join);

    //Or ||
    $either = (8 > 4) || (19 < 20);
    print("<br/>Or one side True: " . $either);

    $either = (8 > 10) || (3==4);
    print("<br/>Or neither side True: ". $either);
     
?>
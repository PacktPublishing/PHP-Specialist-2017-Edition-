<?php
    $family = array("Mark",
                    "Brett",
                    "Joan",
                    "Rick",
                    "Kerri",
                    "Rose");

    foreach($family as $member)
    {
        print("$member<br/>");
    }

    $gpas = array(3.2, 3.33, 4.0, 1.9, 2.66, 2.93, 3.45);
    $total = 0;
    foreach($gpas as $gpa)
    {
        $total = $total + $gpa;
    }
    print("<br/>Average GPA: " . $total/count($gpas));
?>
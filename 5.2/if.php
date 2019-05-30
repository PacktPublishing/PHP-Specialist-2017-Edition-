<?php
    $age = 18;
    if ($age >= 18)
    {
        print("You are eligible to vote.");
    }

    $citizen = true;

    if($age >= 18 && $citizen==true)
    {
        print("<br/>You are still eligible to vote.");
    }


?>
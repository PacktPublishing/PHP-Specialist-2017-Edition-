<?php
    $age = 18;
    $citizen = false;

    if($age >= 18 && $citizen)
    {
        print("<br/>You are still eligible to vote.");
    } else
    {
        print("<strong>Sorry you are ineligible to vote.</strong>");
    }
    
    $computer = "Commodore 64";
    if($computer == "Commodore 64")
    {
        print("<br/>Best Computer ever!");
    } else
    {
        print("<br/>Not the best computer ever!");
    }

?>
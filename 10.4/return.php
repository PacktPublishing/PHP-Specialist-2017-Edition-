<?php
    function averageGrades($arrayOfGrades)
    {
        $total = 0;
        foreach($arrayOfGrades as $grade)
        {
            $total += $grade;
        }
        
        return($total/count($arrayOfGrades));
    }
    

    $grades = array(93,85,91,72,64,93,88,80,70,76,54,99,81,82,88);

    print("<strong>Average: </strong>" . averageGrades($grades));
?>
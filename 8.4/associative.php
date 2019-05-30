<?php
    $capitals = array(  "Connecticut" => "Hartford",
                        "New York" => "Albany",
                        "Vermont" => "Montpelier",
                        "New Hampshire" => "Concord",
                        "California" => "Sacremento",
                        "Texas" => "Austin",
                        "Maine" => "Augusta"
                     );

    print("The capital of Texas is " . $capitals["Texas"]);
    print("<br/>The capital of Connecticut is " . $capitals["Connecticut"]);

    foreach ($capitals as $key => $value) {
        print("<br/>$key: $value");
    }


?>
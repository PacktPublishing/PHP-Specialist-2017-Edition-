<?php
    $data = array("Tom", "Bill", "Dannel", "Craig", "Oscar", "Carrie", "Tammy");

    $comma_separated = implode(",", $data);
    print($comma_separated);

    $pizza = "sausage meatball peperoni mushroom pineapple";
    $pizzaArray = explode(" ", $pizza);

    for($x=0; $x< count($pizzaArray); $x++)
    {
        print("<br/>" . $pizzaArray[$x]);
    }
?>
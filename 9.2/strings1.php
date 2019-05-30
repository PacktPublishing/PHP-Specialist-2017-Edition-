<?php
    $string = "The quick brown fox jumped over the lazy dogs.";

    print($string . "<br/>");
    print(strlen($string));
    print("<br/>Position of q: " . strpos($string, "q"));
    print("<br/>Number of words: " . str_word_count($string));      

?>
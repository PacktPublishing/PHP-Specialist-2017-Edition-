<?php
    $employees = array(
        "Bob" => array (
            "idNumber" => 121,
            "department" => "accounting",
            "salary" => 85000
        ),
        "Terry" => array (
            "idNumber" => 131,
            "department" => "sales",
            "salary" => 78000
        ),
        "Scott" => array (
            "idNumber" => 141,
            "department" => "administration",
            "salary" => 45000
        ),
        "Sue" => array (
            "idNumber" => 221,
            "department" => "sales",
            "salary" => 85000
        ),
    );

    print("Scott Salary: " . $employees['Scott']['salary']);
?>
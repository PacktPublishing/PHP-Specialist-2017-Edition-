<?php
    $to      = 'user@user.com';
    $subject = 'Thanks for signing up!';
    $message = 'Thank you for singing up for LearnToProgram!  We are really glad you have you taking one of our classes!';
    $headers = 'From: mark@learntoprogram.tv' . "\r\n" .
                'Reply-To: mark@learntoprogram.tv' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>
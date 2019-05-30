<?php
    $to      = 'user@user.com';
    $subject = 'Thanks for signing up!';
    $message = '<h2 style="color: #cc0000; font-family: Arial">Thank you for singing up for LearnToProgram!</h2>
                <p>We are really glad you have you taking one of our classes!<br/>
                If there is anything we can do for you while you are completeing<br/>
                the course, do not hesitate to email!';
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'To: New Student <new@student.com>';
    $headers[] = 'From: Mark Lassoff <mark@learntoprogram.tv>';
    mail($to, $subject, $message, implode("\r\n", $headers));
?>
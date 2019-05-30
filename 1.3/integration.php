<!DOCTYPE html>
<html>
    <head>
        <title>Integrating PHP and HTML</title>
    </head>
<body>
    <h1>Welcome to PHP</h1>
    <!-- Inline PHP Block -->
    <p>Today is <?php print(date('l jS \of F Y h:i:s A')); ?>.</p>
    <h2>PHP Block:</h2>
    <!-- Multiline PHP block -->
    <?php
        print("<p>Welcome to the PHP Specialist Course</p>");
        print("<p><strong>Mark Lassoff</strong> is your instructor</p>");
    ?>
</body>
</html>
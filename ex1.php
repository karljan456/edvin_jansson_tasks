<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>

<body>
    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid)</h3>
    <?php
    echo "Edvin Jansson<br>";
    echo "BBCAP22";
    ?>
    <h3>3.2 Write PHP code to display the following message.</h3>
    <?php
    echo "Hello World! My name is \"David\"";
    ?>
    <h3>3.3 Write the PHP code in to display the current date.</h3>
    <?php
    echo "Today is " . date("d-m-Y") . "<br>";
    ?>
    <h1></h1>
    <?php
    ?>
    <h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.
    </h3>
    <?php

    $title = "PHP is interesting";

    echo "<h1>" . $title . "</h1>";
    ?>

    <h3>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include
        3 columns S.n., Name, and grade. Your table should look like the one below:
    </h3>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    
    <table>

    <tr>
    <th> S. N.</th> <th> Name</th><th> Grade</th>
    </tr>
    <tr>
    <td>1</td><td>Pekka</td><td>$g1</td>
    </tr>
    <tr>
    <td>2</td><td>Johanna</td><td>$g2</td>
    </tr>
    <tr>
    <td>3</td><td>John</td><td>$g3</td>
    </tr>
    </table>
    
    ";
    ?>
</body>

</html>
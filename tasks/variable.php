<?php include "header.php" ?>

<h3>In-class Task Variable & Operators 07.02.2023 (variable.php)
</h3>

<h2>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    <h3> tag: Hello …., You are welcome to my site.
</h2>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="fname" required placeholder="First Name" class="from-control"> <br>
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input type="date" name="bdate" placeholder="Date" class="form-control"><br>
        </div>
        <div class="col">
            <input type="color" name="color" placeholder="Select your favorite color" class="form-control"> <br>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input type="submit" value="submit" placeholder="Submit">
        </div>
    </div>

</form>

<h2>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in
    3.5.</h2>
<table class="table">
    <thead>
        <tr>
            <th> S. N.</th>
            <th> Name</th>
            <th> Grade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <tr>
            <td>1</td>
            <td>Pekka</td>
            <td>5</td>
        </tr>
        </tr>
        <tr>
            <td>2</td>
            <td>Johanna</td>
            <td>4</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>5</td>
        </tr>
    </tbody>

</table>

<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together. Print the
    length of the string. (Hint: string function)</h2>

<?php

$item = "Phone";
$cost = 1000;

$sentence = $item . " costs " . $cost . "$";

echo "The length of the string is " . strlen($sentence);
?>

<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to
    output your answer.</h2>

<?php

$num1 = 298;
$num2 = 234;
$num3 = 46;

echo $num1 + $num2 + $num3;

?>

<h2>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)
</h2>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<h2>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display
    the last modification time of a file.</h2>

<?php
echo "Last modified on " . date("F d Y H:i:s.", filemtime('variable.php'));
?>





<?php include "footer.php" ?>
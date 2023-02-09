<?php include 'header.php' ?>

<h2>1. Write a php script to display courses as list. Use <li>
        $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h2>
<?php
$course = array("PHP", "HTML", "JavaScript", "CMS", "Project");
for ($i = 0; $i < count($course); $i++) {
    echo "<br>" . ($i + 1) . "." . $course[$i];
}
?>

<h2>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump
    information about a variable. array_values() is an inbuilt function that returns all the values of an array and not
    the keys.
    Delete an element from the array below:
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h2>

<?php

$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

unset($courses1[0]);

print_r(array_values($courses1));

?>

<h2>3. Sort the following array
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    a) ascending order sort by value
    b) ascending order sort by Key
    c) descending order sort by Value
    d) descending order sort by Key
</h2>

<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "ascending order sort by value: ";
sort($courses3);
for ($i = 0; $i < count($courses3); $i++) {
    echo $courses3[$i] . " ";
}


$courses3 = array("1" => "PHP", "4" => "HTML", "2" => "JavaScript", "10" => "CMS", "5" => "Project");
echo "<br>ascending order sort by Key: ";
ksort($courses3);
foreach ($courses3 as $i => $i_value) {
    echo $i_value . " ";
}

$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "<br>descending order sort by value: ";
rsort($courses3);
for ($i = 0; $i < count($courses3); $i++) {
    echo $courses3[$i] . " ";
}

$courses3 = array("1" => "PHP", "4" => "HTML", "2" => "JavaScript", "10" => "CMS", "5" => "Project");
echo "<br>descending order sort by Key: ";
krsort($courses3);
foreach ($courses3 as $i => $i_value) {
    echo $i_value . " ";
}


?>

<h2>4. Change the following array's all values to upper case.
    $courses4=array("php", "html", "javascript", "cms", "project");
</h2>

<?php

$courses4 = array("php", "html", "javascript", "cms", "project");

for ($i = 0; $i < count($courses4); $i++) {

    echo strtoupper($courses4[$i]) . " ";

}


?>

<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h2>

<?php

$colors = array("#FF0000" => "red", "#00FF00" => "green", "#0000FF" => "blue", "#0000FF" => "white", "#FFFF00" => "yellow");

echo "Hexadecimal code: ";
foreach ($colors as $hex => $color) {

    echo $hex . "  " . $color . " ";

}


?>


<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures</h2>

<?php

$temperature = array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
$sum = array_sum($temperature);

// Calculating an average temperature
$average = $sum / count($temperature);
echo "Average temperature: " . $average;

// creating an array without any duplicate values
$array = array_unique($temperature);

// sorting array in ascending order
sort($array);

// getting 5 lowest temperatures in array
echo "<br>Five lowest: ";
for ($i = 0; $i < 5; $i++){

    echo  $array[$i] . " ";

}

// sorting array in descending order
rsort($array);

echo "<br>Five highest: ";

// getting 5 highest temperatures in array
for ($i = 0; $i < 5; $i++){

    echo  $array[$i] . " ";

}


?>

<h2>Simple calculator form </h2>

<!-- form -->
<form action="" method="get">
    <div class="form-group">
        <input type="number" placeholder="Enter your first number" name="num1" required step="any">
        <input type="number" placeholder="Enter your second number" name="num2" required step="any">
        <select name="operator" class="form-controll">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <input type="submit" name="cal" value="Calculate" class="btn btn-primary">
    </div>
</form>
<?php
if (isset($_GET["cal"])) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;
        default:
            echo "Error, You have not selected the correct operator";

    }

}

if (isset($result)) {
    echo "<h2> Result: $result </h2>";
}
?>

<?php include 'footer.php' ?>
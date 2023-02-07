<?php include 'header.php';

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$color = $_POST['color'];

$date = $_POST['bdate'];

echo "<h3> Your name is $fname $lname. Your favourite color is $color and your date of birth is $date </h3>";
?>
<?php include 'footer.php'?>
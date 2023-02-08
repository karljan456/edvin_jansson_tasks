<?php include 'header.php';

$age = $_POST['age'];
$name = $_POST['name'];

if ($age >= 18) {
    echo "<h2>" . $name . " can vote<h2>";
} else {
    echo "<h2>" . $name . " cannot vote<h2>";
}
?>
<?php include 'footer.php' ?>
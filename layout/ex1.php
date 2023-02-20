<?php include 'header.php' ?>
<h1>3.1 Write a simple PHP script to print your information (Name and your groupid)</h1>
<?php
echo "Edvin Jansson<br>";
echo "BBCAP22";
?>
<h1>3.2 Write PHP code to display the following message.</h1>
<?php
echo "Hello World! My name is \"David\"";
?>
<h1>3.3 Write the PHP code in to display the current date.</h1>
<?php
echo "Today is " . date("d-m-Y") . "<br>";
?>

<script>
        document.write("Hello World, this is Javascript!");
    </script>

    <noscript>
        Please enable Javascript to view this content.
    </noscript>

<input type="button" onclick="hello()" value="Click me">
<h1></h1>

<script>
    // window.alert
    window.alert("This will trigger an alert box");
    window.alert(5+10);
    document.write("This is interesting");
</script>

<button onclick="add()" >Click to add</button>

<hr>
<p id="place1" style="color:red; background-color:yellow;"></p>
<span id="place2" style="color:red; background-color:green;"></span>


<script>
document.getElementById("place1").innerHTML = "This will go to place1";
document.getElementById("place2").innerHTML = "This will go to span";
</script>

<img src="" alt="">

<h2>Changing background color</h2>
<form action="">
    <input type="color" name="background" onchange="changeBackgroundColor('background', this.value)">
</form>

<?php
?>
<?php include 'footer.php' ?>
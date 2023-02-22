<?php
$title = "JavaScript Events and form validation";
include 'header.php' ?>

<h2>A simple button to display the date</h2>

<button onclick="this.innerHTML = Date()">Click to know the date</button>

<h2>Make a button and a place holder as paragaph for the date</h2>

<button onclick="getElementById('date').innerHTML = Date()">Click to know the date</button>
<p id="date"></p>

<h2>Change the background color</h2>
<form>
    <input id="bg" type="color" onchange="changeColour()">
</form>

<h2>Change the font color</h2>
<form>
    <input id="fc" type="color" onchange="changeFColor()">
</form>

<h2>On Mouse & On Mouse Out</h2>

<span onmouseover="this.style.color = 'red'; this.style.backgroundColor ='green';
this.style.fontSize='5em';" onmouseout="this.style.color = 'yellow'; this.style.backgroundColor ='blue';
this.style.fontSize='2em'">Some text</span>

<?php include 'footer.php' ?>
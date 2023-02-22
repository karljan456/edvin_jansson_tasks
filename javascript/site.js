// a simple function that triggers alert box
function hello() {

    alert("This is an alert");

}

// a simple function to add 2 numbers
function add(){

    document.write(5 + 6);

}
// function to change the background color of the page
function changeBackgroundColor(where, newColor){

    if (where.localeCompare(newColor)){

        document.body.style.backgroundColor = newColor;

    }

}

function changeColour(){

    let color = document.getElementById("bg").value;
    document.body.style.backgroundColor = color;

}

function changeFColor(){

    let fcolor = document.getElementById("fc").value;
    document.body.style.color = fcolor;

}

// crud function
function crud(){

    let fname = (document.form1.fname.value).trim();
    if (fname.length < 5){

        alert("First name must have at least 5 characters");
        return false;
    }

}

function fname(){

    let fname = (document.form1.fname.value).trim();
    if (fname.length < 5){

        alert("First name must have at least 5 characters");
        return false;
    }

}

// document.getElementById(id)
// display or like echo 
// document.write
// window.alert
// innerHTML 
// console.log

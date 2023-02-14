<?php

$title = "Update your info";

include '../tasks/header.php';

include 'db.php';


$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM studentinfo where id = '$id'");

$row = mysqli_fetch_array($result);



?>

<h2>Update your information below</h2>
<form class="form-group"name="update" method="post" action="">
<input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname'];?>" class="form-control"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname'];?>"class="form-control"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>" class="form-control"><br><br>
    <select name="groupid" value="<?php echo $row['groupid'];?>">
        <option value="BBCAP22"> BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>
    </select><br><br>

    <input type="submit" value="Update Your Info" name="update"><br><br>
    <input type="submit" value="Delete Your Info" name="delete"><br><br>
</form>

<?php


if(isset($_POST['update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo SET fname = '$fname', lname = '$lname', city='$city', 
    groupid = '$groupid' WHERE id='$id");

    if($query){

        echo "<h2>The info is updated<h2>";


    } else{

        echo "The info was not updated";

    }

}

if(isset($_POST['delete'])){

    $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id='$id'");

    if($query){

        echo "<h2>The info is deleted<h2>";


    } else{

        echo "The info was not deleted";

    }

}


include '../tasks/footer.php';
?>
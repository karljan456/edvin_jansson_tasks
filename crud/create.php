<?php
$title = 'A simple crud app';
include '../tasks/header.php';

?>


<form method="post" action=""><br><br>
    <input type="text" name="fname" placeholder="First Name" required class="form-control"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required class="form-control"><br><br>
    <input type="text" name="city" placeholder="City" required class="form-control"><br><br>
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>
    </select><br><br>
    <input type="submit" value="Submit" name="submit"><br><br>
</form>

<?php

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    include 'db.php';
    $sql = "Insert into studentinfo (fname, lname, city, groupid)
    values ('$fname', '$lname', '$city', '$groupid')";

    if ($conn->query($sql) === TRUE) {

        echo "Your information is added successfully";

    } else {

        echo "Error" . $conn->error;


    }


}

?>


<?php
include '../tasks/footer.php';

?>
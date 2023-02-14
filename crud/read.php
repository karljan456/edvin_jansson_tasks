<?php
$title = "Reading data from the database";
include '../tasks/header.php';
include 'db.php';

$sql = "SELECT * FROM studentinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table class=\"table\">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Group ID</th>";

    while ($row = $result->fetch_assoc()) {
        echo "
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href='updatesingle.php?id=$row[id]'</a>$row[id]</td>
                <td>$row[fname]</td>
                <td>$row[lname]</td>
                <td>$row[city]</td>
                <td>$row[groupid]</td>
            </tr>
        </tbody>
    
    ";
    }

    echo "</table>";

} else {

    echo "No data to display";

}
$conn->close();

include '../tasks/footer.php';
?>
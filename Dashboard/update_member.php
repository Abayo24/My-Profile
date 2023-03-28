<?php
require_once 'dbconnection.php';
include 'header.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $id = $_POST['id'];

    $sql = "UPDATE members SET fname = '$fname', lname = '$lname', age = '$age', contact = '$contact' WHERE id = {$id}";

    if($link -> query($sql) === TRUE) {
        echo "<p>Successfully Updated</p>";
        echo "<a href = 'edit_member.php?id=".$id."'><button type = 'button'>Back</button></a>";
        echo "<a href = 'show_member.php'><button type = 'button'>Show Member</button></a>";
    } else{
        echo "Error while updating record : ". $link -> error;
    }

    $link -> close();
}

include 'footer.php';

?>
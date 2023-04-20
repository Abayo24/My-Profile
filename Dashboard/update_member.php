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
        echo "<p class= 'text-success'>Successfully Updated!</p>";
        echo "<a href = 'edit_member.php?id=".$id."'><button type = 'button' id='btn'>Back</button></a>";
        echo "<a href = 'show_member.php'><button type = 'button' id='btn'>Show Students</button></a>";
    } else{
        echo "Error while updating record!: ". $link -> error;
    }

    $link -> close();
}

include 'footer.php';

?>
<style type="text/css">
    #btn{
            width: 150px;
            border-radius: 20px;
            padding: 5px;
            margin-right: 30px;
            background-color: #a93226;
            color: white;
        }
   
</style>
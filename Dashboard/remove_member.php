<?php
require_once 'dbconnection.php';
include 'header.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "DELETE FROM members WHERE id = {$id}";

    if($link -> query($sql) === true){
        echo "<p>Successfully Deleted</p>";
        echo "<a href = 'show_member.php'><button type = 'button'>Back</button></a>";
    }else{
        echo "Error while deleting record : ". $link -> error;
    }

    $link -> close();
}

include 'footer.php';
?>
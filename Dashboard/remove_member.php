<?php
require_once 'dbconnection.php';
include 'header.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "DELETE FROM members WHERE id = {$id}";

    if($link -> query($sql) === true){
        echo "<p class='text-success'>Successfully Deleted!</p>";
        echo "<a href = 'show_member.php'><button type = 'button' id='btn'>Back</button></a>";
    }else{
        echo "Error while deleting record : ". $link -> error;
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
            
            background-color: #a93226;
            color: white;
        }
   
</style>
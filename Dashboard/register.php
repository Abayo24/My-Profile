<?php
extract($_POST);
include("dbconnection.php");
$sql = mysqli_query($link, "SELECT * FROM register WHERE Email = '$email'");
if(mysqli_num_rows($sql) > 0) {
    echo "Email Id Already Exists";
    exit;
}
else if(isset($_POST['save'])) {
    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];

    $file_loc = $_FILES['file']['tmp_name'];
    $folder = "upload/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    
    if(move_uploaded_file($file_loc, $folder.$final_file)) {
        $query = "INSERT INTO register(First_Name, Last_Name, Email, Password, File) VALUES ('$first_name', '$last_name', '$email', md5($pass), '$final_file')";
        $sql = mysqli_query($link, $query) or die("Could Not perform the Query");
        header("Location: log_in.php?status=success");
    }
    else{
        echo "Error. Please try again";
    }
}
?>
<?php include 'header.php'; ?>
<?php require_once 'dbconnection.php';
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO members (fname, lname, age, contact) VALUES ('$fname', '$lname', '$age', '$contact')";
    if($link->query($sql) === TRUE){
        echo "<p class='text-success'> New Record Successfully Created!</p>";
        echo "<a href='show_member.php'><button type='button' id='btnn'>View Members</button></a>";
        echo "<a href='welcome.php'><button type='button' id='btnn'>Home</button></a>";
    }else{
        echo "Error" . $sql . ' ' . $link->connect_error;
    }

    $link->close();
}
?>

<style type="text/css">
    fieldset{
        margin: auto;
        margin-top: 50px;
        width: 70%;
    }

    table tr th {
        padding-top: 20px;
    }
    legend{
        color: #a93226;
    }
    #btn{
            width: 150px;
            border-radius: 20px;
            padding: 5px;
            margin-top: 30px;
            background-color: #a93226;
            color: white;
        }
    #btnn{
        width: 150px;
        border-radius: 20px;
        padding: 5px;
        margin-right: 30px;
        background-color: #a93226;
        color: white;
    }
</style>

<fieldset>
    <legend>Add Student</legend>

    <form action="add_member.php" method="post">
        <table cellspacing="3rem" cellpadding="3rem" >
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder=""></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder=""></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" placeholder=""></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact" placeholder=""></td>
            </tr>
            <tr>
                <td><button type="submit" id="btn">Save Changes</button></td>
                <td><a href="show_member.php" ><button type="button" id="btn">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>

<?php include 'footer.php'; ?>
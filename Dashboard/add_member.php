<?php include 'header.php'; ?>
<?php require_once 'dbconnection.php';
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO members (fname, lname, age, contact) VALUES ('$fname', '$lname', '$age', '$contact')";
    if($link->query($sql) === TRUE){
        echo "<p> New Record Successfully Created</p>";
        echo "<a href='show_member.php'><button type='button'>View Members</button></a>";
        echo "<a href='welcome.php'><button type='button'>Home</button></a>";
    }else{
        echo "Error" . $sql . ' ' . $link->connect_error;
    }

    $link->close();
}
?>

<style type="text/css">
    fieldset{
        margin: auto;
        margin-top: 100px;
        width: 50%;
    }

    table tr th {
        padding-top: 20px;
    }
</style>

<fieldset>
    <legend>Add Member</legend>

    <form action="add_member.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name"></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" placeholder="Age"></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact" placeholder="Contact"></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="show_member.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>

<?php include 'footer.php'; ?>
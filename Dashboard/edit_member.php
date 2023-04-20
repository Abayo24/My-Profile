<?php require 'dbconnection.php'; ?>
<?php include 'header.php'; ?>
<?php

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM members WHERE id = {$id}";
    $result = $link -> query($sql);

    $data = $result -> fetch_assoc();

    $link -> close();
?>

<style>
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
            margin-right: 30px;
            background-color: #a93226;
            color: white;
        }
</style>
</style>

<fieldset>
<legend>Edit Student</legend>

<form action="update_member.php" method="post">
    <table cellspacing="0" cellpadding="0">
        <tr>
            <th>First Name</th>
            <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fname'] ?>"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname'] ?>"></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>"></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td><input type="text" name="contact" placeholder="Contact" value="<?php echo $data['contact'] ?>"></td>
        </tr>
        <tr>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <td><button type="submit" id="btn">Save Changes</button></td>
            <td><a href="show_member.php"><button type="button" id="btn">Back</button></a></td>
        </tr>
    </table>
</form>
</fieldset>
<?php } ?>

<?php include 'footer.php'; ?>

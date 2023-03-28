<?php require_once 'dbconnection.php';
include 'header.php'; ?>



    <style type="text/css">
        .manageMember{
            width: 600px;
            margin: auto;
        }
        table{
            width: 100%;
            margin-top: 20px;
        }
    </style>

    <div class="manageMember">
    <a href="add_member.php"><button type="button">Add Member</button></a>
    <table border = "1" cellspacing ="2rem" cellpadding="5rem">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
        <?php
$sql = "SELECT * FROM members";
$result = $link->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row['fname']." ".$row['lname']."</td>
        <td>".$row['age']."</td>
        <td>".$row['contact']."</td>
        <td><a href ='edit_member.php?id=".$row['id']."'><button type='button'>Edit</button></a></td>
        <td><a href ='remove_member.php?id=".$row['id']."'><button type='button'>Remove</button></a></td>
        </tr>";
    }
}else{
    echo "<tr>
    <td colspan='5'><center>No Data Available</center></td>
    </tr>";
}
?>
        </tbody>
    </table>
    </div>

    <?php include 'footer.php'; ?>
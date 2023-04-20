<?php require_once 'dbconnection.php';
include 'header.php'; ?>



    <style type="text/css">
        .manageMember{
            width: 800px;
            margin: auto;
        }
        table{
            width: 100%;
            margin-top: 20px;
        }

        #btn{
            width: 150px;
            border-radius: 20px;
            padding: 5px;
            background-color: #a93226;
            color: white;
        }
    </style>

    <div class="manageMember">
    <a href="add_member.php"><button type="button" id="btn">Add Student</button></a>
    <table border = "1" class="table table-hover" cellspacing ="3rem" cellpadding="5rem">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Edit</th>
                <th>Delete</th>
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
        <td><a href ='edit_member.php?id=".$row['id']."'><button type='button' id='btn'>Edit</button></a></td>
        <td><a href ='remove_member.php?id=".$row['id']."'><button type='button' id='btn'>Remove</button></a></td>
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
<?php

include_once("connections/connection.php");
// debugger
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$con = connection();

$sql = "SELECT * FROM student_list";
$students = $con->query($sql) or die($con->error);
$row = $students->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMS</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <h1>Student Management System</h1>
        <br><br>
        <!-- button to add new student -->
        <a href="add.php"> Add New</a>
        <table>
                <thead>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                </tr>      
                </thead>
                <tbody>
                    <?php do{ ?>
                <tr>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                </tr>  
                    <?php }while($row = $students->fetch_assoc())?>
                </tbody>  
        </table>

</body>
</html>
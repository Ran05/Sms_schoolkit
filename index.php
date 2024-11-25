<?php

$host = "localhost";
$username = "root";
$password = "12345";
$database = "student_system";

// debugger

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//sqliconnection

$con = new mysqli($host,$username,$password,$database);


//check connection

if($con->connect_error){
        echo $con->connect_error;
} else{
//     echo "Connected";
}



$sql = "SELECT * FROM student_list";
$students = $con->query($sql) or die($con->error);
$row = $students->fetch_assoc();


?>

<style>

 table{
        border-collapse: collapse;
        width: 100%;
 }

 th,td{
        text-align:left;
        padding: 8px;
 }


 tr:nth-child(even){
        background-color: #f2f2f2;
 }

</style>




<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMS</title>
</head>
<body>
        <h1>Student Management System</h1>
        <br><br>

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
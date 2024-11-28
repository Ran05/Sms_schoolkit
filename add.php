<?php

include_once("connections/connection.php");
// debugger
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$con = connection();


if(isset($_POST['submit'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];


  $sql = "INSERT INTO `student_list`(`first_name`, `last_name`, `birth_day`,`gender`) 
  VALUES ('$fname','$lname','$birthday','$gender')";

   $con->query($sql) or die($con->error);

}



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
        <form action="" method="post">
        <label>First Name</label>    
        <input type="text" name="firstname" id="firstname">

        <label>Last Name</label>    
        <input type="text" name="lastname" id="lastname">

        <label>Birthday</label>    
        <input type="text" name="birthday" id="birthday">

        <label>Gender</label>    
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <input type="submit" name="submit"value="Submit Form">

        </form>
</body>
</html>
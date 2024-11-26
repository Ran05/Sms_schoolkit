<?php


function connection(){
    $host = "localhost";
    $username = "root";
    $password = "12345";
    $database = "student_system";
    
    //sqliconnection

    $con = new mysqli($host,$username,$password,$database);
    //check connection

    if($con->connect_error){
            echo $con->connect_error;
    } else{
        return $con;
    }

}




?>
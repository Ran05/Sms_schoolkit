<?php


function connection(){
    $host = "127.0.0.1:3306";
    $username = "u450897284_admin";
    $password = "@Thelastkidds05!!@";
    $database = "u450897284_student_system";
    
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
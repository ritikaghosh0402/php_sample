<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="topstack";
    $con=new mysqli($host, $username, $password, $database);
    if($con->connect_error){
        die("Error:".$con->connect_error);}
    // else{
    //     echo "File connected to Database -> TOPSTACK"."<br>";
    // }
?>
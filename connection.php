<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "mindful";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    
    //cheking connection
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";


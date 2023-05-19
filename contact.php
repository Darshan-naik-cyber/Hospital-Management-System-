<?php

    $username = $_POST['username']; 
    $PhoneNumber = $_POST['PhoneNumber']; 
    $Email = $_POST['Email'];
    $uMessage = $_POST['uMessage'];

    if (!empty($username) || !empty($PhoneNumber) || !empty($Email)) {
        $host = "localhost" ; 
        $dbUsername = "root" ; 
        $dbPassword = "" ; 
        $dbname = "login" ;
        
        $conn = new mysqli($host , $dbUsername , $dbPassword , $dbname) ; 
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()) ; 
        }
        else {
            $INSERT = "INSERT Into contact(username , PhoneNumber , Email, uMessage) values( ? , ? , ?, ?)" ; 
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssss" , $username , $PhoneNumber , $Email, $uMessage);  
                $stmt->execute();
                echo "Details Submitted Successfully !"; 
            $stmt->close() ; 
            $conn->close() ; 
        }

    }
    else{
        echo "Please fill all fields" ; 
        die() ; 
    } 
    header("refresh:3; url=index.html");


?>
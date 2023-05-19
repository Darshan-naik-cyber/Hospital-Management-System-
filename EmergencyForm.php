<?php

    $NameOrPhone = $_POST['NameOrPhone']; 
    $details = $_POST['details']; 
    $files = $_FILES['file']; 
    $latitude = $_POST['latitude']; 
    $longitude = $_POST['longitude'];

    if (!empty($NameOrPhone) || !empty($details) || !empty($files)) {
        $host = "localhost" ; 
        $dbUsername = "root" ; 
        $dbPassword = "" ; 
        $dbname = "login" ;
        
        $conn = new mysqli($host , $dbUsername , $dbPassword , $dbname) ;

        $filename = $files['name']; 
        $fileerror = $files['error']; 
        $filetmp = $files['tmp_name'];
        $fileext = explode('.', $filename);  
        $filecheck = strtolower(end($fileext)); 
        $fileextstored = array('jpg', 'png', 'jpeg'); 

        if(in_array($filecheck, $fileextstored)){
            $destinationfile = 'upload/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);  
        }

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()) ; 
        }
        else {
            $INSERT = "INSERT Into emergencytable(NameOrPhone , details , photo, latitude,longitude) values(?,?,?,?,?)" ; 
    
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss" , $NameOrPhone , $details , $destinationfile , $latitude ,$longitude);  
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
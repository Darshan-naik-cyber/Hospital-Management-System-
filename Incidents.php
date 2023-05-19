<?php
    $Incident1 = $_POST['Incident1']; 
    $Incident2 = $_POST['Incident2']; 
    $Incident3 = $_POST['Incident3']; 

    if (!empty($Incident1) || !empty($Incident2) || !empty($Incident3)) {
        $host = "localhost" ; 
        $dbUsername = "root" ; 
        $dbPassword = "" ; 
        $dbname = "login" ;
        
        $conn = new mysqli($host , $dbUsername , $dbPassword , $dbname) ; 
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()) ; 
        }
        else {
            $Del = "TRUNCATE TABLE `IncidentTable`";
            $result = mysqli_query($conn, $Del);
            $INSERT = "INSERT Into IncidentTable(Incident1 , Incident2 , Incident3) values(? , ? , ?) " ;  
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss" , $Incident1 , $Incident2 , $Incident3);  
                $stmt->execute();
                echo "Details Submitted Successfully ! " ;  
            $stmt->close() ; 
            $conn->close() ;
            header("Refresh:3; url=admin.php"); 
        }
    }
    else{
        echo "Please fill all fields" ; 
        die() ; 
    }

?>
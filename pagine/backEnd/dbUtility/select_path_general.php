<?php
function select_path_general( $email) {
    
    include "connect.php";
    
    
    $sql="SELECT path_general  FROM registrazione  WHERE email='".$email."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            $path_general=$row["path_general"];
            
        }
    }else {
        echo "0 results"  ;
    }
    $conn->close();
    return $path_general;
}


?>
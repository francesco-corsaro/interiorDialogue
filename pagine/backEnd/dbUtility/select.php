<?php
function select_id( $email) {
    
   include "connect.php";
    
    
    $sql="SELECT Id, email, nome FROM registrazione  WHERE email='".$email."'";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            global $id;
            $id=$row["Id"];
            global $nome;
            $nome=$row["nome"];
            
        }
    }else {
        echo "0 results"  ;
    }
    $conn->close();
}



?>
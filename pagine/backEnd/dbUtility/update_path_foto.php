<?php
function update_path_foto( $path,$id) {
    
    include "connect.php";
    
    // prepare and bind
    $stmt = $conn->prepare("UPDATE registrazione SET path_general=? WHERE Id=? ");
    $stmt->bind_param("si",$path,$id);
   
   
    $stmt->execute();
    
   echo'Updated';
    
    $stmt->close();
    $conn->close();
}


?>
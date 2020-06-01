<?php
function insert_path_buono($email,$path) {
    include 'connect.php';
    
    // prepare and bind
    $stmt = $conn->prepare("UPDATE registrazione SET path_buono=? WHERE 	email=?");
    $stmt->bind_param("ss", $path, $email);
    
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
}
?>
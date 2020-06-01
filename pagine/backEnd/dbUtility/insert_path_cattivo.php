<?php
function insert_path_cattivo($email,$path) {
    include 'connect.php';
    
    // prepare and bind
    $stmt = $conn->prepare("UPDATE registrazione SET path_cattivo=? WHERE 	email=?");
    $stmt->bind_param("ss", $path, $email);
    
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
}
?>
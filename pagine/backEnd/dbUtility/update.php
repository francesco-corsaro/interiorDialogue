<?php
function update_account( $nome,$cognome, $eta,$genere,$email) {
    
    $servername = "localhost";
    $username = "mytraining";
    $password = "";
    $dbname = "my_mytraining";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare and bind
    $stmt = $conn->prepare("UPDATE registrazione SET nome=?, cognome=?, eta=?, genere=?  WHERE email=? ");
    $stmt->bind_param("ssiis",$nome,$cognome, $eta,$genere,$email);
   
   
    $stmt->execute();
    
   echo'Updated';
    
    $stmt->close();
    $conn->close();
}

?>
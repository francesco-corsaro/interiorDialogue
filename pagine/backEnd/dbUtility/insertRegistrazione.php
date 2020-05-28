<?php

function insert_registrazione($nom,$emai,$pwd) {

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
    $stmt = $conn->prepare("INSERT INTO registrazione (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email,$pass);
    
    // set parameters and execute
    $nome = $nom;
    $email = $emai;
    $pass=$pwd;
    $stmt->execute();
    
    echo "New records created successfully";
    
    $stmt->close();
    $conn->close();
}
?>


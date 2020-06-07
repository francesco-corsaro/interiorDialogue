<?php
header('Content-type:text/html; charset=UTF-8');
$tabel='francescocorsaropsigmailcom';


    include 'connect.php';
    
    $conn-> query( 'SET NAMES utf8' ); //IMPORTANTE: per visualizzare gli accenti 
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO ".$tabel." (partOfMe, message) VALUES (?, ?)");
    $stmt->bind_param("is", $partOfMe, $message);
    
    // set parameters and execute
    $partOfMe=1;
    $message='questa è  à  , : ? =)(/&%$£"! éç@  \' una èùàò prova';
    $stmt->execute();
    
    echo "New records created successfully ".$message."<br>";
    echo $conn->error;
    
    $stmt->close();
    $conn->close();


?>


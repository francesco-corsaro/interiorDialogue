<?php
session_start();

header('Content-type:text/html; charset=UTF-8');
$tabel=$_SESSION['utente'];
$tabel=str_replace('@', '', $tabel);
$tabel=str_replace('.', '', $tabel);
$riceived=array();
$riceived=$_GET['q'];


    include 'connect.php';
    
    $conn-> query( 'SET NAMES utf8' ); //IMPORTANTE: per visualizzare gli accenti 
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO ".$tabel." (partOfMe, message) VALUES (?, ?)");
    $stmt->bind_param("is", $partOfMe, $message);
    
    // set parameters and execute
    $partOfMe=substr($riceived, -1);
    
    $message=substr($riceived, 0, -2);
    $stmt->execute();
    
    //echo "New records created successfully ".$message."<br>";
    
    echo $conn->error;
    
    $stmt->close();
    $conn->close();

   
    include 'connect.php';
    
    $sql = "SELECT * FROM ".$tabel." ORDER BY progressivo ASC";
    $result = $conn->query($sql);
    
    
    if ($result->num_rows > 0) {
        echo '<div class="conversation">';
        while($row = $result->fetch_assoc()) {
            if ($row["partOfMe"]==1) {
                echo '<div class="lft">';
            }elseif ($row["partOfMe"]==2){
                echo '<div class="center">';
            }else {
                echo '<div class="rght">';
            }
            echo '<div class="message">'.$row["message"].'</div>';
            echo '<div class="time">'.$row['reg_date'].'</div>';
            echo '</div>'; //close div lft/center/rght
        }
        echo'</div>';
    } else {
        echo "0 results";
    }
    $conn->close();
    
    

?>


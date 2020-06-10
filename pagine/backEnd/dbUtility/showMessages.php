<?php
session_start();

$tabel=$_SESSION['utente'];
$tabel=str_replace('@', '', $tabel);
$tabel=str_replace('.', '', $tabel);

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
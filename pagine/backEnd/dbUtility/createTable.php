<?php
function create_table($tabel) {
    $tabel=str_replace('@', '', $tabel);
    $tabel=str_replace('.', '', $tabel);
    
include 'connect.php';

// sql to create table
$sql = "CREATE TABLE $tabel (
progressivo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
partOfMe INT(2) NOT NULL,
message VARCHAR(5000) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
/*
$nome='pro.va@prova.it';
$nome=str_replace('@', '', $nome);
$nome=str_replace('.', '', $nome);
echo '<br>'.$nome.'<br>';
create_table('p.r.o.va@pro.va.it');*/
?>
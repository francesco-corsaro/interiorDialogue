<?php
session_start();
//Questo programma crea la cartella ed manda alla pagina per carica la foto del gnitore cattivo

if (!is_dir($_SESSION['pathDir'])) {
    mkdir( $_SESSION['pathDir'],0755);
    header("location: http://mytraining.altervista.org/interiorDialogue/pagine/caricaGenitore.php");// questa è la pagina del genitore cattivo
} else {
    header("location: http://mytraining.altervista.org/interiorDialogue/pagine/login.php");
}

echo $_SESSION['pathDir'];



error_reporting(E_ALL);

?>
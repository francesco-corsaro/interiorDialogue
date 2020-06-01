<?php

require 'dbUtility/utility.php';

update_account( $_POST['nome'],$_POST['cognome'],$_POST['eta'],$_POST['genere'],$_SESSION['utente']); //bisogna impostare il bypass

require 'mail/mailSend.php'; //manda una mail con le informazioni del contatto

$corpo='<div style="width: inherit;background-color: #f5f5dc;padding: 20px; text-align: center;">
            <h3 style="text-align: center;">PsyHub</h3>
            <p>Ciao '.$_SESSION['username'].',<br>il tuo account è adesso attivo:</p>
            <div style="width: 90%; text-align: center;background-color: #e9e9af;padding: 15px; display: block;margin: auto;">
                Username: '.$_SESSION['utente'].'
                <br>
                Password:
                <a href="http://mytraining.altervista.org/interiorDialogue/pagine/login.php" style="  text-decoration: none;display: block; width: 20%;padding: 6px; margin-top: 30px;margin-left: auto; margin-right: auto; color: whitesmoke ;background-color: #c4c487;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);border-radius: 25px; ">Accedi</a>

            </div>
        </div>';
sendAemail($_SESSION['username'],$_SESSION['utente'],$corpo);

//creo la cartella per caricare le foto

//prelevo l'id
select_id( $_SESSION['utente']);
//creo il nome della cartella dell'utente utilizzando username e password
$_SESSION['pathDir']=$nome.$id;

//salvo il nome della cartella nel databse
update_path_foto($_SESSION['pathDir'] ,$id);

//invio il programma per creare la cartella
header("location: http://mytraining.altervista.org/interiorDialogue/pagine/backEnd/foto/mkdir.php");



?>    
<?php

require 'dbUtility/utility.php';

update_account( $_POST['nome'],$_POST['cognome'],$_POST['eta'],$_POST['genere'],$_SESSION['utente']); //bisogna impostare il bypass

require 'mail/mailSend.php'; //manda una mail con le informazioni del contatto

$corpo='Ciao '.$_POST['username'].',<br>per attivare il tuo account clicca qui <br><br>#####<br><br> http://mytraining.altervista.org/interiorDialogue/pagine/account.php<br><br>#####<br><br> Dopo aver cliccato sul link sopra riceverai una seconda mail di conferma e le tue credenziali che ti anticiapiamo di seguito.<br><br> Username: '.$_POST['email'].'<br><br>Grazie,<br>Staff PsyHub<br>';
sendAemail($_SESSION['username'],$_SESSION['utente'],$corpo);
?>
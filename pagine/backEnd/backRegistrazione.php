<?php
require 'dbUtility/utility.php';
require 'mail/mailSend.php';

insert_registrazione($_POST['username'],$_POST['email'],$_POST['pwd1']);
$corpo='Ciao '.$_POST['username'].',<br>per attivare il tuo account clicca qui <br><br>#####<br><br> http://mytraining.altervista.org/interiorDialogue/pagine/account.php<br><br>#####<br><br> Dopo aver cliccato sul link sopra riceverai una seconda mail di conferma e le tue credenziali che ti anticiapiamo di seguito.<br><br> Username: '.$_POST['email'].'<br><br>Grazie,<br>Staff PsyHub<br>';
sendAemail($_POST['username'],$_POST['email'],$corpo);

$_SESSION['utente']=$_POST['email'];
$_SESSION['username']=$_POST['username'];

header("location: http://mytraining.altervista.org/interiorDialogue/pagine/paginaConferma.php");
?>
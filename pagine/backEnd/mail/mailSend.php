

<?php
function sendAemail($utente,$destinatario,$corpo) {
    

$mittente='corsaro.francesco.psi@gmail.com';

$oggetto='Attiva il tuo account PsyHub';


// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To:'.$destinatario;
$headers[] = 'From: PsyHub <'.$mittente.'>';
$headers[] = 'Cc: ';
$headers[] = 'Bcc: ';
mail($destinatario, $oggetto, $corpo,  implode("\r\n", $headers));

//francesco.corsaro.psi@gmail.com' 

}


?>

<?php
session_start();
?>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Conferma </title>
    	<link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body >
    	<div class="img" >
        	<h1>Dialogo Interiore</h1>
        	
        	<div class="roi">
        	  Ti abbiamo inviatio un messaggio all'indirizzo <?php echo $_POST['email'] ?>.<br>
        	  per completare la registrazione clicca sul link che trovi nell'email
        	</div>
         </div>
     </body>
 </html>
    	
<?php
session_start();
if (isset($_POST['nome']) && isset($_POST['cognome'])&& isset($_POST['eta'])&& isset($_POST['genere']) ) {
    require 'backEnd/backAccount.php';
}
?>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Account </title>
    	<link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/bottonRadio.css">
    </head>
    
    <body >
    	<div class="img">
        	<h1>Dialogo Interiore</h1>
        	<div class="roi">
        	  Completa il tuo profilo
        	</div>
        	<div>
        	 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  >
        	 	<div class="cont-form">
        	 	
        	 		<input name="nome" type="TEXT" class="input-field" placeholder="Nome" data-validate="Per favore, inserisci il nome"  required>
        	 		<input name="cognome" type="TEXT" class="input-field" placeholder="Cognome" data-validate="Per favore, inserisci il cognome" required>
        	 		<br>
        	 		<input name="eta" type="number" class="input-field" placeholder="Età" min="14" max="99" required>
        	 		
        	 		<div class="container-genere roi">
            				Genere:	<label class="contenitore" >
                						<input  name="genere" id="gen" type="radio" value="1" required/>
                						<span class="buttondo"></span>
                						M 
                					</label>
                					<label class="contenitore" >	
                		   				<input  name="genere" id="gen2" type="radio" value="2" required />
                    		   			<span class="buttondo"  ></span>
                    		   			F
                					</label>
                	</div>
                	
                	<input type="submit" value="Registrati"/>
                	               	
        	 	</div>
        	 </form>
        	</div>
    	</div>
    </body>
</html>
    	 	
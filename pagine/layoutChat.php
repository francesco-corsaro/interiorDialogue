<?php 
session_start();
?>
<html>
    <head>
        <title>Chat dialogo interno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/selectGen.css"> 
    </head>
    <body>
        <h1>Dialogo interno</h1>
        <div class="conversationField" id="txtHint"></div>
        
        <div id="mustBeShowed"></div> <!-- serve per mostrare l'utimo messaggio-->
        
        <div class="wirting" >
            <div>
                <button class="cattivo" id="cattivo" value="1">Cattivo</button>

                <button class="io" id="io" value="2">IO</button>

                <button class="buono" id="buono" value="3">Buono</button>
            </div>
                <textarea class="box" id="myMex"></textarea>
                <button id="invia">Invia</button>
                <script src="sendMessage.js"></script>
                <script src="showMessage.js"></script>
            
        </div>
       
    </body>
</html>
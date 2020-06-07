<?php
session_start();
?>

<html>
<body>

<form action="backEnd/backGenBuono.php" method="post" enctype="multipart/form-data">
    <p>Seleziona l'immagine da caricare</p>
    <p>Inserisci il tuo genitore buono</p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    
    <input type="text" name="proprietario" id="proprietario" placeholder="Inserisci il nome">
  <br>  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>






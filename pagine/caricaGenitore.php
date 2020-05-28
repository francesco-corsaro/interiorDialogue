<?php
?>
<!DOCTYPE html>
<html>
<body>

<form action="Carica_Img.php" method="post" enctype="multipart/form-data">
    Seleziona l'immagine da caricare<br>
    <p>Inserisci il tuo genitore cattivo</p>
    <input type="file" name="fileToUpload" id="fileToUpload">  
    <br>
    <p>Inserisci il tuo genitore buono</p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="text" name="proprietario" id="proprietario" placeholder="Inserisci il nome">
  <br>  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>






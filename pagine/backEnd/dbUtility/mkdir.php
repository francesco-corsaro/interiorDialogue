<?php
$name="cor3";
$path='http://mytraining.altervista.org/interiorDialogue/pagine/img/'. $name;
$path1= $_SERVER['DOCUMENT_ROOT']."/interiorDialogue/pagine/img/".$name;
echo 'http://mytraining.altervista.org/interiorDialogue/pagine/img/dialogoInterno1.jpg';
echo '<br>'.$path;
echo '<br>'.$path1;
echo  '<br>'.$_SERVER['DOCUMENT_ROOT'].'/interiorDialogue/pagine/img/';
mkdir("http://mytraining.altervista.org/interiorDialogue/pagine/foto/". $name,0755);



 error_reporting(E_ALL);

?>
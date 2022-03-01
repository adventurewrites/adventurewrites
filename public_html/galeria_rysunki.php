<?php
  include 'funkcje.php';
  include 'conf.php';
  $podroze1 = '<p class="p3">Rysunki<br>';

//-----------------------------------RYSUNKI-----------------------
$podroze1.='<p class="p1">Kliknij w obrazek, żeby powiększyć<br>';
  $podroze1.= foto_line_art('galeria//rysunki/arysunek',1,7,'_s');
include 'backtogallery.php';

//require_once("funkcje.php");
//data_index($podroze1,'meta data próbne ąśćŚ');
?>

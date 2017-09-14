<?
  $text = 'Szanowni Państwo!\n';
  $text = 'Dziękujemy za wykonanie zakupów w sklepie internetowym www.cosiki.go.pl\n';
  $text.= 'Prosimy o potwierdzenie następującego zamówienia:\n';
  $text.= '\n';
  $text.= 'Z A M Ó W I E N I E   N R   '.$row["zam_nr"].'/'.$row["zam_id_kon"].'\n';
  $text.= '+------------------------------------------------------------------+\n';
  $text.= '\n';
  $text.= '\n';
  $path = 'http://'.$path_href_root.'index3.php?zam='.$row["zam_nr"].'&kh='.$row["zam_id_kon"];
  $text.= $path.'\n';
  $text.= 'Zapraszamy ponownie\n';
?>

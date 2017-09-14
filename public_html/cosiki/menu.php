<?
  $menu_licznik='Rafał Sowiak 2002-2013';
  if ($english!=1)
//Polish version
  {
    $menu1 = '<br><br><p>
              <a href=index.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Strona główna</a><br>
              <a href=przyjaciele.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Dla przyjaciół</a><br>
              <a href=prace.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Prace własne</a><br>
              <a href=about.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Kontakt</a><br>
              ';
  }
  else
//English version
  {
    $menu1 = '<br><br><p>
              <a href=index.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Main page</a><br>
              <a href=przyjaciele.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>For friends</a><br>
              <a href=prace.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Own works</a><br>
              <a href=about.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Contact with author</a><br>
              ';
  }
?>

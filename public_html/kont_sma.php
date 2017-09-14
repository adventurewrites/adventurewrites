<?php
    include "menu.php";
    define('lewy1','lewy1');
	define('kontakt1','kontakt1');
	define('kontakt2','kontakt2');
	define('licznik','licznik');
	define('menu1','menu1');
    $lewy1 = 'Odbiło ci, zbzikowałeś, dostałeś fioła. Ale coś ci powiem w sekrecie. Tylko wariaci są coś warci.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
    $kontakt2 = '<p class="p1">Facebook: <a href="https://www.facebook.com/rafaltheowl">https://www.facebook.com/rafaltheowl</a>';
    $kontakt2 .= '<p class="p1">Twitter: <a href="https://twitter.com/adventurewrites">https://twitter.com/adventurewrites</a>';
    $kontakt2 .= '<p class="p1">Instagram: <a href="https://www.instagram.com/adventurewrites">https://www.instagram.com/adventurewrites/</a><br>';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->compile_check = true;
//  $smarty->debugging = true;
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(kontakt1,$kontakt1);
  $smarty->assign(kontakt2,$kontakt2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('kontakt.tpl');
?>

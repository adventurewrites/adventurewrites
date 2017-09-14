<?php
    include "menu.php";

	define('menu1','menu1');
	define('lewy1','lewy1');
	define('licznik','licznik');
	define('samochody1','samochody1');
	define('samochody2','samochody2');
	
    $lewy1 = 'Odbiło ci, zbzikowałeś, dostałeś fioła. Ale coś ci powiem w sekrecie. Tylko wariaci są coś warci.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
    $samochody2 = '';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->compile_check = true;
//  $smarty->debugging = true;
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(samochody1,$samochody1);
  $smarty->assign(samochody2,$samochody2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('samochody.tpl');
?>

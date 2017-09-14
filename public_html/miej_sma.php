<?php
    include "menu.php";
	define('menu1','menu1');
	define('lewy1','lewy1');
	define('miejsca1','miejsca1');
	define('miejsca2','miejsca2');
	define('licznik','licznik');
    $lewy1 = 'Odbiło ci, zbzikowałeś, dostałeś fioła. Ale coś ci powiem w sekrecie. Tylko wariaci są coś warci.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
    $miejsca2 = '';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->compile_check = true;
//  $smarty->debugging = true;
//  $smarty->assign(tryb_tekstowy,$tryb_tekstowy);
//  $smarty->assign(english,$english);
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(miejsca1,$miejsca1);
  $smarty->assign(miejsca2,$miejsca2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('miejsca_magiczne.tpl');
?>

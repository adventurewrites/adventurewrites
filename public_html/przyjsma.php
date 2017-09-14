<?php
    include "menu1.php";
	define('menu1','menu1');
	define('licznik','licznik');
	define('lewy1','lewy1');
	define('przyjaciele1','przyjaciele1');
	define('przyjaciele2','przyjaciele2');
    $lewy1 = 'Odbiło ci, zbzikowałeś, dostałeś fioła. Ale coś ci powiem w sekrecie. Tylko wariaci są coś warci.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
    $przyjaciele2 = '';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->compile_check = true;
//  $smarty->debugging = true;
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(przyjaciele1,$przyjaciele1);
  $smarty->assign(przyjaciele2,$przyjaciele2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('przyjaciele.tpl');
?>

<?php
    include "menu.php";

	define('menu1','menu1');
	define('licznik','licznik');
	define('lewy1','lewy1');
	define('prace_wlasne1','prace_wlasne1');
	define('prace_wlasne2','prace_wlasne2');

    $lewy1 = 'Odbiło ci, zbzikowałeś, dostałeś fioła. Ale coś ci powiem w sekrecie. Tylko wariaci są coś warci.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
    $prace_wlasne2 = '';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->compile_check = true;
//  $smarty->debugging = true;
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(prace_wlasne1,$prace_wlasne1);
  $smarty->assign(prace_wlasne2,$prace_wlasne2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('prace_wlasne.tpl');
?>

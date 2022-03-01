<?php
    include "menu.php";

	define('menu1','menu1');
	define('licznik','licznik');
	define('podroze1','podroze1');
	define('podroze2','podroze2');
	define('lewy1','lewy1');

    $lewy1 = 'W tym właśnie sęk, że Czas nie znosi, aby go zabijano. Gdybyś była z nim w dobrych stosunkach zrobiłby dla Ciebie z
    twoim zegarem wszystko, co byś tylko chciała.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
      $podroze2 = '<a href=galeria.php>Wróć do galerii</a><h7>';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->compile_check = true;
//  $smarty->debugging = true;
//  $smarty->assign(tryb_tekstowy,$tryb_tekstowy);
//  $smarty->assign(english,$english);
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(podroze1,$podroze1);
  $smarty->assign(podroze2,$podroze2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('podroze.tpl');
?>

<?php
    include "menu.php";

	define('menu1','menu1');
	define('licznik','licznik');
	define('podroze1','podroze1');
	define('podroze2','podroze2');
	define('lewy1','lewy1');

    $lewy1 = 'W tym właśnie sęk, że Czas nie znosi, aby go zabijano. Gdybyś była z nim w dobrych stosunkach zrobiłby dla Ciebie z
    twoim zegarem wszystko, co byś tylko chciała.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
      $podroze2 = 'Inne relacje';
      $podroze2.='<br>
                 <b>Polska</b><br>
                 <a href=jasna_gora.php>Jasna Góra, 2000-2009</a>,
                 <a href=pomorze2008.php>Pomorze Zachodnie, sierpień 2008</a>,
                 <a href=ochodzita2007.php>Ochodzita 2007</a>,
                 <a href=beskidy2006.php>Beskidy 2006</a>,
                 <a href=oswiecim2006.php>Oświęcim 2006</a>,
                 <a href=niesulice2006.php>Niesulice 2006</a>,
                 <a href=kluczbork2006.php>Miejsca z delegacji 2000-2007</a>,
                 <a href=sulechow2005.php>Sulechów 2005</a>,
                 <a href=rewal2005.php>Rewal 1998-2005</a>,
                 <a href=karpacz1993.php>Karpacz 1993</a>
                 <br><b>Szwecja</b><br>
                 <a href=midsommar2016.php>Femundsmarka i Fulufjället 2016</a>,
                 <a href=granna_2012.php>Gränna 2012</a>,
                 <a href=orebro_2012.php>Örebro 2012</a>,
				 <a href=hoga_kusten_2012.php>Höga Kusten 2012</a>,
                 <a href=szwecja2011.php>Szwecja 2011</a>,
                 <a href=szwecja2010.php>Szwecja 2010</a>,
                 <a href=uppsala2009.php>Uppsala, kwiecień 2009</a>,
                 <a href=motala_rowerem2009.php>Motala rowerem 2009</a>,
                 <a href=linkoping2009.php>Östergötland 2009</a>,
                 <a href=watchtower2008.php>All along the watchtower, Sztokholm, 12 lipca 2008</a>,
                 <a href=dookola_roxen2008.php>Dookoła jeziora Roxen, 19 lipca 2008</a>,
                 <a href=omberg2008.php>Ecopark Omberg, 5 lipca 2008</a>,
                 <a href=vadstena2008.php>Vadstena, 21 czerwca 2008</a>,
                 <a href=riddarspelen2008.php>Ekenäs Slott 10-11 maj 2008</a>,
                 <a href=szwecja2008.php>Östergotland 2008</a>
                 <br><b>Inne</b><br>
                 <a href=stuttgart2016.php>Stuttgart wiosenny i gorący, czerwiec 2015</a>,
                 <a href=donauwellen.php>Der "Schwäbische Grand Canyon", czerwiec 2015</a>,
                 <a href=winnicestuttgartu.php>Stuttgarckie Winnnice, czerwiec 2015</a>,
                 <a href=baden2015.php>Jezioro Bodeńskie, maj 2015</a>,
                 <a href=kopenhaga_2012.php>Kopenhaga, wrzesień 2012</a>,
                 <a href=tallin2011.php>Tallin, wrzesień 2011</a>,
                 <a href=wieden2011.php>Wiedeń, sierpień 2011</a>,
                 <a href=turku2010.php>Turku, czerwiec 2010</a>,
                 <a href=ukraina2010.php>Ukraina, marzec 2010</a>,
                 <a href=lviv2010.php>Lviv, styczeń 2010</a>,
                 <a href=ukraina2009.php>Ukraina zachodnia, październik 2009</a>,
                 <a href=lviv2009.php>Lwów, wrzesień 2009</a>,
                 <a href=helsinki2009.php>Helsinki 2009</a>,
                 <a href=litwa2008.php>Litwa, maj 2008</a>,
                 <a href=wieden2006.php>Wiedeń i Morawy 2006</a>,
                 <a href=urlop2003.php>Ahlbeck 2003</a><h7>';
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

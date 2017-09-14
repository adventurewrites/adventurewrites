<?
	$tryb_tekstowy=$_GET["tryb_tekstowy"];
    $english=$_GET["english"];
    include "menu.php";
    $lewy1 = 'W tym właśnie sęk, że Czas nie znosi, aby go zabijano. Gdybyś była z nim w dobrych stosunkach zrobiłby dla Ciebie z
    twoim zegarem wszystko, co byś tylko chciała.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';
    if ($english!=1)
      $podroze2 = 'Inne relacje';
    else
      $podroze2 = 'Other reports';
      $podroze2.='<br>
                 <b>Polska</b><br>
                 <a href=pomorze2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Pomorze Zachodnie, sierpień 2008</a>,
                 <a href=ochodzita2007.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Ochodzita 2007</a>,
                 <a href=beskidy2006.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Beskidy 2006</a>,
                 <a href=oswiecim2006.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Oświęcim 2006</a>,
                 <a href=niesulice2006.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Niesulice 2006</a>,
                 <a href=kluczbork2006.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Miejsca z delegacji 2000-2007</a>,
                 <a href=sulechow2005.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Sulechów 2005</a>,
                 <a href=rewal2005.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Rewal 1998-2005</a>,
                 <a href=karpacz1993.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Karpacz 1993</a>
                 <br><b>Szwecja</b><br>
                 <a href=orebro_2012.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Örebro 2012</a>,
		 <a href=hoga_kusten_2012.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Höga Kusten 2012</a>,
                 <a href=szwecja2011.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Szwecja 2011</a>,
                 <a href=szwecja2010.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Szwecja 2010</a>,
                 <a href=uppsala2009.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Uppsala, kwiecień 2009</a>,
                 <a href=motala_rowerem2009.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Motala rowerem 2009</a>,
                 <a href=linkoping2009.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Östergötland 2009</a>,
                 <a href=watchtower2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>All along the watchtower, Sztokholm, 12 lipca 2008</a>,
                 <a href=dookola_roxen2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Dookoła jeziora Roxen, 19 lipca 2008</a>,
                 <a href=omberg2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Ecopark Omberg, 5 lipca 2008</a>,
                 <a href=vadstena2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Vadstena, 21 czerwca 2008</a>,
                 <a href=riddarspelen2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Ekenäs Slott 10-11 maj 2008</a>,
                 <a href=szwecja2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Östergotland 2008</a>
                 <br><b>Inne</b><br>
                 <a href=kopenhaga_2012.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Kopenhaga, wrzesień 2012</a>,
                 <a href=tallin2011.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Tallin, wrzesień 2011</a>,
                 <a href=wieden2011.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Wiedeń, sierpień 2011</a>,
                 <a href=turku2010.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Turku, czerwiec 2010</a>,
                 <a href=ukraina2010.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Ukraina, marzec 2010</a>,
                 <a href=lviv2010.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Lviv, styczeń 2010</a>,
                 <a href=ukraina2009.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Ukraina zachodnia, październik 2009</a>,
                 <a href=lviv2009.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Lwów, wrzesień 2009</a>,
                 <a href=helsinki2009.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Helsinki 2009</a>,
                 <a href=afgan2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Afganistan 2008</a>,
                 <a href=litwa2008.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Litwa, maj 2008</a>,
                 <a href=irak2006.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Irak 2006</a>,
                 <a href=wieden2006.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Wiedeń i Morawy 2006</a>,
                 <a href=irak.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Irak 2004</a>,
                 <a href=urlop2003.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Ahlbeck 2003</a><h7>';
    $licznik = $menu_licznik;
  require_once('smarty/libs/Smarty.class.php');
  $smarty->compile_check = true;
  $smarty->debugging = true;
  $smarty = new Smarty;
  $smarty->assign(tryb_tekstowy,$tryb_tekstowy);
  $smarty->assign(english,$english);
  $smarty->assign(lewy1,$lewy1);
  $smarty->assign(podroze1,$podroze1);
  $smarty->assign(podroze2,$podroze2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
  $smarty->display('podroze.tpl');
?>

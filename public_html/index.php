<?php
  include 'conf.php';

//    define('tryb_tekstowy','tryb_tekstowy');
//    define('english','english');
    define('menu1','menu1');
    define('lewy1','lewy1');
    define('licznik','licznik');
    define('podroze1','podroze1');
    define('podroze2','podroze2');
//    define('miejsca1','miejsca1');
//    define('miejsca2','miejsca2');
    define('przygoda1','przygoda1');
    define('przygoda2','przygoda2');
//    define('samochody1','samochody1');
//    define('samochody2','samochody2');
	
    include "menu.php";

    $lewy1 = 'Odbiło ci, zbzikowałeś, dostałeś fioła. Ale coś ci powiem w sekrecie. Tylko wariaci są coś warci.<br><p align=right>Lewis Carroll "Alicja w Krainie Czarów"</p>';

	$podroze1 = 'Pociąg z Linköping do stolicy Norwegii jedzie 6 godzin. Wyszedłem z dworca i rozglądałem się w poszukiwaniu widocznej (podobno) z każdego punktu miasta skoczni Holmenkollen. Zamiast skoczni zobaczyłem las wieżowców rodem z Nowego Jorku. I trochę byłem… No nie wiem. Zaskoczony? Rozczarowany? Nie tego się spodziewałem.<br>
                 <a href=szwecja_2019.php>Czekając na wiosnę - Szwecja 2019</a> - ostatnia aktualizacja 05.03.2019';
                 $podroze2 = '<br>';

    $podroze2.=  '
                 <b> Szwecja</b><br>
                 <a href=szwecja_2019.php>Czekając na wiosnę 2019</a>,
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
                 <a href=szwecja2008.php>Östergotland 2008</a>,
                 <br><br><b> Polska</b><br>
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
                 <br><br><b></a> Pozostałe kraje</b><br>
                 <a href=lviv2018.php>Pijana wiśnia, czyli Lwów po latach, grudzień 2018</a>,
                 <a href=stuttgart2016.php>Stuttgart wiosenny i gorący, czerwiec 2015</a>,
                 <a href=donauwellen.php>Der "Schwäbische Grand Canyon", czerwiec 2015</a>,
                 <a href=winnicestuttgartu.php>Stuttgarckie Winnnice, czerwiec 2015</a>,
                 <a href=baden2015.php>Jezioro Bodeńskie, maj 2015</a>,
                 <a href=kopenhaga_2012.php>Kopenhaga, wrzesień 2012</a>,
                 <a href=tallin2011.php>Tallin, wrzesień 2011</a>,
                 <a href=wieden2011.php>Wiedeń, sierpień 2011</a>,
                 <a href=turku2010.php>Turku, czerwiec 2010</a>,
                 <a href=ukraina2010.php>Ukraina, marzec 2010</a>,
                 <a href=lviv2010.php>Lwów, styczeń 2010</a>,
                 <a href=ukraina2009.php>Ukraina zachodnia, październik 2009</a>,
                 <a href=lviv2009.php>Lwów, wrzesień 2009</a>,
                 <a href=helsinki2009.php>Helsinki 2009</a>,
                 <a href=litwa2008.php>Litwa, maj 2008</a>,
                 <a href=wieden2006.php>Wiedeń i Morawy 2006</a>,
                 <a href=urlop2003.php>Ahlbeck 2003</a>';

    $przygoda1 = 'Kiedy już prawie podjąłem decyzję o zmianie hobby na filatelistykę, wędką szarpnął potężny ciężar. Wow! Jest! W końcu! Dopiero teraz rozejrzałem się dookoła. Ciężar na wędce spory, a tu w pobliżu ani żywej duszy.
                  <br><br><b><a href="http://adventure.host22.com/adventure_ryby.xml"><img src=img/rss_icon.gif width=12 border=0></a> Relacje z wypraw na ryby 2005-2013:</b>
                  <br><a href=wyprawy.php>Polska</a> - ostatnia aktualizacja 11.04.2013
                  <br><a href=wyprawy_szwecja.php>Szwecja</a> - ostatnia aktualizacja 16.07.2012';
         $przygoda2 = 'Zobacz też: <a href=las_ciezkowicki_2007.php>Wiosenny las</a>,
                              <a href=zima2006.php>Zima</a>,
                              <a href=okolice_radomska.php>Okolice Radomska</a>';


// Wylaczylem samochody - 2011-10-03
/*    if ($english!=1)
    {	$samochody1 = 'Z samochodami jestem związany od dawna, a one są częścią mnie i mojej pracy zawodowej. Niektóre z nich już są <a href=zapomniane_auta.php?tryb_tekstowy='.$tryb_tekstowy.'>zapomniane</a>, a niektóre szczegółowo opisałem poniżej.';
        $samochody2 = '<b><a href="http://adventure.host22.com/adventure_auta.xml"><img src=img/rss_icon.gif width=12 border=0></a> Moje pojazdy:</b>';
    }
    else
    {	$samochody1 = 'Cars have taken a big part of my life and they were part of my professional work. Some of these are already <a href=zapomniane_auta.php?tryb_tekstowy='.$tryb_tekstowy.'>forgotten</a> and about some of these I particularly written below.';
        $samochody2 = '<b><a href="http://adventure.host22.com/adventure_auta.xml"><img src=img/rss_icon.gif width=12 border=0></a> My automobiles:</b>';
    }

	$samochody2 .= '<br><a href=stilo.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Stilo</a>,
                   <a href=panda.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Panda</a>,
                   <a href=corsa.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>Corsa</a>';*/
				   
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
//  $smarty->assign(miejsca1,$miejsca1);
//  $smarty->assign(miejsca2,$miejsca2);
  $smarty->assign(przygoda1,$przygoda1);
  $smarty->assign(przygoda2,$przygoda2);
//  $smarty->assign(samochody1,$samochody1);
//  $smarty->assign(samochody2,$samochody2);
  $smarty->assign(licznik,$licznik);
  $smarty->assign(menu1,$menu1);
//  $smarty->assign(menu2,$menu2);
  $smarty->display('adventure.tpl');
?>


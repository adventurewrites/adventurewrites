<?php
  include 'conf.php';
  require "funkcje.php";
$miejsca1='<p class="p1">Jasna Góra to miejsce, w którym zawsze można wyciszyć się i przemyśleć w spokoju kilka spraw. Spacerując po murach obronnych posłuchać historii, bo niewiele jest miejsc w Polsce, a może i na
świecie, że ona tak wyraźnie do nas przemawia. Można posiedzieć w ciszy w sali rycerskiej i odwiedzić krypty.
Można odwiedzić muzeum i wejść na stumetrową wieżę.
<p class="p1">Nie mieszkam w Częstochowie, ale od 2000 do 2007 roku pracowałem pięćset metrów od klasztoru i jeżeli tylko miałem taką możliwość
starałem zajrzeć i "podładować akumulatory". A i teraz, obecnie, jak tylko jestem w Częstochowie to zaglądam na kilka chwil.
<p class="p1">Zamieściłem kilka zdjęć i przewodnik <a href=jasna_gora_historia.php>historyczny z 1909 roku</a> znaleziony w Częstochowskim
Serwisie Informacyjnym. Aktualny, wraz z planem klasztoru, umieszczony jest na każdym papierowym planie miasta. 

<p class="p1"><p class="p1">Klasztor';
$miejsca1.=foto_line('jasna_gora/klasztor',3,9,'_s');
$miejsca1.='<p class="p2">Brama klasztorna';
$miejsca1.=foto_line('jasna_gora/brama',3,7,'_s');
$miejsca1.='<p class="p2">Mury obronne';
$miejsca1.=foto_line('jasna_gora/mury',3,8,'_s');
$miejsca1.='<p class="p2">Dziedziniec';
$miejsca1.=foto_line('jasna_gora/srodek',3,9,'_s');
$miejsca1.='<p class="p2">Sala rycerska';
$miejsca1.=foto_line('jasna_gora/rycerska',3,7,'_s');
$miejsca1.='<p class="p2">Inne sale';
$miejsca1.=foto_line('jasna_gora/sale',3,4,'_s');
$miejsca1.='<p class="p2">Wnętrze katedry';
$miejsca1.=foto_line('jasna_gora/katedra',3,2,'_s');
$miejsca1.='<p class="p2">Krypta';
$miejsca1.=foto_line('jasna_gora/krypta',3,2,'_s');
include 'miej_sma.php';
?>

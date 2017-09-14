<?
  include 'funkcje.php';
  include 'conf.php';
  $tryb_tekstowy=$_GET["tryb_tekstowy"];
  $english=$_GET["english"];
if ($mysql!=0)
{
  $connect=mysql_connect($host,$user,$pass);
  if ($connect)
    {
      mysql_select_db($base);
      $sql="update uprawnienia set licznik=licznik+1 where user='szwecja2013'";
      $result=mysql_query($sql);
      mysql_close($connect);
    }
}
 if ($english!=1)
  {
    $podroze1 = '<p class="p3">Deszczowe Örebro<br>';
//Orebro, wrzesień 2012
$podroze1.='<p class="p1"> W sobotę lało jak z cebra. Przez cały dzień. Już w piątek zaplanowaliśmy wycieczkę do Örebro i, niestety, trzeba było ją przełożyć z soboty na niedzielę. Pierwszy dzień jesieni spędziłem więc spacerując po Linköping i ciesząc się ze świeżego powietrza i z tego że dożyłem w zdrowiu i dobrej kondycji kolejnego roku. Mimo nieprzemakalnej kurtki i parasola nad głową wróciłem ze spaceru zupełnie przemoknięty, ale zadowolony i trochę rozczarowany tym, że jednak nie pojechaliśmy do tego Örebro, bo przecież z cukru nie jesteśmy, a trochę deszczu by nam na pewno nie zaszkodziło. Ale co się odwlecze to nie uciecze i nasza ekipa samochodowa w pierwotnie zaplanowanym składzie zwarta i gotowa stawiła się w niedzielę o dziesiątej rano przed garażem na ulicy Drabantgatan.';
$podroze1.='<p class="p1"> Örebro to duże jak na szwedzkie warunki miasto. Ma około 120 tysięcy mieszkańców, a jedzie się do niego od strony Linköping przez bez mała dwie godziny. Droga, mimo że długa, jednak nie nuży. Krajobraz zalesiony, lekko pagórkowaty, nic dziwnego że wokół miasta powstało wiele tras narciarskich, zarówno zjazdowych jak i biegowych. Samo miasto jest bardzo przyjemne. Chodząc po zmoczonych deszczem ulicach czułem się tam zupełnie inaczej niż w Linkoping. Dużo szerokich ulic, zwarta kolorowa zabudowa, place, dużo zieleni, piękny park i deptak nad rzeką, to wszystko dodawało temu miastu trochę radości mimo pochmurnej pogody.';
$podroze1.='<p class="p1"> Co można zobaczyć w Örebro? Przede wszystkim';

$podroze1.='<p class="p1"><b> zamek -</b>';
$podroze1.='<p class="p1"> pochodzącą z trzynastego wieku wizytówkę miasta. Piękny, z otaczającą go fosą przypomina trochę śląskie zameczki obronne, które jednak sprawiają wrażenie lżejszych. Ten to jakby miniatura zamków w Kalmarze i Vadstenie. Niby nieduży, ale baszty ma potężne, wysokie na kilkadziesiąt metrów. Z pewnością zmieściłoby się w nich mieszkanie dla niejednej księżniczki. Dziedziniec jest niewielki i sprawia wrażenie ponurego - słońce rzadko dostaje się pomiędzy wysokie, blisko siebie stojące grube mury, szczególnie jesienną i zimową porą. Na ścianach widać ślady po starych oknach i drzwiach, tak jakby ktoś zapędził się w rewitalizacji. Wygląda na to, jakby najpierw wstawiono nowe okna, drzwi oraz bramę wjazdową, a dopiero kilkadziesiąt lat później zrozumiano swój błąd i próbowano jakoś naprawić sytuację. Efekt jest... Taki jak jest. Dziwnie to wygląda. Przez wiele setek lat zamek pełnił zarówno rolę fortecy, jak i spełniał funkcje reprezentacyjne: był miejscem spotkań dygnitarzy, jak również posiedzeń szwedzkiego parlamentu.';
$podroze1.='<p class="p1"> Wewnątrz zwiedziliśmy co się dało zwiedzić bez przewodnika, na którego musielibyśmy czekać aż do trzynastej. We wnętrzu jednej z baszt mieści się informacja turystyczna, gdzie można kupić pamiątki i bilety wejściowe do komnat. Te wnętrza które były dostępne za darmo, wyposażone zostały nowocześnie, a jedyną pozycją wartą uwagi były wysokie kręcone schody prowadzące do górnych partii wieży. Jak się można domyślić - nie spędziliśmy tam zbyt wiele czasu.';
$podroze1.='<p class="p1"> Obchodząc zamek dookoła doszliśmy do rzeki Svårtan i idąc wzdłuż niej, przechodząc przez piękny miejski park, doszliśmy do skansenu';

$podroze1.='<p class="p1"><b> Wadköping.</b>';
$podroze1.='<p class="p1"> Jest to grupa domów wiejskich i miejskich przeniesionych z różnych części regionu. Można je zwiedzać swobodnie i bez żadnych opłat. Niektóre eksponaty wystawione na stołach w wiejskich chatach, jak upieczona w całości kaczka, szczupak w galarecie, czy ogórki kiszone wprost z kamiennego garnka, mimo że oczywiście sztuczne, to powodowały, że człowiek robił się głodny na samą myśl o takich pysznościach. Można było odnieść wrażenie, że czas się tutaj zatrzymał. Widząc spokój ludzi tu przebywających, z nas również gdzieś ulotnił się ten codzienny pośpiech. Powoli przechodząc pomiędzy malowniczymi domami i podziwiając bajkowe ogrody i pełne jabłek sady, w których jesień już powoli zaczynała zaznaczać swoje panowanie, doszliśmy do kawiarni, a po kubku mocnej kawy ponownie przez';

$podroze1.='<p class="p1"><b>Park Miejski</b>';
$podroze1.='<p class="p1">poszliśmy z powrotem w stronę miasta. W parku też już widać było nadchodzącą jesień. Liście drzew, mimo że jeszcze bardzo gęste, zaczynają powoli zmieniać barwę i opadać. Kwiaty powoli przekwitają, ale mimo wszystko jest jeszcze bardo kolorowo i... Cicho. Ta cisza to chyba domena szwedzkich miast. No może z wyjątkiem Sztokholmu, ale tutejsza stolica to zupełnie inny kraj. Wracając do ciszy - ludzie wykorzystują ją tu jak mogą. Siedząc na ławkach, obserwując, czytając, uprawiając różne formy medytacji, czy to statycznej, czy w ruchu. Przy czym nie przejmują się ani pogodą, ani tym, że ktoś przyjezdny na nich dziwnie patrzy. No i oczywiście mnóstwo ludzi biegających, ale to typowy nadrzeczno-miejski krajobraz nie tylko w Szwecji. Jak można wyczytać z corocznie wydawanego miejscowego informatora turystycznego, park ten jest uznawany jako jeden z najpiękniejszych europejskich parków, a mieszkańcy są z niego dumni. A ponieważ przeczytałem to już w domu, żałuję trochę, że nie spędziliśmy tam trochę więcej czasu. Może będzie jeszcze okazja.';
$podroze1.='<p class="p1"> Po kilkunastu minutach doszliśmy do starego rynku i';

$podroze1.='<p class="p1"><b> kościoła pw. Świętego Mikołaja,</b>';
$podroze1.='<p class="p1">ale kościół był zamknięty (mimo niedzieli), więc mogliśmy podziwiać go tylko z zewnątrz. Przeszliśmy więc spacerem dwoma deptakami: najpierw ulicą królowej (Drottningsgatan), potem króla (Kungsgatan) i już samochodem pojechaliśmy do';

$podroze1.='<p class="p1"><b> wieży ciśnień,</b>';
$podroze1.='<p class="p1"> a zarazem punktu widokowego, z którego widać doskonale miasto i pobliską okolice. Na wieżę Svampen (po polsku - grzybek), która rzeczywiście z wyglądu przypomina grzyba o długim trzonku i szerokim kapeluszu, wjeżdża się windą, a potem wychodzi na zabezpieczony siatkami taras. Można również usiąść w restauracji i popijając kawę napawać się widokiem, który naprawdę robi niesamowite wrażenie. Dopiero stąd widać, jak Szwecja jest mało zamieszkana. Mamy miasto, a wokół niego jak okiem sięgnąć tylko lasy, jeziora i pojedyncze zabudowania oddalone od siebie na tyle, że nie chciałoby mi się nawet iść do sąsiada na piwo. Chyba że od razu na cały weekend. Podobny grzybek mamy w Radomsku, ale grozi zawaleniem, a lokalne władze od kilkunastu lat nie mogą zdecydować się, czy zburzyć, czy remontować. Jak poczekają jeszcze kilka, to wieża może sama za nich podjąć tą trudną decyzję. A punkt widokowy na nasze lasy i wijącą się wśród nich rzekę Wartę byłby również wart obejrzenia.';

$podroze1.='<p class="p1"> Zwiedzaniem wieży zakończyliśmy naszą wizytę w tym uroczym mieście i wyruszyliśmy w drogę powrotną do domu. A po drodze... Szok! Tuż koło drogi przez kilkaset metrów ciągnęło się ogrodzone pole sięgające aż do lasu. Już po drodze do Örebro zastanawiałem się co to za wielkie stada się pasą pod samą granicą drzew. Na pierwszy rzut oka przypominały jelenie, ale jakoś nie mogłem sobie uzmysłowić, po co komu hodować jelenie. Dopiero jak jechaliśmy z powrotem zobaczyłem, że to... Daniele! Jakże żałowałem, że nie wziąłem lornetki! Jedyne szkło przybliżające jakie miałem ze sobą, to obiektyw mojego kompaktowego Canona, który potrafi przybliżyć obszar tylko trzy razy, do tego mieści go na malutkim niewyraźnym ekranie. A co zbliżyłem się do ogrodzenia, tym dalej stado odchodziło w stronę lasu. Trudno, za gapowe się płaci, a od tej pory lornetkę będę zabierał na każdą moją wycieczkę, nawet jeżeli miałaby być dodatkowym zbędnym balastem, którego miałbym nie użyć. To był pierwszy raz w życiu, kiedy widziałem takie duże stado tych pięknych zwierząt na żywo. ';
$podroze1.='<p class="p1"><i><font size=-4>rs, Örebro, wrzesień 2012</font></i>';
 }
//  $podroze1.= foto_line('ochodzita2007/karczma',3,9,'_s');
include 'podr_sma.php';
//require_once("funkcje.php");
//data_index($podroze1,'meta data próbne ąśćŚ');
?>

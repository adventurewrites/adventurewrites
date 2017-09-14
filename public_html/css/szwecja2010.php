<?
  include 'funkcje.php';
  include 'conf.php';
  $tryb_tekstowy=$_GET["tryb_tekstowy"];
  $english=$_GET["english"];
  $connect=mysql_connect($host,$user,$pass);
  if ($connect)
    {
      mysql_select_db($base);
      $sql="update uprawnienia set licznik=licznik+1 where user='szwecja2010'";
      $result=mysql_query($sql);
      mysql_close($connect);
    }
 if ($english!=1)
  {
    $podroze1 = '<h2>Szwecja 2010</h2>';
//Zobaczyć Wielkie Jezioro - lipiec 2010
    $podroze1.= '<h4>Zobaczyć Wielkie Jezioro - lipiec 2010</h4>';
	$podroze1.='<p>To był cel naszej niedzielnej wycieczki. Oczywiście nie jedyny, bo w planach mieliśmy obejrzenie kilku jeszcze ciekawych miejsc po drodze, ale w zasadzie najważniejszy. Wyruszyliśmy więc niedzielnym rankiem Piotrowym Volvo kierując się na północ.
	<br>Aby dojechać do jeziora Vänern z Linköping, najpierw trzeba objechać troszkę mniejsze Vättern. Droga wiedzie od pewnego miejsca tuż przy brzegu jeziora, prowadząc przez malownicze niczym nie niepokojone lasy parku narodowego Tiveden, jednego z najładniejszych parków narodowych Szwecji. Taką to drogą dojechaliśmy do miasta Karlsborg, gdzie chcieliśmy obejrzeć największą militarną twierdzę Szwecji. Obejrzeliśmy twierdzę tylko na tyle, na ile było to dozwolone, bo mimo że fortyfikacje zbudowane zostały w XIX wieku, to ciągle jest teren wojskowy i, prawdę mówiąc, najlepsze widoki przedstawiają mapy Google. Zza zewnętrznych szańców nie widać nic, a miejsca, skąd mogłyby być ładne widoki są ogrodzone. Nawet siatki ogrodzeniowe przykryte są wojskowym płótnem maskującym. Czuliśmy się jakbyśmy chodzili po opuszczonych przez wojska radzieckie polskich koszarach. Zwiedziliśmy więc to co wolno, w tym kościół garnizonowy, który zaintrygował nas swoim wystrojem: gołe ściany i krzesła. I za ten widok od turystów życzą sobie 10 SEK opłaty. Liczyliśmy, że troszkę lepszy widok na twierdzę znajdziemy z pobliskiej znalezionej na mapce latarni morskiej, ale okazała się ona ledwie kilkumetrowym kikutem. Widok na jezioro Vättern z tego miejsca był za to przedni.';
    $podroze1.= foto_line('szwecja2010/lidkoping/twierdza',3,4,'_s');
	$podroze1.= 'Opuszczając bez sentymentu Karlsborg pojechaliśmy w kierunku Lidköping. Droga zbudowana jakby dla nas. Ruch niewielki, a krajobrazy miłe dla oka. Nie zatrzymując się w mieście pojechaliśmy prosto na półwysep Kalland do zamku Läckö. Położony tuż nad wielkim jeziorem pałac sprawia wrażenie jakby był przeniesiony z jakiejś bajki. Na dziedziniec wchodzi się przez dwie bramy, a przez trzecią przechodzi się na jeszcze jeden dziedziniec, skąd jest dostęp do pomieszczeń gospodarczych, takich jak kuchnie, więzienie, czy łazienki dla służby. Podczas gdy reszta naszej grupy zwiedzała zamek z przewodnikiem (gdzieś ich zgubiłem po drodze), ja szwędałem się po pomieszczeniach dostępnych z dziedzińca i znalazłem wystawę przepięknych sztucerów myśliwskich. Były to takie dzieła sztuki, że można się zastanawiać czy w ogóle ktokolwiek z nich strzelał. Ciekawe jaka byłaby reakcja postronnych osób gdybym z podobnie misternie wykonaną wędką pojechał łowić ryby.';
    $podroze1.= foto_line('szwecja2010/lidkoping/kinnekula',3,4,'_s');
	$podroze1.= 'Z zamku pojechaliśmy do oddalonej o niecałe pięć kilometrów wioski rybackiej, gdzie jadłem najlepszą wędzoną rybę w swoim życiu. Nie ma tu wędzarni wystawionych na pokaz jak na polskim wybrzeżu, gdzie odgrzewa się wędzone ryby wyjęte prosto z zamrażarki. Ryby są świeżutkie i naprawdę smaczne. Jeżeli ktoś będzie w pobliżu to zachęcam do zjedzenia wędzonego łososia bądź siei prosto z "Grand Lake".';
    $podroze1.= foto_line('szwecja2010/lidkoping/mariestad',3,4,'_s');
	$podroze1.= 'Ostatni już przystanek zrobiliśmy sobie w malowniczym miasteczku Mariestad, gdzie zwiedziliśmy w ostatniej chwili przed zamknięciem gotycką katedrę, przeszliśmy po ulicach starego miasta i popijając w portowej knajpie piwo marki "Mariestads" podsumowaliśmy udany dzień. Jeszcze 250 kilometrów i byliśmy w domu.
	';
//Trollegater
    $podroze1.= '<h4>Trollegater - maj 2010</h4>';
	$podroze1.='Szwecja jest pełna ciekawych miejsc. Nietrudno je znaleźć też blisko Linköping. Jednym z takich ciekawych terenów siedem kilometrów na zachód od Rimfosy jest rezerwat <a href="http://www.lansstyrelsen.se/ostergotland/amnen/naturvard/skyddadnatur/naturreservat/Kinda/Trollegater/">Trollegater.</a>.
	<br>Jest to system jaskiń granitowo krzemiennych powstałych na skutek ruchów tektonicznych. Na cały system składa się siedem jaskiń, a najdłuższa z nich ma około 100 metrów i składa się z kilku połączonych ze sobą grot. Można ją obejść dookoła, a niektóry groty to prawie pokoje. Można w nich praktycznie stanąć i się porozglądać. Przyda się do tego oczywiście silna latarka. Przyda się również wytrzymałe ubranie, gdyż wejścia do jaskiń są bardzo wąskie i trzeba się nieraz porządnie wysilić, żeby się do nich dostać.';
    $podroze1.= foto_line('szwecja2010/trollegater/jaskinia',3,4,'_s');
	$podroze1.= 'Pozostałe jaskinie są mniejsze, węższe, a niektóre wejścia pionowo położone. Trzeba uważać, żeby nie ześlizgnąć się w dół, bo ciężko na pierwszy rzut oka oszacować ich głębokość.
	<br>Na niektórych ścianach jaskiń, również w tej największej, są czerwone smugi i plamy. Legenda mówi, że było to miejsce magii i rytualnych ubojów, ale prawda jest taka, że czerwone ściany to efekt czerwonych alg, które płyneły w wodach podziemnych.';
    $podroze1.= foto_line('szwecja2010/trollegater/teren',3,4,'_s');
	$podroze1.='Cały obszar wokół jaskiń jest warty zwiedzenia. Mnóstwo skał poprzecinanych jakby po nagłym trzęsieniu ziemi. Pęknięcia są bardzo długie, do dwóch metrów szerokości i kilku metrów głębokości. Niektóre chyba głębsze, bo jak do jednego takiego w jaskini wrzuciliśmy kamień, to długo czekaliśmy, aż spadł na dno.';
    $podroze1.= foto_line('szwecja2010/trollegater/skala',3,4,'_s');
	$podroze1.= 'Zanim wróciliśmy do Rimfosy, zatrzymaliśmy się po drodze w rezerwacie <a href="http://www.lansstyrelsen.se/ostergotland/amnen/naturvard/skyddadnatur/naturreservat/Kinda/Hallstad+angar/">Hallstad Ängar</a>, a niektóre widoki wzdłuż pomarańczowego szlaku zapierały dech w płucach. Dziwnie stoi się na gołej, nagle urwanej skale, a w dole widać drogę po której jeżdżą samochody wielkości pudełka od zapałek.';

//Dzien Polski w Mariefred 20100529
    $podroze1.= '<h4>Dzień Polski w Mariefred - maj 2010</h4>';
    $podroze1.= 'Mariefred wygląda jak miasto, w którym życie zatrzymało się na chwilę, tak na oko gdzieś w początkach XX wieku.
    Takie "östergötlandzkie" Gamla Linköping, tylko że tutaj życie nie toczy się na pokaz. Takie samo wrażenie miałem będąc na
    ukraińskim <a href="ukraina2010.php">Zakarpaciu</a>, gdzie widziałem wsie jakby żywcem przeniesione z Lwowskiego skansenu "Gaj Szweczenki".
    <br>Jadąc na Dzień Polski, obchodzony właśnie w tym mieście w ostatnią sobotę maja, spodziewaliśmy się spędzić turystycznie i miło
    wolny dzień. I nie zawiedliśmy się. Z Linköping droga wiedzie początkowo wygodną autostradą E4, ale już tuż za Nyköping zjechaliśmy
    z trasy, żeby niekończącymi się zakrętami i wzniesieniami pośród lasów i jezior dojechać na parking przy zamku Gripsholm, dawnej
    rezydencji szwedzkich królów. Dla nas to o tyle ciekawe, że w XIV-wiecznym zamczysku tym urodził się przyszły król Polski
    Zygmunt III Waza.';
    $podroze1.= foto_line('szwecja2010/mariefred/rynek',3,8,'_s');
    $podroze1.= 'Zostawiając sobie oglądanie zamku na później przeszliśmy na rynek, gdzie już rozpoczęła się część artystyczna obchodów:
    występy zespołów folklorystycznych, tanecznych i muzycznych. Ile razy patrzę na takie występy, tyle razy nie mogę się nadziwić,
    że tutaj w Szwecji ludziom udaje się, a przede wszystkim chce się, utrzymywać polskie tradycje i kulturę. Jak widziałem niektóre
    dzieciaczki występujące w ten niezbyt gorący i deszczowy dzień w samych koszulkach i na boso, to aż mi się zimno robiło.
    Ale na rozgrzewkę można było pojeść ciepłego bigosu i grillowanej polskiej kiełbasy, wszystko zagryźć kiszonym ogórkiem
    i popić "tymbarkiem".';
    $podroze1.= foto_line('szwecja2010/mariefred/scena',3,8,'_s');
    $podroze1.= 'Promenadą nad jeziorem przeszliśmy do zamkowego ogrodu, gdzie urządziliśmy sobie grilla. Czasami trzeba mieć niezłą fantazję,
    żeby przejechać 170 kilometrów tylko po to, żeby zorganizować grilla pod murami renesansowego zamku. Ale esencją podróżowania
    są ludzie i właśnie dla nich warto przejechać czasem kawał drogi.';
    $podroze1.= foto_line('szwecja2010/mariefred/ludzie',3,3,'_s');
    $podroze1.= 'Pogoda starała się nas przegonić ze wszystkich sił, ale po
    przeniesieniu z niemałym trudem urządzenia z piekącymi się kiełbaskami pod parasole z ogrodowych drzew, również i ona dała za
    wygraną i na koniec popołudnia zrobiło się słonecznie i ciepło.';
//Omberg z Marcelem 20100515
    $podroze1.= '<h4>Ekopark Omberg - maj 2010</h4>';
    $podroze1.= 'Jestem tu już drugi raz, tym razem wiosną. Tras do spacerowania jest jednak wystarczająco na kilka wycieczek.
    Tym razem wybraliśmy niebieską, teoretycznie najkrótszą, aczkolwiek z jednym długim podejściem na najwyższą tutejszą górkę o
    wysokości 264 metry. Niby nic, ale podejście potrafi zmęczyć. Zakończone jest za to niesamowitym widokiem. Miejsce jest do tego
    wyśmienite do zrobienia sobie krótkiej przerwy na posiłek i podelektowanie się krajobrazem.';
    $podroze1.= foto_line('szwecja2010/omberg/omberg',3,4,'_s');
    $podroze1.= 'Druga część trasy to dość strome zejście i spacer po skalnym jeziornym klifie. Warto czasem zejść ze ścieżki, żeby podejść
    nad sam skraj klifu i pomajtać nogami z wysokości około 5 metrów nad taflą wody, która nota bene jest jeszcze przeraźliwie zimna
    - nie wiem, czy miała więcej niż pięć stopni. Potem już dochodzi się do miejsca widokowo-grillowego, gdzie kończą się wszystkie
    trasy spacerowe tego <a href="http://sv.wikipedia.org/wiki/Ekopark_Omberg">parku</a>.
    <br><b>Omberg</b> jest fajny na jednodniowy wypad. Można się zmęczyć, jeśli się chce, można również przejść rekreacyjnie bez wielkiego
    wysiłku i popatrzeć z większych lub mniejszych pagórków, oznaczonych jako miejsca widokowe, na otaczający nas polodowcowy
    krajobraz. Tak jak pisałem wcześniej, Szwecja jest bardzo pocztówkowa i przy odrobinie szczęścia do pogody może być rajem
    dla fotografów.';
    $podroze1.= foto_line('szwecja2010/omberg/rok',3,2,'_s');
    $podroze1.= 'Zanim dotarliśmy do rezerwatu najpierw przystanęliśmy przy "wikipedycznym" kamieniu runicznym w
    <a href="http://sv.wikipedia.org/wiki/R%C3%B6kstenen">Rök</a>. Kiedyś już pisałem o tym, że Szwedzi z byle kupki kamieni potrafią
    zrobić znakomite miejsce turystyczne. Tak więc napisy na kamieniu są pięknie odrestaurowane, kamień przykryty zadaszeniem,
    a tablice zawierają tłumaczenie tekstu. Na pobliskim parkingu możemy kupić pamiątki i książki związane z tym miejscem.
    Warto również zajrzeć do stojącego opodal <a href="http://sv.wikipedia.org/wiki/R%C3%B6ks_kyrka">kościółka</a>, który mimo
    że jest odbudowany po pożarze, zawiera we wnętrzu kilka ciekawych pamiątek sprzed tego wydarzenia.';
    $podroze1.= foto_line('szwecja2010/omberg/heda',3,3,'_s');
    $podroze1.= 'Wąską krętą dróżką z Rök jedziemy w kierunku klasztoru <b>Alvastra</b>. Oglądając po drodze kolejny średniowieczny kościół w
    <a href="http://sv.wikipedia.org/wiki/Heda_kyrka">Heda</a>, którego początki sięgają 1100 roku, po około pół godzinie jazdy
    dojeżdżamy do malowniczo położonych ruin pochodzącego z tego samego mniej więcej okresu klasztoru
    <a href="http://sv.wikipedia.org/wiki/Alvastra_kloster">Alvastra</a>. Jest to ciekawe miejsce dla fotografów, a dla podróżników
    okazja do odpoczynku pod chłodnymi murami w malowniczej scenerii.';
    $podroze1.= foto_line('szwecja2010/omberg/alvastra',3,6,'_s');
    $podroze1.= 'Jedno z ciekawszych miejsc, które widziałem we Wschodniej Gotlandii.  O poprzedniej mojej wycieczce w te strony można poczytać
    <a href=omberg2008.php>tutaj</a>';
//Vadstena i Motala z Marcelem 20100514
    $podroze1.= '<h4>Vadstena i Motala - maj 2010</h4>';
    $podroze1.= 'Przyjazd brata był okazją do krótkiej wycieczki po okolicach Linköping, planowałem odwiedzić Vadstenę, Motalę i
    ekopark Ömberg, zobaczyć kamień w Rök i ruiny klasztoru Alvastra. Ale o Ombergu napiszę następnym razem.
    <br>Piątek w Szwecji był dniem wolnym w większości firm (klämdag po święcie Wniebowstąpienia) i mimo że pogoda była deszczowa,
    to nie zniechęciło to miejscowych od robienia sobie wycieczek. Autostrada była więc nieźle zatłoczona. W samej <b>Vadstenie</b> nie było
    jednak zbyt wielu zwiedzających. Na początek obejrzeliśmy więc katedrę wraz z zabudowaniami klasztornymi. Kościół powstał podobno
    według wskazówek samej świętej Brygidy, która spoczywa sobie spokojnie (lub tylko jej część) w małej trumience we wnętrzu. Sam
    środek prezentuje się wspaniale, praktycznie bez podziału na nawy, jedna wielka przestrzeń podparta rzędami kamiennych kolumn.
    Można byłoby tu kręcić filmy oparte na grach RPG.';
    $podroze1.= foto_line('szwecja2010/vad_mot/vadstena',3,4,'_s');
    $podroze1.='Potem ścieżką nad samym jeziorem, wciąż w strugach deszczu, przeszliśmy do zamku. Jezioro przez tą pogodę wydawało się
    jeszcze bardziej olbrzymie, a zamek może nie prezentował się tak jak ukraińskie Podhorce we mgle, ale również wyglądał tajemniczo.
    Tajemniczości zabierają mu jednak nieliczne jeszcze z racji opóźniającej się wiosny parkujące w fosie jachty. Cena biletów do
    zamkowych komnat nie przekonała mnie do obejrzenia jego wnętrz. Obeszliśmy więc dziedziniec i starym miastem przeszliśmy na
    przyklasztorny parking, skąd pojechaliśmy do <b>Motali</b>.';
    $podroze1.= foto_line('szwecja2010/vad_mot/zamek',3,4,'_s');
    $podroze1.= 'Tymczasem przestało padać.
    <br>Trasa wiedzie praktycznie nad samym jeziorem, więc można podziwiać widoki. Motala jest miastem zdecydowanie większym niż
    Vadstena, w której nie mogliśmy znaleźć taniego baru, żeby zjeść na obiad jakiś kebab czy inną specjalność "tutejszej" kuchni.
    Bez problemu udało nam się to w Motali. Po obiedzie poszliśmy spacerkiem do portu, gdzie w sklepie wędkarskim udało mi się kupić
    z wyprzedaży kilka ciekawych przynęt, a potem weszliśmy do muzeum motoryzacji.
    <br>W tym muzeum bez skrupułów już wysupłałem 70 SEK na bilet i weszliśmy do małego, na pierwszy rzut oka, pomieszczenia.
    Ciężko opisać, co tam można zobaczyć. Rowery, motorowery, radioodbiorniki samochodowe i nie tylko, telewizory, motocykle wszelkiej
    marki, no i samochody. Nie widziałem jeszcze tyle "złomu" motoryzacyjnego zebranego w jednym miejscu. Z samochodów największe
    wrażenie na mnie wywarły Lamborgini (w życiu nie myślałem, że to jest tak szerokie auto) i bolid Williams F1. Co prawda jest bez
    silnika, ale jest tak niewyobrażalnie lekki, że aż ciężko sobie wyobrazić, że taki kawałek tektury może jeździć po torze z
    prędkością ponad trzysta kilometrów na godzinę. Szkoda, że kończył nam się czas na parkingu, bo z przyjemnośćią popętałbym się po
    tym muzeum jeszcze kilkadziesiąt minut.';
    $podroze1.= foto_line('szwecja2010/vad_mot/motala',3,4,'_s');
    $podroze1.='Na sam koniec wycieczki pojechaliśmy zobaczyć śluzy na kanale Gota. Wygląda to podobnie jak w Bergu, jest ich może mniej,
    ale są moim zdaniem wyższe. Wypełnione wodą i przygotowane do sezonu nie robią już jednak takiego wrażenia jak puste.
    <br>Jadąc z Motali w kierunku Linkoping drogą numer 34 warto zwrócić uwagę na płynący nad głową kanał Göta. Trzeba uważać, bo jak
    się zobaczy płynący górą statek, może się to skończyć jakimś niespodziewanym zjechaniem z drogi ze zdziwienia.';
    $podroze1.= foto_line('szwecja2010/vad_mot/jezioro',3,2,'_s');
    $podroze1.='<br><i>Poprzednio o Vadstenie pisałem <a href="vadstena2008.php">tutaj</a>, a o Motali <a href="motala_rowerem2009.php">tutaj</a>.</i>';
//Goteborg 24.04.2010
    $podroze1.= '<h4>Göteborg - kwiecień 2010</h4>';
    $podroze1.= 'Sobota, 24 kwietnia wydawała się być idealnym dniem na otwarcie lunaparku Liseberg w Göteborgu.
    Niewiele myśląc zapakowaliśmy się więc w dwa samochody i pojechaliśmy obejrzeć to cudo do wytwarzania adrenaliny. Drogi nie ma
    co opisywać ani fotografować, Szwecja jest tak pocztówkowa, że żaden opis ani chyba żadne zdjęcie nie jest w stanie oddać tego tak,
    jakbym chciał. Po prostu trzeba patrzeć i obserwować. Pogoda była super, słonecznie, może zbyt chłodno, ale to też miało swoje
    zalety, bo nie było tak strasznego tłoku, jakiego można się było spodziewać po pierwszym dniu działalności miasteczka.';
    $podroze1.= foto_line('szwecja2010/goteborg/goteborg',3,8,'_s');
    $podroze1.='Ale Göteborg nie kończy się na Liseberg. Podzieliliśmy się więc na dwie grupy, zostawiliśmy maniaków adrenaliny i poszliśmy
    do portu zobaczyć muzeum morskie Maritiman. Muzeum składa się z kilkunastu statków zacumowanych przy nabrzeżu. Trasa zwiedzania
    jest tak zorganizowana, że prowadzi z jednego okrętu do drugiego bez możliwości zejścia w tym czasie na ląd. Chodzi się po tych
    okrętach i chodzi, tak długo, że może kanapek braknąć. Szczególnie gdy chce się zwiedzić całego niszczyciela "HMS Smaland",
    jedynego zachowanego okrętu wojennego tej wielkości w całej Skandynawii, trzeba być przygotowanym na dwugodzinne przebywanie
    w klaustrofobicznych korytarzach i na ból pleców następnego dnia. Jeżeli już wspominam klaustrofobiczne miejsca - polecam
    obejrzeć okręt podwodny "Nordkaperen" (bezpośrednie wejście z niszczyciela). Kajuta kapitana jest prawdopodobnie najwygodniejszym
    miejscem na tym cudzie niemieckiej techniki, a ma około półtora, no może dwa metry kwadratowe powierzchni. Szeregowa załoga
    śpi na torpedach. Z jednej strony fajnie, bo sprzątania niewiele, a z drugiej strony nie wyobrażam siebie w takim miejscu przez,
    powiedzmy, dwa miesiące. Ba! Nawet dwa dni byłyby dla mnie niezłym przeżyciem! Swoją drogą zastanawiam się, czy na okręty
    podwodne ludzie są dobierani według wzrostu: na przykład kapitan nie moze przekraczać 1,6 metra wzrostu, a reszta załogi 1,55.';
    $podroze1.= foto_line('szwecja2010/goteborg/muzeum',3,8,'_s');
    $podroze1.='Po wyjściu z labiryntu można było już spokojnie poszukać jakiegoś miejsca, gdzie można spokojnie coś zjeść i przerwać trwającą
    od rana abstynencję w pubie oferującym piwo w systemie "happy hours".
    <br>Göteborg po bliższym przyjrzeniu się różni się nieco od miast z wschodniej Szwecji. Jest mniej uporządkowany, więcej
    zatłoczony, zaśmiecony, taki... Bardziej europejski. Niestety nie mieliśmy zbyt dużo czasu na zwiedzenie całego miasta, ani nawet
    wejście do kolejnego z muzeów, np. fabrycznego muzeum Volvo, ale starczyło go jeszcze na obejrzenie miasta z wysokości wież
    obserwacyjnych w Lisebergu.';

//Walpurgia
    $podroze1.= '<h4>Noc Walpurgii, Sztokholm - kwiecień 2010</h4>';
    $podroze1.= 'Pojechaliśmy, zobaczyliśmy, szczęśliwie wróciliśmy.
    <br>Po dwóch latach spędzonych na oficjalnych obchodach Nocy Walpurgii nad Kinda Kanal w Linköping zdecydowaliśmy się odwiedzić
    słynne sztokholmskie polskie ognisko.
    <br>Było super, trochę tylko pogoda nie dopisała. Lało całą drogę, więc walczyłem z całych sił z powiekami, żeby nie zasnąć,
    i z samochodem, który akurat wtedy postanowił pokazać swoje muchy w nosie. Deszcz się na cale szczęście w miarę uspokoił, a jak to coś, co później kapało z nieba, nie przeszkadzało ognisku się palić, to czemu miało
    przeszkadzać ludziom.
    <br>Ogólnie żal tylko, że nie zdążyłem porozmawiać chociaż przez chwilę z wszystkimi, z którymi chciałem, ale jeszcze będzie
    okazja, mam nadzieję. Teraz czas na piątkowe spotkanie przy piwie, ale czy w maju, czy w czerwcu to się jeszcze okaże.
    Raczej w czerwcu, bo 14 maja nie jest zbyt fortunnym dla mnie terminem...
    <br><br>
    Poniżej zdjęcia moje...';
    $podroze1.= foto_line('szwecja2010/valborg/ognisko',3,7,'_s');
    $podroze1.='...i Marcina Wiśniewskiego, który dotrzymywał mi towarzystwa nie śpiąc w drodze powrotnej, podczas gdy tylna ławka obudziła się przy
    pierwszym zjeździe do Linkoping ;)';
    $podroze1.= foto_line('szwecja2010/valborg/ognisko_m',3,16,'_s');
    }
//  $podroze1.= foto_line('ochodzita2007/karczma',3,9,'_s');
include 'podr_sma.php';
require_once("funkcje.php");
data_index($podroze1,'meta data próbne ąśćŚ');
?>


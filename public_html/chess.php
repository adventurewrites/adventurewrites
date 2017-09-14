<?
  include 'conf.php';
  require "funkcje.php";
  $tryb_tekstowy=$_GET["tryb_tekstowy"];
  $english=$_GET["english"];
  if ($english!=1)
  $connect=mysql_connect($host,$user,$pass);
  if ($connect)
    {
      mysql_select_db($base);
      $sql="update uprawnienia set licznik=licznik+1 where user='adventure_chess'";
      $result=mysql_query($sql);
      mysql_close($connect);
    }
$prace_wlasne1='<h4> Adventure Chess project</h4>';
if ($english!=1)
{
$prace_wlasne1.='Na co dzień nie zajmuję się programowaniem w C++, więc aby nie zapomnieć tego języka wymyśliłem projekt, który ciągle mogę rozwijać,
jeżeli tylko znajdę na to ochotę i chwilę wolnego czasu. Wersja podstawowa, czyli <b>Adventure Chess v.028</b>, zajęła mi
28 dni pracy (stąd numeracja wersji) i została zakończona 20 listopada 2008 roku. Nie była to ciągła praca, lecz tu i ówdzie wyrwane pół godziny, czy to w długie szwedzkie
wieczory, czy w przewie meczu piłkarskiego, czy w deszczową sobotę.
<br>Niektórzy mówią, że szachy są trudnym tematem do programowania, a jak się okazało temat można zamknąć już w niecałych 2000 lini
kodu. Jednakże zdaję sobie sprawę, że liczba tych linii będzie ciągle rosła wraz ze stopniem zaawansowania projektu.
<br>Wszystkich chętnych do pomocy, czy to przy pisaniu, czy to przy testowaniu zapraszam do współpracy.
<br><b>Aktualności:</b>
<br>Aktualnie pracuję nad rozwojem silnika. W dalszej kolejności dostosuję program do środowiska graficznego Winboard/XBoard.
W wersji Adventure Chess v.0.039 zostały usunięte błędy zauważone podczas testowania Adventure Chess v.0.031.
<br>Gra w wersjach na Linux, SunOS, Windows oraz kod źródłowy jest do pobrania poniżej:';
}
else if ($english==1)
{
$prace_wlasne1.='Programming in C++ is not my current every day work, so for not to forget of this language I thought up project,
which I can develop continuously, if I have free time and good mood for it. The basic version, that is <b>Adventure Chess v.028</b>,
took me 28 days of work (hence version numbering) and was finished at 20 November 2008. It wasn\'t continuous work, but
here and there snatched half an hour in long Swedish evenings, or football match break, or rainy Saturday.
<br>Some people say, that chess are difficult subject for programming, but how occured later, subject could be closed in less than 2000
lines of source code. However I am beaware that number of these lines will be growing up along with the level of advance.
<br>Everybody willing to help with programming or testing are welcome :)
<br><b>News:</b>
<br>Currently I\'m working on engine development. Next step will be adjusting program to Winboard/XBoard graphic interface.
In Adventure Chess v.039 are fixed errors founded during testing of Adventure Chess v.0.031.
<br>Game in version for Linux, Sun OS, Windows and Source Code is available for download below:';
}
$prace_wlasne1.='<hr>
<br>:: License (GNU General Public Licence) <a href="http://adventure.go.pl/chess/COPYING">COPYING</a>
<br>:: What\'s new? <a href="http://adventure.go.pl/chess/ChangeLog">ChangeLog</a>
<br>:: <a href="http://adventure.oz.pl/chess/adventure_chess_linux">Linux ver.039</a>
<br>:: <a href="http://adventure.oz.pl/chess/adventure_chess_sun">Sun OS ver.039</a>
<br>:: <a href="http://adventure.oz.pl/chess/adventure_chess_windows.zip">Windows ver.039</a>
<br>:: <a href="http://adventure.oz.pl/chess/adventure_chess_source.zip">Source code ver.039</a>
';
  include 'prac_sma.php';
?>


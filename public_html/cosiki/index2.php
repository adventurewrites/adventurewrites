<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../cosiki/php/conf.php';
//*******************************************************
error_reporting(E_ALL^E_NOTICE);
if ($_GET["il_raz"] != 0)
{
	$koszyk = 3;
	include $path_php.'/header.php';
		echo "<br><table align=\"center\" bgcolor=\"#ebebe2\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
	echo "<td align=\"center\" bgcolor=\"#ebebe2\" colspan=\"2\">";

        $path= $path.php.'/rejestruj.php?'.$_SERVER[QUERY_STRING].'"';
	echo "Jeśli jesteś już naszym zarejestrowanym użytkownikiem, zaloguj się do systemu. <br>
	W przeciwnym przypadku proszę się <a class=\"menu\" href=$path>zarejestrować</a><p>";
	echo "</td>";
	echo "</tr>";

	$path= $path_php.'user.php?'.$_SERVER[QUERY_STRING].'"';
	echo "<form action=$path method=\"post\">";

	echo "<tr>";
	echo "<td align=\"right\" bgcolor=\"#ebebe2\">";
	echo "Użytkownik: ";
	echo "</td>";
	echo "<td align=\"left\" bgcolor=\"#ebebe2\">";
	echo "<input type=text class=\"poleForm\" maxlenght=\"8\" size=\"8\" name=\"login\"
	title=\"Wpisz identyfikator użytkownika\">";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=right bgcolor=\"#ebebe2\">";
	echo "Hasło: ";
	echo "</td>";
	echo "<td align=\"left\" bgcolor=\"#ebebe2\">";
	echo "<input type=\"password\" class=\"poleForm\" maxlenght=\"8\" size=\"8\" name=\"password\"
	title=\"Wpisz hasło\">";
	echo"</td></tr><tr><td colspan=\"2\"  bgcolor=\"#ebebe2\">";
	echo "<br><center><input type=submit class=\"poleForm\" value=\"Zaloguj\" name=\"submit\"></center>";
		echo "<br></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";


	echo "<p>
     <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#bceaa4\">
      <tr>
       <td width=\"100%\" bgcolor=\"#bceaa4\">";
       $path='../index.php?'.$_SERVER[QUERY_STRING].'"';
       echo "<a class=\"menu\" href=$path>Wróć do przeglądania towarów</a>";
       echo"</td>

     </tr>
    </table>";

}
else
{
	$koszyk = 3;
	include $path_php.'header1.php';


     echo "
     <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#bceaa4\">
      <tr>
       <td width=\"100%\" bgcolor=\"#bceaa4\" align=\"center\"><br>
       <b><font color=\"red\"> Twój koszyk jest pusty. Nie można złożyć zamówienia.</b></font><p>
     ";

      $path='"'.$path_href_root.'index.php?'.$_SERVER[QUERY_STRING].'"';
      echo "<a class=\"menu\" href=$path>Wróć do przeglądania towarów</a>";
       echo"</td>
     </tr>
    </table>";
}
?>

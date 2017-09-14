<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
require("conf.php");
//*******************************************************
require("../class/class.Cart.php");
require("../class/class.Form.php");
session_start();
$koszyk = 12; //zupełnie nie wiem po jakiego grzyba
error_reporting(E_ALL^E_NOTICE);
include 'header1.php';
$komunikat = "<br>Przed zatwierdzeniem formularza z danymi osobowymi zapoznaj się z <a href=regulamin.php>regulaminem</a><br><br>";
$DB = $base;
$newForm = new Formitable( @mysql_connect($host,$user,$pass),$DB,"c_kontrah" );
$newForm->setPrimaryKey("id_kon");
$newForm->hideField("id_kon");
$newForm->hideField("il_bl");
$newForm->passField("pass");
$newForm->labelFields(
array("nazwa","ulica","kod_pocz","miasto","pesel","nip","telefon","e_mail","login","pass"),
                       array("<b>Nazwa firmy lub nazwisko i imię</b>","<b>Ulica</b>","<b>Kod
		       pocztowy</b>","<b>Miasto</b>","Numer PESEL","Numer NIP","Numer
		       telefonu","<b>Adres poczty e-mail</b>","<b>Identyfikator
		       użytkownika</b>","<b>Hasło</b>") );
if (array_key_exists("ilosc_bledow",$_GET))
{
     echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=#bceaa4>";
     echo "<tr>";
     echo "<td>";
     $newForm->verifyvalue(array("nazwa"  ,"ulica"  ,"kod_pocz","miasto" ,"e_mail","login","pass"),
	                   array("nopusto","nopusto","kod_pocz","nopusto","email" ,"unikal","nopusto"));
     echo "</td>";
     echo "</tr>";
     echo "</table>";
}
if ($newForm->licznik_bledow>1 | !(array_key_exists("ilosc_bledow",$_GET)))
   {
     echo "<table border=0 align=center cellpadding=2 bgcolor=\"#ebebe2\">";
     echo "<tr>";
     echo "<td bgcolor=\"#ebebe2\">";
     $newForm->printForm();
     echo "</td>";
     echo "</tr>";
     echo "</table>";
   }
else
   {
     $newForm->submitForm();
     $connect = mysql_connect($host,$user,$pass);
     mysql_query('SET CHARACTER SET utf8');
     if ($connect)
     {
	mysql_select_db($base);
	$sql = "select * from c_kontrah where login='".$_POST["login"]."' and pass='".$_POST["pass"]."'";
	$result = mysql_query($sql);
	$first = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$id_kon =$row["id_kon"];
	mysql_free_result($result);
     }
     if ($first)
     {
	include 'zamow.php';
     }
     else
// to chyba nie jest najlepsze rozwiązanie - podwójny nagłówek
     {
	$user_login = 0;
	include '../index3.php';
	echo "<center><b><font color=red>Błędnie podany użytkownik lub hasło</font></b></center>";
	include 'footer.php';
     }
     return;
   }
?>

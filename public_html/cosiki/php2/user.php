<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include 'conf.php';
//*******************************************************
error_reporting(E_ALL^E_NOTICE);
$koszyk = 0;//0
$first = 0;
require("../class/class.Cart.php");
session_start();
$connect = mysql_connect($host,$user,$pass);
mysql_query('SET CHARACTER SET utf8');
if ($connect)
{
	mysql_select_db($base);
	$sql = "select * from c_kontrah where login='".$_POST["login"]."' and pass='".$_POST["password"]."'";
	$result = mysql_query($sql);
	$first = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$id_kon =$row["id_kon"];
	mysql_free_result($result);
}
if ($first)
{
	$user_login = 1;
	include 'header1.php';
	include 'zamow.php';
}
else
{
	$user_login = 0;
	include '../index3.php';
	echo "<center><b><font color=red>Błędnie podany użytkownik lub hasło</font></b></center>";
	include 'footer.php';
}
?>

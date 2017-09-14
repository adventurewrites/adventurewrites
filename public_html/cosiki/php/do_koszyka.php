<?
ob_start();
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../php/conf.php';
//*******************************************************
error_reporting(E_ALL^E_NOTICE);
require ("../".$path_class."class.Cart.php");
session_start();
$koszyk = 0;
$sel = $_GET["sel"];
$connect = mysql_connect($host,$user,$pass);
mysql_query('SET CHARACTER SET utf8');
mysql_select_db($base);
if ($connect)
{
  $sq[1] = "SELECT * FROM c_towary where ktm=";
  $sq[2] = "'".$_GET["ktm"]."'";
  $sql = join("",$sq);
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
  if (!isset($_SESSION["cart"]))
    {
      session_register("cart", "c_total", "c_bad");
      $_SESSION["cart"]  = $cart = new cart;
      $_SESSION["c_total"] = 0;
      $_SESSION["c_bad"] = 0;
      $_SESSION["cart"]->add($_GET["ktm"],1);
    }
  else
    {
      $_SESSION["cart"]->add($_GET["ktm"],1);
    }
}
include "../".$path_php.'koszyk.php';
include "../".$path_php.'footer.php';
?>

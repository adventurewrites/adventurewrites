<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include 'conf.php';
//*******************************************************
$il_raz = 0;
$war_brt = 0;
$koszyk = 12;  //był 3
require("../class/class.Cart.php");
session_start();
session_destroy();
session_start();
  if (!isset($_SESSION["cart"]))
    {
      session_register("cart", "c_total", "c_bad");
      $_SESSION["cart"]  = $cart = new cart;
      $_SESSION["c_total"] = 0;
      $_SESSION["c_bad"] = 0;
    }
include 'header1.php';
$data = $_GET["data"];
$connect=mysql_connect($host,$user,$pass);
mysql_query('SET CHARACTER SET utf8');
if ($connect)
{
	mysql_select_db($base);
	$sql = "UPDATE c_zam_nag SET zam_zatw='T' WHERE zam_data='".$data."'";
	$result = mysql_query($sql);
        if ($result==1)
        {
      	  $sql = "SELECT * FROM c_zam_nag WHERE zam_data='".$data."'";
      	  $result = mysql_query($sql);
      	  $row = mysql_fetch_array($result);

 echo"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
  <tr bgcolor=\"#bceaa4\">
    <td width=\"100%\" align=\"left\">
    &nbsp; Zatwierdzono</td>
  </tr>
  </table>";
          include 'mail.php';
      	  echo "<br><font color=white><CENTER>Zatwierdzono zamówienie numer <font
	  color=red><b>".$row["zam_nr"]."/".$row["zam_id_kon"]."</b></font>. <br>
	  <br>W razie wątpliwości prosimy o kontakt telefoniczny lub za pośrednictwem poczty elektronicznej.</CENTER>";
      	  echo "<CENTER><b>Dziękujemy za wykonanie zakupów w naszym sklepie</CENTER></font></b><p>";
          echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
    <tr bgcolor=\"#bceaa4\">
      <td width=\"100%\" align=\"left\">";
      $path='../index.php?sel='.$sel.'&il_raz=0&war_brt=0"';
      echo "
      <a class =\"menu\" href=$path>Powrót do wybierania towarów</a>
      </td>
   </tr>
  </tr>
</table>";
      	}
	mysql_close($connect);
}
	include 'footer.php';
?>

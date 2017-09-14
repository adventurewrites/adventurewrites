<?
ob_start();
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../php/conf.php';
//*******************************************************

   if (!class_exists("cart"))
   require("../".$path_class."class.Cart.php");
   include "../".$path_php.'funkcje.php';
   $koszyk = 0;
   $connect = mysql_connect($host,$user,$pass);
   mysql_query('SET CHARACTER SET utf8');
   $sq[1] = "SELECT * FROM c_towary where ktm=";
   $sq[2] = "'".$_GET["ktm"]."'";
   $sql = join("",$sq);
   $result = mysql_query($sql);
   mysql_select_db($base);
   session_start();
   if (array_key_exists("ilosc",$_GET))
   {
     if (array_key_exists("ktm",$_GET))
     {
       if (valid_isOnlyDigits($_GET["ilosc"]))
       {  $ilosc = $_GET["ilosc"];
       }
       else
       {  $ilosc = 0;
       }
       $_SESSION["cart"]->edit($_GET["ktm"],$ilosc);
     }
   }
   else
   {
     if (array_key_exists("ktm",$_GET))
        $_SESSION["cart"]->del($_GET["ktm"],$_GET["iloscu"]);
   }
   mysql_close($connect);
   include "../".$path_php.'koszyk.php';
   include "../".$path_php.'footer.php';
ob_end_flush();
?>

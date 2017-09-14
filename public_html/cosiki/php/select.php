<? ob_start(); ?>
<style type="text/css">
TR.level1 {
   background-image: url(./grafika/td1.gif);
    font-family: Verdana, Arial, Helvetica, sans-serif;
   font-size: 12px;
   color: #000000;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level2 {
   background-color  : #c0c0c0;
   font-family: Verdana, Arial, Helvetica, sans-serif;
   font-size: 12px;
   color: #000000;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level3 {
   background-color  : #ebebe2;
   font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level4 {
   background-color  : #ffffff;
   font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
   padding-left: 5px;
   padding-right: 5px;
}
</style>
<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../cosiki/php/conf.php';
//*******************************************************
   if (!class_exists("cart"))
   require($path_class."class.Cart.php");
   include $path_php.'header.php';
   $connect=mysql_connect($host,$user,$pass);
   mysql_query('SET CHARACTER SET utf8');
   require($path_class."class.Table.php");
   $table1=new Table(1);
   $table1->setHeaders("Grupy wyrobów");
   $table1->setHeaderProperty("class=level1");
   $table1->setColWidth("130");
   $table1->setSpacing(1);
   $table1->setColAlignment("left");
   $table2=new Table(5);
   $table2->setHeaders("Wyroby^Symbol^Opis^Koszyk^Cena");
   $table2->setHeaderProperty("class=level1");
   $table2->setColWidth(",100,400,50,80");
   $table2->setSpacing(1);
   $table2->setPadding(2);
   $table2->setColAlignment("center,left,left,center,right");
if ($connect)
{
   mysql_select_db($base);
   if (!$_GET)
   {
     $sql="SELECT * FROM c_grupy ORDER BY kod_gr";
     $result=mysql_query($sql);
     $il_w=mysql_num_rows($result);
     if ($il_w>0)
     {
       $row=mysql_fetch_array($result);
       $sel=$row["nazwa_gr"];
     }
     else
     {
       $sel='';
     }
     $il_raz=0;
     $war_brt=0;
     $ktm='';
   }
   else
   { $sel=$_GET["sel"];
     $il_raz=$_GET["il_raz"];
     $war_brt=$_GET["war_brt"];
   }
   $sql1="SELECT * FROM c_grupy ORDER BY kod_gr";
   $result1=mysql_query($sql1);
   $il_w=mysql_num_rows($result1);
   echo "<table>";
   echo "<tr>";
   echo "<td valign=\"top\">";
   for ($i=0;$i<$il_w;$i++)
   {  $row1=mysql_fetch_array($result1);
      $table1->AddRow("<a class=\"towar\" href=\"index.php?sel=".$row1["nazwa_gr"]."&il_raz=$il_raz&war_brt=$war_brt\">".$row1["nazwa_gr"]."</a>","class=level3");
   }
   $table1->Process();
   $table1->Display();
     include $path_php.'szukaj.php';
   echo "<a href=\"http://www.adventure.host22.com\"><img src=\"images/adventure.jpg\" width=125 alt=\"www.adventure.oz.pl\"></a>";
   $szukaj=mysql_query("SELECT * FROM c_grupy WHERE nazwa_gr='".$sel."'");
   $il_wszuk=mysql_num_rows($szukaj);
   if ($il_wszuk>0)
   {
     $sql2="SELECT * FROM c_towary WHERE kod_gr='".$sel."' ORDER BY ktm";
   }
   else
   {
     $sql2="SELECT * FROM c_towary WHERE MATCH (nazwa_tow,opis,kod_gr,ktm) AGAINST ('".$sel."*' IN BOOLEAN MODE)";
   }
   $result2=mysql_query($sql2);
   $il_w2=mysql_num_rows($result2);
   echo "<td valign=\"top\">";
   for ($j=0;$j<$il_w2;$j++)
   {  $row2=mysql_fetch_array($result2);
      $ktm=$row2["ktm"];
      $obrazek = $path_zdje.$ktm.'.jpg';
      $wielkosc=getimagesize($obrazek);
      $width=$wielkosc[0];
      $height=$wielkosc[1];
      $path = '"'.$path_href_php.'towar.php?ktm='.$ktm.'"';
      $path2 = '"'.$path_href_php.'do_koszyka.php?ktm='.$row2["ktm"].'&sel='.$sel.'&il_raz='.$il_raz.'&war_brt='.$war_brt.'"';
      $script1="javascript:window.open($path,\"NewObr\",\"width=$width,height=$height\")";
      $script2="javascript:cursor.Value=\"hand\"";
      $script3="javascript:cursor.Value=\"crosshair\"";
//***wyczesanie przegladarki
      $agent = strstr($_SERVER["HTTP_USER_AGENT"],'MSIE');
      if ($agent!='')
      { $level = level4;
      }
      else
      { $level = level3;
      }
      $table2->AddRow("<img onclick=$script1 style=\"cursor:move;\" border=0 src=\"zdjecia/".$row2["ktm"]."s.jpg\"
      title=\"Kliknij, aby powiększyć obrazek\" class=\"lapka\" >^
                      "."<B>".$row2["nazwa_tow"]."</B><BR>".$row2["ktm"]."^
                      ".$row2["opis"]."^<a href=$path2><img src=\"images/kosz_green.gif\" alt=\"Dodaj do
		      koszyka\" title=\"Dodaj do koszyka\" border=0 class=\"lapka\"></a>^
                      ".$row2["cen_net"]." zł",
                      "class=".$level);
     }
      $table2->Process();
      $table2->Display();
      echo "</td>";
      echo "</tr>";
      echo "</table>";
 }
?>


<style type="text/css">
TR.level1 {
	  background-color  : #000000;
   background-image: url(grafika/td1.gif);
   font-family: Arial;
   font-size: 12px;
   color: white;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level2 {
    background-color  : #ff0000;
   background-image: url(grafika/td1.gif);
   font-family: Arial;
   font-size: 12px;
   color: white;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level3 {
   background-color  : #ebebe2;
   font-family: Arial;
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
include'../php/conf.php';
//*******************************************************
error_reporting(E_ALL^E_NOTICE);


function list_cart()
{
  global $path_class, $path_imag;
  global $lastchange;
  require("../".$path_class."class.Table.php");
  $licznik = 0;
  $lastchange = 0;
  $table=new Table(8);
  $table->setHeaders("Kod towaru^Nazwa^Cena^Ilość^Wartość netto^Wartość vat^Wartość brutto^Akcja");
  $table->setHeaderProperty("class=level1");
  $table->setColWidth("100,200,50,40,90,90,90,90");
  $table->setSpacing(1);
  $table->setColAlignment("left,left,right,center,right,right,right,center");
  global $il_raz, $war_brt_form_raz;
  global $cen_net, $zap, $war_net_raz, $war_brt_raz, $war_vat_raz, $sel, $ilosct;
  $stan = $_SESSION["cart"]->show_cart();
  if (!$stan)
     {
       $_SESSION["c_total"] = 0;


   echo"  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
  <tr bgcolor=\"#bceaa4\">
      <td width=\"20%\" align=\"center\"><b><font color=\"red\" >Twój koszyk jest pusty</font></b></td>

  </tr></table>";
       return 0;
     }
  $il_raz = 0;
  while (list($key, $value) = each($stan))
  {
    if ($key)
      {
        $licznik++;
        $zap.=$key.',';
        $qt_tab[$key] = $value;
        $sq[1] = "SELECT * FROM c_towary WHERE ktm=";
        $sq[2] = "'".$key."'";
        $sql = join("",$sq);
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        $cen_net = $row["cen_net"];
        $ilosct = $value;
        $war_net = $row["cen_net"]*$value;
        $war_vat = ($row["pr_vat"]/100)*$war_net;
        $war_brt = $war_net+$war_vat;
        $war_net_raz += $row["cen_net"]*$value;
        $war_vat_raz += ($row["pr_vat"]/100)*$war_net;
        $war_brt_raz += $war_net+$war_vat;
        $war_net_form = sprintf("%01.2f",$war_net);
        $war_vat_form = sprintf("%01.2f",$war_vat);
        $war_brt_form = sprintf("%01.2f",$war_brt);
        $war_net_form_raz = sprintf("%01.2f",$war_net_raz);
        $war_vat_form_raz = sprintf("%01.2f",$war_vat_raz);
        $war_brt_form_raz = sprintf("%01.2f",$war_brt_raz);
        $il_raz+= $value;
          $us_z_kos1 = '"us_z_kos.php?ktm='.$key.'&sel='.$sel.'&il_raz='.$il_raz.'&war_brt='.$war_brt_form_raz.'&iloscu=1"';
          $us_z_kos2 = '"us_z_kos.php?ktm='.$key.'&sel='.$sel.'&il_raz='.$il_raz.'&war_brt='.$war_brt_form_raz.'&iloscu='.$value.'"';
	  $img_src1  = "../".$path_imag.'kosz_red.gif';
	  $img_src2  = "../".$path_imag.'kosz_usun.gif';
	$table->AddRow($key."^
            <B>".$row["nazwa_tow"]."</B>^
            ".$cen_net."^
            <form name=\"koszyk$licznik\" action=us_z_kos.php method=get>
            <input type=hidden class=\"poleForm\" name=ktm value=$key>
            <input type=hidden class=\"poleForm\" name=sel value=\"$sel\">
            <input type=hidden class=\"poleForm\" name=il_raz value=$il_raz>
            <input type=hidden class=\"poleForm\" name=war_brt value=$war_brt_form_raz>
            <input type=hidden class=\"poleForm\" name=\"lastchange\" value=$licznik>
            <input type=text size=\"2\" class=\"poleForm\" value=$value
	    name=ilosc onblur=\"javascript:document.koszyk$licznik.submit()\"></form>^
            ".$war_net_form."^
            ".$war_vat_form."^
            ".$war_brt_form."^
            <A HREF=$us_z_kos1><IMG SRC=$img_src1 title=\"Usuń jedną sztukę z koszyka\" BORDER=0></A>&nbsp&nbsp&nbsp
            <A HREF=$us_z_kos2><IMG SRC=$img_src2 title=\"Usuń cały towar z koszyka\" BORDER=0></A>",
            "class=level3");
      }
  }

    echo "
  <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#bceaa4\">
  <tr>
    <td width=\"100%\" bgcolor=\"#bceaa4\">&nbsp;AKTUALNY STAN KOSZYKA</td>

  </tr>
</table>

  ";
//podsumowanie
        $table->AddRow("^
                        R A Z E M:^^
                       ".$il_raz."^
                         ".$war_net_form_raz."^
                         ".$war_vat_form_raz."^
                         ".$war_brt_form_raz."^
                         ",
                         "class=level2");
  $table->Process();
  $table->Display();
  $zap_size = strlen($zap);
  if ($zap_size == 0)
    {
      echo"  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
                <tr bgcolor=\"#bceaa4\">
                   <td width=\"20%\" align=\"center\"><b><font color=\"red\" >Twój koszyk jest pusty</font></b>
	           </td>
                </tr>
	     </table>";
      return 0;
    }
}
include "../".$path_php.'header1.php';
list_cart();
  echo "
  <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#bceaa4\">
  <tr>
    <td width=\"8%\" bgcolor=\"#bceaa4\">&nbsp;</td>";
    $path1='"../index.php?sel='.$sel.'&il_raz='.$il_raz.'&war_brt='.$war_brt_form_raz.'"';
    $path2='"../index2.php?sel='.$sel.'&il_raz='.$il_raz.'&war_brt='.$war_brt_form_raz.'"';
  echo "
    <td width=\"28%\" align=\"center\" bgcolor=\"#bceaa4\"><a class=\"menu\" href=$path1>Wróć do przeglądania towarów</a></td>
    <td width=\"28%\" align=\"center\" bgcolor=\"#bceaa4\"><a class=\"menu\" href=$path2> Złóż zamówienie</a></td>
    <td width=\"28%\" align=\"center\" bgcolor=\"#bceaa4\"><p class=\"menu\"
    title=\"Kliknij, by przeliczyć warości po zmianie ilości w formularzu\">Przelicz wartości</p></td>
    <td width=\"8%\" bgcolor=\"#bceaa4\">&nbsp;</td>
  </tr>
</table>";
mysql_close($connect);
?>

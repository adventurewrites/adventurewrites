<style type="text/css">
TR.level1 {
	background-color  : #000000;
	font-family: Arial;
	font-size: 11px;
	color: white;
	padding-left: 5px;
}
TR.level2 {
	background-color  : #ebebe2;
	font-family: Arial;
	font-size: 11px;
	color: #000000;
	padding-left: 5px;
}
TR.level3 {
	background-color  :#ebebe2;
	font-family: Arial;
	font-size: 11px;
	color: #000000;
	padding-left: 5px;
}
</style>
<?
function list_cart()
{
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../php/conf.php';
//*******************************************************
  $licznik = 0;
  require("../class/class.Table.php");
  $connect=mysql_connect($host,$user,$pass);
  mysql_query('SET CHARACTER SET utf8');
  mysql_select_db($base);
  $newtable=new Table(6);
  $newtable->setHeaders("Kod towaru^Nazwa^Ilość^Wartość netto^Wartość vat^Wartość brutto");
  $newtable->setHeaderProperty("class=level1");
  $newtable->setColWidth("100,320,40,100,100,100");
  $newtable->setSpacing(1);
  $newtable->setColAlignment("center,left,center,right,right,right");
  global $il_raz, $war_brt_form_raz, $data, $id_kon;
  global $cen_net, $zap, $war_net_raz, $war_brt_raz, $war_vat_raz, $sel;
  $il_raz = 0;
  $stan = $_SESSION['cart']->show_cart();
  $stan = $_SESSION['cart']->show_cart();
  if (!$stan)
     {
       $_SESSION['c_total'] = 0;
       echo "Twój koszyk jest pusty";
       return 0;
     }
  $lp = 0;
  while (list($key, $value) = each($stan))
  {
    if ($key)
      {
        $licznik++;
        $lp += 1;
        $zap.=$key.',';
        $qt_tab[$key] = $value;
        $sq[1] = "SELECT * FROM c_towary WHERE ktm=";
        $sq[2] = "'".$key."'";
        $sql = join("",$sq);
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
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
        $sql_data = "select NOW() as data";
        $result = mysql_query($sql_data);
        $row_data = mysql_fetch_array($result);
        $data = $row_data["data"];
        $sql = "insert into c_zam_nag (zam_id_kon, zam_data) values (".$id_kon.",'".$data."')";
        mysql_query($sql);
        $sql_spr = "select * from c_zam_nag where zam_data='".$data."' and zam_id_kon='".$id_kon."'";
        $res_spr = mysql_query($sql_spr);
        $row_il = mysql_num_rows($res_spr);
        if ($row_il)
          {
             $row_spr = mysql_fetch_array($res_spr);
             $sql_dod = "insert into c_zam_poz (nr_zam, zam_poz, ktm, ilosc, cen_net, pr_vat, war_net, war_vat, war_brt) values (".$row_spr["zam_nr"].",".$lp.",'".$key."',".$value.",".$row["cen_net"].",".$row["pr_vat"].",".$war_net.",".$war_vat.",".$war_brt.")";
             $res_dod = mysql_query($sql_dod);
	  }
        $newtable->AddRow($key."^
                        ".$row["nazwa_tow"]."^
			 ".$value."^
                         ".$war_net_form."^
                         ".$war_vat_form."^
                         ".$war_brt_form,
                         "class=level3");
      }
  }
        $newtable->AddRow("^
                        R A Z E M:^
                       ".$il_raz."^
                         ".$war_net_form_raz."^
                         ".$war_vat_form_raz."^
                         ".$war_brt_form_raz,
                         "class=level2");
  $newtable->Process();
  $newtable->Display();
  $zap_size = strlen($zap);
  if ($zap_size == 0)
    {
      echo "Twój koszyk jest pusty.";
      return 0;
    }
  mysql_free_result($result);
  mysql_free_result($res_spr);
}
list_cart();

  echo "<p>
  <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#bceaa4\">
  <tr>
    <td width=\"25%\" bgcolor=\"#bceaa4\">&nbsp;</td>
    <td width=\"25%\" align=\"center\" bgcolor=\"#bceaa4\">";
     echo "<a class=\"menu\"  href=\"../index.php?sel=$sel&il_raz=$il_raz&war_brt=$war_brt_form_raz\">Wróć do przeglądania towarów</a>";
  echo"  </td>
    <td width=\"25%\" align=\"center\" bgcolor=\"#bceaa4\">";
     echo "<a class=\"menu\" href=\"zatwzam.php?sel=$sel&data=$data\">Zatwierdź</a>";
   echo" </td>
    <td width=\"25%\" bgcolor=\"#bceaa4\">&nbsp;</td>
  </tr>
</table>";


  echo "<CENTER><b><FONT color=white>UWAGA!!!<br>Po naciśnięciu \"Zatwierdź\" twoje zamówienie zostanie zarejestrowane, a koszyk wyczyszczony. <br> Zamówienie trafi do realizacji.<br> W razie wątpliwości prosimy o kontakt telefoniczny.</FONT></b></CENTER>";
  mysql_close($connect);
  include 'footer.php';
 ?>


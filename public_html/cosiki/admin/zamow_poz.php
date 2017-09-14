<?php
if (!isset($time1))
  { $time1=gettimeofday();}
if (array_key_exists("nr_zam",$_GET))
  {
    $nr_zam=$_GET["nr_zam"];
  }
?>
<style type="text/css">
TR.level1 {
   background-color  : #726461;
   font-family: Verdana, Arial, Helvetica, sans-serif;
   font-size: 12px;
   color: #fffae4;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level2 {
   background-color  : #fffae4;
   font-family: Verdana, Arial, Helvetica, sans-serif;
   font-size: 12px;
   color: #000000;
   padding-left: 5px;
   padding-right: 5px;
}
TR.level3 {
   background-color  : #df9500;
   font-family: Verdana, Arial, Helvetica, sans-serif;
   font-size: 12px;
   color: #000000;
   padding-left: 5px;
   padding-right: 5px;
}
</style>
<?php
 include 'conf.php';
 require($class_source);
 $table1=new Table(11);
 $table1->setHeaders("^Poz.^KTM^Nazwa towaru^Ilość^Cena netto^Pr.VAT^Wart.netto^Wart.VAT^Wart.brutto^");
 $table1->setHeaderProperty("class=level1");
 $table1->setPercent();
 $table1->setColWidth("4,5,10,30,5,10,5,10,10,10,1");
 $table1->setSpacing(1);
 $table1->setColAlignment("center,right,left,left,right,right,right,right,right,right,left");
 $connect = mysql_connect($host,$user,$pass);
 if ($connect)
 { mysql_select_db($base);
   $sql = "SELECT c_zam_poz.nr_zam,
                  c_zam_poz.zam_poz,
                  c_zam_poz.ilosc,
                  c_zam_poz.cen_net,
                  c_zam_poz.pr_vat,
                  c_zam_poz.war_net,
                  c_zam_poz.war_vat,
                  c_zam_poz.war_brt,
                  c_towary.ktm AS ktm,
                  c_towary.nazwa_tow AS nazwa_tow
           FROM c_zam_poz
           LEFT JOIN c_towary ON c_zam_poz.ktm=c_towary.ktm
           WHERE nr_zam=".$nr_zam."
           ORDER BY c_zam_poz.zam_poz";
   $result = mysql_query($sql);
   $numrec = 0;
   if (!array_key_exists("record",$_GET))
   { if (!isset($record))
      { $record=1; }
   }
   else
   { $record=$_GET["record"];}
   while ($row = mysql_fetch_array($result))
   { $numrec++;
   if ($numrec==$record)
   { $class = "class=level3";
     $id_zad = $row["nr_zam"];
     $pozycja = $row["zam_poz"];
   }
   else
   { $class = "class=level2";
   }
     $table1->AddRow("<form name=\"form$numrec\" method=get action=\"zamow_poz.php\">
                        <input type=hidden  name=record value=$numrec>
                        <input type=hidden  name=nr_zam value=".$row["nr_zam"].">
                        <input type=hidden  name=pozycja value=".$row["zam_poz"].">
                        <input type=image src=\"../images/expanded.gif\">"
                      ."^".$row["zam_poz"]
                      ."^".$row["ktm"]
		      ."^".$row["nazwa_tow"]
		      ."^".$row["ilosc"]
		      ."^".$row["cen_net"]
		      ."^".$row["pr_vat"]
		      ."^".$row["war_net"]
		      ."^".$row["war_vat"]
		      ."^".$row["war_brt"]."^</form>"
		     ,$class);
   }
 if ($numrec>0)
   { $menu='menu/menu_zamow_poz.txt';
   }
 else
   { $menu='menu/menu_zamow_poz_pusto.txt';
     $id_zad=$nr_zam;
   }
 $sql = "SELECT * FROM c_zam_nag WHERE zam_nr=".$nr_zam;
 $result=mysql_query($sql);
 if ($row=(mysql_fetch_array($result)))
   { $numer = $row["zam_nr"];
     $kontrah = $row["zam_id_kon"];
   }
 $sql = "SELECT nr_zam,
                SUM(ilosc) AS il_razem,
                SUM(war_net) AS war_net_raz,
                SUM(war_vat) AS war_vat_raz,
                SUM(war_brt) AS war_brt_raz
         FROM c_zam_poz
         WHERE nr_zam=".$nr_zam."
         GROUP BY nr_zam";
 $result=mysql_query($sql);
 if ($row=(mysql_fetch_array($result)))
   {
     $table1->AddRow("^^^^".$row["il_razem"]."^^^".$row["war_net_raz"]."^".$row["war_vat_raz"]."^".$row["war_brt_raz"]."^","class=level1");
   }
 $tytul="SSI SKLEP: pozycje zamówienia numer ".$numer."/".$kontrah;
 include 'menu.php';
 $table1->Process();
 $table1->Display();
 }
 else
 {
   $menu='menu/menu_wroc.txt';
   include 'menu.php';
   echo "Brak połączenia z maszyną bazy danych..."; }
include 'footer.php';
?>

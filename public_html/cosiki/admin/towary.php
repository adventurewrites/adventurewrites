<?php
if (!isset($time1))
  { $time1=gettimeofday();}
if (array_key_exists("id_zad",$_GET))
{ $id_zad = $_GET["id_zad"];
}
else
{ $id_zad=0;
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
 $table1=new Table(6);
 $table1->setHeaders("^Grupa^Kod towaru^Nazwa towaru^Cena netto^");
 $table1->setHeaderProperty("class=level1");
 $table1->setPercent();
 $table1->setColWidth("7,15,15,52,10,1");
 $table1->setSpacing(1);
 $table1->setColAlignment("center,left,left,left,right,left");
 $connect = mysql_connect($host,$user,$pass);
 if ($connect)
 { mysql_select_db($base);
   $sql = "SELECT * FROM c_towary ORDER BY kod_gr,ktm";
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
     $id_zad = $row["ktm"];
   }
   else
   { $class = "class=level2";
   }
     $table1->AddRow("<form name=\"form$numrec\" method=get action=\"towary.php\">
                        <input type=hidden  name=record value=$numrec>
                        <input type=hidden  name=id_zad value=".$row["ktm"].">
                        <input type=image src=\"../images/expanded.gif\">"
                      ."^".$row["kod_gr"]
                     ."^".$row["ktm"]
		     ."^".$row["nazwa_tow"]
		     ."^".$row["cen_net"]."^</form>"
		     ,$class);
   }
 if ($numrec>0)
   { $menu='menu/menu_towary.txt';
   }
 else
   { $menu='menu/menu_towary_pusto.txt';
   }
 $tytul="SSI SKLEP: kartoteka towarowa";
 include 'menu.php';
 $table1->Process();
 $table1->Display();
 }
 else
 {
   $menu='menu/menu_towary.txt';
   include 'menu.php';
   echo "Brak połączenia z maszyną bazy danych..."; }
include 'footer.php';
?>

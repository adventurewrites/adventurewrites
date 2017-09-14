<?php
if (!isset($time1))
  { $time1=gettimeofday();}
 include 'conf.php';
 require($class_source);
 $table1=new Table(7);
 $table1->setHeaders("^Data zam.^Nr.zam.^Id.kontr.^Kontrahent^Status^");
 $table1->setHeaderProperty("class=level1");
 $table1->setPercent();
 $table1->setColWidth("7,22,8,8,53,1,1");
 $table1->setSpacing(1);
 $table1->setColAlignment("center,left,right,right,left,left,left");
 $connect = mysql_connect($host,$user,$pass);
 if ($connect)
 { mysql_select_db($base);
   $sql = "SELECT * FROM zam_nag
           LEFT JOIN kontrah ON zam_nag.zam_id_kon=kontrah.id_kon
           WHERE zam_nag.zam_status='T'
           ORDER BY zam_nag.zam_data";
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
     $id_zad = $row["zam_nr"];
   }
   else
   { if ($row["zam_zatw"]=='T')
       { $class = "class=level2";
       }
     else
       { $class = "class=level4";
       }
   }
     $table1->AddRow("<form name=\"form$numrec\" method=get action=\"realzamow.php\">
                        <input type=hidden  name=record value=$numrec>
                        <input type=hidden  name=id_zad value=".$row["zam_nr"].">
                        <input type=image src=\"images/expanded.gif\">"
                      ."^".$row["zam_data"]
                      ."^".$row["zam_nr"]
		                ."^".$row["zam_id_kon"]
		                ."^".$row["nazwa"]
		                ."^".$row["zam_zatw"]."^</form>"
		     ,$class);
   }
 if ($numrec>0)
   { $menu='menu/menu_real.txt';
   }
 else
   { $menu='menu/menu_real_pusto.txt';
   }
 $tytul="SSI SKLEP: zamówienia zrealizowane";
 include 'menu.php';
 $table1->Process();
 $table1->Display();
 }
 else
 {
   $menu='menu/menu_wroc.txt';
   include 'menu.php';
   echo "Brak po³±czenia z maszyn± bazy danych..."; }
include 'footer.php';
?>

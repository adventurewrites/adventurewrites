<?php
//USUWANIE POZYCJI ZAMOWIENIA
//RS [2003.09.25]
if (!isset($time1))
  { $time1=gettimeofday();}
    $id_zad=$_GET["zam_nr"];
    $nr_zam=$_GET["zam_nr"];
    $poz=$_GET["poz"];
    include 'conf.php';
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { 
		mysql_query('SET CHARACTER SET utf8');
        mysql_select_db($base);
        $sql = "DELETE FROM zam_poz WHERE nr_zam=".$nr_zam." AND zam_poz=".$poz;
            if ($demo==1)
              { include 'errno.php';
                include 'footer.php';
              }
            elseif (!mysql_query($sql))
              { include 'errno.php';
                include 'footer.php';
              }
            else
              { include 'zamow_poz.php';
              }
      }
?>

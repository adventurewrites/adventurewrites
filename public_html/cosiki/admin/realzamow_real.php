<?php
if (!isset($time1))
  { $time1=gettimeofday();}
    $nr_zam=$_GET["nr_zam"];
    //realizacja zamówienia
    //*****TABELKA ZAM_NAG
    include 'conf.php';
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { mysql_select_db($base);
        $sql = "UPDATE c_zam_nag SET zam_status='N' WHERE zam_nr=".$nr_zam;
        if (!mysql_query($sql))
          { include 'errno.php';
            include 'footer.php';
          }
        else
          { include 'realzamow.php';
          }
      }
?>

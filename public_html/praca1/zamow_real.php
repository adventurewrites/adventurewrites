<?php
if (!isset($time1))
  { $time1=gettimeofday();}
    $nr_zam=$_GET["nr_zam"];
    //realizacja zamówienia
    //*****TABELKA ZAM_NAG
    include 'conf.php';
    $connect=mysql_connect($host,$user,$pass);
    mysql_query('SET CHARACTER SET utf8');
      if ($connect)
      { mysql_select_db($base);
        $sql = "UPDATE zam_nag SET zam_status='T' WHERE zam_nr=".$nr_zam;
        if ($demo==1)
          { include 'errno.php';
            include 'footer.php';
          }
        elseif (!mysql_query($sql))
          { include 'errno.php';
            include 'footer.php';
          }
        else
          { include 'zamow.php';
          }
      }
?>

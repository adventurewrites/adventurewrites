<?php
//powrót do nagłówków zamówienia
//RS [2003.09.25]
if (!isset($time1))
  { $time1=gettimeofday();}
$zam_nr=$_GET["zam_nr"];
include 'funkcje.php';
include 'conf.php';
if ($connect=mysql_connect($host,$user,$pass))
  { mysql_select_db($base);

    $record = record_nr("SELECT * FROM c_zam_nag WHERE zam_status='T' ORDER BY zam_data",$zam_nr,"zam_nr");
    include 'realzamow.php';
  }
?>

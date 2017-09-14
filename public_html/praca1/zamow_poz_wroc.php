<?php
//powrót do nag³ówków zamówienia
//RS [2003.09.25]
if (!isset($time1))
  { $time1=gettimeofday();}
$zam_nr=$_GET["zam_nr"];
include 'funkcje.php';
include 'conf.php';
if ($connect=mysql_connect($host,$user,$pass))
  { 
	mysql_query('SET CHARACTER SET utf8');
	mysql_select_db($base);
	$record = record_nr("SELECT * FROM zam_nag WHERE zam_status='N' ORDER BY zam_data",$zam_nr,"zam_nr");
    include 'zamow.php';
  }
?>

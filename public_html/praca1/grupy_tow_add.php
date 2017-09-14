<?php
//aktualizacja danych kontrahenta
if (!isset($time1))
  {$time1=gettimeofday();}
$update=$_GET["update"];
   if (array_key_exists("nazwa",$_GET))
     { $nazwa=$_GET["nazwa"];
     }
   else
     { $nazwa="";
     }
//aktualizujemy dane::
include 'funkcje.php';
include 'conf.php';
$connect = mysql_connect($host,$user,$pass);
if ($connect)
  {  mysql_select_db($base);
     if ($update=="2")
       { $sql = "INSERT INTO grupy
                (kod_gr,nazwa_gr)
                VALUES
                ('".$_GET["id_gr"]."','".$nazwa."')";
       }
     else
       { $sql = "UPDATE grupy SET
                   nazwa_gr='".$nazwa."' WHERE kod_gr='".$_GET["id_gr"]."'";
       }
     if ($demo==1)
     {  include 'errno.php';
        include 'footer.php';
     }
     elseif (!mysql_query($sql))
     {  include 'errno.php';
        include 'footer.php';
     }
     else
     {  $record = record_nr("SELECT * FROM grupy ORDER BY kod_gr",$_GET["id_gr"],"kod_gr");
        include 'grupy_tow.php';
     }
  }
else
  {  $menu='menu/menu_wroc.txt';
     include 'menu.php';
     echo "Brak po³±czenia z maszyn± bazy danych!";
     include 'footer.php';
  }
?>




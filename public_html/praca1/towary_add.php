<?
if (!isset($time1))
  { $time1=gettimeofday();}
//aktualizacja danych kontrahenta
$update=$_GET["update"];
$ktm=$_GET["ktm"];
echo $kod_gr;
   if (array_key_exists("kod_gr",$_GET))
     { $kod_gr=$_GET["kod_gr"];
     }
   else
     { $kod_gr="";
     }
   if (array_key_exists("nazwa_tow",$_GET))
     { $nazwa_tow=$_GET["nazwa_tow"];
     }
   else
     { $nazwa_tow="";
     }
   if (array_key_exists("cen_net",$_GET))
     { $cen_net=$_GET["cen_net"];
     }
   else
     { $cen_net=0;
     }
   if (array_key_exists("pr_vat",$_GET))
     { $pr_vat=$_GET["pr_vat"];
     }
   else
     { $pr_vat="";
     }
   if (array_key_exists("opis",$_GET))
     { $opis=$_GET["opis"];
     }
   else
     { $opis="";
     }
//aktualizujemy dane::
include 'conf.php';
include 'funkcje.php';
$connect = mysql_connect($host,$user,$pass);
mysql_query('SET CHARACTER SET utf8');
if ($connect)
  {  mysql_select_db($base);
     if ($update=="2")
       { $sql = "INSERT INTO towary
                (kod_gr,ktm,nazwa_tow,cen_net,pr_vat,opis)
                VALUES
                ('".$kod_gr."','".$ktm."','".$nazwa_tow."',".$cen_net.",".$pr_vat.",'".$opis."')";
       }
     else
       { $sql = "UPDATE towary SET
                   kod_gr='".$kod_gr."',
                   nazwa_tow='".$nazwa_tow."',
                   cen_net=".$cen_net.",
                   pr_vat=".$pr_vat.",
                   opis='".$opis."' WHERE ktm='".$ktm."'";
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
     {  $record = record_nr("SELECT * FROM towary ORDER BY kod_gr,ktm",$ktm,"ktm");
        include 'towary.php';
     }
  }
else
  {  $menu='menu/menu_wroc.txt';
     include 'menu.php';
     echo "Brak połączenia z maszyną bazy danych!";
     include 'footer.php';
  }
?>




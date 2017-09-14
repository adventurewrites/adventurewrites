<?php
if (!isset($time1))
  { $time1=gettimeofday();}
//aktualizacja danych kontrahenta
$update=$_GET["update"];
$id_kon=$_GET["id_kon"];
   if (array_key_exists("nazwa",$_GET))
     { $nazwa=htmlentities($_GET["nazwa"]);
     }
   else
     { $nazwa="";
     }
   if (array_key_exists("ulica",$_GET))
     { $ulica=htmlentities($_GET["ulica"]);
     }
   else
     { $ulica="";
     }
   if (array_key_exists("kod_pocz",$_GET))
     { $kod_pocz=htmlentities($_GET["kod_pocz"]);
     }
   else
     { $kod_pocz="";
     }
   if (array_key_exists("miasto",$_GET))
     { $miasto=htmlentities($_GET["miasto"]);
     }
   else
     { $miasto="";
     }
   if (array_key_exists("pesel",$_GET))
     { $pesel=htmlentities($_GET["pesel"]);
     }
   else
     { $pesel="";
     }
   if (array_key_exists("nip",$_GET))
     { $nip=htmlentities($_GET["nip"]);
     }
   else
     { $nip="";
     }
   if (array_key_exists("telefon",$_GET))
     { $telefon=htmlentities($_GET["telefon"]);
     }
   else
     { $telefon="";
     }
   if (array_key_exists("e_mail",$_GET))
     { $e_mail=htmlentities($_GET["e_mail"]);
     }
   else
     { $e_mail="";
     }
   if (array_key_exists("login",$_GET))
     { $login=htmlentities($_GET["login"]);
     }
   else
     { $login="";
     }
if ($update=="1")
{  include 'pass_gen.php';
}
//aktualizujemy dane::
include 'conf.php';
include 'funkcje.php';
$connect = mysql_connect($host,$user,$pass);
if ($connect)
  {  mysql_select_db($base);
     if ($update=="2")
       { $sql = "INSERT INTO c_kontrah
                (nazwa,ulica,kod_pocz,miasto,pesel,nip,telefon,e_mail,login,pass)
                VALUES
                ('".$nazwa."','".$ulica."','".$kod_pocz."','".$miasto."','".$pesel."','".$nip."','".$telefon."','".$e_mail."','".$login."','".$pass."')";
       }
     else
       { $sql = "UPDATE c_kontrah SET
                   nazwa='".$nazwa."',
                   ulica='".$ulica."',
                   kod_pocz='".$kod_pocz."',
                   miasto='".$miasto."',
                   pesel='".$pesel."',
                   nip='".$nip."',
                   telefon='".$telefon."',
                   e_mail='".$e_mail."',
                   login='".$login."' WHERE id_kon=".$id_kon;
       }
     if (!mysql_query($sql))
     {  include 'errno.php';
        include 'footer.php';
     }
     else
     {  $record = record_nr("SELECT * FROM c_kontrah ORDER BY id_kon",$id_kon,"id_kon");
        include 'kontrah.php';
     }
  }
else
  {  $menu='menu/menu_wroc.txt';
     include 'menu.php';
     echo "Brak połączenia z maszyną bazy danych!";
     include 'footer.php';
  }
?>




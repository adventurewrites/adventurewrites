<?php
if (!isset($time1))
  { $time1=gettimeofday();
  }
    if (array_key_exists("id_gr",$_GET))
       { $id_gr=$_GET["id_gr"];
       }
    else
       { $id_gr="";
       }
    //USUWANIE KONTRAHENTA
    //sprawdzamy zaleznosci w innych bazach
    //*****TABELKA ZAM_NAG
    include 'conf.php';
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { mysql_select_db($base);
        $sql = "SELECT * FROM c_towary WHERE kod_gr='".$id_gr."'";
        $result=mysql_query($sql);
        $num_rows=mysql_num_rows($result);
        if ($num_rows>0)
          { $menu='menu/menu_wroc.txt';
            include 'menu.php';
            echo "Wystąpił błąd: <FONT COLOR=red>grupa nie może zostać usunięta, gdyż posiada powiązania z tabelą towarów</FONT>";
            include 'footer.php';
          }
        else
          { $sql = "DELETE FROM c_grupy WHERE kod_gr='".$id_gr."'";
            if (!mysql_query($sql))
              { include 'errno.php';
                include 'footer.php';
              }
            else
              { include 'grupy_tow.php';
              }
          }
      }
?>

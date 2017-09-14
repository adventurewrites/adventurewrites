<?php
if (!isset($time1))
  { $time1=gettimeofday();}
    $ktm=$_GET["ktm"];
    //USUWANIE KONTRAHENTA
    //sprawdzamy zaleznosci w innych bazach
    //*****TABELKA ZAM_NAG
    include 'conf.php';
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { mysql_select_db($base);
        $sql = "SELECT * FROM c_zam_poz WHERE ktm='".$ktm."'";
        $result=mysql_query($sql);
        $num_rows=mysql_num_rows($result);
        if ($num_rows>0)
          { $menu='menu/menu_wroc.txt';
            include 'menu.php';
            echo "Wystąpił błąd: <FONT COLOR=red>towar nie może zostać usunięty, gdyż posiada powiązania z tabelą pozycji zamówień</FONT>";
            include 'footer.php';
          }
        else
          { $sql = "DELETE FROM c_towary WHERE ktm='".$ktm."'";
            if (!mysql_query($sql))
              { include 'errno.php';
                include 'footer.php';
              }
            else
              { include 'towary.php';
              }
          }
      }
?>

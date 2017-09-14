<?php
//Usuwanie nagłówka zamówienia
//sprawdzamy, czy są powiązania z tabelą pozycji
if (!isset($time1))
  { $time1=gettimeofday();}
    include 'conf.php';
    $zam_nr=$_GET["nr_zam"];
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { mysql_select_db($base);
        $sql = "SELECT * FROM c_zam_poz WHERE nr_zam=".$zam_nr;
        $result=mysql_query($sql);
        $num_rows=mysql_num_rows($result);
        if ($num_rows>0)
          { $menu='menu/menu_wroc.txt';
            include 'menu.php';
            echo "Wystąpił błąd: <FONT COLOR=red>zamówienie może zostać usunięte, gdyż posiada powiązania z tabelą pozycji</FONT>";
            include 'footer.php';
          }
        else
          { $sql = "DELETE FROM c_zam_nag WHERE zam_nr=".$zam_nr;
            if (!mysql_query($sql))
              { include 'errno.php';
                include 'footer.php';
              }
            else
              { include 'zamow_real.php';
              }
          }
      }
?>

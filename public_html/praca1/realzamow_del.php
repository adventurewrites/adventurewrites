<?php
//Usuwanie nag��wka zam�wienia
//sprawdzamy, czy s� powi�zania z tabel� pozycji
if (!isset($time1))
  { $time1=gettimeofday();}
    include 'conf.php';    $zam_nr=$_GET["nr_zam"];
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { mysql_select_db($base);
        $sql = "SELECT * FROM zam_poz WHERE nr_zam=".$zam_nr;
        $result=mysql_query($sql);
        $num_rows=mysql_num_rows($result);
        if ($num_rows>0)
          { $menu='menu/menu_wroc.txt';
            include 'menu.php';
            echo "Wyst�pi� b��d: <FONT COLOR=red>zam�wienie mo�e zosta� usuni�te, gdy� posiada powi�zania z tabel� pozycji</FONT>";
            include 'footer.php';
          }
        else
          { $sql = "DELETE FROM zam_nag WHERE zam_nr=".$zam_nr;
            if ($demo==1)
              { include 'errno.php';
                include 'footer.php';
              }
            elseif (!mysql_query($sql))
              { include 'errno.php';
                include 'footer.php';
              }
            else
              { include 'zamowreal.php';
              }
          }
      }
?>

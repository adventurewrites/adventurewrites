<HEAD>
<META http-equiv="content-type" content="text/html; charset=iso-8859-2">
</HEAD>
<?php
if (!isset($time1))
  { $time1=gettimeofday();}
    $id_kon=$_GET["id_kon"];
    //USUWANIE KONTRAHENTA
    //sprawdzamy zaleznosci w innych bazach
    //*****TABELKA ZAM_NAG
    include 'conf.php';
    $connect=mysql_connect($host,$user,$pass);
    if ($connect)
      { mysql_select_db($base);
        $sql = "SELECT * FROM zam_nag WHERE zam_id_kon=".$id_kon;
        $result=mysql_query($sql);
        $num_rows=mysql_num_rows($result);
        if ($num_rows>0)
          { $menu='menu/menu_wroc.txt';
            include 'menu.php';
            echo "Wystąpił błąd: <FONT COLOR=red>kontrahent nie może zostać usunięty, gdyż posiada powiązania z tabelą zamówień</FONT>";
            include 'footer.php';
          }
        else
          { $sql = "DELETE FROM kontrah WHERE id_kon=".$id_kon;
            if ($demo==1)
              { include 'errno.php';
                include 'footer.php';
              }
            elseif (!mysql_query($sql))
              { include 'errno.php';
                include 'footer.php';
              }
            else
              { include 'kontrah.php';
              }
          }
      }
?>

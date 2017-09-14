<?php
if (!isset($time1))
  { $time1=gettimeofday();}
if (array_key_exists("id_kon",$_POST))
  { $old_pass=$_POST["old_pass"];
    $new_pass=$_POST["new_pass"];
    $retype_new_pass=$_POST["retype_new_pass"];
    $id_kon=$_POST["id_kon"];
    include 'conf.php';
    include 'funkcje.php';
    if ($connect = mysql_connect($host,$user,$pass))
      { mysql_select_db($base);
        $sql = "SELECT * FROM kontrah WHERE id_kon=".$id_kon;
        $result = mysql_query($sql);
        if ($row = mysql_fetch_array($result))
          { $old_old_pass = $row["pass"];
            if ($old_old_pass==$old_pass)
             {  if (!$new_pass=="")
                 { if ($new_pass==$retype_new_pass)
                    { $sql = "UPDATE kontrah SET pass='".$new_pass."' WHERE id_kon=".$id_kon;
                      if ($demo==1)
                       { include 'errno.php';
                         include 'footer.php';
                       }
                      elseif (mysql_query($sql))
                       { $record = record_nr("SELECT * FROM kontrah ORDER BY id_kon",$id_kon,"id_kon");
                         include 'kontrah.php';
                       }
                      else
                       { include 'errno.php';
                         include 'footer.php';
                       }
                    }
                   else
                    { include 'nagl.php';
                      echo "Has這 nie zosta這 poprawnie powt鏎zone.<br>";
                      echo "Has這 nie zosta這 zmienione.";
                      include 'footer.php';
                    }
                 }
                else
                 { include "nagl.php";
                   echo "Niewype軟iona warto嗆 w polu \"Nowe has這\"<br>";
                   echo "Has這 nie zosta這 zmienione";
                   include 'footer.php';
                 }
             }
            else
             { include 'nagl.php';
               echo "Niepoprawna warto嗆 w polu \"Stare has這\"<br>";
               echo "Has這 nie zosta這 zmienione";
               include 'footer.php';
             }
          }
        else
          { include 'errno.php';
            include 'footer.php';
          }
      }
  }
?>

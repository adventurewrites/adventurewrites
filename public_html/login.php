<?php
// funkcja logująca RS-22.11.2002

  include 'conf.php';
  $connect=mysql_connect($host,$user,$pass);
  if ($connect)
    {
      mysql_select_db($base);
      $sql1="select * from uprawnienia where user='".$_POST["user"]."' and pass='".$_POST["pass"]."'";
      $result1=mysql_query($sql1);
      $il_w=mysql_num_rows($result1);
      if ($il_w>0)
        {
          $row=mysql_fetch_array($result1);
          $login="OK";
          $uprawnienia=$row["uprawnienia"];
          $sql2="update uprawnienia set licznik=licznik+1 where user='".$_POST["user"]."' and pass='".$_POST["pass"]."'";
          $result2=mysql_query($sql2);
        }
      else
        {
          $login="BAD";
          $uprawnienia="0000000000";
          $sql2="update uprawnienia set licznik=licznik+1 where user='ERROR_LOG'";
          $result2=mysql_query($sql2);
        }
      mysql_close($connect);
    }
  else
    {
//      $login="Brak połączenia z maszyną baz danych!\nOperacja zablokowana!";
      $uprawnienia="0000000000";
//      echo $uprawnienia[1];
    }
?>

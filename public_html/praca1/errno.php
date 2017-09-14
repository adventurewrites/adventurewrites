<?php
  $menu='menu/menu_wroc.txt';
  include 'menu.php';
  if ($demo==1)
    {   echo "<font size=1>Wystąpił błąd: <font color=red>funkcja niedostępna w wersji DEMO</font></font>";
    }
  else
    {   echo "<font size=1>Wystąpił błąd SQL nr: <font color=red>".mysql_errno().": ".mysql_error()."</font></font>";
    }
?>

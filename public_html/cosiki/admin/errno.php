<?php
  $menu='menu/menu_wroc.txt';
  include 'menu.php';
  echo "Wystąpił błąd SQL nr: <font color=red>".mysql_errno().": ".mysql_error()."</font>";
?>

<?php
$menu='menu/menu_wroc.txt';
include 'menu.php';
if (array_key_exists("new",$_GET))
  { $new = $_GET["new"];
  }
else
  { $new = "2";
  }
if ($new=="1")
  { $id_gr=$_GET["id_gr"];
    include 'conf.php';
    $connect = mysql_connect($host,$user,$pass);
    if ($connect)
    { mysql_select_db($base);
      // wczytanie istniejących wartości
      $sql = "SELECT * FROM c_grupy WHERE kod_gr='".$_GET["id_gr"]."'";
      $result = mysql_query($sql);
      if ($row = mysql_fetch_array($result))
      {  $id_gr = $row["kod_gr"];
         $nazwa = $row["nazwa_gr"];
         $readonly="readonly";
      }
    }
  }
else
  {
// dolaczenie nowego kontrahenta -- FORMULARZ
$id_gr="";
$nazwa="";
$readonly="";
  }
?>
<form method=get action=grupy_tow_add.php>
  <table>
    <tr>
      <td>
        Kod grupy:
      </td>
      <td>
        <? echo "<input type=text name=id_gr value=\"$id_gr\" maxlength=15 size=15 ".$readonly.">"?>
      </td>
    </tr>
    <tr>
      <td>
        Nazwa grupy:
      </td>
      <td>
        <? echo "<input type=text name=nazwa value=\"$nazwa\" maxlength=50 size=50>"?>
        <? echo "<input type=hidden name=update value=\"$new\">"?>
      </td>
    </tr>
  </table>
  <table align=center>
    <tr>
      <td>
        <input type=submit value="Zapisz">
      </td>
    </tr>
  </table>
</form>

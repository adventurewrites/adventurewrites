<?php
$old_pass="";
if (array_key_exists("id_kon",$_GET))
  { $id_kon=$_GET["id_kon"];
    $menu='menu/menu_wroc.txt';
    include 'menu.php';
?>
<form method=post action=kontrah_pas_verify.php>
<table align=center>
  <tr>
    <td align=right>
       <?php echo "Stare hasło: <input type=password name=old_pass value=\"\">"?>
    </td>
  </tr>
  <tr>
    <td align=right>
       <?php echo "Nowe hasło: <input type=password name=new_pass value=\"\">"?>
    </td>
  </tr>
  <tr>
    <td align=right>
       <?php echo "Powtórz nowe hasło: <input type=password name=retype_new_pass value=\"\">"?>
       <?php echo "<input type=hidden name=id_kon value=\"$id_kon\">"?>
    </td>
  </tr>
</table>
<table align=center>
  <tr>
    <td>
      <input type=submit value="Zmień hasło">
    </td>
  </tr>
</table>
</form>
<?php
  }
?>

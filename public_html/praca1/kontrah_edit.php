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
  { $id_kon=$_GET["id_kon"];
    include 'conf.php';
    $connect = mysql_connect($host,$user,$pass);
    if ($connect)
    { mysql_select_db($base);
      // wczytanie istniej±cych warto¶ci
      $sql = "SELECT * FROM kontrah WHERE id_kon=".$_GET["id_kon"];
      $result = mysql_query($sql);
      if ($row = mysql_fetch_array($result))
      {  $id_kon = $row["id_kon"];
         $nazwa = $row["nazwa"];
         $ulica = $row["ulica"];
         $kod_pocz = $row["kod_pocz"];
         $miasto = $row["miasto"];
         $pesel = $row["pesel"];
         $nip = $row["nip"];
         $telefon = $row["telefon"];
         $e_mail = $row["e_mail"];
         $login = $row["login"];
      }
    }
  }
else
  {
// dolaczenie nowego kontrahenta -- FORMULARZ
$id_kon=0;
$nazwa="";
$ulica="";
$kod_pocz="";
$miasto="";
$pesel="";
$nip="";
$telefon="";
$e_mail="";
$login="";
  }
?>
<form method=get action=kontrah_add.php>
  <table>
    <tr>
      <td>
        Nazwa:
      </td>
      <td>
        <? echo "<input type=text name=nazwa value=\"$nazwa\" maxlength=60 size=60>"?>
      </td>
    </tr>
    <tr>
      <td>
        Ulica:
      </td>
      <td>
        <? echo "<input type=text name=ulica value=\"$ulica\" maxlength=30 size=30>"?>
      </td>
    </tr>
    <tr>
      <td>
        Kod pocztowy:
      </td>
      <td>
        <? echo "<input type=text name=kod_pocz value=\"$kod_pocz\" maxlength=6 size=6>"?>
      </td>
    </tr>
    <tr>
      <td>
        Miasto:
      </td>
      <td>
        <? echo "<input type=text name=miasto value=\"$miasto\" maxlength=30 size=30>"?>
      </td>
    </tr>
    <tr>
      <td>
        Pesel:
      </td>
      <td>
        <? echo "<input type=text name=pesel value=\"$pesel\" maxlength=11 size=11>"?>
      </td>
    </tr>
    <tr>
      <td>
        NIP:
      </td>
      <td>
        <? echo "<input type=text name=nip value=\"$nip\" maxlength=13 size=13>"?>
      </td>
    </tr>
    <tr>
      <td>
        Telefon:
      </td>
      <td>
        <? echo "<input type=text name=telefon value=\"$telefon\" maxlength=20 size=20>"?>
      </td>
    </tr>
    <tr>
      <td>
        E-mail:
      </td>
      <td>
        <? echo "<input type=text name=e_mail value=\"$e_mail\" maxlength=30 size=30>"?>
      </td>
    </tr>
    <tr>
      <td>
        Login:
      </td>
      <td>
        <? echo "<input type=text name=login value=\"$login\" maxlength=8 size=8>"?>
        <? echo "<input type=hidden name=update value=\"$new\">"?>
        <? echo "<input type=hidden name=id_kon value=\"$id_kon\">"?>
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

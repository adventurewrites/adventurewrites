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
  { $ktm=$_GET["ktm"];
    include 'conf.php';
    $connect = mysql_connect($host,$user,$pass);
    if ($connect)
    { mysql_select_db($base);
      // wczytanie istniejących wartości
      $sql = "SELECT * FROM c_towary WHERE ktm='".$_GET["ktm"]."'";
      $result = mysql_query($sql);
      if ($row = mysql_fetch_array($result))
      {  $kod_gr = $row["kod_gr"];
         $ktm = $row["ktm"];
         $nazwa_tow = $row["nazwa_tow"];
         $cen_net = $row["cen_net"];
         $pr_vat = $row["pr_vat"];
         $opis = $row["opis"];
         $readonly="readonly";
      }
    }
  }
else
  {
// dolaczenie nowego towaru -- FORMULARZ
$kod_gr="";
$ktm="";
$nazwa_tow="";
$cen_net="";
$pr_vat="";
$opis="";
$readonly="";
  }
?>
<form method=get action=towary_add.php>
  <table>
    <tr>
      <td>
        Grupa towarowa:
      </td>
      <td>
        <? include 'conf.php';
           mysql_connect($host,$user,$pass);
           mysql_select_db($base);
           $sql = "SELECT * FROM c_grupy ORDER BY nazwa_gr";
           $result = mysql_query($sql);
	   echo "<select name=\"kod_gr\">";
		while ($row = mysql_fetch_array($result))
		{
			echo $row["nazwa_gr"];
			if ($row["nazwa_gr"]==$kod_gr)
			{	$selected = "selected";
			}
			else
			{	$selected = "";
			}
			echo "<option $selected>".$row["nazwa_gr"]."</option>";
		}
	   echo "</select>"?>
      </td>
    </tr>
    <tr>
      <td>
        Kod towaru:
      </td>
      <td>
        <? echo "<input type=text name=ktm value=\"$ktm\" maxlength=15 size=15 ".$readonly.">"?>
      </td>
    </tr>
    <tr>
      <td>
        Nazwa towaru:
      </td>
      <td>
        <? echo "<input type=text name=nazwa_tow value=\"$nazwa_tow\" maxlength=60 size=60>"?>
      </td>
    </tr>
    <tr>
      <td>
        Cena netto:
      </td>
      <td>
        <? echo "<input type=text name=cen_net value=\"$cen_net\" maxlength=15 size=15>"?>
      </td>
    </tr>
    <tr>
      <td>
        Stawka VAT:
      </td>
      <td>
	  <?echo "<select name=\"pr_vat\">";
			if ($pr_vat==0)
			{$selected = "selected";}
			else
			{$selected = "";}
			echo "<option $selected>0</option>";
			if ($pr_vat==12)
			{$selected = "selected";}
			else
			{$selected = "";}
			echo "<option $selected>12</option>";
			if ($pr_vat==22)
			{$selected = "selected";}
			else
			{$selected = "";}
			echo "<option $selected>22</option>";
	   echo "</select>"?>
      </td>
    </tr>
    <tr>
      <td>
        Opis:
      </td>
      <td>
	<? echo "<textarea name=\"opis\" cols=60 rows=6>".$opis."</textarea>"?>
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

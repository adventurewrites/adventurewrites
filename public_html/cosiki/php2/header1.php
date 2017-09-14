<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<META http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="bielizna, plecionki, ubrania, ubranka, szydełkowanie, kapelusze, swetry, sweterki, sukienki" >
<meta name="description" content="www.cosiki.go.pl" >
<title>Cosiki - sklep internetowy</title>
<LINK REL=STYLESHEET TYPE="text/css" HREF="../style.css">
</head>
<body bgcolor= "#df3374" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../php/conf.php';
//*******************************************************
$connect=mysql_connect($host,$user,$pass);
mysql_query('SET CHARACTER SET utf8');
if ($connect)
{  mysql_select_db($base);
   $sql1="SELECT * FROM c_grupy ORDER BY kod_gr";
   $result1=mysql_query($sql1);
   $il_w=mysql_num_rows($result1);
   if ($il_w>0)
   {
     $row=mysql_fetch_array($result1);
     $sel1=$row["nazwa_gr"];
   }
}
else
{
   $sel1='';
}
if (array_key_exists("sel",$_GET)) {$sel = $_GET["sel"];}
else {$sel = $sel1;}
if (array_key_exists("il_raz",$_GET)) {$il_raz = $_GET["il_raz"];}
else {$il_raz = 0;}
if (array_key_exists("war_brt",$_GET)) {$war_brt = $_GET["war_brt"];}
else {$war_brt = 0;}
if (!$il_raz)
   { $ilosc=0;
     $wartosc=0;
   }
 else
   { $ilosc=$il_raz;
     $wartosc=$war_brt;
   }
//dla latwiejszej obslugi sciezek przypisujemy zmienne o nazwie grafiki:
//$skl1 = '"'.$path_graf.'skl1.jpg"';
//$skl2 = '"'.$path_graf.'skl2.jpg"';
//$skl3 = '"'.$path_graf.'skl3.jpg"';
//$skl  = '"'.$path_graf.'skl.jpg"';
$td1  = '"'."../".$path_graf.'td1.gif"';

$td_tlo_skl  = '"'."../".$path_graf.'td_tlo_skl.gif"';
$logo_skl  = '"'."../".$path_graf.'logo_skl.gif"';


//dla latwiejszej obslugi sciezek przypisujemy zmienne o nazwie images:
$kosz  = '"'."../".$path_imag.'koszyk.gif"';

//dla latwiejszej obslugi sciezek przypisujemy zmienne o nazwie href:

//**********************************************************************


//tabelka pierwsza - gdy zmienna $koszyk = 1
 if ($koszyk==1)
 {
 echo "
  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; <a href=\"/index.html\">projektantka</a> | sklep</td>
    </tr>
    <tr>
      <td height=\"104\" align=\"left\" valign=\"top\" background=$td_tlo_skl><img src=$logo_skl width=\"249\" height=\"102\"></td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp;</td>
    </tr>
  </table>

  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
    <tr bgcolor=\"#bceaa4\">
      <td width=\"25%\" align=\"left\">&nbsp; Wybrana grupa asortymentu:</td>
      <td width=\"25%\" align=\"left\">koszyk</td>
      <td width=\"25%\" align=\"left\">ilość:</td>
      <td width=\"25%\" align=\"left\">suma:</td>
    </tr>
    <tr bgcolor=\"#bceaa4\">
      <td width=\"25%\" align=\"left\">&nbsp;$sel</td>
      <td width=\"25%\" align=\"left\">";
//*******
    $do_kosz = '"'.$path_href_php.'do_koszyka.php?sel='.$sel.'&il_raz='.$il_raz.'&war_brt='.$war_brt.'"';
//*******
    echo "<a class=\"menu\" href=$do_kosz>
          <image src=$kosz alt=\"Koszyk\" title=\"Zajrzyj do koszyka\" border=\"0\">
      </td>
      <td width=\"25%\" align=\"left\"><a class=\"menu\"  title=\"Zajrzyj do koszyka\" href=$do_kosz>(".$ilosc.")</a></td>
      <td width=\"25%\" align=\"left\"><a class=\"menu\"  title=\"Zajrzyj do koszyka\" href=$do_kosz>".$wartosc." zł</a></td>
   </tr>
  </table>";

 }

//tabelka druga - gdy zmienna $koszyk = 12

 elseif ($koszyk==12)
  {
    echo "
  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; <a href=\"/index.html\">projektantka</a> | sklep</td>
    </tr>
    <tr>
      <td height=\"104\" align=\"left\" valign=\"top\" background=$td_tlo_skl><img src=$logo_skl width=\"249\" height=\"104\"></td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp;</td>
    </tr>
  </table>";
 }

//tabelka trzecia - gdy zmienna $koszyk = 2

 elseif ($koszyk==2)
 {
   echo "
 <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; <a href=\"/index.html\">projektantka</a> | sklep</td>
    </tr>
    <tr>
      <td height=\"104\" align=\"left\" valign=\"top\" background=$td_tlo_skl><img src=$logo_skl width=\"249\" height=\"104\"></td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1><b><FONT color=red>&nbsp; A D M I N I S T R A C J A &nbsp; &nbsp;Z L E C E Ń</FONT></b></td>
    </tr>
  </table>" ;
 }

//tabelka czwarta - gdy zmienna $koszyk = 3

 elseif ($koszyk==3)
 {
    echo "
  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; <a href=\"/index.html\">projektantka</a> | sklep</td>
    </tr>
    <tr>
      <td height=\"104\" align=\"left\" valign=\"top\" background=$td_tlo_skl><img src=$logo_skl width=\"249\" height=\"104\"></td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; SKŁADANIE ZAMÓWIENIA</td>
    </tr>
  </table>

  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
    <tr bgcolor=\"#bceaa4\">
      <td width=\"20%\" align=\"left\">&nbsp;</td>
      <td width=\"20%\" align=\"left\">&nbsp;</td>
      <td  width=\"20%\" align=\"left\">koszyk</td>
      <td width=\"20%\" align=\"left\">ilość:</td>
      <td width=\"20%\" align=\"left\">suma:</td>
    </tr>
    <tr bgcolor=\"#bceaa4\">
      <td width=\"20%\" align=\"left\">&nbsp;</td>
      <td width=\"20%\" align=\"left\">&nbsp;</td>
      <td width=\"20%\" align=\"left\">";
      $do_kosz  = '"'.$path_href_php.'do_koszyka.php?sel='.$sel.'&ktm=&il_raz=$il_raz&war_brt=$war_brt"';
      echo"<a class=\"menu\" href=$do_kosz>
      <image src=$kosz title=\"Zajrzyj do koszyka\" border=\"0\">
      </td>
      <td width=\"20%\" align=\"left\">";
      $do_kosz  = '"'.$path_href_php.'do_koszyka.php?sel='.$sel.'&ktm=&il_raz=$il_raz&war_brt=$war_brt"';
      echo "<a class=\"menu\" title=\"Zajrzyj do koszyka\" href=$do_kosz>(".$ilosc.")</a></td>
      <td width=\"20%\" align=\"left\"><a class=\"menu\" title=\"Zajrzyj do koszyka\" href=$do_kosz>".$wartosc." zł</a>
      </td>
    </tr>
  </table>";
 }

 else

//tabelka piata - w pozostalych przypadkach

 {
  echo "
  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; <a href=\"/index.html\">projektantka</a> | sklep</td>
    </tr>
    <tr>
      <td height=\"104\" align=\"left\" valign=\"top\" background=$td_tlo_skl><img src=$logo_skl width=\"249\" height=\"104\"></td>
    </tr>
    <tr>
      <td height=\"17\" background=$td1>&nbsp; </td>
    </tr>
  </table>";
 }

// petla glowna ze startem sesji wlacznie
 session_start();
 if (array_key_exists("login",$_POST))
 {
 	if ($user_login=="1")
  {
  echo "
  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=#bceaa4>
    <tr bgcolor=#bceaa4>
      <td width=\"100%\" align=\"left\">&nbsp;";
 	echo "  Zalogowany użytkownik: ".$_POST["login"];
        echo "
      </td>
    </tr>
  </table>";
  }
 }
?>
</td>
</tr>
</table>

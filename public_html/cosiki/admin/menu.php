<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" href="layersmenu.css" type="text/css"></link>
<style type="text/css">
<!--
@import url("layerstreemenu.css");
//-->
</style>
<title>System Sprzedaży Internetowej SKLEP 1.0.1 (b20030929)</title>

<?php include ("lib/layersmenu-browser_detection.js"); ?>
<script language="JavaScript" type="text/javascript" src="lib/layersmenu-library.js"></script>
<script language="JavaScript" type="text/javascript" src="lib/layersmenu.js"></script>
<script language="JavaScript" type="text/javascript" src="lib/layerstreemenu-cookies.js"></script>
</head>

<?php
include ("lib/template.inc.php");	// taken from PHPLib
include ("lib/layersmenu.inc.php");
include ("lib/layersmenu-noscript.inc.php");

//$mid = new LayersMenu(140, 20, 20);
$mid = new XLayersMenu();

//$mid->setDirroot("");
//$mid->setLibdir("lib/");
//$mid->setLibwww("lib/");
//$mid->setTpldir("templates/");
//$mid->setImgdir("images/");
//$mid->setImgwww("images/");

$mid->setMenuStructureFile($menu);
$mid->setHorizontalMenuTpl("templates/layersmenu-horizontal_menu-red.ihtml");
$mid->setSubMenuTpl("layersmenu-sub_menu-orange.ihtml");
$mid->setHorizontalPlainMenuTpl("layersmenu-horizontal_plain_menu-red.ihtml");
$mid->setDownArrow(" &gt;&gt;");
$mid->setForwardArrow(" &gt;&gt;");
$mid->parseStructureForMenu("hormenu2");
$mid->newHorizontalPlainMenu("hormenu2");
$mid->newTreeMenu("hormenu2");
$mid->newHorizontalMenu("hormenu2");

$mid->printHeader();
/* alternatively:
$header = $mid->makeHeader();
print $header;
*/
?>

<table width="100%" border="0" cellpadding="1" cellspacing="0" bgcolor="#aa0000">
<tr>
<td class="bar">
<center>
<? if (!isset($tytul))
    { echo "System Sprzedaży Internetowej SKLEP"; }
   else
    { echo $tytul; }
?>
<br /><br />
<?php
$mid->printMenu("hormenu2");
/* alternatively:
$hormenu2 = $mid->getMenu("hormenu2");
print $hormenu2;
*/
?>
<br />
</center>
</td>
</tr>
</table>

<?php
$mid->printFooter();
/* alternatively:
$footer = $mid->makeFooter();
print $footer;
*/
?>


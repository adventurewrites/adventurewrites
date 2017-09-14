<!--- wstawione 20051118-->
<head>
<script type="text/javascript" src="scr/date.js"></script>
<title>Adventure.go.pl</title>
</head>
<body bgcolor="#c0c0c0"  background="img/bgmex.gif" topmargin="0" leftmargin="0" rightmargin="0" onload="startclock();">
<div id="waitDiv" style="position: absolute; left: 40%; top: 50%; text-align: center; visibility: hidden;">
<table class="waitbox" cellpadding="3" cellspacing="3">
<tbody>
<tr>
<td align="center">
<b><big>Trwa ładowanie strony...</big></b><br>
<img src="img/await.gif" alt="">
<br>www.adventure.go.pl</td></tr>
</tbody></table>
</div>
<script type="text/javascript">
<!--
toggle_visibility('waitDiv', 1);
//-->
</script>
<!--- koniec wstawki 20051118-->
<?
  $ktm=$_GET["ktm"];
  echo"<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html>
<head>";
echo "<title>Powiększenie ".$ktm."</title>";

echo"<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head><body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
  echo "<img onclick=\"javascript:window.close()\" src=\"".$ktm.".jpg \">";
  echo"</body></html>";
?>
<script type="text/javascript">
<!--
toggle_visibility('waitDiv', 0);
//-->
</script>
</body>


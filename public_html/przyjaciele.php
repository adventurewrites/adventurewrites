<?php
$english=$_GET["english"];
if ($english!=1)
$przyjaciele1='<p>Podaj nazwę użytkownika oraz hasło:<br>';
else
$przyjaciele1='<p>Please enter username and password:<br>';

$przyjaciele1.='<form method="POST" action=przyjaciele_org.php?tryb_tekstowy='.$tryb_tekstowy.'&english='.$english.'>
<table>
<tr>
<td>';
if ($english!=1)
$przyjaciele1.='Użytkownik:';
else
$przyjaciele1.='Username:';
$przyjaciele1.='
</td>
<td>
<input type="text" name="user">
</td>
</tr>
<tr>
<td>';
if ($english!=1)
$przyjaciele1.='Hasło:';
else
$przyjaciele1.='Password:';
$przyjaciele1.='
</td>
<td>
<input type="password" name="pass">
</td>
</tr>
<tr>
<td>
</td>
<td align=center>
<input type="hidden" value="1" name="OK">
<input type="image" src="img/await.gif" alt="Howgh!" value="Howgh!">
</td>
</tr>
</table>
</form>
</td>
<td>
</td>
</tr>
</table>';
include 'przyjsmaerror.php';
?>

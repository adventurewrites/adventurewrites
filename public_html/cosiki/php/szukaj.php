<?
   echo "<form action=\"index.php\" method=\"get\">";
   echo"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\"   bgcolor=\"#ebebe2\">
  <tr> 
    <td align=\"center\" background=\"grafika/td1.gif\" bgcolor=\"#ebebe2\" ><b>wyszukaj towar</b></td>
  </tr>
  <tr>
    <td align=\"center\" bgcolor=\"#ebebe2\">";
   echo "<input type=\"text\" size=\"14\" name=\"sel\" class=\"poleForm\">";
   echo "<input type=\"hidden\" name=\"il_raz\" value=$il_raz class=\"poleForm\">";
   echo "<input type=\"hidden\" name=\"war_brt\" value=$war_brt class=\"poleForm\">";
   echo "</td>
  </tr> <tr>
    <td align=\"center\" bgcolor=\"#ebebe2\">";
   echo "<input type=\"image\" src=\"images/szukaj.gif\" class=\"poleForm\" >";
    echo " </td> </tr>
</table>";
     echo "</form>";

?>

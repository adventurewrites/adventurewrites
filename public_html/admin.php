<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<title>adventurewrites.com</title>
<style type="text/css">
TR.level1 {
	background-color  : #354463;
	font-family: Arial;
	font-size: 11px;
	color: white;
	padding-left: 5px;
@charset "utf-8";
}
TR.level2 {
	background-color  : #5F7797;
	font-family: Arial;
	font-size: 11px;
	color: white;
	padding-left: 5px;
@charset "utf-8";
}
</style>
</head>
<?
  include 'conf.php';
  if (1==1)
  {
    echo "<table>";
    echo "<tr>";
    echo "<td valgn=\"top\" width=\"670\" align=\"left\">";
    echo "<h3>Informacje o użytkownikach:</h3>";
    require("class.Table.php");
    $table=new Table(4);
    $table->setHeaders("Użytkownik^Opis^Ilość odwiedzin^Timestamp");
    $table->setHeaderProperty("class=level1");
    $table->setColWidth("200,300,50,200");
    $table->setSpacing(1);
    $table->setColAlignment("left,left,left,right,left");
      $connect=mysql_connect($host,$user,$pass);
      if ($connect)
        {
          mysql_query('SET CHARACTER SET utf8');
          mysql_select_db($base);
          $sql="select * from uprawnienia order by czas desc";
          $result=mysql_query($sql);
          $il_w = mysql_num_rows($result);
          for ($i=0;$i<$il_w;$i++)
          {
                $row = mysql_fetch_array($result);
		$table->AddRow($row["user"]."^".$row["dane"]."^".$row["licznik"]."^".$row["czas"],"class=level2");
           }
        }
      else
        {
          echo "Brak połączenia z maszyną bazy danych!";
        }
    $table->Process();
    $table->Display();
      mysql_close($connect);
    echo "</td>";
    echo "<td>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    }
?>

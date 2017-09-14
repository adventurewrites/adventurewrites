<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../php/conf.php';
//*******************************************************
  $ktm=$_GET["ktm"];
  echo"<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html>
<head>";
echo "<title>Powiększenie ".$ktm."</title>";
$tlo = '"'.$path_graf.'tlo.gif"';
echo"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
</head><body background=$tlo leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
  echo "<img src=\"../zdjecia/".$ktm.".jpg \"onclick=\"javascript:window.close()\">";
  echo"</body></html>";
?>

<?php
//funkcje wykorzystywane w serwisie
//RS 20051016
//ostatnia modyfikacja RS 20091026 - zapisywanie danych do indeksowania stron
//wyświetlanie zdjęc w pętli
function foto_line($sciezka,$ilwwierszu,$ilosc,$sep)
//$sciezka - sciezka do foto (wzgledna)
//$ilwwierszu - ilosc zdjec w wierszu
//$ilosc - ilosc zdjec ogolem
//$sep - oddzielenie dla malych zdjec: samo s lub _s
{
  $tabela='';
  $tabela.='<table align=center>';
  $tabela.='<tr>';
     $il_w_wierszu=0;
     for ($i=1;$i<=$ilosc;$i++)
       {
          $il_w_wierszu++;
          $tabela.='<td align=center>';
              $wielkosc=getimagesize("$sciezka".$i.".jpg");
              $width=$wielkosc[0];
              $height=$wielkosc[1];
              $script1="javascript:window.open(\"_zdjecie.php?ktm=$sciezka".$i."\",\"NewObr\",\"width=$width,height=$height\")";
//              $tabela.='<img onclick='.$script1.' style="cursor:move;" border=0 src="'.$sciezka.$i.$sep.'.jpg">';
                $tabela.='<a href='.$sciezka.$i.'.jpg rel="lightbox"><img border=0 src="'.$sciezka.$i.$sep.'.jpg"></a>';
              $tabela.='</td>';
//zawijanie wiersza
          if ($il_w_wierszu>$ilwwierszu)
             {
               $tabela.='</tr>';
               $il_w_wierszu=0;
               $tabela.='<tr>';
             }
//-----------------
       }
  $tabela.='</tr>';
  $tabela.='</table>';
  return $tabela;
}

function foto_line_art($sciezka,$ilwwierszu,$ilosc,$sep)
//$sciezka - sciezka do foto (wzgledna)
//$ilwwierszu - ilosc zdjec w wierszu
//$ilosc - ilosc zdjec ogolem
//$sep - oddzielenie dla malych zdjec: samo s lub _s
{
  $tabela='';
  $tabela.='<table align=center>';
  $tabela.='<tr>';
     $il_w_wierszu=0;
     for ($i=$ilosc;$i>=1;$i--)
       {
          $il_w_wierszu++;
          $tabela.='<td align=center>';
              $wielkosc=getimagesize("$sciezka".$i.".jpg");
              $width=$wielkosc[0];
              $height=$wielkosc[1];
              $script1="javascript:window.open(\"_zdjecie.php?ktm=$sciezka".$i."\",\"NewObr\",\"width=$width,height=$height\")";
//              $tabela.='<img onclick='.$script1.' style="cursor:move;" border=0 src="'.$sciezka.$i.$sep.'.jpg">';
                $tabela.='<a href='.$sciezka.$i.'.jpg rel="lightbox"><img border=0 src="'.$sciezka.$i.$sep.'.jpg"></a>';
              $tabela.='</td>';
//zawijanie wiersza
          if ($il_w_wierszu>$ilwwierszu)
             {
               $tabela.='</tr>';
               $il_w_wierszu=0;
               $tabela.='<tr>';
             }
//-----------------
       }
  $tabela.='</tr>';
  $tabela.='</table>';
  return $tabela;
}


//podpis pod zdjęcie
function foto_podpis($sciezka,$ilwwierszu,$ilosc,$sep,$czy_podpis,$podpis1,$podpis2,$podpis3,$podpis4)
//$sciezka - sciezka do foto (wzgledna)
//$ilwwierszu - ilosc zdjec w wierszu
//$ilosc - ilosc zdjec ogolem
//$sep - oddzielenie dla malych zdjec: samo s lub _s
//*************************************************************************************************************************************
//*********z podpisami mozemy uzywac tylko 4 zdjecia!!!**********************************************************************************
//*************************************************************************************************************************************
//$czy_podpis - czy istnieja podpisy
//$podpis1...4 - podpisy pod zdjecie
{
  $tabela='';
  $tabela.='<table>';
  $tabela.='<tr>';
     $il_w_wierszu=0;
     for ($i=1;$i<=$ilosc;$i++)
       {
          $il_w_wierszu++;
          $tabela.='<td align=center>';
              $wielkosc=getimagesize("$sciezka".$i.".jpg");
              $width=$wielkosc[0];
              $height=$wielkosc[1];
              $script1="javascript:window.open(\"_zdjecie.php?ktm=$sciezka".$i."\",\"NewObr\",\"width=$width,height=$height\")";
//              $tabela.='<img onclick='.$script1.' style="cursor:move;" border=0 src="'.$sciezka.$i.$sep.'.jpg">';
                $tabela.='<a href='.$sciezka.$i.'.jpg rel="lightbox"><img border=0 src="'.$sciezka.$i.$sep.'.jpg"></a>';
              $tabela.='</td>';
//zawijanie wiersza
          if ($il_w_wierszu>$ilwwierszu)
             {
               $tabela.='</tr>';
               $il_w_wierszu=0;
               $tabela.='<tr>';
             }
//-----------------
       }
  $tabela.='</tr>';
//dodawanie podpisow (!!!tylko dla czterech zdjec)
            if (1==1)
               {
                  $tabela.='<tr>';
                  for ($i=0;$i<=$ilwwierszu;$i++)
                      {
                         $tabela.='<td align=center>';
                         $podp=$podpis.$i;
                         echo $podpis.$i;
                         $tabela.='dupa'.$podp.'';
                         $tabela.='</td>';
                       }
                  $tabela.='</tr>';
               }
  $tabela.='</table>';
  return $tabela;
}

//zapisywanie danych do wyszukiwarki
function data_index($tekst,$meta)
//$tekst - tekst do zapisania
//$meta - metadata
{
//adres strony do zapisania  
  $adres="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
//data indeksowania
  $data=date("Y-m-d");
//wpisanie danych do bazy
  include 'conf.php';
 if ($mysql!=0) 
 {
  $connect=mysql_connect($host,$user,$pass);
  if ($connect)
   {
      mysql_select_db($base);
      $sql1="insert into wyszukiwarka (adres_http,data,meta,tekst) values ('".$adres."','".$data."','".$meta."','".$tekst."')";
      $result=mysql_query($sql1);
	  echo $result;
      if (!$result)
      {
      $sql1="update wyszukiwarka set data=".$data.",meta=".$meta.",tekst=".$tekst." where adres_http='".$adres."'";
      $result=mysql_query($sql1);
      }
      mysql_close($connect);
    }
 }
}


//koniec pliku
?>


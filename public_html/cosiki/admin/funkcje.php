<?php


function record_nr($sql,$war,$rec)
{
// funkcja sprawdza numer aktualnego rekordu
// pozniej trzeba bedzie rozbudowac ja jeszcze o aktualny index
// - $sql - wyrazenie sql
// - $war - wartosc, ktora sprawdzamy
// - $rec - identyfikator rekordu, który odczytujemy
// RS 2003.09.19
   $licznik = 0;
   global $record;
   $record = 0;
   $result = mysql_query($sql);
   while ($row = mysql_fetch_array($result))
   { $licznik++;
     if ($row["".$rec.""] == $war)
     { $record = $licznik;
     }
   }
   return $record;
}


?>

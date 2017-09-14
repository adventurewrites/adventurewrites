<?php
//FUNKCJE SPRAWDZAJACE FORMULARZE
//RAFAL SOWIAK - 2003.06.02

function valid_isNoempty($string)
// sprawdzamy czy jest wypelniona wartosc
{
  return ($string != '');
}  //END VALID_ISNOEMPTY

function string_getNumberOfDigits($string)
// funkcja sprawdza ilosc znakow w stringu
{
  preg_match_all('/\d{1,1}/',$string,$matches);
  return sizeof($matches[0]);
}   //END STRING_GETNUMBEROFDIGITS

function valid_isOnlyDigits($string)
// sprawdzamy, czy sa tylko cyfry
{
  return (boolean) preg_match ('/^\d+$/', $string);
}  //END VALID_ISONLYDIGITS

function valid_containsDigits($string, $min_Count = 1, $max_Count = null)
// funkcja sprawdza czy wartosc stringa jest liczba zawarata miedzy min i max
{
  $numberOfDigits = string_getNumberOfDigits($string);
  if (gettype($maxCount) == 'NULL')
  {
    return ($numberOfDigits >= $minCount);
  }
  else
  {
    return ($numberOfDigits >= $minCount && $numberOdDigits <= $maxCount);
  }
}  //END VALID_CONTAINSDIGITS

function valid_isZipCode($string)
// funkcja sprawdza poprawnosc kodu pocztowego
{
   return (boolean) preg_match('/^\d{2}-\d{3}$/', $string);
} //END VALID_ISZIPCODE

function valid_isEmail($string)
// sprawdzamy poprawnosc adresu email
{
   return (boolean) preg_match('/^[\w-]+(\.[w-]+)*@([\w-]+\.)+[a-zA-Z]{2,6}$/',$string);
}  //END VALID_ISEMAIL

?>


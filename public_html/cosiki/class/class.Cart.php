<?php
class cart
{
  var $za;
  function add ($element) {$this->za["$element"]++;}
  function del ($element, $ilosc)
    { if (array_key_exists("$element",$this->za))
      {
        if ($this->za["$element"]>$ilosc)
          $this->za["$element"]-=$ilosc;
        else
          unset($this->za["$element"]);}
    }
  function edit ($element, $val) {$this->za["$element"] = $val;}
  function show_cart() {return $this->za;}
  function drop_cart() {unset($this->za);}
}
?>


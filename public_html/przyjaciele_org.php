<?php
  include 'login.php';
  if ($login=="OK" & $uprawnienia[1]=="1")
  {
    $uprawnienia=intval($uprawnienia);
    $uprawnienia=2402*$uprawnienia;
    $przyjaciele1='<br>Pleased to meet you::Hope you guess my name::But what\'s puzzling you::<br>
    Is the nature of my game::So if you meet me::Have some courtesy::<br>
    Have some sympathy, and some taste::Use all your well-learned politesse::<br>
    Or I\'ll lay your soul to waste... ;)
    <br><br><i>::Rolling Stones::</i>';
  }
  else
  {
    include 'error_log.php';
    $przyjaciele1=$error;
  }
  include 'przyjsma.php';
?>

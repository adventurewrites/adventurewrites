<font size=-1 color=brown>
<?php
//footer.php
//podsumowanko do wyswietlenia strony
//w wersji "DEBUG" powinno wyswietlic czas
if ($debug=1)
  { $time2=gettimeofday();
    $time=($time2["sec"]-$time1["sec"])+($time2["usec"]-$time1["usec"])/1000000;
    echo "<br><hr>";
    echo "Czas trwania operacji na serwerze: ".$time."[s]";
  }  
?>
</font>
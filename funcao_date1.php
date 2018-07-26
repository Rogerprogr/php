<?php
   
   $its = strtotime("2001-09-11");

   echo "<br>";
   //Para mostrar a data de hoje
   $its = strtotime("now");
   echo "<br>";
   //Para pegar o dia de amanhã
   $its = strtotime("+1 day");

   echo "<br>";
   //Para pegar a próxima semana
   $its = strtotime("+1 week");


   //Para exibir o dia da semana por extenso, coloca o l na frente
   echo date("l, d/m/y", $its);

?>
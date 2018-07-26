<?php
   //DateTime é um objeto construtor
   // New cria a instancia do objeto
   $dt = new DateTime();
   echo $dt->format("d/m/Y H:i:s");


   //Para somar 15 dias por exemplo
   echo "<br>";
   echo "Data após 15 dias";
   echo "<br>";

   //DateinTerval é o objeto construtor
   //DateinTerval representa o intervalo de datas.
   //add é um método da classe $dt
   $periodo = new DateinTerval("P15D");
   $dt->add($periodo);
   echo "<br>";
   echo $dt->format("d/m/Y H:i:s");

   echo "<br>";
   $interval = new DateInterval('P2Y4DT6H8M');
   echo $interval->format('%d days');

?>
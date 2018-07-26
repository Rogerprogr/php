<?php
  function soma(float ...$valores):float{
    
    //Exemplo com tipo de retorno.
    // Pode-se receber parametro de um tipo e retornar outro tipo.
    //Faz o somatório dos parametros
    // Vale somente para inteiros
    // No caso dos números quebrados, considera somente o primeiro antes da casa decimal, a não ser quando é float.
    // Somente funciona se todos forem do mesmo tipo: Declaração de tipos escalares.
    return array_sum($valores);

  }

  echo soma(2,2);
  echo "<br>";
  echo soma(25,33);
  echo "<br>";
  echo soma(1.5,1.5);
  echo "<br>";
?>
<?php
   //Configuração para windows
   //pt_BR - Padrão de linguagem
   //pt_BR.utf-8 Padrão de linguagem com acento
   //portuguese - Padrão do windows
   //LC_ALL - Mudar toda a configuração que se tem da localização para portugues.
   //strftime - Mostra os parametros para data
   //%A - Dia da semana
   //%B - Dia do mes
   // Mais parametros disponível no manual do php
   setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese");
   echo strftime("%A %B");
   echo "<br>";
   echo "Hoje é ".strftime("%d"). " de ". strftime("%B"). " de ".strftime("%G"); 

   

?>
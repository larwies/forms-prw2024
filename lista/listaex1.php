<?php 
    echo "<h2>Operações</h2>";

     $n = $_GET['n'];
     $n1 = $_GET['n1'];
     $n2 = $_GET['n2'];

      $soma = $n1 + $n2;
      $subtracao = $n1 - $n2;
      $divisao = $n1 / $n2;
      $multiplicacao = $n1 * $n2;

     if($n==1){
        echo "<h3>Resultado: <h3>\n";
        echo $soma;
     }
     else if($n==2){
        echo "<h3>Resultado:<h3>\n";
        echo $subtracao;
     }
     else if($n==3){
        echo "<h3>Resultado: <h3>\n";
        echo $divisao;
     }
     else if($n==4){
        echo "<h3>Resultado: <h3>\n";
        echo $multiplicacao;
     }


?>
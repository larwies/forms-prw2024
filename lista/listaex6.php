<?php 
    echo "<h2>Média</h2>";

     $nome = $_GET['nome'];
     $n1 = $_GET['n1'];
     $n2 = $_GET['n2'];
     $f = $_GET['f'];
    
    $media = ($n1+$n2)/2;

    if($media < 5){
        echo "Reprovado por nota<br>";
    }
    else if($f < 75){
        echo "Reprovado por faltas<br>";
    }
    else {
        echo "Aprovado<br>";
    }
    
    echo "Nome: ".$nome."<br>";
    echo "Nota 1: ".$n1."<br>";
    echo "Nota 2: ".$n2."<br>";
    echo "Frequência: ".$f."<br>";

?>
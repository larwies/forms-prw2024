<?php 
    echo "<h2>Idade</h2>";

     $nome = $_GET['nome'];
     $i = $_GET['i'];
    
    $idade = $i*365;
    
    echo "Você tem ".$idade." dias de vida"."<br>";

?>
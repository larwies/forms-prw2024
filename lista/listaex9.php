<?php 
    echo "<h2>Hora</h2>";

     $nome = $_GET['nome'];
     $h = $_GET['h'];
    

     if($h <= 12){
        echo "Bom dia ".$nome;
     }
     else if($h > 12 and $h <= 6){
        echo "Boa tarde ".$nome;
     }
     else if ($h <= 6){
        echo "Boa noite ".$nome;
     }
    
?>
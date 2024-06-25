<?php 
    echo "<h2>Hora</h2>";

     $nome = $_GET['nome'];
     $h = $_GET['h'];
    

     if(strtotime($h) < strtotime("12:00")){
        echo "Bom dia ".$nome;
     }
     else if(strtotime($h) > strtotime("18:00")){
        echo "Boa noite ".$nome;
     }
     else{
        echo "Boa tarde ".$nome;
     }
    
?>
<?php 
    echo "<h2>Área do terreno</h2>";

     $l = $_GET['l'];
     $a = $_GET['a'];
    
        $area = $l*$a;

        echo "A área do terreno é de: ".$area;

?>
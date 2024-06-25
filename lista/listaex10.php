<?php 
    echo "<h2>Média</h2>";

     $p = $_GET['p'];
     $m = $_GET['m'];
     $g = $_GET['g'];
    
    $valor = ($p*10) + ($m*12) + ($g*15);

    echo "Valor total das peças: ".$valor."<br>";

?>
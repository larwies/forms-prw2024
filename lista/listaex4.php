<?php 
    echo "<h2>Ano Bissexto</h2>";

     $ano = $_GET['ano'];
     
     if($ano%4 == 0 and $ano%100 !=0 || $ano%400 == 0){
        echo $ano." é ano bissexto<br>\n";
     }
     else {
        echo $ano." não é ano bissexto<br>\n";
     }

?>
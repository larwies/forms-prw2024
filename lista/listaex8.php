<?php 
    echo "<h2>Tabuada</h2>";

     $tab = $_GET['tabuada'];

    for($i = 0; $i <= 10; $i++){
        echo " $i  x  $tab  =  " . $i*$tab . "<br>";
    }

?>
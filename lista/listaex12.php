<?php 
     $p = $_GET['p'];
     $n = $_GET['n'];

     for($i=1; $i<=$n; $i++)
        {
        echo "<img src='./$p/$i.jpg' style='width: 150px; height:100px'></img><br>";
        }
 
?>
<?php 
    echo "<h2>Tempo Viagem</h2>";

     $vm = $_GET['vm'];
     $dv = $_GET['dv'];
     $cm = $_GET['cm'];

     echo "<h3>Velocidade Média :</h3>";
     echo $vm;

     echo "<h3>Distância da viagem:</h3>";
     echo $dv;

     echo "<h3>Consumo médio do veículo:</h3>";
     echo $cm;


$ho = number_format($dv/$vm,2,".","");
$cm = number_format($dv/$cm,2,".","");

echo "<h3>Total horas: <h3>$ho\n";
echo "<h3>Total combustivel: <h3>$cm\n";
?>
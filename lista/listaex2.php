<?php 
    echo "<h2>Formulário</h2>";

     $n = $_GET['n'];
     $nome = $_GET['nome'];
     $rec = $_GET['rec'];
     $prod = $_GET['prod'];
     $ava = $_GET['ava'];

     if($n==1){
        echo "<h3>Pessoa Física</h3>";
     }
     else{
        echo "<h3>Pessoa Jurídica</h3>";
     }
     echo "<h3>Nome:</h3>";
     echo $nome;

     echo "<h3>Reclamação:</h3>";
     echo $rec;

     echo "<h3>Produto:</h3>";
     echo $prod;

     echo "<h3>Avaliação:</h3>";
     echo $ava;

?>S
<?php 
    echo "<h2>Cadastro</h2>";

    //$_GET['nome_campo']
    //$_POST['nome_campo']


    //recebendo dados enviados do form html via post 

     $user = $_GET['username'];
     $senha = $_GET['senha'];
     $nome = $_GET['nome'];
     $email = $_GET['email'];
     $cidade = $_GET['cidade'];
     $estado = $_GET['estado'];

     echo "<h3>Username:</h3>";
     echo $user;

     echo "<h3>Senha:</h3>";
     echo $senha;

     echo "<h3>Nome:</h3>";
     echo $nome;

     echo "<h3>Email:</h3>";
     echo $email;

     echo "<h3>Cidade:</h3>";
     echo $cidade;

     echo "<h3>Estado:</h3>";
     echo $estado;
?>
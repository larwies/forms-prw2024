<?php 
     $pront = $_GET['pront'];
     $nome = $_GET['nome'];
     $idade = $_GET['idade'];
     $periodo = $_GET['periodo'];
     $mod = $_GET['mod'];

     echo "<h3>Prontuário:</h3>";
     echo $pront;

     echo "<h3>Nome:</h3>";
     echo $nome;

     echo "<h3>Idade:</h3>";
     echo $idade;

     echo "<h3>Período:</h3>";
     echo $periodo;

     echo "<h3>Módulo:</h3>";
     echo $mod;

     $erro=0;
    if(empty($pront))
        { 
            echo '<h3>O prontuário não pode estar em branco</h3>'; 
            $erro=1;
        }
    if(empty($nome))
        { 
            echo '<h3>O nome não pode estar em branco</h3>'; 
            $erro=1;
        }
    if($idade < 15 or $idade > 75)
        { 
            echo '<h3>Favor digitar uma idade válida</h3>'; 
            $erro=1;
        }
    if($periodo =! "N" or $periodo =! "V")
        { 
            echo '<h3>Favor digitar um período válido</h3>'; 
            $erro=1;
        }
    if($mod < 1 or $mod > 4)
        { 
            echo '<h3>Favor digitar um módulo válido</h3>'; 
            $erro=1;
        }
    if($erro==0)
        { 
            echo '<h3>Todos os dados foram digitados corretamente!</h3>';
        }

?>
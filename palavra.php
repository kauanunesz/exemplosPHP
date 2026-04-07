<?php 
    $nome = "Ruth ";
    $sobreNome = "Cardoso";
    $nacionalidade = "Brasileira";
    $localDoNascimento = "Araraquara, São Paulo";
    $diaDoNascimento = 2;
    $mesDoNascimento = 4;
    $anoDoNascimento = 253;

    echo "Nome: " . $nome . $sobreNome;
    echo "<br><br>";
    echo "Nacionalidade: " . $nacionalidade;
    echo "<br><br>";
    echo "Local do Nascimento: " . $localDoNascimento;
    echo "<br><br>";
    echo "Data do Nascimento: {$diaDoNascimento}/{$mesDoNascimento}/{$anoDoNascimento}";
    echo "<br><br>";

    echo "<br><br>";
    echo "<a href='index.php'>Voltar</a>";
?>
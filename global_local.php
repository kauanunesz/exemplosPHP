<?php 
    $nomePublico = "Ruth Cardoso";
    // Passando parâmetro
    function passandoParametros($nome)
    {
        $mensagem = "(Passand parâmetros) boa noite";
        echo "{$mensagem} {$nome}";
    }
    passandoParametros($nomePublico);

    echo "<br><br>";
?>
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
    // Função que não recebe parâmetro
    // function semPassarParametro1()
    // {
    //     $mensagem = "boa noite";
    //     echo $mensagem . $nomePublico;
    // }
    // semPassarParametro1();
    // comentário para não ficar com erro
    echo "<br><br>";
    function semParametro2()
    {
        $mensagem = "Boa noite!";
        echo "Sem parâmetro 2" . $mensagem . $GLOBALS['nomePublico'];
    }  
    semParametro2();
    // No php você só consegue acessar a variável (ou variáveis) globais através de "$GLOBALS" com o nome dentro dos colchetes
    echo "<br><br>";
    echo "<a href='index.php'>Voltar</a>"
?>
<?php 
        $n1 = trim($_POST['n1']);
        $n2 = trim($_POST['n2']);

        function calcular($a, $b)
        {
            echo "Soma: {$a} + {$b} = " . ($a + $b) . "<br>";
            echo "Subtração: {$a} - {$b} = " . ($a - $b) . "<br>";
            echo "Multiplicação: {$a} x {$b} = " . ($a * $b) . "<br>";
            if ($b != 0) 
                {
                    echo "Divisão: {$a} / {$b} = " . ($a / $b) . "<br>";
                }
            else 
                {
                    echo "Divisão por 0 impossível! <br>";
                }
                
        }
        calcular($n1, $n2);
        echo "<a href='index.php'>Voltar</a>"
    ?>  
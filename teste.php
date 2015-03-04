<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <title> Operações </title>
        <meta charset="UTF-8">
    </HEAD>
    <body>
        <?php include "operacoes.php"?>
        <?php
            $a = 27;
            $b = 3;
            $resultadosoma = soma($a,$b);
            $resultadosub = subtração($a, $b);
            $resultadodivisao = divisao($a, $b);
            $resultadomultiplicacao = multiplicacao($a, $b);
            echo "O resultado da soma entre $a e $b é $resultadosoma <br><hr> "; 
            echo "O resultado da subtração entre $a e $b é $resultadosub <br><hr> ";
            if($resultadodivisao == false){
                echo "Impossível realizar divisão por zero <br> <hr>";
            }
            else{
            echo "O resultado da divisão entre $a e $b é $resultadodivisao <br> <hr>";
            }
            echo "O resultado da multiplicação entre $a e $b é $resultadomultiplicacao <br><hr>";
        ?>
    </body>
</HTML>

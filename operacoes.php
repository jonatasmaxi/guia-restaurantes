<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <title> Teste Função </title>
        <meta charset="UTF-8">
    </HEAD>
    <body>
        <?php
            function soma($a,$b){
                $soma = $a + $b;
                return $soma;
            }
            function subtração($a,$b){
                $sub = $a - $b;
                return $sub;
            }
            function multiplicacao($a,$b){
                $produto = $a * $b;
                return $produto;
            }
            function divisao($a,$b){
                if($b == 0){
                    return false;
                }
                else{
                $quociente = $a / $b;
                return $quociente;
                }

            }
        ?>
    </body>
</HTML>
<?php

//Declarando a Função
function impar_par($numero)
{
/*Se usa % que substitui o MOD no PHP, 
para capturar o resto ou módulo da divisão*/
    if($numero % 2){
        echo "$numero é IMPAR!";
    }else{
        echo "$numero é PAR!";
    }
}
/*$num é onde armazenamos o número em que vamos 
usar para testar se é um valor impar ou par*/
$num = 4;
impar_par($num);

?>

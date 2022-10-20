<?php

$idade = 15;
$numeroPessoas = 1;

echo "Entrada proibida para menores de 18.\n";

if ($idade >= 18){
    echo "Voce tem $idade anos.\nEntrada liberada!";
}else if ($idade >= 16 && $numeroPessoas > 1) {
    echo "voce tem $idade anos mas esta acompanhado. \n Entrada liberada!";
}else
    echo "vc é juninho, cai fora!";


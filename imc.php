<?php

$peso = 85;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Vc esta com o IMC ";

if ($imc < 18) {
    echo "abaixo";
}else if ($imc < 25){
    echo "dentro";
}else {
    echo "acima";
}

echo " do recomendado";
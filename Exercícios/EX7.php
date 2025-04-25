<?php
$lado1 = 4;
$lado2 = 7;
$lado3 = 6;
$triangulo = $lado1 + $lado2;

if ($triangulo > $lado3){
    echo "Este é um triangulo";
} else {
    echo "Este não é um triângulo";
}

if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "e este é um Triângulo Equilátero";
} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "e este é um Triângulo Isóceles";
} else{
    echo "e este é um Triângulo Escaleno";
} 

<?php
$nota1 = 5.0;
$nota2 = 6.0;
$media = ($nota1 + $nota2) / 2;

if ($media >= 9.0 && $media<=10) {
    echo "Aluno aprovado com conceito A";
} elseif ($media >= 7.5 && $media < 9.0) {
    echo "Aluno aprovado com conceito B";
} elseif ($media >= 7.5) {
    echo "Aluno aprovado com conceito C";
} elseif($media >= 5.9) {
    echo "Aluno reprovado com conceito D";
} elseif($media >= 3.9) {
    echo "Aluno reprovado com conceito E";
} else {
	echo "Nota inválida";
}
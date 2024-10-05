<?php
/* 
Exercício 2

O objetivo desse exercício é praticar os conhecimentos adquiridos nas aulas.
*/

// Aqui estão as variáveis
$nome = "Hiago"; // Esse é o nome do usuário
$idade = 16; // Essa é a idade do usuário
$filme = "Massacre do Cortador de Grama 2: A vingança"; // Nome do filme que ele quer assistir
$companhia = 1; // Uma companhia maior de idade

echo "$nome quer ir ao cinema assistir $filme. No entanto este filme possui classificação indicativa 18 anos. <br>";
echo "Então, ";

// Esta frase vai mudar de acordo com as variáveis
if ($idade >= 18) {
    echo "$nome pode ir assistir ao filme $filme sozinho";
} elseif ($idade >= 16 && $companhia > 0) {
    echo "$nome pode ir assistir ao filme $filme desde que esteja acompanhado de um maior de 18 anos.";
} else {
    echo "$nome não pode assistir o filme $filme!";
}

?>
<?php

    $valor1 = 0.124516235651;

    echo 2.5 . "<br>";
    echo -0.3 . "<br>";
    echo 0.124516235651 . "<br>";

    if (is_float($valor1)) {
        echo "$valor1 é um número flutuante";
    } else {
        echo "$valor1 não é um número flutuante";
    }

?>
<?php

$arquivo = fopen('listar-cursos.txt', 'r');

while(!feof($arquivo)){
    $curso = fgets($arquivo);

    print $curso;
}

fclose($arquivo);
<?php

$arquivo = fopen('listar-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('listar-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

print $cursos;

fclose($arquivo);
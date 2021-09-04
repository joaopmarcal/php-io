<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while(!$arquivoCursos->eof()){
    $linha = $arquivoCursos->fgetcsv(';');

    print $linha[1] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());
print $date->format('d/m/y');
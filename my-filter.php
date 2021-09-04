<?php

require 'MeuFiltro.php';

$arquivoCursos = fopen('listar-cursos.txt','r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos,'alura.partes');

echo fread($arquivoCursos, filesize('listar-cursos.txt'));
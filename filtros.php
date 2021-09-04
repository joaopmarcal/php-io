<?php

$arquivoCursos = fopen('listar-cursos.txt','r');

stream_filter_append($arquivoCursos,'string.toupper');

echo fread($arquivoCursos, filesize('listar-cursos.txt'));
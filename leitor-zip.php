<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

print file_get_contents('zip://arquivos.zip#listar-cursos.txt', false, $contexto);

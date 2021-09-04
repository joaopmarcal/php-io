<?php

$diretorioAtual = dir('.');

print $diretorioAtual->path . PHP_EOL;

while($arquivo = $diretorioAtual->read()){
    print $arquivo . PHP_EOL;
}
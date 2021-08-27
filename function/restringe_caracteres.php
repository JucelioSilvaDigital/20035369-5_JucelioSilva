<?php
//Limita apenas a letras e numeros
function limitaTipoCaracteres($frase1){
    $frase1 = preg_replace("/[^a-zA-Z0-9]-/", "", $frase1);
    $frase1 = trim($frase1);
    return $frase1;
}
//Coloca um espaço e torna a primeira letra de cada palavra em caixa alta (title)
function trataTituloPag($titulo){
    $titulo = mb_convert_case($titulo, MB_CASE_TITLE, "UTF-8");
    $titulo = str_replace('-', " ", $titulo);
    return $titulo;
}

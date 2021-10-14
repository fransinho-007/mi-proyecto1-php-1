<?php

function saludar()
{
    return "hola todo el mundo!";
}

function saludar_por_nombre($nombre)
{
    return "Hola " . $nombre . " como estas!";
}

function sumar($n1, $n2)
{
    $resultado = $n1 + $n2;
    return $resultado;
}

function potencia($n1,$n2)
{
    return $n1 ** $n2;
}

function obtenerPI(){
    return pi();
}
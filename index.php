<?php

require __DIR__ . '/vendor/autoload.php';

echo saludar();

echo '<br/>';

echo saludar_por_nombre('Andres');

echo '<h1>nos vemos luego</h1>';

echo '<hr>';
echo '<h1>sumar</h1>';

echo '<p>' . sumar(100, 200) . '</p>';

echo '<hr>';
echo '<h1>potencia</h1>';

echo '<p>' . potencia(3,3) . '</p>';

echo '<hr>';
echo '<h1>obtenerPI</h1>';

echo '<p>' obtenerPI() . '</p>';
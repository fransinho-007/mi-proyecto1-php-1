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

echo '<p>' . obtenerPI() . '</p>';

echo '<hr>';
echo '<h1>obtener numeros aleatorios</h1>';
echo "<p>entre uno y cien: " . obtener_numero_aleatorio(1,100) . "</p>";
echo "<p>entre 0 y 50: " . obtener_numero_aleatorio() . " </p>";
echo "<p>entre 80 y 90: " . obtener_numero_aleatorio(80,90) . "</p>";

echo '<hr>';
echo '<h1>Array</h1>';
echo '<pre>' . obtenerArray() . '</pre>';
<?php

// $segundos = readline("Ingresa el tiempo en segundos: "); // No funciona por que no estoy desde la terminal y se deben definir los valores
$segundosTotales = 17645;
$horas = (int)($segundosTotales / 3600);
$segundos = $segundosTotales % 3600;
$minutos = (int)($segundos / 60);
$segundos = $segundos % 60;


echo "$segundosTotales segundos son $horas horas, $minutos minutos y $segundos segundos" ;
echo "<br>";


$horas = 4;
$minutos = 54;
$segundos = 5;

$segundosTotales = $segundos + ($minutos * 60) + ($horas * 3600);


echo "$horas horas, $minutos minutos y $segundos segundos son en total $segundosTotales segundos" ;
echo "<br>";
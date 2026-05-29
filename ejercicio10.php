<?php

//Ejercicio 10: Crea una función que reciba tantos números como uno quisiera pasar y me devuelva la multiplicación de todos ellos.
//Complejidad: MEDIA (2 puntos)

// 🧠 Pista: A veces los puntos suspensivos dicen mucho ...$digo ...

function multiplicarNumeros(...$numeros) {
    $res = 0;
    foreach ($numeros as $num){
    $res = $num;
    }
    foreach ($numeros as $num){
    $res = $res * $num;
    return $res;
    }
    }
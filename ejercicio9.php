<?php

//Ejercicio 9: Crea una función llamada generarTablaMultiplicar que tome un número entero como parámetro y mostrar los resultados (del 1 al 10) uno debajo del otro por pantalla.
//Complejidad: BAJA (1 punto)

function generarTablaMultiplicar($num) {
    $numero = 3;
    $calc1 = $numero * 1;
    $calc2 = $numero * 2; 
    $calc3 = $numero * 3; 
    $calc4 = $numero * 4; 
    $calc5 = $numero * 5; 
    $calc6 = $numero * 6; 
    $calc7 = $numero * 7; 
    $calc8 = $numero * 8; 
    $calc9 = $numero * 9; 
    $calc10 = $numero * 10;
    echo $calc1 . "<br>";
    echo $calc2 . "<br>";
    echo $calc3 . "<br>";
    echo $calc4 . "<br>";
    echo $calc5 . "<br>";
    echo $calc6 . "<br>";
    echo $calc7 . "<br>";
    echo $calc8 . "<br>";
    echo $calc9 . "<br>";
    echo $calc10 . "<br>";
}
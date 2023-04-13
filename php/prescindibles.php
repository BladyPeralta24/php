<?php
/*
Se le proporciona un fragmento de código PHP que contiene malos olores de tipo prescindibles. 
Su tarea es identificar y corregir estos malos olores para mejorar la legibilidad y mantenibilidad del código.
*/

  function suma($sumando1, $sumando2) {
    return $sumando1 + $sumando2;
  }

  function resta($minuendo, $sustraendo) {
    return $minuendo - $sustraendo;
  }

  $numero1 = 5;
  $numero2 = 3;

  echo "La suma de $numero1 y $numero2 es: ", suma($numero1, $numero2), "\n";

  echo "La resta de $numero1 y $numero2 es: ", resta($numero1, $numero2), "\n";
?>



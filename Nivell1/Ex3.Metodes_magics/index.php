<?php
declare(strict_types=1);
include_once "Persona.php";

$persona1 = new Persona("Clara Campoamor");

// 3) creo propiedades dinámicas __set($propiedad, $valor)
$persona1-> nacio = "en 1888";
$persona1-> estudio = "derecho";
$persona1-> consiguio = "el voto para las mujeres en 1931";
$persona1-> sufrio = "olvido y ostracismo";
$persona1-> murio = " en el exilio en 1972";

// 4) llamo a una propiedad inexistente. se activa __get($propiedad)
echo $persona1->matrimonio;

// 5) llamo a una función inexistente. Se activa __call($funcion, $argumentos)
echo $persona1->darReconocimientoEnVida("Premio Sant Jordi");

// 6) __toString
echo $persona1;

// 7) Trato un objeto como una función __invoke()
echo $persona1();

// 8) __unset
unset($persona1->sufrio);

?>
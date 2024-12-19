<?php
declare(strict_types=1);

echo "<h2>Sprint 1. Tema 6. Ex 2. Constants màgiques</h2>";

echo "1) Això está passat a la linea: " . __LINE__ ."<br>";
echo "<br>";

echo "2) Aquest es el nom i la ruta de l'arxiu: <br>". __FILE__ . "<br>" ;
echo "<br>";

echo "3) El trobaràs al directori:<br>".  __DIR__ . "<br>";
echo "<br>";

function saluda(){
    echo "4) La funció ". __FUNCTION__ ." et diu 'Bon dia!'";
}

saluda();
echo "<br>";

include_once "Estat.php";
echo "<br>";

$contenta = new Estat();

echo "5) La classe ".$contenta->mostrarClase() ." diu que estic ". $contenta->getComEstic() . "<br>";
echo "<br>";

echo "6) Això dels traits ho he deixat per un altre moment. Per això __TRAIT__ es queda així. <br>";
echo "<br>";

echo "7) Per cert, us he dit que hi ha una classe? també hi te aquest métode: <br>" .  $contenta->socUnMetode() . "<br>";
echo "<br>";

echo "8) ... la __PROPERTY__ també la he deixat per un altre moment... <br><br>";
echo "<br>";

echo "9) Aquest espai es diu:  __NAMESPACE__  <br> (...aquesta per un altre moment, també)";
echo "<br>";

echo "i fins aquí hem d'arrivat ;) molt bon any 2025 i m'alegro que siguis sent el nostre tutor <br>  * ! * 
<br> * <br>  * !    * ! *<br>       *  <br>  * ! *  ! <br> * ! * <br>  !* *<br>  *   * ! * ! * (todo random, sin pretenciones :))";






?>
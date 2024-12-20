<?php
declare(strict_types=1);

echo "<h2>Sprint 1. Tema 6. Ex 2. Constants màgiques</h2>";

echo "<p>1) __LINE__ ens diu que això está passat a la linea: " . __LINE__ ."</p>";

echo "<p>2) i __FILE__ ens diu el nom i la ruta de l'arxiu: <br>". __FILE__ . "</p>" ;

echo "<p>3) El trobaràs al directori: ".  __DIR__ . "<br> Ho se per la constant màgica __DIR__</p>";

function saluda(){
    echo "<p>4) Amb __FUNCTION__ Sabem que la funció <strong>". __FUNCTION__ ."</strong> et diu 'Bon dia!'</p>";
}

saluda();

include_once "Estat.php";

$contenta = new Estat();

echo "5)Amb __CLASS__ se que la classe <strong>".$contenta->mostrarClase(). "</strong> diu que estic ". $contenta->getComEstic() . "<br>";
echo "<p>El nom de la classe també el podem saber amb get_class(object): " .  get_class($contenta). "</p>";

echo "<p>6) Això dels traits ho he deixat per un altre moment. Per això __TRAIT__ es queda així. </p>";

echo "<p>7) Per cert, us he dit que hi ha una classe? amb __METHOD__ també el nom del métode: " 
.  $contenta->socUnMetode() . "<br>  (els quatre punts els fica ell) </p>";

echo "<p>8) ... la __PROPERTY__ també la he deixat per un altre moment... </p>";

echo "<p>9) Aquest espai es diu:  __NAMESPACE__  <br> (...aquesta per un altre moment, també)</p>";

echo "i fins aquí hem d'arrivar ;) molt bon any 2025 i m'alegro que siguis sent el nostre tutor <br>     * <br> * ! * 
<br> * <br>  * !    * ! *  <br> ' * ! *  ! <br> * ! * ' * '  !* *<br>  *   * ! * ! <br> * (todo random, sin pretenciones ;) *)";






?>
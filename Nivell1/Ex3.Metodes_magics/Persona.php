<?php
declare (strict_types=1);

class Persona {
    private string $nombre;
    private array $vida=[];

    public function __construct(string $nombre) {
        $this->nombre=$nombre;
        echo "<p>Soy $this->nombre. Gracies por crearme!</p>";
    }
    
           
   //3) Métode màgic _set: permet crear noves propietats i asignar el seu valor
    public function __set(string $propiedad, mixed $valor) : void {
        $this->vida[$propiedad]= $valor;
        echo "<p>Has añadido a la vida de $this->nombre que $propiedad  $valor </p>";
    }

    //4) Métode màgic __get: permet accedir a les propietats creades de forma dinámica per a cada objecte
    public function __get(string $esdeveniment) : string {
        return $this->vida[$esdeveniment] ?? "<p>El $esdeveniment no figura en la vida de $this->nombre </p>";

    }

    //5) Método mágico __call()
    public function __call(string $metodo, array $arrayArgumentos) : string {
        return "<p>No se le puede otorgar el ". $arrayArgumentos[0] . 
            " porque ya no es posible $metodo, <br>¡haberlo pensado antes!</p>";
    }

    //6)metodo magico __toString()
    public function __toString() : string {
        return "<p>Es $this->nombre Campoamor</p>";
    }

    // 7)metodo magico __invoke() Se ejecuta cuando un objeto es invocado como una función.
    public function __invoke(int $numero) : string {
        return "<p>La función de $this->nombre transformó la vida de $numero mujeres y hombres</p>";
    }
    
    //8) __unset se activa cuando se usa unset() 
    public function __unset(string $propiedad) : void {
        if (isset($this->vida[$propiedad])) {
            echo "<p>Se ha eliminado el " .$this->vida[$propiedad] ." de la historia de $this->nombre. </p>";
            unset($this->vida[$propiedad]);
        } else {
            echo "<p>Esa propiedad no existe</p>";
        }
    }

    public function __destruct()  {
        echo "<p>¡Hasta siempre, $this->nombre ! <br> ¡Gracias por todo lo que hiciste por nosotros!</p>";
    }
}
?>
<?php
declare(strict_types=1);

class Estat {
   private string $comEstic = "";

  public function  __construct(string $comEstic="contenta") {
        $this->comEstic=$comEstic;
    }


public function getComEstic() : string  {
    return $this->comEstic;
    }

    public function mostrarClase() : string {
        return __CLASS__;
    }

    public function socUnMetode() : string {
        return __METHOD__;
    }
}
?>

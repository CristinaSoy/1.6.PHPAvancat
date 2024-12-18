<?php

enum Estado {
    case Activo;
    case Inactivo;
}

class Usuario {
    public Estado $estado; // Propiedad usando el enum

    public function __construct(Estado $estado) {
        $this->estado = $estado;
    }

    public function mostrarEstado() {
        echo "El estado del usuario es: " . $this->estado->name;
    }
}

// Crear un usuario con un estado válido
$usuario = new Usuario(Estado::Activo);
$usuario->mostrarEstado(); // Muestra: El estado del usuario es: Activo

?>

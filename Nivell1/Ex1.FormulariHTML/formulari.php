<?php
//Iniciar la sessió
session_start();

//Obtenir les dades del formulari amb superglobals
$username=$_POST["nom_usuari"];
$edat=$_POST["edat_usuari"];
$email=$_POST["email_usuari"];

//Mostrar les dades rebudes
function mostrarDades() : void {
    echo "Nom d'usuari: $username";
    echo "Edat: $edat";
    echo "<p>Email: $email</p>";
}

//Guarda dades en variables de sessió:
$_SESSION["nom_usuari"] = $username;
$_SESSION["email_usuari"]=$email;

//Missatge de confirmacio
echo "<p>Les dades de $_SESSION[nom_usuari] amb $_SESSION[email_usuari] s'han guardat a la sessió</p>";

//Enllaç per tornar al formulari
echo '<p><a href="index.html"> Tornar al formulari</a></p>';
?>
<?php
declare(strict_types=1);

//Iniciar la sessió
session_start();

// Sanejar les dades entrades al formulari.
$username= filter_var($_POST["nom_usuari"], FILTER_SANITIZE_SPECIAL_CHARS);
$edat=filter_var($_POST["edat_usuari"], FILTER_SANITIZE_NUMBER_INT);
$email= filter_var($_POST["email_usuari"], FILTER_SANITIZE_EMAIL);

//Validar les dades entrades
$errors = []; 

if (empty($username)) {
    $errors[] = "El nom d'usuari es obligatori";
} elseif (!ctype_alnum($username)) {
    $errors[] = "El nom d'usuari sol pot contenir nombres i lletres";    
} elseif (strlen($username)>50) {
    $errors[] = "El nom d'usuari no pot ser més gran que 50 caracters";
}

//validar edat
if (!empty($edat)) {
    if (!filter_var($edat,FILTER_VALIDATE_INT)) {
        $errors[] = "L'edat ha de ser un nombre vàlid";
    } elseif ($edat<12 || $edat>105) {
        $errors[] = "L'edat ha de ser una edat vàlida (mínim 12 anys)";
    }
}

//validar email
if (empty($email)) {
    $errors[] = "L'email és obligatori";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'email no és vàlid";
}

if (!empty($errors)) {
    echo "S'han detectat els següents errors al formulari:<br>";
    echo implode("<br>", $errors);
} else {
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
}
//Enllaç per tornar al formulari
echo '<p><a href="index.html"> Tornar al formulari</a></p>';
?>
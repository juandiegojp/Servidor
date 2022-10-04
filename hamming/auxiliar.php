<?php

function comprobar_cadenas($adn1, $adn2, $error) {
    if (empty($adn1)) {
       $error = "Error: Las cadenas no deben de estar vacías.";

    } elseif (strlen($adn1)!=strlen($adn2)) {
        $error = "Error: Las cadenas no deben de ser de diferente tamaño.";

    } else {
        return null;
        
    }
    return $error;
}


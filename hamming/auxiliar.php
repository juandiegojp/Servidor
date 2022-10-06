<?php

function comprobar_cadenas($adn1, $adn2, $error) {
    if (empty($adn1)) {
       $error = "Error: Las cadenas no deben de estar vacías.";

    } elseif (strlen($adn1)!==strlen($adn2)) {
        $error = "Error: Las cadenas no deben de ser de diferente tamaño.";
        
    } else {
        return true;
    }
    return $error;
}

function hamming($adn1, $adn2) {
    $cont = 0;
    for ($i=0; $i < strlen($adn1) ; $i++) { 
        if ($adn1[$i]!==$adn2[$i]) {
            $cont += 1;
        }
    }
    return $cont;
}
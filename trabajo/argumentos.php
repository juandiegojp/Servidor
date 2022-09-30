<?php
echo $argc;

echo "hola\npepe";

#Sintaxis heredoc

echo <<<EOT
    HOLAAA
    E
    E
    E
EOT;

#Sintaxis NOWdoc

echo <<<'EOT'
    HOLAAA
    E
    E
    E
EOT;

#Concatenación

echo "Hola " . "mundo";
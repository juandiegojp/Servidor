<?php
function conectar()
{
    return new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');
}

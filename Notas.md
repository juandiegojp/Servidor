_Cliente_
- Navegador
 
_Servidor Web_
- Apache
- **Contenido estático/dinámico**

_Servidor de aplicacciones_
- PHP

_SGBD_
- PostgreSQL 


-------------
# SAPI - Server Application Program Interface
- interprete desde lka consola 
- módulo del apache 
- fastCGI

# CONFIGURAR ARCHIVO PHP.INI
 etc/php/8.1/cli/php.ini
 error_reporting = E_ALL
 display_errors = On
display_startup_errors = On
date.timezone = 'UTC'

guardar archivo y fin.

# Modos de ejecución
{
    Por lotes (Script)
    Interactivo (Pruebas, practicar, etc...)
}

Interprete de php: php -a

- interpretado
- imperativo
-- sentencias
-- expresiones
- tipado dinámico
- tipado débil

# Descargar PsySH
- https://psysh.org/
- sudo chown root.root psysh
- sudo mv psysh /usr/local/bin
- psysh

y ya estaría :_


# MODO DUAL DE OPERACIÓN

- Modo HTML
- Modo PHP

<?php aquí se inicia a escribir código php, ?>
todo lo que esté fuera se interpreta como HTML.

---

# 26/09/2022

Comentarios en PHP:
- '# esto es un comentario en una sola línea'
- '/* comentario en verias líneas */'
- '/** cometario de documentación */'

VARIABLES
Todas las variasbles comienzan por '$'. Por ejemplo: '$X = 24'. La variable 'X' contiene el valor 25.

AL igual que podemos crear una variable, podemos destruir una variable con la función unset. Por ejemplo: unset($x);

Asignación multiple: $x=($y=($Z=4));
Asignación por referencia: $y = &$x
Incremento:
- $x++;
- ++$x;
- $x+=1;

tipo de variables:
- bool
- int       integer
- float     double
- string
- null


# Tipos
- Boleanos
-- True
-- False
- Números enteros
-- intdiv
-- vardump((int) 25/7)
- Punto flotante
-- Valor float puede perder números/valores que pueden ser importantes. Hay que tener eso en cuenta.


Para concatenar cadenas se usa el operador ".". Por ejemplo: "Hola " . "mundo".

# 27/09/2022

Descargar el paquete php8.1-mbstring. 

 **mb_substr** función que reemplaza la indexación por corchetes. Por ejemplo:
 $x = 'Camión';
 mb_substr($x, 4, 1); -> 'ó'

La función is_null comprueba si la variable que se le pasa contiene el valor nulo. Nulo significa para php que dicha variable no se ha inicializado y, a su vez, que no contiene un valor como tal. Por otro lado, isset comprueba si la función está inicializada y además si contiene un valor. Por ejemplo, si el valor de $x contiene null, isset dará false para $x pero true si $y contiene un valor, por ejemplo, numérico.

Son dos funciones importantes que se usan bastante.


# Jueves - 29 / 09 / 2022 

number_format

money_format (Obsoleto).

$a == $b    Igual
$a === $b   Idéntico
$a != $b    Diferente
$a !== $b   No idéntico
$a <=> $b Mayor, igual o menor que.

Operador ternario: 
    condición ? cumple condición : no cumple la condición

Operador Elvis:
    "hola" ?: "pepe"    -> Hola
    "" ?: "pepe"        -> Pepe

Constantes: 
    define("MAXIMO", 78);   -> MAXIMO es una constante y contiene el valor 78.
    const PEPE = "hola";    -> Al igual que define, PEPE es una constante y contiene la palabta "hola".

"Defined" es una función que nos sirve para comprar si una constante está ya definida. Por ejemplo: 
    - defined('PEPE);       ->  True


## Estructuras de control

if (and) {
    sentencia;
    sentencia;
}

if (and) {
    --
} else {
    --
}

if (1 == 2):
    echo "Só";
else:
    echo "eó";
endif;

switch (expr) {
    case ...:
        break;
}


## Estructuras iterativas

while (and) {
    ---
    ---
}

do {
    ---
    ---
} while (and);

for (expr1;expr2;expr3) {
    ---
    ---   
}


## Array

Un array en php son una colección de elementos heterogéneos, dinámicos, asociativas. Para crear un array en php solo hace falta poner los corchetes.
Ejemplo: [
    "hola",
    true,
    12.4,
    14
]

## Foreach

Foreach es como el for mejorado de java. Sirve para recorrer cualquier elemento iterable, sin necesidad de conocer su indexación.
Por ejemplo:
    foreach ($a as $k=>$v) {
        echo $k . "=>" . $v;
    }

## Funciones útiles:
* Asort
* Arsort
* Sort
* Rsort
* Ksort
* Krsort

Si queremos copiar un array es tan sencillo como hacer
$a = $b;

pero si queremos que ambas variables cambien cuando una de las dos sufra una modificación, tenemos que poner & al definir la nueva variable. Por ejemplo, $a = & $b;


## Interpolación de cadenas. Expansión de variables.

## Imprimir por pantalla
* echo
* print_r
* var_dump


# LUNES 03 DE OCTUBRE

* Creación de funciones
* Funciones globales
* Return
* Documentación


# MARTES 04 DE OCTUBRE 

* Error

# JUEVES 6 DE OCTUBRE

* Hamming. -> Tema de abstración y control del mismo.
* Extract()
* Compact()
* array_pop()
* array_shift()
* array_unshift()
* array_push()
* array_sum()
* suffke()
* random()
* array_reverse()
* array_map()
* array_reduce()
* array_intersect()
* array_diff()
* array_splice()
* array_key_exists()
* array_splice()


# VIERNES 7 DE OCTUBRE

## Orientación a objetos

### función date/time.

*Función time() duelve el tiempo unix (1/1/70 00:00:00 UTC).
*Fucnión date() da formato a una fecha en tiempo unix.
*Formato ISO Y-m-d H:i:s     (Año, mes, día  Hora, minuto, segundos)
*Con la 'e' dentro del formato puedes añadir la zona horaria en la que estamos.
*En nuestro caso debe de ser UTC.

### Datetime

* $fecha = new DateTime();
  * $fecha -> getTimezone();  Duelve la zona horaria.
  * new DateTimeZone('Europe/Madrid'); -> Devuelve la zona horaria.
  * $fecha->setTimezone(new DateTimeZone('Europe/Madrid')); // Modifica la zona horaria a la de Europa/Madrid.
  * $dos_dias = new DateInterval('P2D'); // se crea el intervalo para dos días en adelante.
  * $fecha->add($dos_dias); // Modifica la fecha actual a dos días en adelante.
    * 'P2D' Dos días
    * 'T2M' Dos minutos
    * 'P' es necesario siempre, mientras que 'T' solo es necesario para HORAS, MINUTOS Y SEGUNDOS.
    * 'P4MT4M'  Aquí se diferencia los cuatro meses de los 4 minutos gracias a la T. Que es la que ayuda a diferenciar para darle el formato al intervalo.


* $nueva = $fecha;
* $nueva = &$fecha;
* $nueva = clone $fecha;


### Excepciones

* Function set_error_handler
* Error_reporting()
            { Error
            TypeError(ArgumentError), ArithmeticError (DivisionByZeroError)
* Throwable
            { Exception
            ErrorException

* Los errores se podrían capturar con un try sin problema.
* ValueError: ejemplo.
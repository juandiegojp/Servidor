_Cliente_

- Navegador

_Servidor Web_

- Apache
- **Contenido estático/dinámico**

_Servidor de aplicacciones_

- PHP

_SGBD_

- PostgreSQL

---

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

y ya estaría :\_

# MODO DUAL DE OPERACIÓN

- Modo HTML
- Modo PHP

<?php aquí se inicia a escribir código php, ?>

todo lo que esté fuera se interpreta como HTML.

---

# 26/09/2022

Comentarios en PHP:

- '# esto es un comentario en una sola línea'
- '/_ comentario en verias líneas _/'
- '/\*_ cometario de documentación _/'

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
- int integer
- float double
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
"hola" ?: "pepe" -> Hola
"" ?: "pepe" -> Pepe

Constantes:
define("MAXIMO", 78); -> MAXIMO es una constante y contiene el valor 78.
const PEPE = "hola"; -> Al igual que define, PEPE es una constante y contiene la palabta "hola".

"Defined" es una función que nos sirve para comprar si una constante está ya definida. Por ejemplo: - defined('PEPE); -> True

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

- Asort
- Arsort
- Sort
- Rsort
- Ksort
- Krsort

Si queremos copiar un array es tan sencillo como hacer
$a = $b;

pero si queremos que ambas variables cambien cuando una de las dos sufra una modificación, tenemos que poner & al definir la nueva variable. Por ejemplo, $a = & $b;

## Interpolación de cadenas. Expansión de variables.

## Imprimir por pantalla

- echo
- print_r
- var_dump

# LUNES 03 DE OCTUBRE

- Creación de funciones
- Funciones globales
- Return
- Documentación

# MARTES 04 DE OCTUBRE

- Error

# JUEVES 6 DE OCTUBRE

- Hamming. -> Tema de abstración y control del mismo.
- Extract()
- Compact()
- array_pop()
- array_shift()
- array_unshift()
- array_push()
- array_sum()
- suffke()
- random()
- array_reverse()
- array_map()
- array_reduce()
- array_intersect()
- array_diff()
- array_splice()
- array_key_exists()
- array_splice()

# VIERNES 7 DE OCTUBRE

## Orientación a objetos

### función date/time.

*Función time() duelve el tiempo unix (1/1/70 00:00:00 UTC).
*Fucnión date() da formato a una fecha en tiempo unix.
*Formato ISO Y-m-d H:i:s (Año, mes, día Hora, minuto, segundos)
*Con la 'e' dentro del formato puedes añadir la zona horaria en la que estamos.
\*En nuestro caso debe de ser UTC.

### Datetime

- $fecha = new DateTime();

  - $fecha -> getTimezone(); Duelve la zona horaria.
  - new DateTimeZone('Europe/Madrid'); -> Devuelve la zona horaria.
  - $fecha->setTimezone(new DateTimeZone('Europe/Madrid')); // Modifica la zona horaria a la de Europa/Madrid.
  - $dos_dias = new DateInterval('P2D'); // se crea el intervalo para dos días en adelante.
  - $fecha->add($dos_dias); // Modifica la fecha actual a dos días en adelante.
    - 'P2D' Dos días
    - 'T2M' Dos minutos
    - 'P' es necesario siempre, mientras que 'T' solo es necesario para HORAS, MINUTOS Y SEGUNDOS.
    - 'P4MT4M' Aquí se diferencia los cuatro meses de los 4 minutos gracias a la T. Que es la que ayuda a diferenciar para darle el formato al intervalo.

- $nueva = $fecha;
- $nueva = &$fecha;
- $nueva = clone $fecha;

### Excepciones

- Function set_error_handler
- Error_reporting()
  { Error
  TypeError(ArgumentError), ArithmeticError (DivisionByZeroError)
- Throwable
  { Exception
  ErrorException

- Los errores se podrían capturar con un try sin problema.
- ValueError: ejemplo.

# Base de Datos.
## Instalar POSTGRESQL
* sudo apt update
* sudo apt install postgresql
* systemctl status postgresql.service
  * si está activo (verde), está todo ok. En caso contrario, llora.
* ps ax | grep post
* sudo -u postgres psql -l
* sudo -u postgres createuser -P empresa
* sudo -u postgres createdb empresa
  * Comprobar de nuevo con el comando anterior para mostrar la lista de las base de datos existentes.
* psql -h localhost -d empresa -U empresa (-p es por defecto)
  * Si has podido acceder, todo ok. En caso contrario, algo se ha hecho mal. En cualquier caso, también se debería de conectar con PHP sin problema en caso de que no hubiera ningún problema.
## Creación de base de datos:

Comenzamos por la tabla departamento. Tendrá un campo **ID** el cual será un **BIGSERIAL**, código y denominación. Los '*' significan que **no pueden ser null**. Doble = debajo del campo significa que es **ÚNICO**.

La base de datos la creamos dentro de un directorio con el mismo nombre de la base de datos y bajo la extensión .sql.

Una vez esté creada, usamos el comando `psql -h localhost -d empresa -U empresa < empresa.sql`. Esto debe de hacerse dentro de la carpeta donde se encuentra el archivo de la base de datos.

¡IMPORTANTE! CAMBIAR LOS PERMISOS CON `SUDO CHMOD A+RWX`.

Pasamos ahora a instalar el paquete de postgresql de PHP. Para ello usamos el comando `sudo apt install php8.1-pgsql`. En realidad hemos cogido todos los del Moodle al final, lol.

Creamos un nuevo archivo .php en el cual vamos a crear la variable $pdo. En esa variable vamos a poner `new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');`.

`$sent = $pdo->query('select * from departamentos');` Esto sirve para crear una sentencia y "almacenar" todos los resultados que fueran a devolver dentro de una sentencia.
`$fila = $sent->fetch();` Fetch devuelve una fila. PDO::FETCH_OBJ convierte en objeto.
`//var_dump($fila);`
`print_r($fila);`


# JUEVES 13 DE OCTUBRE
Read commit
SERIALIZABLE
beginTransition
$pdo->query('SET TRANSACTION ISOLATION LEVEL SERIALIZABLE')
$pdo->query('LOCK TABLE departamentos IN SHARE MODE')

cuando las consultas son constantes, se usa query
si son parametrizadas, se usa prepare y execute.


# VIERNES 14 DE OCTUBRE

* Corregir errores de "empresa.sql"
* SQL: traslate.
* null puede ser tomado como ''. Entonces, para verificarlo en un if, se podría hacer con un != ''.


dinámica: prepare / execute
estática: - devuelve filas: query
          - *no* devuelve filas: exec


# LUNES 17 DE OCTUBRE

Hemos creado el *borrar.php*, además del *auxiliar.php*. Hemos creado funciones como **volver** con el header(location: index.php) y conectar() para así no repetir tanto las mismas líneas de código.

En código "puramente php" no es necesario hacer un return. En el caso de los headers, sí lo es. Ya que, en resumen, puede dar problemas en un futuro si no se hace correctamente. Se hace y coloca un return después de crearlo y nos olvidamos. 

El borrado lo hemos hecho mediante **POST** importante eso.

SQL ---- PHP
NULL -- nulll
bool -- bool
enteros

| SQL     | PHP    |
| ------- | ------ |
| NULL    | NULL   |
| bool    | bool   |
| enteros | int    |
| 'resto' | string |


# JUEVES 20 DE OCTUBRE

Filter validate.

Válido y útil para los input, valor int, etc. 

https://www.php.net/manual/en/book.filter

Debería de echarle un ojo. Es bastante necesario.


# VIERNES 21 DE OCTUBRE

filter_input
'options' => function($x) use (&$error) { ... }


# LUNES 24 DE OCTUBRE
- modificar.php 
* cambiar el set: update de las columnas que realmente hayan cambiado. 
  Por ejemplo, si solo se modifica los valores de codigo, solo se modificia codigo.
* obtener codigo - refactorizar

# MARTES 25 DE OCTUBRE

* sudo apt purge postgresql-14 
* sudo nano /etc/postgresql/15/main/postgresql.conf
  * busca 'PORT' y tienes que poner el valor "5432".
* sudo systemctl restart postgresql.service
* sudo -u postgres createuser -P empresa
* sudo -u postgres createdb -O empresa empresa

# JUEVES 27 DE OCTUBRE 

* Rutas relativas: Al principio la usaremos, pero más adelante la cambiaremos por absolutas. Seguramente cuando pasemos a Laravel.

* INTLDATEFORMATTER -- DAR FORMATO A LA FECHA
  * $df = new ItlDateFormatter('es_ES',
         IntlDateFormatter::LONG,
         IntlDateFormatter::NONE,
         'Europe/Madrid'
         );

  * DateTime::createFromFormat(
                            FMT_FECHA,
                            $fila['fecha_nac'],
                            new DateTimeZone('Europe/Madrid')
                        )->format('d-m-Y')


* NUMBERFORMATTER -- DAR FORMATO AL DINERO
  * $nf = new NumberFormatter("es_ES", NUMBERFORMATTER::CURRENCY);
  * $nf->format(1245) --> 1.245.00€


# VIERNES 28 DE OCTUBRE 

* preg_match
* checkdate
* Habría que echarle un ojo a las expresiones regulares. Es interesante saberlo para el tema de
validar por ejemplo la entrada de datos del salario o la fecha.
* 


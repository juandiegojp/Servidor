fopen
r
w
a (escritura por el final)
x 
c (escritura)
fread
fgetc
fgets
feof
rewind
file_get_contents
file


fwrite - Escribe dentro del archivo y devuelve los bytes escritos
fflush - Fuerza a escribir los datos del buffer en el archivo
stat - devuelve un array asociativo con información del archivo
filesize


chdir - cambia de directorio
getcwd - devuelve el directorio actual
scandir - enumera ficheros y directorios de la ruta especificada


is_int
is_float
number_format


round() - redondear con la precisión indicada
ceil - redondeo hacia arriba
floor - redondeo hacia abajo


abs - obtener número absoluto.
max - número más grande
min - número más pequeño
rand - número aleatorio

decbin
decbin
dechex
bindec

setcookie - Define una cookie
setcookie("nombre", "valor", time() + 12121212);
$_COOKIE
Para borrar un cookie, vale con dar el valor -1 al crearla.
setcookie("nombre", "valor", time() - 1);


session_id
session_start();
$_SESSION['nombre'] = ??
$_SESSION['valor'] = ??
session_destroy - destruir la sesión

mysqli_conect(...)
mysqli_select_db($conexion, "ususario");
mysqli_query

mysqli_fetch_row(mysqli_result $result) : mixed
- Reccore la tabla
- obtiene una fila de resultados y devuelve un array

msqli_error
- Muestra el último error de sql

## Clases
- Class
- This

class Prueba {
    public $nombre = "JDJP";
    public function mostrar_nombre() {
        echo $this -> $nombre;
    }
}

$instancia = new Prueba();
echo $instancia->nombre;
$instancia->mostrar_nombre();

get_class_vars - funciones de la clase.
get_class - nombre de la clase.

Las propiedades debe de ser PRIVADA y los métodos PÚBLICOS.

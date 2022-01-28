<?php

$documentRoot = getcwd();

//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');

define('DOMAIN', $_SERVER['HTTP_HOST']);

// $uri = $_SERVER["REQUEST_URI"];
// if(isset($uri) && $uri!==null){
//     $uri=substr($uri,1);
//     $uri = explode("/",$uri);
//     $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0]."/";
// }else{
//     $uri = null;
// }
// define("BASE_URL",$uri);



define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');

//LIBS
define("LIBS", BASE_PATH . '/src/libs');

//CONTROLLERS
define("CONTROLLERS", BASE_PATH . '/src/controllers');

//VIEWS
define("VIEWS", BASE_PATH . '/src/views');

//MODELS
define("MODELS", BASE_PATH . '/src/models');

//ENTITIES
define("ENTITIES", MODELS . '/src/entities');

//CSS
define('CSS', BASE_URL . '/public/assets/css');

//JS
define('JS', BASE_URL . '/public/assets/js');

// QUERIES
define("QUERIES", BASE_PATH . '/db');







//descoment to understand

// //$documentRoots = dirname(__FILE__);
// print(dirname(__FILE__));
// echo "<br>";
// echo "dirname";
// echo "<br>";
// echo "<br>";

// print_r(getcwd());
// echo "<br>";
// echo "getcwd()";
// echo "<br>";
// echo "<br>";

// //'HTTPS'Ofrece un valor no vacío si el script es pedido mediante el protocolo HTTPS.Nota: Tenga en cuenta que si se emplea ISAPI con IIS el valor será off si la petición no se ha realizado a través del protocolo HTTPS.
// print_r(PROTOCOL);
// echo "<br>";
// echo "if https or http";
// echo "<br>";
// echo "<br>";

// //'HTTP_HOST'Contenido de la cabecera Host: de la petición actual, si existe.
// print_r(DOMAIN);
// echo "<br>";
// echo "HTTP_HOST";
// echo "<br>";
// echo "<br>";

// print_r($_SERVER['PHP_SELF']);
// //'PHP_SELF'El nombre del archivo de script ejecutándose actualmente, relativa al directorio raíz de documentos del servidor. Por ejemplo, el valor de $_SERVER['PHP_SELF'] en un script ejecutado en la dirección http://example.com/foo/bar.php será /foo/bar.php. La constante __FILE__ contiene la ruta completa del fichero actual, incluyendo el nombre del archivo. Si PHP se está ejecutando como un proceso de línea de comando, esta variable es el nombre del script desde PHP 4.3.0. En anteriores versiones no estaba disponible.
// echo "<br>";
// echo "PHP_SELF";
// echo "<br>";
// echo "<br>";

// print_r(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES));
// //htmlspecialchars — Convierte caracteres especiales en entidades HTML
// echo "<br>";
// echo "htmlspecialchars";
// echo "<br>";
// echo "<br>";

// //dirname — Devuelve la ruta de un directorio padre (path, levels) levels:El número de directorios padre a subir.
// print_r(dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES)));
// echo "<br>";
// echo "dirname";
// echo "<br>";
// echo "<br>";

// //just an array
// print_r(array('\\', "index.php", "index.html"));
// echo "<br>";
// echo "array search for str_replace";
// echo "<br>";
// echo "<br>";

// //str_replace — Reemplaza todas las apariciones del string buscado con el string de reemplazo (search, replace, subject, count)
// print_r(str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))));
// echo "<br>";
// echo "str_replace";
// echo "<br>";
// echo "<br>";

// //preg_replace — Realiza una búsqueda y sustitución de una expresión regular (pattern, replacement,subject,limit,count)
// print_r(preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) );
// echo "<br>";
// echo "preg_replace";
// echo "<br>";
// echo "<br>";


//print_r(BASE_URL);
// echo "<br>";
// echo "base url";
// echo "<br>";
// echo "<br>";


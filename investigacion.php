<?php
echo "<h1> Lista de funciones  </h1>";
echo "<br>";
echo "<ol>";

echo "<li>";
echo "strlen(): Devuelve la longitud de una cadena. Algunos parámetros que puede aceptar: (string y string como variable)";
echo "<br>";
echo "<img src = 'https://pimylifeup.com/wp-content/uploads/2022/06/PHP-strlen-1.jpg'>";
echo "</li>";

echo "<li>";
echo "strpos(): Encuentra la posición de la primera ocurrencia de una subcadena en una cadena. Algunos parámetros que puede aceptar: (string haystack, string needle [, int offset = 0 ]), (el simbolo de dolar lo omito por problemas de sintaxi)";
echo "<br>";
echo "<img src = 'https://www.simplilearn.com/ice9/free_resources_article_thumb/strpos_in_PHP_4.png'>";
echo "</li>";

echo "<li>";
echo "implode(): Une elementos de un array en una sola cadena. Algunos parámetros que puede aceptar: (string glue, array pieces)";
echo "<br>";
echo "<img src='https://pimylifeup.com/wp-content/uploads/2022/04/php-implode-function-Thumbnail.png'>";
echo "</li>";

echo "<li>";
echo "explode(): Divide una cadena en un array de cadenas mediante un delimitador.Algunos parámetros que puede aceptar: (string delimiter, string string [, int limit = PHP_INT_MAX ])";
echo "<br>";
echo "<img src='https://pimylifeup.com/wp-content/uploads/2022/04/php-explode-function-thumbnail.png'>";
echo "</li>";

echo "<li>";
echo "substr(): Devuelve una parte de una cadena. Algunos parámetros que puede aceptar: (string string , int start [, int length ] )";
echo "<br>";
echo "<img src='https://pimylifeup.com/wp-content/uploads/2022/05/PHP-substr-function-Thumbnail-NoWM.png'>";
echo "</li>";

echo "<li>";
echo "array_push(): Inserta uno o más elementos al final de un array.Algunos parámetros que puede aceptar: (array array , mixed value1 [, mixed $... ] )";
echo "<br>";
echo "<img src='https://www.phpglossary.com/wp-content/uploads/2017/10/array-push.png'>";
echo "</li>";

echo "<li>";
echo "array_pop(): Extrae y devuelve el último elemento de un array.  Algunos parámetros que puede aceptar: (array & array como variable)";
echo "<br>";
echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTVZWWUg2v33d1JWaFQLqujUQx_A7iNAjHpvbyU0RCey0jnsqPsp5wfTdHGL6SA13mUs8&usqp=CAU'>";
echo "</li>";

echo "<li>";
echo "file_get_contents(): Lee un archivo completo en una cadena.Algunos parámetros que puede aceptar: (string filename [, bool use_include_path = FALSE [, resource context [, int offset = -1 [, int maxlen ]]]] )";
echo "<br>";
echo "<img src='https://uploads-ssl.webflow.com/61a26c63ec52ccd54d5bb476/61c12237f2ba5cd34a5a5562_ljmLpSzBRUEqokiG8nxvFlhexAtFLV5w_-g11QXBxCqQEFNOLEdjgP9X11PfU-HW7K1ZONIPBlJd-13SABFb1Ws1pZXkv1IeJVnKHiZuzhv1LddbbuW2v_V5r4XnNwdnc32eGNru.png'>";
echo "</li>";

echo "<li>";
echo "json_encode(): Convierte una variable de PHP a su representación JSON. Algunos parámetros que puede aceptar: (mixed value [, int options = 0 [, int depth = 512 ]] )";
echo "<br>";
echo "<img src='image9.png'>";
echo "</li>";

echo "<li>";
echo "json_decode(): Convierte una cadena JSON en una variable de PHP. Algunos parámetros que puede aceptar: (string json [, bool assoc = FALSE [, int depth = 512 [, int options = 0 ]]] )";
echo "<br>";
echo "<img src='image10.png'>";
echo "</li>";

echo "</ol>";
?>
<?php
$cadena = "hola mundo";
$cadena2 = 'leo messi';
$array = ["hola", "buenas", "tardes"];

// 1. longitud de caracteres --> strlen()


echo strlen($cadena);

// 2. strpos
echo strpos($cadena, "mundo");

// 3. str_replace
echo str_replace("mundo", "Barcelona", $cadena);

// 4. strtolower
echo strtolower($cadena);

// 5. strtoupper
echo strtoupper($cadena);

// 6. ucfirst
echo ucfirst($cadena);

// 7. ucwords
echo ucwords($cadena);

// 8. trim
// Elimina espacios en blanco al principio y final de una cadena
echo '<br>';
echo trim($cadena2);

// 9. substr()
// obtiene una parte de una cadena
echo substr($cadena2, 4, 4);

// 10. Implode
echo implode($array);

// 11. Explode
$cadena = "Hola,Mundo,PHP";
$array = explode(",", $cadena);
echo "<br>";
print_r($array);
foreach($array as $a){
    echo $a;
}

// 12. in_array() mira si existe o no en un array

$os = ["Mac" , "NT", "Irix", "Linux"];
echo "<br>";
if (in_array("Irix", $os)){
    echo "Existe Irix";
}

// 13. array_search
// busca un valor en un array y devuelve la clave correspondiente. si no está saca false
$arraymap = ["1", "2", "3", "4"];
$resultado = array_map(function($numero) {
    return $numero * 2;
}, $arraymap);
echo "<br>";
print_r($resultado); // Resultado: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8)

// 15. array_filter()
$arrayfilter = [1,2,3,4,5,6,7,8];
$resultado = array_filter($arrayfilter, function($n){
    return $n %2 == 0;
});

echo "<br>";
print_r($resultado);

?>
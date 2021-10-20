<?php


function fechaActual()
{
    date_default_timezone_set("Europe/Madrid");
    return Date("r");
}

function println($value)
{

    echo($value);
}

function aleatorio($min, $max)
{
    echo(rand($min, $max));
}

function dia()
{
    $t = date('d-m-Y');
    return date("D", strtotime($t));
}

function mes()
{
    $t = date('d-m-Y');
    return date("M", strtotime($t));
}

function operaciones($v1, $v2, $oper)
{

    switch ($oper) {
        case "+":
            $result = $v1 + $v2;
            break;
        case "-":
            $result = $v1 - $v2;
            break;
        case "*":
            $result = $v1 * $v2;
            break;
        case "/":
            $result = $v1 / $v2;
            break;
        default:
            $result = $v1 + $v2;
    }

    return $result;
}

function sumatorio(array $arr)
{

    $total = 0;
    foreach ($arr as $value) {
        $total += $value;
    }

    return $total;
}

function producto_interativo($v1, $v2)
{

    return $v1 * $v2;
}

function producto_recursivo($v1, $v2)
{
    return producto_recursivo($v1, $v2);
}

function validarEdad($valor)
{

    if ($valor > 18 && $valor < 85) {
        return "valor logico";
    }
}

function media(array $arr)
{

    $total = 0;
    foreach ($arr as $value) {
        $total += $value;
    }

    return $total / count($arr);
}

function tiempo($minuto, $hora)
{
    while ($minuto < 60) {
        $minuto++;
        tiempo($minuto, $hora);
    }
    $hora++;
    return $hora;
}

function manipulaccionDeCadanas($cadena)
{

    echo "Cantidad de caracteres: " . strlen($cadena) . "\n";
    echo "Cantidad de caracteres sin contar espacios: " . strlen($cadena) . "\n";
    echo "En majusculas: " . strtoupper($cadena) . "\n";
    echo "Longitud de la cadena: " . strlen($cadena) . "\n";
    echo "Tras de la palabra las: " . substr($cadena, "las") . "\n";
    echo "Position de la palabra relativo: " . strpos($cadena, "relativo", 0) . "\n";
    echo "Subcadena de 8 a 15: " . substr($cadena, "8", 15) . "\n";
    echo "Subcadena de 8 a 15: " . str_replace($cadena, "capitulo", "tema") . "\n";
    echo "El numeros de las palabras en la cadena: " . str_word_count($cadena) . "\n";

}

function cadenasSonIguales($string1, $string2)
{

    if (strcasecmp($string1, $string2)) {
        echo "SI";
    } else {
        echo "NO";
    }
}

function mostrarParteDecimal($valor)
{

    $array = explode(".", $valor);
    $init = $array[0];
    $fin = $array[1] > 5 ? $array[1] : $array[1] . "0";
    echo "#" . $init . "" . $fin;
}

function revuelveCadenaConLongitud30($parametro)
{
    if (strlen($parametro) > 0) {
        return substr($parametro, 0, 29);
    }
}

function serialCheck($serial)
{
    $array = explode("-", $serial);

    if ($array[0] % 2 == 0 && $array[2] == 0) {
        echo "PRIMERO Y TERCERO SON PARES";
    } else {
        echo "PRIMERO Y TERCERO NON SON PARES";
    }

    if ($array[0] % 2 != 0 && $array[2] != 0) {
        echo "SECUNDO Y CUARTO SON IMPARES";
    } else {
        echo "SECUNDO Y CUARTO NON SON IMPARES";
    }
}

?>

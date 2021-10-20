<?php require_once("funlib.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Title</title>
</head>
<body>

<h1><?php

    echo(fechaActual());
    ?></h1>
<p>
<table>
    <tr>
        <th>Ejercicio1</th>
    </tr>
    <tr>
        <td><?php println("Denis Kalenga"); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio2</th>
    </tr>
    <tr>
        <td><?php aleatorio(1, 100); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio3</th>
    </tr>
    <tr>
        <td><?php echo(dia()); ?></td>
    </tr>
    <tr>
        <td><?php echo(mes()); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio4</th>
    </tr>
    <tr>
        <td><?php echo(operaciones(1, 2, "+")); ?></td>
    </tr>
    <tr>
        <td><?php echo(operaciones(1, 2, "-")); ?></td>
    </tr>
    <tr>
        <td><?php echo(operaciones(1, 2, "*")); ?></td>
    </tr>
    <tr>
        <td><?php echo(operaciones(1, 2, "/")); ?></td>
    </tr>
    <tr>
        <td><?php echo(operaciones(1, 2, "!")); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio5</th>
    </tr>
    <tr>
        <td><?php echo(sumatorio([1, 2, 3])); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio6</th>
    </tr>
    <tr>
        <td><?php echo(producto_interativo(1, 3)); ?></td>
    </tr>
    <tr>
        <td><?php echo(producto_recursivo(2, 4)); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio7</th>
    </tr>
    <tr>
        <td><?php echo(validarEdad(45)); ?></td>
    </tr>
    <tr>
        <td><?php echo(validarEdad(15)); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio8</th>
    </tr>
    <tr>
        <td><?php echo(media([1, 2, 3, 7, 8, 10])); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Ejercicio9</th>
    </tr>
    <tr>
        <td><?php echo(tiempo(0, 1)); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Manipulation de las cadenas</th>
    </tr>
    <tr>
        <td><?php manipulaccionDeCadanas("Estoy estudiando el capitulo relativo a las cadenas de PHP"); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Cadenas son iguales?</th>
    </tr>
    <tr>
        <td><?php cadenasSonIguales("Maman", "Maman"); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Mostrar la parte decimale?</th>
    </tr>
    <tr>
        <td><?php mostrarParteDecimal(15.6); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Mostrar la parte decimale?</th>
    </tr>
    <tr>
        <td><?php revuelveCadenaConLongitud30("I am testig this to to nsbghbhdd ing ghsbajsjshjkdfbtna"); ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>Serial CHeck</th>
    </tr>
    <tr>
        <td><?php serialCheck("02394-45677-30950-34503"); ?></td>
    </tr>
</table>
</p>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crea dos funciones producto_iterativo() y producto_recursivo() que requieran
ambas dos parámetros y devuelvan el producto de los valores dados. Se requiere que
la primera calcule la multiplicación mediante sumas, y que la función segunda lo haga
mediante llamadas a sí misma.  -->

<?php
require_once 'funlib.php';
echo producto_iterativo(5, 3) . '<br>';
echo producto_recursivo(5, 3) . '<br>';
?>
</body>
</html>
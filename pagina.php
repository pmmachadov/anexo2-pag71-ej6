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
    include 'funlib.php';
    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo2-pag71-ej6" . "</td>";
    echo "</tr>";
    echo "<td> " . "echo producto_iterativo(5, 3) . '<br>';
    echo producto_recursivo(5, 3) . '<br>';" . "</td>";
    echo "<td> " . "producto_iterativo
    15    
    producto_recursivo
    15" . "</td>";
    echo "</tr>";
    echo "</table>";
?>

<?php
require_once 'funlib.php';
echo producto_iterativo(5, 3) . '<br>';
echo producto_recursivo(5, 3) . '<br>';
?>
</body>
</html>
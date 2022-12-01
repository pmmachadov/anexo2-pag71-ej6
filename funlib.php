<!-- Crea dos funciones producto_iterativo() y producto_recursivo() que requieran
ambas dos parámetros y devuelvan el producto de los valores dados. Se requiere que
la primera calcule la multiplicación mediante sumas, y que la función segunda lo haga
mediante llamadas a sí misma.  -->

<?php

function producto_iterativo($a, $b) { // $a = 5, $b = 3
    $resultado = 0; // $resultado = 0
    for ($i = 0; $i < $b; $i++) { // $i = 0, $i < 3, $i++ = 1
        $resultado += $a; // $resultado = 0 + 5 = 5
    }
    return $resultado; // return 5
}

function producto_recursivo($a, $b) { // 5, 3
    if ($b == 0) { // 3 == 0
        return 0; // 0
    } else { // 3 != 0
        return $a + producto_recursivo($a, $b - 1); // 5 + producto_recursivo(5, 2)
    }
}
// Esta funcion funciona de la siguiente manera: El primer if comprueba si el valor de $b es 0, si es 0, devuelve 0, si no, devuelve el valor de $a + producto_recursivo($a, $b - 1), que es 5 + producto_recursivo(5, 2), que es 5 + producto_recursivo(5, 1), que es 5 + producto_recursivo(5, 0), que es 5 + 0, que es 5.

// El segundo if comprueba si el valor de $b es 0, si es 0, devuelve 0, si no, devuelve el valor de $a + producto_recursivo($a, $b - 1), que es 5 + producto_recursivo(5, 1), que es 5 + producto_recursivo(5, 0), que es 5 + 0, que es 5.

echo "producto_iterativo" . "<br>" . producto_iterativo(5, 3) . "<br>";
echo "<br>" . "producto_recursivo" . "<br>" . producto_recursivo(5, 3) . "<br>";

?>
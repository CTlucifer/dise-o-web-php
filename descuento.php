<?php
#Sistema de Descuentos con Condicionales Simples en PHP
#Definicion de variables
$monto = -1;

#inicializar variables
$descuento = 0;
$descuento_monto = 0;
$descuento_total = 0;

if ($monto < 0)
{
    echo "El monto no puede ser negativo.";
}
exit;
else {
    if ($monto < 100)
{
    $descuento = 0;
    $descuento_monto = $monto * $descuento;
    $descuento_total = $monto;
    $descuento_total = $monto - $descuento_monto;
    echo "El monto es menor a 100, no se aplica descuento. El monto total es: $descuento_total";
}
elseif ($monto >= 100 && $monto <= 500)
{
    $descuento = 0.10;
    $descuento_monto = $monto * $descuento;
    $descuento_total = $monto - $descuento_monto;
    echo "El monto es mayor a 100 y menor a 500, se aplica un descuento del 10%. El monto total es: $descuento_total";
}
elseif ($monto > 500 && $monto <= 1000)
{
    $descuento = 0.20;
    $descuento_monto = $monto * $descuento;
    $descuento_total = $monto - $descuento_monto;
    echo "El monto es mayor a 500 y menor a 1000, se aplica un descuento del 20%. El monto total es: $descuento_total";
}
elseif ($monto > 1000)
{
    $descuento = 0.30;
    $descuento_monto = $monto * $descuento;
    $descuento_total = $monto - $descuento_monto;
    echo "El monto es mayor a 1000, se aplica un descuento del 30%. El monto total es: $descuento_total";
}
}

#mostrar los resultados
$descuento_porcentaje = $descuento * 100;
echo "<br>El monto original es: $monto";
echo "<br>El descuento aplicado es: $descuento_porcentaje%";
echo "<br>El monto con descuento es: $descuento_monto";
?>

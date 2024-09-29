<?php

require 'vendor/autoload.php';

use Builder\OrderBuilder;
use Builder\Director;

// Crear el builder
$orderBuilder = new OrderBuilder();

// Crear el director
$director = new Director();
$director->setBuilder($orderBuilder);

// Crear una orden paso a paso
$order = $director->buildOrder("Daniel", "123 Calle Principal", ["item 1", "item 2"], 100, "tarjeta de crédito");

// Mostrar el resumen
echo $order->summary();

<?php

class Order {
    private $customerName;
    private $shippingAddress;
    private $items;
    private $totalAmount;
    private $paymentMethod;

    public function __construct($customerName, $shippingAddress, $items, $totalAmount, $paymentMethod) {
        $this->customerName = $customerName;
        $this->shippingAddress = $shippingAddress;
        $this->items = $items;
        $this->totalAmount = $totalAmount;
        $this->paymentMethod = $paymentMethod;
    }

    public function summary() {
        return "Pedido para $this->customerName, enviado a $this->shippingAddress, con un total de $this->totalAmount usando $this->paymentMethod.\n";
    }
}

// Crear el pedido de una vez
$order = new Order("Daniel", "123 Calle Principal", ["item 1", "item 2"], 100, "tarjeta de crédito");
echo $order->summary();

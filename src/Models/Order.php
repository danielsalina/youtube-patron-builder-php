<?php

namespace Models;

class Order {
    private $customerName;
    private $shippingAddress;
    private $items;
    private $totalAmount;
    private $paymentMethod;

    // Setters
    public function setCustomerName($name) {
        $this->customerName = $name;
    }

    public function setShippingAddress($address) {
        $this->shippingAddress = $address;
    }

    public function setItems($items) {
        $this->items = $items;
    }

    public function setTotalAmount($amount) {
        $this->totalAmount = $amount;
    }

    public function setPaymentMethod($method) {
        $this->paymentMethod = $method;
    }

    public function summary() {
        return "Pedido de los productos {$this->items[0]} y {$this->items[1]} para el cliente $this->customerName, enviado a $this->shippingAddress, con un total de $this->totalAmount usando $this->paymentMethod.\n";
    }
}

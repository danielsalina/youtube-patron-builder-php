<?php

namespace Builder;

use Models\Order;

class OrderBuilder {
    private $order;

    public function __construct() {
        $this->order = new Order();
    }
    

    public function setCustomerName($name) {
        $this->order->setCustomerName($name);
        return $this; // Devuelve el mismo objeto para encadenar métodos
    }

    public function setShippingAddress($address) {
        $this->order->setShippingAddress($address);
        return $this;
    }

    public function setItems($items) {
        $this->order->setItems($items);
        return $this;
    }

    public function setTotalAmount($amount) {
        $this->order->setTotalAmount($amount);
        return $this;
    }

    public function setPaymentMethod($method) {
        $this->order->setPaymentMethod($method);
        return $this;
    }

    public function build() {
        return $this->order; // Devuelve el objeto completamente construido
    }
}

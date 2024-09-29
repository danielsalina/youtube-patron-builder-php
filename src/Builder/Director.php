<?php

namespace Builder;

class Director {
    private $builder;

    public function setBuilder(OrderBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildOrder($name, $address, $items, $amount, $method) {
        return $this->builder
            ->setCustomerName($name)
            ->setShippingAddress($address)
            ->setItems($items)
            ->setTotalAmount($amount)
            ->setPaymentMethod($method)
            ->build();
    }
}

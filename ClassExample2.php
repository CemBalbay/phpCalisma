<?php

class Work
{
    public $address;

    public $area;

    public $workers;

    function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    function setArea($area) {
        $this->area = $area;
        return $this;
    }

    function setWorkers($workers) {
        $this->workers = $workers;
        return $this;
    }
}

$work = new Work();
var_dump($work);

$work->setAddress('Yamaç Sokak No:1/3')->setArea(240)->setWorkers(50);
var_dump($work);

$work2 = new Work();
var_dump($work2);

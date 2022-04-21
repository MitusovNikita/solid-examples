<?php
// 4 Принцип разделения интерфейса
// разбиваем 1 интерфейс с 3 методами на 3 с 1м

interface ICarTransformer {
    public function toCar();
}

interface IPlaneTransformer {
    public function toPlane();
}

interface IShipTransformer {
    public function toShip();
}

class SuperTransformer implements ICarTransformer, IPlaneTransformer, IShipTransformer {
    public function toCar()
    {
    }
    public function toPlane()
    {
    }
    public function toShip()
    {
    }
}

class CarTransformer implements ICarTransformer {
    public function toCar(){
        echo 'transform to car';
    }
}
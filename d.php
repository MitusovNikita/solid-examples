<?php
// 5 Принцип инверсии зависимостей
// зависимости не должны строиться относительно абстракция а не деталей (классов) (как highRankingMale)

class lowRankingMale {
    public function eat() {
        $wife = new Wife();
        $food = $wife->getFood();
        // ... eat
    }
}

class averageRankingMale {

    private $wife;

    public function __construct(Wife $wife) {
        $this->wife = $wife;
    }

    public function eat() {
        $food = $this->wife->getFood();
        // ... eat
    }
}

class highRankingMale {

    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider) {
        $this->foodProvider = $foodProvider;
    }

    public function eat() {
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}

interface IFoodProvider {
    public function getFood();
}

class Restaurant implements IFoodProvider {
    public function getFood() {
        $food = true;
        return $food;
    }
}

class Wife implements IFoodProvider{
    public function getFood() {
        $food = true;
        return $food;
    }
}
<?php

class Car {
    private $model;
    public function setModel($model) {
        $this->model = $model;
    }
    public function getModel() {
        return $this->model;
    }
}

$myCar = new Car();
$myCar->setModel('Tesla Model S');

echo $myCar->getModel();
?>
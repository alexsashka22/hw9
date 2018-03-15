<?php 
    class CarClass {
        public $name;
        public $speed;
        public $color = 'Green';
        public $model;
        
        public function getSpeedStart(){
            this->speed = 100;
        }
    }

$car1 = new CarClass();
echo $car1->name = 'BMW';
echo $car1->speed = '160';
echo $car1->color;

$car2 = new CarClass();
echo $car2->name = 'ВАЗ';
$car2->speed = 120;
echo $car2->getSpeedStart();

    class TvClass {
        public $name;
        public $color = 'Black';
        public $material = 'Plastic'
        
        public function changeColor($color){
            this->color = $color;
        }
    }

$tv1 = new TvClass();
echo $tv1->name = 'LG';
echo $tv1->color;
echo $tv1->material;

$tv2 = new TvClass();
echo $tv2->name = 'SAMSUNG';
echo $tv2->changeColor('Grey');
echo $tv2->material;

    class Pen {
        public $material = wood;
        public $ink = 'Blue';
        
        public function setColor () {
            $color = this->color;
        }
    }

$pen1 = new Pen();
echo $pen1->ink;
echo $pen1->color;
echo $pen1->material;

$pen2 = new Pen();
echo $pen2->ink;
$pen2->setColor();
echo $pen2->color;
echo $pen2->material;

    class Duck {
        public $animal = 'Bird';
        public $sex = 'Female'
        public $age;
        
        public function setAge () {
            if (this->age > 12) {
                return 'Утке осталось недолго'
            }
        }
    }
$duck1 = new Duck();
$duck1->setAge();
echo $duck1->age = 13;
echo $duck1->sex;

$duck2 = new Duck();
echo $duck2->$animal;
echo $duck2->$age = 5;


    class Product {
        public $material;
        public $category;
        public $name;
        
        public function setColor () {
            $color = this->color;
        }
    }
$product1 = new Product();
echo $product1->ink;
echo $product1->color;
echo $product1->material;

$product2 = new Product();
echo $product2->ink;
$product2->setColor();
echo $product2->color;
echo $product2->material;

?>
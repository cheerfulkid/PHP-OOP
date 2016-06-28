<?php

//echo "哈囉～<br>";

class Cat {

//class 封裝

    public $name; //屬性
    protected $position;

    public function __construct($name) {
        //function = 方法，__construct = 建構子
        $this->name = $name;
        //-> = 使用物件的屬性或方法
        $this->position = ['x'=>0,'y'=>0];
    }

    public function moveTo($x, $y) {
        $this->position['x'] = $x;
        $this->position['y'] = $y;
        return $this->position;
    }

    public function resetPosition() {
        $this->moveTo(0, 0);
    }

}

$pet = new Cat("Kitty");
//實體化成一個物件，指派給一個變數。 new = 實體化
echo $pet->name;
echo "<br>";
$pet->name = "Hello Kity";

$movePosition = $pet->moveTo(3,5);
echo "(" . $movePosition['x'] . " , " . $movePosition['y'] . ")";
echo "<br>";

$movePosition = $pet->resetPosition();
echo "(" . $movePosition['x'] . " , " . $movePosition['y'] . ")";
?>
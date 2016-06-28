<?php
    class Dog
    {
        public $name;
        protected $position;
        
        public function __construct($name) {
            $this -> name = $name;
            $this -> position = ['x' => 0, 'y' => 0];
        }
        
        public function moveTo($x, $y){
            $this -> position['x'] = $x;
            $this -> position['y'] = $y;
            
            return $this -> position;
        }
        
        public function resetPosition(){
            $this -> moveTo(0,0);
            return $this -> position;
        }
    }
    
    $pet = new Dog("Snoopy");
    
    echo $pet -> name;
    echo "<br>";
    $pet -> name = "Smile Snoopy";
    echo $pet -> name;
    echo "<br>";
    
    $movePosition = $pet -> moveTo(3,5);
    echo "(" . $movePosition['x'] . " , " . $movePosition['y'] . ")";
    echo "<br>";
    
    $movePosition = $pet -> moveTo(4,5);
    echo "(" . $movePosition['x'] . " , " . $movePosition['y'] . ")";
    echo "<br>";
    
//    $movePosition = $pet -> resetPosition();
//    echo "(" . $movePosition['x'] . " , " . $movePosition['y'] . ")";
    
    echo "(" . $pet -> position['x'] . ", " . $pet -> position['y'] . ")"; // 因為 position 是 protected，無法直接觀看
    echo "<br>";
    
// 多註解
?>
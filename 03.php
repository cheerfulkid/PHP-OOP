<?php
    class Dog
    {
        protected $name;
        protected $position;
        
        public function __construct($name) {
            $this -> name = $name;
            $this -> position = ['x' => 0, 'y' => 0];
        }
        
        public function moveTo($x, $y){
            $this -> position['x'] += $x; // 讓每次移動都能做累加
            $this -> position['y'] += $y; // 讓每次移動都能做累加
            
            return $this -> position;
        }
        
        public function resetPosition(){
            $this -> moveTo(0,0);
            return $this -> position;
        }
        
        public function setName($name)
        {
            $this -> name = $name;
        }
        
        public function getName()
        {
            return $this -> name;
        }
    }
    
    $pet = new Dog("Snoopy"); 
    
    echo $pet -> getName();  
    
    echo "<br>";
    $pet -> setName("Smile Snoopy"); // 不建議直接用 public 屬性做存取管理；改為用 protected 屬性及 getter / setter
//    echo $pet -> name;
    echo $pet -> getName();
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
    
?>
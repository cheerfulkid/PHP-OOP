<?php
    class Animal
    {
      private $animalType;
      protected $position;
      
      public function __construct($animalType) {
          $this -> animalType = $animalType;
          $this -> position = ['x' => 0, 'y' => 0];
      }
    }
    
    class Cat Extends Animal
    {
        protected $name;
    }
    
    class Dog Extends Animal
    {
        protected $name;
    }
    
    class Whale Extends Animal
    {
        protected $name;
    }
?>
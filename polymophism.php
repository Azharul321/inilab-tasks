<?php
    class Animal {
        public function makeSound() {
          return "Generic animal sound";
        }
      }
      
      class Dog extends Animal {
        //Override
        public function makeSound() {
          return "Woof";
        }
      }
      
      class Cat extends Animal {
        //Override
        public function makeSound() {
          return "Meow";
        }
      }
      
      class Bird extends Animal {
        //Override
        public function makeSound() {
          return "Tweet";
        }
      }

      $cat = new Cat;
      $dog = new Dog;
      $bird = new Bird;

      echo "The cat sound is :".$cat->makeSound()."<br>";
      echo "The dog sound is :".$dog->makeSound()."<br>";
      echo "The bird sound is :".$bird->makeSound();



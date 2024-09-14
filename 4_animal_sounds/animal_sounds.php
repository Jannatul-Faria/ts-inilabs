<?php
 class animal{
    public function makeSound(){
        echo "some animal sounds!";
    }
 }

 class Dog extends animal{
    public function makeSound()
    {
       echo "Bark Bark!" .  PHP_EOL;
    }
 }
 class Cat extends animal{
    public function makeSound(){
        echo "Meow meow!" . PHP_EOL;;
    }
 }

//  one way to get output:
 $dog = new Dog();
 $dog-> makeSound();
 $cat = new Cat();
 $cat-> makeSound();

 // another way:
 $animals=[new dog(), new cat()];
 foreach($animals as $animal){
    $animal->makeSound();
 }

?>
<?php
class Animal{
  public function greets($animal){
    return $animal->greet();

  }
}

class Cat extends Animal{
    public function greet(){
        return "Hello Cat.";
    }
}

class Dog extends Animal{
    public function greet(){
        return "Hello Dog.";
    }
}
$Cat = new Cat();
$animal = new animal ;
echo $animal->greets($Cat); 
// echo $Cat->greet();
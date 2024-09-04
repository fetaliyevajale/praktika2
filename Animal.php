<?php
class Animal{
    
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
echo $cat->greet();
<?php
//1) Create an abstract class called "Animal". It should have one 
//abstract function "speak" that requires no arguments and expects a return type of a string.

//2) Create another class called "Dog" which extends the class 
//"Animal". Implement the "speak" function and have it return the string "woof".

//3) Get an instantiated instance of the class "Dog". Call the
//function/method "speak" on the instantiated instance and print the result.

abstract class Animal {
    abstract public function speak() : string;
}

class Dog extends Animal{
    //implement speak function and return "woof"
    public function speak() : string {
        return "Woof! I'm a dog";
    }
}

$chewy = new Dog();
echo $chewy->speak();
echo "\n";
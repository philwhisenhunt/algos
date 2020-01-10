<?php
abstract class Animal{
    abstract public function speak() : string;
}

class Dog extends Animal{
    //why extend verses implement?
    public function speak() : string {
        return "woof";
    }
}
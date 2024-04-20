<?php

abstract class Pet {
  abstract public function reaction();
}

class PetshopCustomer {
  public function touch(Pet $pet) {
    $pet->reaction();
  }
}

class Dog extends Pet {
  public function reaction() {
    echo "Bark!";
  }
}

class Cat extends Pet {
  public function reaction() {
    echo "Meow!";
  }
}

$petshopCustomer = new PetshopCustomer();
$petshopCustomer->touch(new Dog());
$petshopCustomer->touch(new Cat());
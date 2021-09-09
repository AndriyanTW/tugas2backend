<?php
//class
class Fruit {

//interence
  public $name;
  public $harga;

//contruk
  public function __construct($name, $harga) {
    $this->name = $name;
    $this->harga = $harga;
  }

  //destruk
  function __destruct() {
    echo "lebih mahal strawberry {$this->name}.";
    echo "<br>";
  }
  public function intro() {
    echo "apel dan {$this->name} harganya adalah {$this->harga}.";
  }
}
class Strawberry extends Fruit {
  public function message() {
    echo "berapa harga strawberry dan apel? ";
    echo "<br>";
  }
}

//statis propety
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
echo "<br>";

//interable
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
    echo "<br>";
  }
}

//interfaces
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "welcome";
    echo "<br>";
  }
}

class greeting {
  public static function welcome() {
    echo "SELAMAT DATANG";
    echo "<br>";
  }
}

// Call static method
greeting::welcome();

$animal = new Cat();
$animal->makeSound();
$arr = ["pagi", "siang", "malam"];
printIterable($arr);
$apple = new Fruit("Apel","1000");
$strawberry = new Strawberry("Strawberry", "2000");
$strawberry->message();
$strawberry->intro();
?>
<?php

class parents
{
    public $name, $age;
    public function put($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

}

class child extends parents
{
    public function display()
    {
        echo "My name is " . $this->name . " and I am " . $this->age . " years old.\n";
    }
}

// $obj1 = new parents();
// $obj1->put("Emon",23);


$obj2 = new child();
$obj2->put("Emon",23);
$obj2->display();
?>
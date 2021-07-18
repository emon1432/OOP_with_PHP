<?php

class calculation{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a+$this->b;
        return $this->c;
    }
    function sub(){
        $this->c=$this->a- $this->b;
        return $this->c;
    }
}

$obj1 = new calculation;
$obj2 = new calculation;
$obj2->a = 30;
$obj1->a = 30;
$obj1->b = 10;
$obj2->b = 30;

echo $obj1->sum()."\n";
echo $obj1->sub()."\n";

echo $obj2->sum()."\n";
echo $obj2->sub()."\n";


?>
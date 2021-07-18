<?php
class A
{
    public $name, $roll;
    function __construct($n, $r)
    {
        $this->name = $n;
        $this->roll = $r;
    }
}
class B extends A
{ 
    function display() 
    {
        echo "My name is : " . $this->name . "\nMy roll no : " . $this->roll . "\n";
    }
}
$obj1 = new B("Emon",18038);
$obj1-> display();
?>
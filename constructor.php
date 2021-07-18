<?php
class students
{
    public $name, $roll;
    function __construct($n = "", $r="0")
    {
        $this->name = $n;
        $this->roll = $r;
    }
    function display()
    {
        return "My name is : " . $this->name . "\nMy roll no : " . $this->roll . "\n";
    }
}

$stu1 = new students("Emon", 18038);
echo $stu1->display();
?>
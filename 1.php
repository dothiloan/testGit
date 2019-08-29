<?php
class Student {
    var $name;
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        echo $this->name;
    }
}

class NewStudent extends Student{

}

$sv1 = new NewStudent();
$sv1->setName('Loan');
$sv1->getName();
<?php
class SinhVien {
    var $name;
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        echo $this->name;
    }
}


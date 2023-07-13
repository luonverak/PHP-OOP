<?php
    class People{
        public $id ;
        public $name;
        public $gender;
        public $address;
        public function __construct($id,$name,$gender,$address){
            $this->id      = $id;
            $this->name    = $name;
            $this->gender  = $gender;
            $this->address = $address;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function __toString(){
            return $this->id.' '.$this->name.' '.$this->gender.' '.$this->address;
        }
    }
    $people = new People(1001,'Sok','Male','PP');
    echo '<h1>'.$people.'</h1>';
?>
<?php
    class Data{
        protected $id;
        protected $name;
        protected $gender;
        public function __construct($id,$name,$gender){
            $this->id     = $id;
            $this->name   = $name;
            $this->gender = $gender;
        }
        public function __toString(){
            return $this->id.'  '.$this->name.'  '.$this->gender;
        }
    }
    interface InCome{
        public function bunus();
        public function totalIncome();
    }
    class Employee extends Data implements InCome{
        private $position;
        private $salary;
        private $hour;
        private $address;
        public function __construct($id,$name,$gender,$position,$salary,$hour,$address){
            Data::__construct($id,$name,$gender);
            $this->position = $position;
            $this->salary   = $salary;
            $this->hour     = $hour;
            $this->address  = $address;
        }
        public function bunus(){
            if($this->salary>0 && $this->salary<=300){
                $this->salary+=10;
            }else if($this->salary>300 && $this->salary<=400){
                $this->salary+=15;
            }else{
                $this->salary+=20;
            }
            return $this->salary;
        }
        public function totalIncome(){
            if($this->salary>=1 && $this->salary<=300){
                $total = $this->salary + (10*$this->hour);
            }else if($this->salary>300 && $this->salary<=500){
                $total = $this->salary + (15*$this->hour);
            }else if($this->salary>500 && $this->salary<=800){
                $total = $this->salary + (20*$this->hour);
            }
            return $total;
        }
        public function __toString(){
            return Data::__toString().'  '.$this->position.'  '.$this->salary.'  '.$this->address
            .'  '.$this->bunus().'  '.$this->totalIncome();
        }
    }
    $emp1 = new Employee(1,'Sok','Male','Web Dev',400,10,'Phnom penh');
    echo '<h1>'.$emp1.'</h1>';
    $emp2 = new Employee(2,'Nita','Female','App Dev',600,10,'Phnom penh');
    echo '<h1>'.$emp2.'</h1>';
?>
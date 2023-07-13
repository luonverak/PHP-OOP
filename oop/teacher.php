<?php
    abstract class ClassRoom{
        abstract function studentScore();
        abstract function studentAverage();
        abstract function studentGrade();
    }
    class RoomA extends ClassRoom{
        private $id;
        private $name;
        private $score_1;
        private $score_2;
        private $score_3;
        public function __construct($id,$name,$score_1,$score_2,$score_3){
            $this->id      = $id;
            $this->name    = $name;
            $this->score_1 = $score_1;
            $this->score_2 = $score_2;
            $this->score_3 = $score_3;
        }
        public function studentScore(){}
        public function studentAverage(){}
        public function studentGrade(){}
        public function __toString(){
            return $this->id.'  '.$this->name.'  '.$this->score_1.'  '.
            $this->score_2.'  '.$this->score_3.'  '.$this->studentScore()
            .'  '.$this->studentAverage().'  '.$this->studentGrade();
        }
    }
    $stu1 = new RoomA(1,'Koko',90,80,60);
?>
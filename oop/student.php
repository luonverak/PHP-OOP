<?php
    interface GPA{
        public function Total();
        public function Average();
        public function Grade();
    }
    class Student implements GPA{
        private $id;
        private $name;
        private $gender;
        private $score_1;
        private $score_2;
        private $score_3;
        public function __construct($id,$name,$gender,$score_1,$score_2,$score_3){
            $this->id      = $id;
            $this->name    = $name;
            $this->gender  = $gender;
            $this->score_1 = $score_1;
            $this->score_2 = $score_2;
            $this->score_3 = $score_3;
        }
        public function Total(){
            return $this->score_1 + $this->score_2 + $this->score_3;
        }
        public function Average(){
            return $this->Total()/3;
        }
        public function Grade(){
            $avg= $this->Average();
            if($avg>=90 && $avg<=100)
                $grade = 'A';
            else if($avg>=80 && $avg<90)
                $grade = 'B';
            else if($avg>=70 && $avg<80)
                $grade = 'C';
            else if($avg>=60 && $avg<70)
                $grade = 'D';
            else if($avg>=50 && $avg<60)
                $grade = 'E';
            else
                $grade = 'F';
            return $grade;
        }
        public function __toString(){
            return $this->id.' '.$this->name
            .' '.$this->gender.' '.$this->score_1.' '.$this->score_2.' '.$this->score_3.' '
            .$this->Total().' '.$this->Average().' '.$this->Grade();
        }
    }
    $student = new Student(101,'Sok','Male',90,80,70);
    echo '<h1>'.$student.'</h1>';
?>
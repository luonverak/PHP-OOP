<?php
    abstract class Welcome{
        abstract public function sayHello();
    }
    class Teacher extends Welcome{
        public function sayHello(){
            return '<h1>Hello Teacher</h1>';
        }
    }
    class Boss extends Welcome{
        public function sayHello(){
            return '<h1>Hello Boss</h1>';
        }
    }
    class Student1 extends Welcome{
        public function sayHello(){
            return '<h1>Hello Student</h1>';
        }
    }

    function showData($data){
        foreach($data as $temp){
            echo '<h1>'.$temp->sayHello().'</h1>';
        }
    }
    $data = [
        new Teacher(),
        new Boss(),
        new Student1()
    ];
    showData($data);
?>
<?php
    class Animale{
        public static function dog(){
            echo '<h1>My dog name micky!</h1>';
        }
        public static function nameAnimal($name){
            echo '<h1>My dog name '.$name.'!</h1>';
        }
    }
    Animale::dog();
    Animale::nameAnimal('Lucy');
?>
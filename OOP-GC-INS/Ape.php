<?php 
require_once("animal.php");

class Ape extends Animal{
    
   public function __construct($name){
    parent::__construct($name);
    }

    public function yell(){
        return "Auooo";
    }
}

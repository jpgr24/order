<?php

namespace AppBundle\Entity;
use AppBundle\Entity\creator;
use AppBundle\Entity\product;



/**
 * Using Design Pattern Factory Method https://en.wikipedia.org/wiki/Factory_method_pattern
 https://www.php.net/manual/es/language.oop5.inheritance.php
 */

 class order extends product{
    private $id;
    private $foodname;
   
    function set_id($id){$this->id=$id;}
    function set_foodname($name){
        $this->foodname=$name;

    }

    

    function get_foodname(){
        return $this->foodname;
    }

     function get_id(){
        return $this->id;
    }

     
  

}

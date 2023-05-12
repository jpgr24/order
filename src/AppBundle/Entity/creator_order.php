<?php

namespace AppBundle\Entity;
use AppBundle\Entity\creator;
use AppBundle\Entity\client;



/**
 * Using Design Pattern Factory Method https://en.wikipedia.org/wiki/Factory_method_pattern
 https://www.php.net/manual/es/language.oop5.inheritance.php
 */

 class creator_order extends creator{
 	var $id=0;	


    public function create($food_name){

        $Order=new order();
        $Order->set_id($this->id);
        $food_name=$food_name[0];
        $Order->set_foodname($food_name);
        $this->id++;
        return $Order;
    }
  

}

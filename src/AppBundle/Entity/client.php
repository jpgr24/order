<?php

namespace AppBundle\Entity;
use AppBundle\Entity\creator;
use AppBundle\Entity\product;



/**
 * Using Design Pattern Factory Method https://en.wikipedia.org/wiki/Factory_method_pattern
 https://www.php.net/manual/es/language.oop5.inheritance.php
 */

 class client extends product{
    private $id;
    private $name;
    private $lastname;
    private $phone;
    private $email;
    function set_id($id){$this->id=$id;}
    function set_name($name){
        $this->name=$name;

    }

    function set_lastname($lastname){
        $this->lastname=$lastname;
        
    }

    function set_phone($phone){
        $this->phone=$phone;
        
    }

    function set_email($email){
        $this->email=$email;
        
    }

    function get_name(){
        return $this->name;
    }

     function get_lastname(){
        return $this->lastname;
    }

     function get_phone(){
        return $this->phone;
    }

    function get_email(){
        return $this->email;
    }

    function get_id(){return $this->id;}
  

}

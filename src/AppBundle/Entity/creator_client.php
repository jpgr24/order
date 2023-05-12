<?php

namespace AppBundle\Entity;
use AppBundle\Entity\creator;
use AppBundle\Entity\client;




/**
 * Using Design Pattern Factory Method https://en.wikipedia.org/wiki/Factory_method_pattern
 https://www.php.net/manual/es/language.oop5.inheritance.php
 */

 class creator_client extends creator{
 		var $id=0;
        
    public function create($client_data=Array()){

        $Client=new client();
        $Client->set_id($this->id);
        $Client->set_name($client_data[0]);
        $Client->set_lastname($client_data[1]);
        $Client->set_phone($client_data[2]);
        $Client->set_email($client_data[3]);
        $this->id++;
        return $Client;
    }
  

}

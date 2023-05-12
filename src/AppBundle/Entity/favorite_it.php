<?php

namespace AppBundle\Entity;


/**
 * img
 */

 class favorite_it{
    
    
     /**
     * @var string
     */
    var $id;
    /**
     * @var string
     */
    

 
    /**
     * @var string
     */
    var $text;

 /**
     * Get id
     *
     
     /**
     * Set text
     *
     * @param string text
     *
     * @return about
     */

     
   

  
    function setId($id){
        $this->id=$id;
        return $this;
    }
    function setText($text){
        $this->text=$text;
        return $this;
    }
   function getId(){return $this->id;}

   function getText(){return $this->text;}
   


}

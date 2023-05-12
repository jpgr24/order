<?php

namespace AppBundle\Entity;


/**
 * img
 */

 class service{
    
    
    
    
    

 
   var $title='SERVICES & AREAS OF EXPERTISE:';
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

    
     public function getText(){
        $this->text=array();
        $xml=simplexml_load_file("Resources/data/services/services.xml") or die("Error: Cannot create object");
    for($i=0;$i<count($xml->item);$i++){
        $this->text[$i]=new service_it();
   
        $this->text[$i]=$this->text[$i]->setTitle($xml->item[$i]->title);
        $this->text[$i]=$this->text[$i]->setText($xml->item[$i]->text);
        $this->text[$i]=$this->text[$i]->setClass($xml->item[$i]->class);
    }
    return $this->text;


     }

   

   

    
    

    /**
     * Get link
     *
     * @return string
     */
    

    public function set_picture($picture){$this->picture=$picture;}
      public function get_picture()
    {
        return $this->picture;
    }

    public function setTitle($title){
        $this->title=$title;
        return $this;
    }
    public function getTitle(){
        return $this->title;
    }


}

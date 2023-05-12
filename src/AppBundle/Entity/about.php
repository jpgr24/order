<?php

namespace AppBundle\Entity;
use AppBundle\Entity\about_item;

/**
 * img
 */

 class about{
    
    
     /**
     * @var string
     */
    var $title='PETER, 49. OWNER/FOUNDER (1999)';
    /**
     * @var string
     */
    

 
    /**
     * @var string
     */
    var $picture='images/peterface-edited.jpg';
    var $text=array();
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
        
        $xml=simplexml_load_file("Resources/data/about/about.xml") or die("Error: Cannot create object");
    for($i=0;$i<count($xml->item);$i++){
        $this->text[$i]=new about_it();
   
    
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

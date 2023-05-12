<?php

namespace AppBundle\Entity;


/**
 * img
 */

 class socialmedia{
    
    
     /**
     * @var string
     */
    var $alt;
    /**
     * @var string
     */
    

 
    /**
     * @var string
     */
    var $link;

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

     
     var $image;

    function setAlt($alt){$this->alt=$alt;
     return $this;
    }

    function setLink($link){$this->link=$link;
     return $this;
    }
    function setImage($image){
        $this->image=$image;
        return $this;
    }
   function getAlt(){return $this->alt;}

   function getLink(){return $this->link;}
   function getImage(){return $this->image;}


}

<?php

namespace AppBundle\Entity;

/**
 * img
 */

 class about_it{
    
    
     /**
     * @var string
     */
    var $class;
    /**
     * @var string
     */
    var $text=array();

 /**

  /**
     * @var string
     */
    

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
    public function setText($text)
    {
       
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    
    

    /**
     * Get link
     *
     * @return string
     */
    

    public function setClass($class){
        $this->class=$class;
        return $this;
    }

    public function getClass(){return $this->class;}


}

<?php

namespace AppBundle\Entity;

/**
 * img
 */

 class menu{
    /**
     * @var int
     */
   var $id;
     /**
     * @var int
     */
    private $ident;
     /**
     * @var string
     */
    var $text;
    /**
     * @var string
     */
    var $link;

 /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  /**  function Menu($id,$text,$link){$this->id=$id;$this->text=$text;$this->link=$link;}**/

   /**
     * Set ident
     *
     * @param string ident
     *
     * @return menu
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get ident
     *
     * @return string
     */
    public function getIdent()
    {
        return $this->ident;
    }

     /**
     * Set text
     *
     * @param string text
     *
     * @return menu
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
     * Set link
     *
     * @param string link
     * @return menu
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }
    
    

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
    


}

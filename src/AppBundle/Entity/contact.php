<?php

namespace AppBundle\Entity;

use AppBundle\Entity\socialmedia;

/**
 * img
 */

 class contact{
    
     
    private $title="CONTACT US & OUR SOCIAL MEDIA LINKS:";
   
    private $link=array("mailto://peter@itwiz1.com","https://www.google.com/maps/place/La+Jolla,+CA+92039/@32.8471032,-117.274978,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc03fc82162f39:0x5b26cb03d013b5b4!8m2!3d32.8470987!4d-117.2727893");
   
   
    
    private $image=array("images/peterface-edited.jpg","images/icon-snip-googma.jpg" );
    


    private $text;

    private $socialmedia=array();
    
    
    public function setSocialMedia(){
        $this->text=array("Name/Title:","Peter L. [Owner/Founder/Digital Wizard/IT Consultant]","Email:","peter@itwiz1.com","Cell#:","+1-858-375-93XX (last two digits are a 1 then a 2).","eFax / Voicemail:","+1-413-403-95XX (last two digits are a 5 then another 5).","Location:","Box 13692, La Jolla San Diego, CA 92039-3692 (USA)","OUR SOCIAL MEDIA PRESENCE");
        $xml=simplexml_load_file("Resources/data/socialmedia/socialmedia.xml") or die("Error: Cannot create object");
    for($i=0;$i<count($xml->media);$i++){
        $this->socialmedia[$i]=new socialmedia();
   
    
        $this->socialmedia[$i]=$this->socialmedia[$i]->setAlt($xml->media[$i]->alt);
        $this->socialmedia[$i]=$this->socialmedia[$i]->setLink($xml->media[$i]->link);
        $this->socialmedia[$i]=$this->socialmedia[$i]->setImage($xml->media[$i]->image);
    }
        return $this;
    }


    public function getTitle()
    {
        return $this->title;
    }

    


    public function getImage(){

        return $this->image;
    }
     
public function getText(){

    return $this->text;
}
public function getLink()
{
    return $this->link;
}

function getSocialMedia(){
    return $this->socialmedia;
}

}

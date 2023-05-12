<?php
use ReCaptcha\ReCaptcha;
namespace AppBundle\Entity;




 class email{
    
    
    
    
   
    

 
   private  $title='Order your food:';
   private $captchar='6Lfahs4bAAAAAJ-oIcvS5_u0pg8mNegRF1Jz1wRa';
 
private  $text;
   

 
    public function getTitle(){
        return $this->title;
    }


   
    public function getText(){

        $this->text=array('Enter your name: ','Enter your lastname: ','Enter your phone: ','Enter your email: ','Send the msg: ', 'Send',"Name: ", "Lastname: ","Phone: " ," Email: "," Message: ",'jgroening@yahoo.com','New email','Responding','Thanks for write us. We will answer soon!!!');

    	return $this->text;}

  public function getRecaptcha(){return $this->captchar;}

}

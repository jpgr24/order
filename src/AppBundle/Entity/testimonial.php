<?php

namespace AppBundle\Entity;

/**
 * img
 */

 class testimonial{
    
     
    private $title="TESTIMONIALS, REFERRALS, & RECOMMENDATIONS:";
   
    private $link=array();
   
    private $link_text=array();
   


    private $image=array();
    

    private $text;
    public function start(){
        $this->text=array();
       $this->link[0]="https://lhnav.net/";

    $this->link[1]="https://www.nolongerlonely.com/";
    $this->link_text[0]="LHNav, Inc.";
    $this->link_text[1]="CEO & Founder of NoLongerLonely, LLC";
     $this->image[0]="https://LHNav.Net/wp-content/uploads/2018/09/logo.png";
    $this->image[1]="https://Www.NoLongerLonely.Com/images/NoLongerLonely_Logo-259x63.png";
    $this->text[0]="ITWiz1.Com has helped my Inc business with X, and Y, and Z since July 2017 ((ish, double-check)). Peter L. is always professional, punctual, and impressivel knowledgeable. My company never hesitates when throwing challenges his way, as he creatively rises to meet them every time. ITWiz1 after just two (2) on-site visits fixed my Company's issue with the XYZ Server Product Thingy. Peter showed us as an aside several ways to get WAY more out of our vTiger low-budget (but highly feature-filled), web-based CRM solution! We would definitely recommend his services!";
    $this->text[1]= "ITWiz1 has expertly, patiently assisted my Company, NoLongerLonely.Com, LLC, since 2004, in the following areas: [1] this, [2] that, [3] and the other stuff, etc..";
    $this->text[2]="Peter L. has been very instrumental in assistance, tutoring, and sharing knowledge with me regarding my various CompTIA A+ Desktop Technician, S+/CySA+ CyberSecurity, and other related computing college-level coursework. We tinker with Raspberry pi and his patience, customized guidance, and willingness to accept challenges have all kept me coming back to him without";

    return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink(){
        return $this->link;
    }

  public function getLinktext(){
        return $this->link_text;
    }

    public function getImage(){

        return $this->image;
    }
     
public function getText(){

    return $this->text;
}

}

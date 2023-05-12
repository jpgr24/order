<?php

namespace AppBundle\Entity;

/**
 * img
 */

 class favorite{
    
     
    private $title="WE STRONGLY BELIEVE IN:";
   
    private $image="images/ICONS-LOGOS-BELIEVE-IN-AFTER2-EDIT-20210630W.jpg";
   
    private $text=array('alt.2600 and CaptNCrunchWhistle, Anonymous, Apache, Atari, AWS, BASH, BTC, ChromeOS;','DuckDuckGo, PGP and FOSS, FreeBSD, MAME and FSF, GNU, Tor Onion Browswer and Html5/Css3, JSON;','KevinMitnick, Kodi, Linux/Tux, Napster, OpenBSD, PGP, Python;','RedHat, Raspberry Pi, SSH, VirtualBox/Oracle, VLC/VideoLan, VPN, Windows/WinBlows/BSoD!');
    private $id_text =array(1,2,3,4);
    private $map=array("0,0,50,50","50,0,100,50","100,0,150,50","150,0,200,50","200,0,250,50","250,0,300,50","300,0,350,50","350,0,400,50","0,50,50,100","50,50,100,100","100,50,150,100","150,50,210,100","210,50,260,100","260,50,310,100","310,50,380,100","0,100,50,150","50,100,100,150","100,100,150,150","150,100,200,150","200,100,250,150","250,100,300,150","300,100,350,150","0,150,60,200","60,150,100,200","100,150,150,200","150,150,200,200","200,150,250,200","250,150,300,200","300,150,350,200");

    private $favorite_it=array();
    

    
    public function start(){
      
    for($i=0;$i<count($this->text);$i++){
        $this->favorite_it[$i]=new favorite_it();
        $this->favorite_it[$i]=$this->favorite_it[$i]->setId($i+1);
        $this->favorite_it[$i]=$this->favorite_it[$i]->setText($this->text[$i]);}
    return $this;
    }

    public function getFavoriteIt(){

        return $this->favorite_it;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getMap(){
        return $this->map;
    }


    public function getImage(){

        return $this->image;
    }
     
public function getText(){

    return $this->text;
}

}

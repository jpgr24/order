<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Entity\Produ;
use AppBundle\Entity\menu;
use AppBundle\Entity\about;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\service;
use AppBundle\Entity\testimonial;
use AppBundle\Entity\favorite;
use AppBundle\Entity\contact;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use AppBundle\Entity\user;
use AppBundle\Entity\Task;
use AppBundle\Entity\email;
use AppBundle\Entity\creator_client;
use AppBundle\Entity\creator_order;
use Symfony\Component\Form\FormView;
// use ReCaptcha\ReCaptcha;


class DefaultController extends Controller
{
    
     var $logo;
    var $copyright;
    var $men=array();
    var $about_title;
    var $about_text;
  function get_menu(){
    $xml=simplexml_load_file("Resources/data/horizontal_menu/horizontal_menu.xml") or die("Error: Cannot create object");
    for($i=0;$i<count($xml->menu);$i++){
        $men[$i]=new menu();
   
    
        $men[$i]=$men[$i]->setText($xml->menu[$i]->text);
        $men[$i]=$men[$i]->setLink($xml->menu[$i]->link);
        $men[$i]=$men[$i]->setId($i);
    }
    return $men;
}   
    

public function indexAction(Request $request){
  
   

        $CreatorClient=new creator_client();
        $CreatorOrder=new creator_order();

         $title='Order food';
         $up_text='Order your food';
         $men=$this->get_menu();
         $ab=new about();
         $ab_it=$ab->getText();
         $ser=new service();
         $ser_it=$ser->getText();
         $email=new email();
         $email_text=$email->getText();
         $task = new Task();
         $menu_id=array();
        
        $menu_id=array();

        $testi=new testimonial();

        $testi=$testi->start();
        $testi_link=$testi->getLink();

        $testi_link_text=$testi->getLinkText();
        $testi_image=$testi->getImage();
        $testi_text=$testi->getText();
        $favor=new favorite();

        $favor=$favor->start();
        $favor_map=$favor->getMap();


        $cont=new contact();
        $cont=$cont->setSocialMedia();
        $cont_link=$cont->getLink();
        $cont_text=$cont->getText();
        $cont_img=$cont->getImage();
       
         $task->setEmail("");
         $task->setMsg("");
       //  $recaptcha = new ReCaptcha($email->getRecaptcha());
        // $resp = $recaptcha->verify($request->request->get('g-recaptcha-response'), $request->getClientIp());
          $form = $this->createFormBuilder($task)
            ->add('name', TextType::class,array('label'=>$email_text[0]) ,['attr'=>['class'=>'form-control']])
            ->add('lastname', TextType::class,array('label'=>$email_text[1]) ,['attr'=>['class'=>'form-control']])
             ->add('phone', TextType::class,array('label'=>$email_text[2]) ,['attr'=>['class'=>'form-control']])
            ->add('email', EmailType::class,array('label'=>$email_text[3]) ,['attr'=>['class'=>'form-control']])
            ->add('msg', TextareaType::class,array('label'=>$email_text[4]) ,['attr'=>['class'=>'form-control','style'=>'display:block']])
            ->add('save', SubmitType::class, ['label' => $email_text[5]])
            ->getForm();
            
            $form->handleRequest($request);
            $f=$form->createView();
         
            
            if ($form->isSubmitted() && $form->isValid()) {
                $task=$form->getData();
                
    // Everything works good ;) your contact has been saved.
           //     if (!$resp->isSuccess()) {
    // Do something if the submit wasn't valid ! Use the message to show something
 //   echo "<script>alert('Error in the captcha')</script>";
//  }else{
    // Everything works good ;) your contact has been saved.
                
                $Client=$CreatorClient->create([$task->getName(),$task->getLastname(),$task->getPhone(),$task->getEmail()]);
                $Order=$CreatorOrder->create([$task->getMsg()]);
                $message=$email_text[6].$Client->get_Name().$email_text[7].$Client->get_Lastname().$email_text[8].$Client->get_Phone().$email_text[9].$Client->get_Email().$email_text[10].$Order->get_foodname();
                mail($email_text[11], $email_text[12], $message);
                mail($task->getEmail(),$email_text[13], $email_text[14]);//}
            }
         
         return $this->render('view.html.twig',  ['title' => $title, 'up_text' => $up_text, 'men' => $men, 'ab_title'=>$ab->getTitle(),'ab_picture'=>$ab->get_picture(),'ab_text'=>$ab_it,'ser_title'=>$ser->getTitle(),'ser_it'=> $ser_it,'email_title'=>$email->getTitle(),'form'=>$f,'testi_tit'=>$testi->getTitle(),'testi_link_a'=>$testi_link[0],'testi_link_b'=>$testi_link[1],'testi_link_text_a'=>$testi_link[0],'testi_link_text_b'=>$testi_link[1],'testi_image_a'=>$testi_image[0],'testi_image_b'=>$testi_image[1],'testi_text_a'=>$testi_text[0],'testi_text_b'=>$testi_text[1],'testi_text_c'=>$testi_text[2],'cont_title'=>$cont->getTitle(),'cont_email_a'=>$cont_text[2],'cont_email_b'=>$cont_text[3],'cont_link_email'=>$cont_link[0],'cont_name_a'=>$cont_text[0],'cont_name_b'=>$cont_text[1],'cont_phone_a'=>$cont_text[4],'cont_phone_b'=>$cont_text[5],'cont_fax_a'=>$cont_text[6],'cont_fax_b'=>$cont_text[7],'cont_location_a'=>$cont_text[8],'cont_location_b'=>$cont_text[9],'social_media_title'=>$cont_text[10],'cont_location_link'=>$cont_link[1],'cont_name_img'=>$cont_img[0],'cont_location_img'=>$cont_img[1],'favor_title'=>$favor->getTitle(),'favor_image'=>$favor->getImage(),'favor_map'=>$favor_map,'socialmedia'=>$cont->getSocialMedia(),'fav_text'=>$favor->getFavoriteIt(),]);

    }


}





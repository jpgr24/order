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
use Symfony\Component\Form\FormView;
use ReCaptcha\ReCaptcha;

class pageController extends Controller{

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

 public function subpageAction(Request $request, $subpage)
    {
    	 $title='Order your food';
    	 $up_text='Order your food';
    	 $men=$this->get_menu();
    	 $ab=new about();
    	 $ab_it=$ab->getAboutText();
    	 $ser=new service();
    	 $ser_it=$ser->getServiceText();
         $email=new email();
         $task = new Task();
         $menu_id=array();
        
        $menu_id=array();

        $testi=new testimonial();

        $testi=$testi->start();
        $testi_link=$testi->getLink();

        $testi_link_text=$testi->getLinkText();
        $testi_image=$testi->getImage();
        $testi_text=$testi->getText();
        $sp=$subpage.'.html.twig';
         $task->setEmail("");
         $task->setMsg("");
         $recaptcha = new ReCaptcha('6Lfahs4bAAAAAJ-oIcvS5_u0pg8mNegRF1Jz1wRa');
         $resp = $recaptcha->verify($request->request->get('g-recaptcha-response'), $request->getClientIp());
          $form = $this->createFormBuilder($task)
            ->add('name', TextType::class,array('label'=>'Enter your name: ') ,['attr'=>['class'=>'form-control']])->add('email', EmailType::class,array('label'=>'Enter your email: ') ,['attr'=>['class'=>'form-control']])->add('msg', TextareaType::class,array('label'=>'Send the msg: ') ,['attr'=>['class'=>'form-control','style'=>'display:block']])
            ->add('save', SubmitType::class, ['label' => 'Send'])
            ->getForm();
            
            $form->handleRequest($request);
            $f=$form->createView();
         
            
            if ($form->isSubmitted() && $form->isValid()) {
                $task=$form->getData();
                
    // Everything works good ;) your contact has been saved.
                if (!$resp->isSuccess()) {
    // Do something if the submit wasn't valid ! Use the message to show something
    echo "<script>alert('Error in the captcha')</script>";
  }else{
    // Everything works good ;) your contact has been saved.
  
                $message="Name: ".$task->getName()." Email: ".$task->getEmail()." Message: ".$task->getMsg();
                mail('juanpablogroening@yahoo.com', 'New email', $message);
                mail($task->getEmail(),'Responding', 'Thanks for write us. We will answer soon!!!');}
            }
    	 
         return $this->render('view.html.twig',  ['title' => $title, 'up_text' => $up_text, 'men' => $men, 'ab_title'=>$ab->getTitle(),'ab_picture'=>$ab->get_picture(),'ab_text'=>$ab_it,'ser_title'=>$ser->getTitle(),'ser_it'=> $ser_it,'email_title'=>$email->getTitle(),'form'=>$f,'subpage'=>$subpage,'sp'=>$sp,'testi_tit'=>$testi->getTitle(),'testi_link_a'=>$testi_link[0],'testi_link_b'=>$testi_link[1],'testi_link_text_a'=>$testi_link[0],'testi_link_text_b'=>$testi_link[1],'testi_image_a'=>$testi_image[0],'testi_image_b'=>$testi_image[1],'testi_text_a'=>$testi_text[0],'testi_text_b'=>$testi_text[1],'testi_text_c'=>$testi_text[2],]);

    }

}



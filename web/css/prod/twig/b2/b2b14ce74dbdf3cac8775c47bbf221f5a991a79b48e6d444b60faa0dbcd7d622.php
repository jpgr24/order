<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact.html.twig */
class __TwigTemplate_e2a668a6adcc57ef453dc20ca934e87978a745a722bed7e45e20dabe2febf649 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"container-fluid bg-5  text-center\" id=\"contact\">    
  <h3 class=\"margin\">CONTACT US & OUR SOCIAL MEDIA LINKS:</h3><br>

  <div class=\"row\">
    <div class=\"col-sm-4\">
      <p class=\"white\">Name/Title: </p>
      <p class=\"green\">Peter L. [Owner/Founder/Digital Wizard/IT Consultant]</p>
      <center>
      <img src=\"images/peterface-edited.jpg\" style=\"width: 50%\" class=\"img-responsive margin\" alt=\"Image\">
    </center>
    </div>
    <div class=\"col-sm-4\"> 
      <p class=\"white\">Email:</p>
      <p class=\"green\">peter@itwiz1.com</p>
      <p><a href=\"mailto://peter@itwiz1.com\">&#9993;</a></p>
    </div>
    <div class=\"col-sm-4\"> 
      <p class=\"white\">Cell#:</p>
      <p class=\"green\">+1-858-375-93XX (last two digits are a 1 then a 2).</p>
      <p>&#128222;</p>
      
    </div>
  </div>
    <div class=\"row\">
     <div class=\"col-sm-4\"> 
      <p class=\"white\">eFax / Voicemail:</p>
      <p class=\"green\">+1-413-403-95XX (last two digits are a 5 then another 5).</p>
      <p>&#128439;</p>
</div>
      <div class=\"col-sm-4\"> 
      <p class=\"white\">Location:</p>
      <p class=\"green\"><a href=\"https://www.google.com/maps/place/La+Jolla,+CA+92039/@32.8471032,-117.274978,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc03fc82162f39:0x5b26cb03d013b5b4!8m2!3d32.8470987!4d-117.2727893\">Box 13692, La Jolla San Diego, CA 92039-3692 (USA)</p>
        <center>
      <img src=\"images/icon-snip-googma.jpg\" class=\"img-responsive margin\" style=\"width:50%\"  alt=\"Image\"></a>
    </center>
</div>
<div class=\"col-sm-4\"> 
      <p class=\"white\">OUR SOCIAL MEDIA PRESENCE</p>
      <p><a target=\"_blank\" href=\"https://www.linkedin.com/company/itwiz1dotcom/\"><img class =\"img-responsive\"  src=\"images/icon-snip-linked.jpg\" alt=\"LinkedIn Icon\" ></a><a target=\"_blank\" href=\"https://www.facebook.com/itwiz1dotcom\"><img class =\"img-responsive\"  src=\"images/icon-snip-facebo.jpg\" alt=\"Facebook Icon\"></a><a target=\"_blank\" href=\"https://www.twitter.com/itwiz1dotcom\"><img class =\"img-responsive\"  src=\"images/icon-snip-twitte.jpg\" alt=\"Twitter Icon\"></a><a target=\"_blank\" href=\"https://www.instagram.com/itwiz1dotcom/\"><img class =\"img-responsive\"  src=\"images/icon-snip-instag.jpg\" alt=\"Instagram Icon\"></a><a target=\"_blank\" href=\"https://www.twitter.com/itwiz1dotcom\"><img class =\"img-responsive\"  src=\"images/icon-snip-twitte.jpg\" alt=\"Twitter Icon\"></a><a target=\"_blank\" href=\"https://www.snapchat.com/add/itwiz1dotcom\"><img class =\"img-responsive\"  src=\"images/icon-snip-snapch.jpg\" alt=\"Snapchat Icon\"></a></p>
</div>
    </div>










  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "contact.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/contact.html.twig");
    }
}

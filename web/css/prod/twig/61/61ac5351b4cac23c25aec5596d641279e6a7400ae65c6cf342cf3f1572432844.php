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

/* testimonial.html.twig */
class __TwigTemplate_eacbba9cfec70caf41a64307283a947804d69c3afe4091bf00c25acd5eccb5af extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-3  text-center\" id=\"testimonial\">    
  <h3 class=\"margin\">TESTIMONIALS, REFERRALS, & RECOMMENDATIONS:</h3><br>
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <p class=\"white\">[1] Brian M., CEO & Founder of <a href=\"https://lhnav.net/\">LHNav, Inc.</a>, LHNav.Net linked-to logo PNG image here said:</p>
      <p class=\"green\">- (placeholder testimony) \"ITWiz1.Com has helped my Inc business with X, and Y, and Z since July 2017 ((ish, double-check)). Peter L. is always professional, punctual, and impressivel knowledgeable. My company never hesitates when throwing challenges his way, as he creatively rises to meet them every time. ITWiz1 after just two (2) on-site visits fixed my Company's issue with the XYZ Server Product Thingy. Peter showed us as an aside several ways to get WAY more out of our vTiger low-budget (but highly feature-filled), web-based CRM solution! We would definitely recommend his services!\"</p>
      <a href=\"https://lhnav.net/\"><img src=\"https://LHNav.Net/wp-content/uploads/2018/09/logo.png\" class=\"img-responsive margin\" style=\"width:100%\" alt=\"Image\"></a>
    </div>
    <div class=\"col-sm-4\"> 
      <p class=\"white\">[2] James L., <a href=\"https://www.nolongerlonely.com/\">CEO & Founder of NoLongerLonely, LLC</a>. said:</p>
      <p class=\"green\">- (placeholder testimony) \"ITWiz1 has expertly, patiently assisted my Company, NoLongerLonely.Com, LLC, since 2004, in the following areas: [1] this, [2] that, [3] and the other stuff, etc..\"</p>
      <a href=\"https://www.nolongerlonely.com/\"><img src=\"https://Www.NoLongerLonely.Com/images/NoLongerLonely_Logo-259x63.png\" class=\"img-responsive margin\" style=\"width:100%\" alt=\"Image\"></a>
    </div>
    <div class=\"col-sm-4\"> 
      <p class=\"white\">[3] Serop K., fellow classmate, occasional client for homework assistance, said:</p>
      <p class=\"green\">- (placeholder testimony) \"Peter L. has been very instrumental in assistance, tutoring, and sharing knowledge with me regarding my various CompTIA A+ Desktop Technician, S+/CySA+ CyberSecurity, and other related computing college-level coursework. We tinker with Raspberry pi and his patience, customized guidance, and willingness to accept challenges have all kept me coming back to him without</p>
      
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "testimonial.html.twig";
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
        return new Source("", "testimonial.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/testimonial.html.twig");
    }
}

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

/* favorite.html.twig */
class __TwigTemplate_4e99b38a79d726b5f6fefa8708a748af852377f45af73a5437e1a1dc22bcc4fc extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-4  text-center\" id=\"favorite\">    
  <h3 class=\"margin\">WE STRONGLY BELIEVE IN:</h3><br>
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <img src=\"\" class=\"img-responsive margin\" style=\"width:100%\" alt=\"\">
    </div>
    <div class=\"col-sm-4\"> 
     <img src=\"images/ICONS-LOGOS-BELIEVE-IN-AFTER2-EDIT-20210630W.jpg\" class=\"img-responsive margin\" style=\"width:100%\" alt=\"Image\">
    </div>
    
      
      
    
  </div>
  <h3 class=\"green legend\">LEGEND</h3>
  <p class=\"green\">- Row1: alt.2600 and CaptNCrunchWhistle, Anonymous, Apache, Atari, AWS, BASH, BTC, ChromeOS;</p>
  <p class=\"green\">- Row2: DuckDuckGo, PGP and FOSS, FreeBSD, MAME and FSF, GNU, Tor Onion Browswer and Html5/Css3, JSON;</p>
  <p class=\"green\">- Row3: KevinMitnick, Kodi, Linux/Tux, Napster, OpenBSD, PGP, Python;</p>
  <p class=\"green\">- Row4: RedHat, Raspberry Pi, SSH, VirtualBox/Oracle, VLC/VideoLan, VPN, Windows/WinBlows/BSoD!</p>


</div>";
    }

    public function getTemplateName()
    {
        return "favorite.html.twig";
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
        return new Source("", "favorite.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/favorite.html.twig");
    }
}

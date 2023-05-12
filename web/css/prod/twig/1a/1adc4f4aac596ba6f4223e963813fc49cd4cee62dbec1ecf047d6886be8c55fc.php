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

/* footer.html.twig */
class __TwigTemplate_8d1a7a4ea0bf9f26c33e74789864387be6654a4f0606ba738b830480b4c0f9a4 extends \Twig\Template
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
        echo "<footer class=\"container-fluid bg-8 text-center\">
  <p><span class=\"f0\">* Thanks to Sandy, CEO of <a target=\"_blank\" href=\"https://www.cycleskyns.com\">CycleSkyns</a>/<a target=\"_blank\" href=\"https://seamscreative.com\">SeamsCreative</a>/<a target=\"_blank\" href=\"https://customtvcovers.com\">CustomTvCovers</a> for my website's TABBED template!</span> (links open in New_Window) *</p> 
  <p><span class=\"f0\">Copyright (c)1999-2021: <a target=\"_blank\" href=\"http://www.itwiz1.com/\">ITWiz1.Com</a>. All rights reserved.</span> </p>
</footer>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
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
        return new Source("", "footer.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/footer.html.twig");
    }
}

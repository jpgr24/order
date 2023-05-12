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

/* header.html.twig */
class __TwigTemplate_b274698cf80ea3dfedf6911fe45ffac0649c122a569637c1118a147ecf318f87 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-default\" id=\"navbar\">
  <div class=\"container\">
    <div class=\"navbar-header\" >
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\" id=\"title\"  href=\"#\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["up_text"] ?? null), "html", null, true);
        echo "</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav navbar-right\" id=\"menu\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["men"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 14
            echo "    ";
            // line 16
            echo "

 
        <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "link", []), "html", null, true);
            echo "\"><!-- content -->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "text", []), "html", null, true);
            echo "</a></li>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        
      </ul>
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  58 => 19,  53 => 16,  51 => 14,  47 => 13,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/header.html.twig");
    }
}

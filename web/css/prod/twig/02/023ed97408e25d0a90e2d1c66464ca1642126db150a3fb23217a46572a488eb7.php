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

/* about.html.twig */
class __TwigTemplate_f474e5370bacf10dc2e47aa95ab6a3261117663e2e03c8c92e956266900b8525 extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-1 text-center\" id=\"about\">
  <h3 class=\"margin\"><u>";
        // line 2
        echo twig_escape_filter($this->env, ($context["ab_title"] ?? null), "html", null, true);
        echo "</u></h3>
  <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["ab_picture"] ?? null), "html", null, true);
        echo "\" class=\"img-responsive img-circle margin\" style=\"display:inline\" alt=\"Bird\" width=\"89\" height=\"89\">
 
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ab_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
            // line 6
            echo "    ";
            // line 8
            echo "

 
        <p class=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "class", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "text", []), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  <h3>OUR MOTTO: <a href=\"#\">\"ITWiz1.Com</a> *destroys* all I.T. and computing challenges!\"</h3>



</div>";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  53 => 11,  48 => 8,  46 => 6,  42 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "about.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/about.html.twig");
    }
}

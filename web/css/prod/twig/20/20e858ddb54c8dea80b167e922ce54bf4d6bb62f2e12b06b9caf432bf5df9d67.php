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

/* services.html.twig */
class __TwigTemplate_08e3ad2f7c1ce19434c8b5a5d188592eb1cce990f9ab4c16db8b9893b3799a8f extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-2 text-center\" id=\"services\">
  <h3 class=\"margin\">";
        // line 2
        echo twig_escape_filter($this->env, ($context["ser_title"] ?? null), "html", null, true);
        echo "</h3>

 ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ser_it"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
            // line 5
            echo "    ";
            // line 7
            echo "    <p >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "title", []), "html", null, true);
            echo " <span class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "class", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "text", []), "html", null, true);
            echo "</span></p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
  
</div>";
    }

    public function getTemplateName()
    {
        return "services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  44 => 7,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "services.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/services.html.twig");
    }
}

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

/* view.html.twig */
class __TwigTemplate_fe3eb0c465b998d984e3fb1d744440aa2a5058f49c31ecdaa276caf41d4942a0 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"css/style.css\">
  <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  
  .bg-2 { 
     /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
     /* White */
    color: #555555;
  }
  .bg-4 { 
     /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  
  </style>
  <link rel=\"shortcut icon\" type=\"image/ico\" href=\"images/itwiz1-dotcom-spacecar.ico\">
</head>
<body>

<!-- Navbar -->
";
        // line 56
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

<!-- First Container -->

";
        // line 60
        echo twig_include($this->env, $context, "about.html.twig");
        echo "
<!-- Second Container -->
";
        // line 62
        echo twig_include($this->env, $context, "services.html.twig");
        echo "

<!-- Third Container (Grid) -->
";
        // line 65
        echo twig_include($this->env, $context, "testimonial.html.twig");
        echo "


";
        // line 68
        echo twig_include($this->env, $context, "favorite.html.twig");
        echo "
";
        // line 69
        echo twig_include($this->env, $context, "contact.html.twig");
        echo "

<!-- Footer -->
";
        // line 72
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 72,  118 => 69,  114 => 68,  108 => 65,  102 => 62,  97 => 60,  90 => 56,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "view.html.twig", "/home/mo9n79coh2ah/public_html/itwiz/app/Resources/views/view.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* back/back.html.twig */
class __TwigTemplate_c9396ad14ef30d0d26a60751a7093b085e027bc28747f393e778e2ac9fe76d58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html :class=\"{ 'theme-dark': dark }\" x-data=\"data()\" lang=\"en\">

<head>

  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/logo.png"), "html", null, true);
        echo "\" type=\"image/icon type\">
  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "</head>


<body>
  ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Evento ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/tailwind.output.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" />
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "  <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js\" defer></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/init-alpine.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" defer></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/charts-lines.js"), "html", null, true);
        echo "\" defer></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/charts-pie.js"), "html", null, true);
        echo "\" defer></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "  
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 27,  144 => 26,  135 => 20,  131 => 19,  126 => 17,  123 => 16,  116 => 15,  106 => 12,  103 => 11,  96 => 10,  83 => 8,  74 => 29,  72 => 26,  66 => 22,  63 => 15,  61 => 10,  57 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html :class=\"{ 'theme-dark': dark }\" x-data=\"data()\" lang=\"en\">

<head>

  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title> {% block title %} Evento {% endblock %} </title>
  <link rel=\"icon\" href=\"{{asset('back/img/logo.png')}}\" type=\"image/icon type\">
  {% block stylesheets %}
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"{{asset('back/css/tailwind.output.css')}}\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" />
   {% endblock %}
    {% block javascript %}
  <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js\" defer></script>
  <script src=\"{{asset('back/js/init-alpine.js')}}\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" defer></script>
  <script src=\"{{asset('back/js/charts-lines.js')}}\" defer></script>
  <script src=\"{{asset('back/js/charts-pie.js')}}\" defer></script>
  {% endblock %}
</head>


<body>
  {% block body %}
  
  {% endblock %}
</body>

</html>", "back/back.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\back\\back.html.twig");
    }
}

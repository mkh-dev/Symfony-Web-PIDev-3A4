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

/* back/transport/statistique.html.twig */
class __TwigTemplate_43bdf6104e53ce1fbc71cc9c6931871b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/backbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/transport/statistique.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/transport/statistique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 ";
        // line 12
        echo "

    <div id=\"div_chart\"></div>
    <br>
    <div id=\"div_barchart\"></div>
    <br>
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">

";
        // line 21
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw([0 => (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 21, $this->source); })()), 1 => (isset($context["barchart"]) || array_key_exists("barchart", $context) ? $context["barchart"] : (function () { throw new RuntimeError('Variable "barchart" does not exist.', 21, $this->source); })())], [0 => "div_chart", 1 => "div_barchart"]);
        echo "

</script>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back/transport/statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 12,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %} 

{% block body %}

 {# <h1>Statistiques Transports</h1>
    <div id=\"piechart\" style=\"width: 600px; height: 400px;\"></div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ chart.render('piechart') }} #}


    <div id=\"div_chart\"></div>
    <br>
    <div id=\"div_barchart\"></div>
    <br>
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">

{{ gc_draw([chart, barchart], ['div_chart', 'div_barchart']) }}

</script>



{% endblock %}
<<<<<<< Updated upstream
", "back/transport/statistique.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\back\\transport\\statistique.html.twig");
=======
", "back/transport/statistique.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\back\\transport\\statistique.html.twig");
>>>>>>> Stashed changes
    }
}

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

/* categorie_prod/show.html.twig */
class __TwigTemplate_a3479bd16c754992dd9ecf1d9f6d576b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_prod/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie_prod/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CategorieProd";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>CategorieProd</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdCatProd</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie_prod"]) || array_key_exists("categorie_prod", $context) ? $context["categorie_prod"] : (function () { throw new RuntimeError('Variable "categorie_prod" does not exist.', 12, $this->source); })()), "idCatProd", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CatProd</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie_prod"]) || array_key_exists("categorie_prod", $context) ? $context["categorie_prod"] : (function () { throw new RuntimeError('Variable "categorie_prod" does not exist.', 16, $this->source); })()), "catProd", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_prod_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_prod_edit", ["idCatProd" => twig_get_attribute($this->env, $this->source, (isset($context["categorie_prod"]) || array_key_exists("categorie_prod", $context) ? $context["categorie_prod"] : (function () { throw new RuntimeError('Variable "categorie_prod" does not exist.', 23, $this->source); })()), "idCatProd", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 25
        echo twig_include($this->env, $context, "categorie_prod/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "categorie_prod/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  101 => 23,  96 => 21,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CategorieProd{% endblock %}

{% block body %}
    <h1>CategorieProd</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdCatProd</th>
                <td>{{ categorie_prod.idCatProd }}</td>
            </tr>
            <tr>
                <th>CatProd</th>
                <td>{{ categorie_prod.catProd }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_categorie_prod_index') }}\">back to list</a>

    <a href=\"{{ path('app_categorie_prod_edit', {'idCatProd': categorie_prod.idCatProd}) }}\">edit</a>

    {{ include('categorie_prod/_delete_form.html.twig') }}
{% endblock %}
", "categorie_prod/show.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\categorie_prod\\show.html.twig");
    }
}

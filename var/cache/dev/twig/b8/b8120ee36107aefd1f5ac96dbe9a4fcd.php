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

/* categorie_event/show.html.twig */
class __TwigTemplate_2f11606c4f4887836966c8e8c254a107 extends Template
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
        return "back/backbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_event/show.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "categorie_event/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CategorieEvent";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <style>
        .tableM {
            width: 100%;
            margin-bottom: 1rem;
            color: white;
            border-collapse: collapse;
        }

        .tableM th,
        .tableM td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid white;
        }

        .tableM thead th {
            vertical-align: bottom;
            border-bottom: 2px solid white;
        }

        .tableM tbody + tbody {
            border-top: 2px solid white;
        }

        .tableM-sm th,
        .tableM-sm td {
            padding: 0.3rem;
        }

        .tableM-bordered {
            border: 1px solid white;
        }

        .tableM-bordered th,
        .tableM-bordered td {
            border: 1px solid white;
        }

        .tableM-hover tbody tr:hover {
            color: white;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .tableM-primary,
        .tableM-primary > th,
        .tableM-primary > td {
            background-color: #b8daff;
            color: #fff;
        }

        .tableM-primary th,
        .tableM-primary td,
        .tableM-primary thead th,
        .tableM-primary tbody + tbody {
            border-color: #7abaff;
        }

        .tableM-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .myTitle {
            font-size: 2em; /* Taille de la police */
            font-weight: bold; /* Gras */
            text-align: center; /* Alignement du texte */
            text-transform: uppercase; /* Mise en majuscules */
            color: orange; /* Couleur du texte */
            margin-top: 20px; /* Marge supérieure */
            margin-bottom: 20px; /* Marge inférieure */
        }


        .boutton {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .boutton:hover {
            background-color: #ff8c00;
        }




    </style>

    <h1 class=\"myTitle\">Categorie Event</h1>

    <table class=\"tableM\">
        <tbody>
            <tr>
                <th>IdCatEvent</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie_event"]) || array_key_exists("categorie_event", $context) ? $context["categorie_event"] : (function () { throw new RuntimeError('Variable "categorie_event" does not exist.', 107, $this->source); })()), "idCatEvent", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CatEvent</th>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie_event"]) || array_key_exists("categorie_event", $context) ? $context["categorie_event"] : (function () { throw new RuntimeError('Variable "categorie_event" does not exist.', 111, $this->source); })()), "catEvent", [], "any", false, false, false, 111), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<br>
    <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_event_index");
        echo "\" class=\"boutton\">back to list</a>
<br>
    <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_event_edit", ["idCatEvent" => twig_get_attribute($this->env, $this->source, (isset($context["categorie_event"]) || array_key_exists("categorie_event", $context) ? $context["categorie_event"] : (function () { throw new RuntimeError('Variable "categorie_event" does not exist.', 118, $this->source); })()), "idCatEvent", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\" class=\"boutton\">edit</a>

    ";
        // line 120
        echo twig_include($this->env, $context, "categorie_event/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "categorie_event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 120,  196 => 118,  191 => 116,  183 => 111,  176 => 107,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %}

{% block title %}CategorieEvent{% endblock %}

{% block body %}

    <style>
        .tableM {
            width: 100%;
            margin-bottom: 1rem;
            color: white;
            border-collapse: collapse;
        }

        .tableM th,
        .tableM td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid white;
        }

        .tableM thead th {
            vertical-align: bottom;
            border-bottom: 2px solid white;
        }

        .tableM tbody + tbody {
            border-top: 2px solid white;
        }

        .tableM-sm th,
        .tableM-sm td {
            padding: 0.3rem;
        }

        .tableM-bordered {
            border: 1px solid white;
        }

        .tableM-bordered th,
        .tableM-bordered td {
            border: 1px solid white;
        }

        .tableM-hover tbody tr:hover {
            color: white;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .tableM-primary,
        .tableM-primary > th,
        .tableM-primary > td {
            background-color: #b8daff;
            color: #fff;
        }

        .tableM-primary th,
        .tableM-primary td,
        .tableM-primary thead th,
        .tableM-primary tbody + tbody {
            border-color: #7abaff;
        }

        .tableM-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .myTitle {
            font-size: 2em; /* Taille de la police */
            font-weight: bold; /* Gras */
            text-align: center; /* Alignement du texte */
            text-transform: uppercase; /* Mise en majuscules */
            color: orange; /* Couleur du texte */
            margin-top: 20px; /* Marge supérieure */
            margin-bottom: 20px; /* Marge inférieure */
        }


        .boutton {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .boutton:hover {
            background-color: #ff8c00;
        }




    </style>

    <h1 class=\"myTitle\">Categorie Event</h1>

    <table class=\"tableM\">
        <tbody>
            <tr>
                <th>IdCatEvent</th>
                <td>{{ categorie_event.idCatEvent }}</td>
            </tr>
            <tr>
                <th>CatEvent</th>
                <td>{{ categorie_event.catEvent }}</td>
            </tr>
        </tbody>
    </table>
<br>
    <a href=\"{{ path('app_categorie_event_index') }}\" class=\"boutton\">back to list</a>
<br>
    <a href=\"{{ path('app_categorie_event_edit', {'idCatEvent': categorie_event.idCatEvent}) }}\" class=\"boutton\">edit</a>

    {{ include('categorie_event/_delete_form.html.twig') }}
{% endblock %}
", "categorie_event/show.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\categorie_event\\show.html.twig");
    }
}

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

/* evenement/edit.html.twig */
class __TwigTemplate_ef25297ec48e7168241ce90d0ec9a36f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "evenement/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Evenement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        /* style pour les labels */
        .my-form label {
            color: orange;
            font-weight: bold;
        }

        /* style pour les champs de formulaire */
        .my-form input, select, textarea {
            border: 2px solid orange;
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 16px;
        }

        /* style pour les boutons de formulaire */
        .my-form button {
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
        }


        /* style pour les messages d'erreur */
        .my-form .error {
            color: red;
            font-weight: bold;
            margin-bottom: 16px;
        }

        /* espacement entre les champs de formulaire */
        .my-form input:not([type=\"checkbox\"]), select, textarea {
            margin-bottom: 20px;
        }

        /* alignement des labels et des champs de formulaire */
        .my-form label {
            display: block;
            margin-bottom: 8px;
        }

        .my-form input, select, textarea {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        .my-form form {
            margin: 0 auto;
            max-width: 500px; /* Ajoutez une largeur maximale pour éviter que le formulaire ne soit trop large sur les écrans larges */
        }

        /* style pour un titre h1 */
        h1 {
            color: orange;
            font-size: 36px;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
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

    <h1>Edit Evenement</h1>

    <div class=\"my-form\">
    ";
        // line 96
        echo twig_include($this->env, $context, "evenement/_form.html.twig", ["button_label" => "Update"]);
        echo "
    </div>
    <br>
    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\" class=\"boutton\">back to list</a>
    <br>
    ";
        // line 101
        echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
        echo "
    <br>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 101,  171 => 99,  165 => 96,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %}

{% block title %}Edit Evenement{% endblock %}

{% block body %}
    <style>
        /* style pour les labels */
        .my-form label {
            color: orange;
            font-weight: bold;
        }

        /* style pour les champs de formulaire */
        .my-form input, select, textarea {
            border: 2px solid orange;
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 16px;
        }

        /* style pour les boutons de formulaire */
        .my-form button {
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
        }


        /* style pour les messages d'erreur */
        .my-form .error {
            color: red;
            font-weight: bold;
            margin-bottom: 16px;
        }

        /* espacement entre les champs de formulaire */
        .my-form input:not([type=\"checkbox\"]), select, textarea {
            margin-bottom: 20px;
        }

        /* alignement des labels et des champs de formulaire */
        .my-form label {
            display: block;
            margin-bottom: 8px;
        }

        .my-form input, select, textarea {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        .my-form form {
            margin: 0 auto;
            max-width: 500px; /* Ajoutez une largeur maximale pour éviter que le formulaire ne soit trop large sur les écrans larges */
        }

        /* style pour un titre h1 */
        h1 {
            color: orange;
            font-size: 36px;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
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

    <h1>Edit Evenement</h1>

    <div class=\"my-form\">
    {{ include('evenement/_form.html.twig', {'button_label': 'Update'}) }}
    </div>
    <br>
    <a href=\"{{ path('app_evenement_index') }}\" class=\"boutton\">back to list</a>
    <br>
    {{ include('evenement/_delete_form.html.twig') }}
    <br>
    <br>
{% endblock %}
", "evenement/edit.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\evenement\\edit.html.twig");
    }
}

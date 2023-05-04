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

/* back/transport/edit.html.twig */
class __TwigTemplate_8cf13bd42b895cb15447baa0e5c290fc1e7ee4d727252aecf728855e37875cb7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/transport/edit.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/transport/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    

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

 <h1>Edit Transport</h1>
 
    ";
        // line 97
        echo twig_include($this->env, $context, "transport/_form.html.twig", ["button_label" => "Update"]);
        echo "
     </form>
     <br>
 ";
        // line 100
        echo twig_include($this->env, $context, "back/transport/_delete_form.html.twig");
        echo "
  
<br> 

<button
   class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange\">
     <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back");
        echo "\" class=\"boutton\">
     back to list</a>
    </button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/transport/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 106,  158 => 100,  152 => 97,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %} 

{# {% block title %}Edit Transport{% endblock %} #}

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

 <h1>Edit Transport</h1>
 
    {{ include('transport/_form.html.twig', {'button_label': 'Update'}) }}
     </form>
     <br>
 {{ include('back/transport/_delete_form.html.twig') }}
  
<br> 

<button
   class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange\">
     <a href=\"{{ path('app_transport_back') }}\" class=\"boutton\">
     back to list</a>
    </button>
{% endblock %}
", "back/transport/edit.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\back\\transport\\edit.html.twig");
    }
}
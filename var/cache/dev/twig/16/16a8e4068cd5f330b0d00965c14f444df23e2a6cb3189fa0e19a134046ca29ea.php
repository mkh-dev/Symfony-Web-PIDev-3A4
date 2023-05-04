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

/* back/vehicule/addtransportv.html.twig */
class __TwigTemplate_610d87b93d12a5735fbca359e43ac82faf800ca9a20db71e81938ef4c6e4a81d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/vehicule/addtransportv.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/vehicule/addtransportv.html.twig", 1);
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
";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form"]]);
        echo "

";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'widget');
        echo "

";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "
<br>
 <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back_new");
        echo "\" class=\"boutton\" style=\"float: right;\">Suivant</a>
    <br>
    <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back");
        echo "\" class=\"boutton\">List</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/vehicule/addtransportv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 103,  165 => 101,  160 => 99,  155 => 97,  150 => 95,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %}



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
{{form_start(form,{'attr':{'class':'my-form'}})}}

{{ form_widget(form)}}

{{form_end(form)}}
<br>
 <a href=\"{{ path('app_transport_back_new') }}\" class=\"boutton\" style=\"float: right;\">Suivant</a>
    <br>
    <a href=\"{{path('app_transport_back')}}\" class=\"boutton\">List</a>

{% endblock %}", "back/vehicule/addtransportv.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\back\\vehicule\\addtransportv.html.twig");
    }
}

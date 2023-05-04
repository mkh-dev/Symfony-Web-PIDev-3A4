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

/* back/vehicule/showv.html.twig */
class __TwigTemplate_02e608c607b91b19658baf531fa9bad5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/vehicule/showv.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/vehicule/showv.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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

    <table class=\"tableM\">
        <tbody>
            <tr>
                <th>IdVehicule</th>
                <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 101, $this->source); })()), "idVehicule", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 105, $this->source); })()), "marque", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 109, $this->source); })()), "modele", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immatriculation</th>
                <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 113, $this->source); })()), "immatriculation", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 117, $this->source); })()), "disponibilite", [], "any", false, false, false, 117), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_back_index");
        echo "\" class=\"boutton\">back to list</a>
<br>
    ";
        // line 125
        echo "<br>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back/vehicule/showv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 125,  193 => 122,  185 => 117,  178 => 113,  171 => 109,  164 => 105,  157 => 101,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %} 


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

    <table class=\"tableM\">
        <tbody>
            <tr>
                <th>IdVehicule</th>
                <td>{{ vehicule.idVehicule }}</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>{{ vehicule.marque }}</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>{{ vehicule.modele }}</td>
            </tr>
            <tr>
                <th>Immatriculation</th>
                <td>{{ vehicule.immatriculation }}</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>{{ vehicule.disponibilite }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_vehicule_back_index') }}\" class=\"boutton\">back to list</a>
<br>
    {# <a href=\"{{ path('app_transport_back_edit', {'idTransport': transport.idTransport}) }}\" class=\"boutton\">edit</a> #}
<br>
    {# {{ include('back/transport/_delete_form.html.twig') }} #}
{% endblock %}
", "back/vehicule/showv.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\back\\vehicule\\showv.html.twig");
    }
}

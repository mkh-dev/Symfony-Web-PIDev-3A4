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

/* back/transport/show.html.twig */
class __TwigTemplate_ca6be8ed1d995fe582ddfb3778aaab48 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/transport/show.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/transport/show.html.twig", 1);
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
                <th>IdTransport</th>
                <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 101, $this->source); })()), "idTransport", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypeTransport</th>
                <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 105, $this->source); })()), "typeTransport", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateDepart</th>
                <td>";
        // line 109
        ((twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 109, $this->source); })()), "dateDepart", [], "any", false, false, false, 109)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 109, $this->source); })()), "dateDepart", [], "any", false, false, false, 109), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HeureDepart</th>
                <td>";
        // line 113
        ((twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 113, $this->source); })()), "heureDepart", [], "any", false, false, false, 113)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 113, $this->source); })()), "heureDepart", [], "any", false, false, false, 113), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>LieuDepart</th>
                <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 117, $this->source); })()), "lieuDepart", [], "any", false, false, false, 117), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LieuArriver</th>
                <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 121, $this->source); })()), "lieuArriver", [], "any", false, false, false, 121), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrixTransport</th>
                <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 125, $this->source); })()), "prixTransport", [], "any", false, false, false, 125), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back");
        echo "\" class=\"boutton\">back to list</a>
<br>
    <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back_edit", ["idTransport" => twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 132, $this->source); })()), "idTransport", [], "any", false, false, false, 132)]), "html", null, true);
        echo "\" class=\"boutton\">edit</a>
<br>
    ";
        // line 134
        echo twig_include($this->env, $context, "back/transport/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back/transport/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 134,  212 => 132,  207 => 130,  199 => 125,  192 => 121,  185 => 117,  178 => 113,  171 => 109,  164 => 105,  157 => 101,  59 => 5,  52 => 4,  35 => 1,);
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
                <th>IdTransport</th>
                <td>{{ transport.idTransport }}</td>
            </tr>
            <tr>
                <th>TypeTransport</th>
                <td>{{ transport.typeTransport }}</td>
            </tr>
            <tr>
                <th>DateDepart</th>
                <td>{{ transport.dateDepart ? transport.dateDepart|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>HeureDepart</th>
                <td>{{ transport.heureDepart ? transport.heureDepart|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>LieuDepart</th>
                <td>{{ transport.lieuDepart }}</td>
            </tr>
            <tr>
                <th>LieuArriver</th>
                <td>{{ transport.lieuArriver }}</td>
            </tr>
            <tr>
                <th>PrixTransport</th>
                <td>{{ transport.prixTransport }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_transport_back') }}\" class=\"boutton\">back to list</a>
<br>
    <a href=\"{{ path('app_transport_back_edit', {'idTransport': transport.idTransport}) }}\" class=\"boutton\">edit</a>
<br>
    {{ include('back/transport/_delete_form.html.twig') }}
{% endblock %}
", "back/transport/show.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\back\\transport\\show.html.twig");
    }
}

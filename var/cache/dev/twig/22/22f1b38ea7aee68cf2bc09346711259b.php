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

/* evenement/show.html.twig */
class __TwigTemplate_255fa0c3a1dd1ca256cf7f73f9a55866 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "evenement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenement";
        
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

    <h1 class=\"myTitle\">Evenement</h1>

    <table class=\"tableM\">
        <tbody>
            <tr>
                <th>IdEvent</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 106, $this->source); })()), "idEvent", [], "any", false, false, false, 106), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomEvent</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 110, $this->source); })()), "nomEvent", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescriptionEvent</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 114, $this->source); })()), "descriptionEvent", [], "any", false, false, false, 114), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateDebutEvent</th>
                <td>";
        // line 118
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 118, $this->source); })()), "dateDebutEvent", [], "any", false, false, false, 118)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 118, $this->source); })()), "dateDebutEvent", [], "any", false, false, false, 118), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DateFinEvent</th>
                <td>";
        // line 122
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 122, $this->source); })()), "dateFinEvent", [], "any", false, false, false, 122)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 122, $this->source); })()), "dateFinEvent", [], "any", false, false, false, 122), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>LieuEvent</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 126, $this->source); })()), "lieuEvent", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BudgetEvent</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 130, $this->source); })()), "budgetEvent", [], "any", false, false, false, 130), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix Evenement</th>
                <td>
                    ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 135, $this->source); })()), "prix", [], "any", false, false, false, 135), "html", null, true);
        echo "

                </td>
            </tr>
            <tr>
                <th>Prix Transport</th>
                <td>";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["prixTransport"]) || array_key_exists("prixTransport", $context) ? $context["prixTransport"] : (function () { throw new RuntimeError('Variable "prixTransport" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix Total</th>
                <td>
                    ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new RuntimeError('Variable "prixTotal" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "

                    ";
        // line 148
        if (((isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new RuntimeError('Variable "prixTotal" does not exist.', 148, $this->source); })()) <= 1000)) {
            // line 149
            echo "                        <span class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\">bas</span>
                    ";
        }
        // line 151
        echo "
                    ";
        // line 152
        if (((isset($context["prixTotal"]) || array_key_exists("prixTotal", $context) ? $context["prixTotal"] : (function () { throw new RuntimeError('Variable "prixTotal" does not exist.', 152, $this->source); })()) > 1000)) {
            // line 153
            echo "                        <span class=\"px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700\">élévé</span>
                    ";
        }
        // line 155
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_back");
        echo "\" class=\"boutton\" >back to list</a>
    <br>

    <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["idEvent" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 163, $this->source); })()), "idEvent", [], "any", false, false, false, 163)]), "html", null, true);
        echo "\" class=\"boutton\" >edit</a>

    ";
        // line 165
        echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
        echo "



<br><br>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 165,  275 => 163,  269 => 160,  262 => 155,  258 => 153,  256 => 152,  253 => 151,  249 => 149,  247 => 148,  242 => 146,  234 => 141,  225 => 135,  217 => 130,  210 => 126,  203 => 122,  196 => 118,  189 => 114,  182 => 110,  175 => 106,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %}

{% block title %}Evenement{% endblock %}

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

    <h1 class=\"myTitle\">Evenement</h1>

    <table class=\"tableM\">
        <tbody>
            <tr>
                <th>IdEvent</th>
                <td>{{ evenement.idEvent }}</td>
            </tr>
            <tr>
                <th>NomEvent</th>
                <td>{{ evenement.nomEvent }}</td>
            </tr>
            <tr>
                <th>DescriptionEvent</th>
                <td>{{ evenement.descriptionEvent }}</td>
            </tr>
            <tr>
                <th>DateDebutEvent</th>
                <td>{{ evenement.dateDebutEvent ? evenement.dateDebutEvent|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>DateFinEvent</th>
                <td>{{ evenement.dateFinEvent ? evenement.dateFinEvent|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>LieuEvent</th>
                <td>{{ evenement.lieuEvent }}</td>
            </tr>
            <tr>
                <th>BudgetEvent</th>
                <td>{{ evenement.budgetEvent }}</td>
            </tr>
            <tr>
                <th>Prix Evenement</th>
                <td>
                    {{ evenement.prix }}

                </td>
            </tr>
            <tr>
                <th>Prix Transport</th>
                <td>{{ prixTransport }}</td>
            </tr>
            <tr>
                <th>Prix Total</th>
                <td>
                    {{ prixTotal }}

                    {% if prixTotal <= 1000 %}
                        <span class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\">bas</span>
                    {% endif %}

                    {% if prixTotal > 1000 %}
                        <span class=\"px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700\">élévé</span>
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_evenement_back') }}\" class=\"boutton\" >back to list</a>
    <br>

    <a href=\"{{ path('app_evenement_edit', {'idEvent': evenement.idEvent}) }}\" class=\"boutton\" >edit</a>

    {{ include('evenement/_delete_form.html.twig') }}



<br><br>


{% endblock %}
", "evenement/show.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\evenement\\show.html.twig");
    }
}

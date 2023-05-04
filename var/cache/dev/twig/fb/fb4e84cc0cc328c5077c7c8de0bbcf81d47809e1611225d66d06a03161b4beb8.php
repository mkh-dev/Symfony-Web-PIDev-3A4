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

/* reservation2/show.html.twig */
class __TwigTemplate_b2dabe4eb0abd07170d9c281a32e41d81b5cca4d68f59f3eb18d599fe15426cd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation2/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation2/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reservation2";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Reservation2</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numres</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 12, $this->source); })()), "numres", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 16, $this->source); })()), "iduser", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbplaces</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 20, $this->source); })()), "nbplaces", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomEvent</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 24, $this->source); })()), "nomEvent", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 28, $this->source); })()), "datedebut", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 28, $this->source); })()), "datedebut", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 32, $this->source); })()), "lieu", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation2_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation2_edit", ["numres" => twig_get_attribute($this->env, $this->source, (isset($context["reservation2"]) || array_key_exists("reservation2", $context) ? $context["reservation2"] : (function () { throw new RuntimeError('Variable "reservation2" does not exist.', 39, $this->source); })()), "numres", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "reservation2/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation2/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation2{% endblock %}

{% block body %}
    <h1>Reservation2</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numres</th>
                <td>{{ reservation2.numres }}</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>{{ reservation2.iduser }}</td>
            </tr>
            <tr>
                <th>Nbplaces</th>
                <td>{{ reservation2.nbplaces }}</td>
            </tr>
            <tr>
                <th>NomEvent</th>
                <td>{{ reservation2.nomEvent }}</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>{{ reservation2.datedebut ? reservation2.datedebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ reservation2.lieu }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_reservation2_index') }}\">back to list</a>

    <a href=\"{{ path('app_reservation2_edit', {'numres': reservation2.numres}) }}\">edit</a>

    {{ include('reservation2/_delete_form.html.twig') }}
{% endblock %}
", "reservation2/show.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\reservation2\\show.html.twig");
    }
}

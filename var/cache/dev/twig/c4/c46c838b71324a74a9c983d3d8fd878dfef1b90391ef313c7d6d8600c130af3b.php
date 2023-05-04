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

/* abonnement/export-pdf.html.twig */
class __TwigTemplate_4b9183151dd55a598f2d824c0acd28ee883ad20ec339ce3369fcab9970bc28d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/export-pdf.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste de réservations</title>
    <style>

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }
        img {
            filter: grayscale(100%);
            width: 1px;
            transition: .5s ease;
            height : 1px;
        }

    </style>
</head>
<body>

<h6>cité ghazela - Esprit</h6>
<h6>+216 25 104 011</h6>

<h2>Dear Customer ,</h2>
<h5>I would like to thank you for your request to subscribe in our website </h5>
<h5> for your art and culture events.</h5>
<h5>We have received your subscribe request:</h5>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>userid</th>
        <th>type</th>
        <th>renouvellement</th>
        <th>dateExpire</th>
        <th>prix</th>
        <th>currency</th>
        <th>plafond</th>

    </tr>
    </thead>
    <tbody>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 58
            echo "        <tr>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "idUser", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "renouvellement", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "dateExpire", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "prix", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "currency", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plafond", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </tbody>
</table>

<h5>If you have any questions or concerns regarding your subscribtion , please do not hesitate to contact us. We are always here to help and make your events experience as smooth and enjoyable as possible.</h5>
<h4>Best regards,</h4>
<h3>Evento</h3>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/export-pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 70,  133 => 66,  129 => 65,  125 => 64,  121 => 63,  117 => 62,  113 => 61,  109 => 60,  105 => 59,  102 => 58,  98 => 57,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste de réservations</title>
    <style>

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }
        img {
            filter: grayscale(100%);
            width: 1px;
            transition: .5s ease;
            height : 1px;
        }

    </style>
</head>
<body>

<h6>cité ghazela - Esprit</h6>
<h6>+216 25 104 011</h6>

<h2>Dear Customer ,</h2>
<h5>I would like to thank you for your request to subscribe in our website </h5>
<h5> for your art and culture events.</h5>
<h5>We have received your subscribe request:</h5>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>userid</th>
        <th>type</th>
        <th>renouvellement</th>
        <th>dateExpire</th>
        <th>prix</th>
        <th>currency</th>
        <th>plafond</th>

    </tr>
    </thead>
    <tbody>
    {% for row in tableData %}
        <tr>
            <td>{{ row.id }}</td>
            <td>{{ row.idUser }}</td>
            <td>{{ row.type }}</td>
            <td>{{ row.renouvellement }}</td>
            <td>{{ row.dateExpire }}</td>
            <td>{{ row.prix }}</td>
            <td>{{ row.currency }}</td>
            <td>{{ row.plafond }}</td>

        </tr>
    {% endfor %}
    </tbody>
</table>

<h5>If you have any questions or concerns regarding your subscribtion , please do not hesitate to contact us. We are always here to help and make your events experience as smooth and enjoyable as possible.</h5>
<h4>Best regards,</h4>
<h3>Evento</h3>
</body>
</html>", "abonnement/export-pdf.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\abonnement\\export-pdf.html.twig");
    }
}

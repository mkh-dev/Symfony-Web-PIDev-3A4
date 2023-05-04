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

/* calendrier/index.html.twig */
class __TwigTemplate_0e08eae03fed41d55d0cecf391a916d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "calendrier/main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $this->parent = $this->loadTemplate("calendrier/main.html.twig", "calendrier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Calendrier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
        #calendrier{
            width: 80%;
            margin: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <div id=\"calendrier\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "<script>
    window.onload = () => {
        let calendarElt = document.querySelector(\"#calendrier\")

        let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'timeGridWeek',
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },
            events: ";
        // line 33
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })());
        echo ",
            editable: true,
            eventResizableFromStart: true
        })

        calendar.on('eventChange', (e) => {
            let url = `/api/\${e.event.id}/edit`
            let donnees = {
                \"title\": e.event.title,
                \"description\": e.event.extendedProps.description,
                \"start\": e.event.start,
                \"end\": e.event.end,
                \"backgroundColor\": e.event.backgroundColor,
                \"borderColor\": e.event.borderColor,
                \"textColor\": e.event.textColor,
                \"allDay\": e.event.allDay
            }
            
            let xhr = new XMLHttpRequest

            xhr.open(\"PUT\", url)
            xhr.send(JSON.stringify(donnees))
        })

        calendar.render()
    }
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "calendrier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  111 => 20,  104 => 19,  95 => 15,  88 => 14,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'calendrier/main.html.twig' %}

{% block title %}Calendrier{% endblock %}

{% block stylesheets %}
    <style>
        #calendrier{
            width: 80%;
            margin: auto;
        }
    </style>
{% endblock %}

{% block body %}
    <div id=\"calendrier\">
    </div>
{% endblock %}

{% block javascripts %}
<script>
    window.onload = () => {
        let calendarElt = document.querySelector(\"#calendrier\")

        let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'timeGridWeek',
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },
            events: {{ data|raw }},
            editable: true,
            eventResizableFromStart: true
        })

        calendar.on('eventChange', (e) => {
            let url = `/api/\${e.event.id}/edit`
            let donnees = {
                \"title\": e.event.title,
                \"description\": e.event.extendedProps.description,
                \"start\": e.event.start,
                \"end\": e.event.end,
                \"backgroundColor\": e.event.backgroundColor,
                \"borderColor\": e.event.borderColor,
                \"textColor\": e.event.textColor,
                \"allDay\": e.event.allDay
            }
            
            let xhr = new XMLHttpRequest

            xhr.open(\"PUT\", url)
            xhr.send(JSON.stringify(donnees))
        })

        calendar.render()
    }
</script>

{% endblock %}", "calendrier/index.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\calendrier\\index.html.twig");
    }
}

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

/* reclamations/_form.html.twig */
class __TwigTemplate_48b114bcaaab09a1d6118e70ee2a8bb5 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamations/_form.html.twig"));

        $this->parent = $this->loadTemplate("back/back.html.twig", "reclamations/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/form.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/form.js"), "html", null, true);
        echo "\">
     
    <!----===== Iconscout CSS ===== -->
    <link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">

    <!--<title>Responsive Regisration Form </title>--> 
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "

    

      <main class=\"h-full overflow-y-auto\">
    <div class=\"contrainerform\">
        <header>Gestion des Utilisateurs</header>

<div class=\"fields\">
    <div class=\"input-field\">
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;   padding-left: 60px;\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'label', ["label" => "Prénom"]);
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom"]]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'errors');
        echo "
            </div>
            <div style=\"display:inline-block; width: 45%; float:right; \">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'label', ["label" => "Nom"]);
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;    padding-left: 60px;\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'label', ["label" => "Email"]);
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre email"]]);
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        echo "
            </div>
            <div style=\"display:inline-block; width: 45%; float:right;\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "message", [], "any", false, false, false, 46), 'label', ["label" => "Message"]);
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "message", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre message"]]);
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "message", [], "any", false, false, false, 48), 'errors');
        echo "
            </div>
        </div>


                    <div class=\"buttons\" style=\"display: flex; justify-content: space-between;\">
                <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_index");
        echo "\" class=\"backBtn\">
                    <i class=\"uil uil-navigator\"></i>
                    <span class=\"btnText\">Revenir</span>
                </a>
                <button class=\"submit\">
                    <span class=\"btnText\">";
        // line 59
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</span>
                    <i class=\"uil uil-navigator\"></i>
                </button>
            </div>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "

       </div>
            </div>
            </div>
            </div>
     
    
   </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reclamations/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 63,  191 => 59,  183 => 54,  174 => 48,  170 => 47,  166 => 46,  160 => 43,  156 => 42,  152 => 41,  144 => 36,  140 => 35,  136 => 34,  130 => 31,  126 => 30,  122 => 29,  116 => 26,  104 => 16,  97 => 15,  83 => 8,  79 => 7,  74 => 6,  67 => 5,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/back.html.twig' %}
{% block title %}Utilisateurs{% endblock %}


  {% block stylesheets %}
  {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('back/css/users/form.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('back/css/users/form.js')}}\">
     
    <!----===== Iconscout CSS ===== -->
    <link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">

    <!--<title>Responsive Regisration Form </title>--> 
 {% endblock %}
{% block body %}


    

      <main class=\"h-full overflow-y-auto\">
    <div class=\"contrainerform\">
        <header>Gestion des Utilisateurs</header>

<div class=\"fields\">
    <div class=\"input-field\">
        {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;   padding-left: 60px;\">
                {{ form_label(form.prenom, 'Prénom') }}
                {{ form_widget(form.prenom, {'attr': {'class': 'form-control','placeholder': 'Votre prénom'}}) }}
                {{ form_errors(form.prenom) }}
            </div>
            <div style=\"display:inline-block; width: 45%; float:right; \">
                {{ form_label(form.nom, 'Nom') }}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control','placeholder': 'Votre nom'}}) }}
                {{ form_errors(form.nom) }}
            </div>
        </div>
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;    padding-left: 60px;\">
                {{ form_label(form.email, 'Email') }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder': 'Votre email'}}) }}
                {{ form_errors(form.email) }}
            </div>
            <div style=\"display:inline-block; width: 45%; float:right;\">
                {{ form_label(form.message, 'Message') }}
                {{ form_widget(form.message, {'attr': {'class': 'form-control','placeholder': 'Votre message'}}) }}
                {{ form_errors(form.message) }}
            </div>
        </div>


                    <div class=\"buttons\" style=\"display: flex; justify-content: space-between;\">
                <a href=\"{{ path('app_reclamations_index') }}\" class=\"backBtn\">
                    <i class=\"uil uil-navigator\"></i>
                    <span class=\"btnText\">Revenir</span>
                </a>
                <button class=\"submit\">
                    <span class=\"btnText\">{{ button_label|default('Valider') }}</span>
                    <i class=\"uil uil-navigator\"></i>
                </button>
            </div>
            {{ form_end(form) }}

       </div>
            </div>
            </div>
            </div>
     
    
   </main>
{% endblock %}", "reclamations/_form.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\reclamations\\_form.html.twig");
    }
}

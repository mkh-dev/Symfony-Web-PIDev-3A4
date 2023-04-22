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

/* categorie_prod/_form.html.twig */
class __TwigTemplate_14fbf50164bb4feeae462d0331778468 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_prod/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form-class"]]);
        echo "

  <style>
  /* Style pour le formulaire */
  form {
    max-width: 480px;
    margin: 0 auto;
    padding: 1.6rem;
    border-radius: 24px;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    width: 50%;
  }

  /* Style pour les champs de formulaire */
  label {
    display: block;
    margin-top: 1rem;
    font-weight: bold;
    font-size: 0.8rem;
  }

  input[type=\"text\"],
  input[type=\"number\"],
  textarea,
  select {
    padding: 0.4rem;
    border-radius: 4px;
    border: none;
    margin-top: 0.4rem;
    font-size: 0.8rem;
    color: #black;
    background-color: #F3F4F6;
    ::placeholder {
      color: #black;
    }
    width: 100%;
  }

  /* Style pour le bouton de formulaire */
  .my-button-class {
    background-color: #E8A803;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 0.4rem 0.8rem;
    font-size: 0.8rem;
    cursor: pointer;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  }

  .my-button-class:hover {
    background-color: #fff;
    color: #E8A803;
  }

  /* Ajout de la classe \"form-control\" pour appliquer les styles Bootstrap aux champs de formulaire */
  .form-control {
    font-size: 0.8rem;
    padding: 0.4rem;
    border-radius: 4px;
    border: none;
    margin-top: 0.4rem;
    color: #black;
    background-color: #F3F4F6;
    ::placeholder {
      color: #000;
    }
  }

  /* Style pour la container de bouton */
  .button-container {
    text-align: center;
    margin-top: 1rem;
  }
</style>

";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "catProd", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Category name"]]);
        echo "

<br>

<div class=\"button-container\">
  <button class=\"my-button-class center-button\">";
        // line 84
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
</div>
";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "categorie_prod/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 86,  131 => 84,  123 => 79,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form, {'attr': {'class': 'my-form-class'}}) }}

  <style>
  /* Style pour le formulaire */
  form {
    max-width: 480px;
    margin: 0 auto;
    padding: 1.6rem;
    border-radius: 24px;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    width: 50%;
  }

  /* Style pour les champs de formulaire */
  label {
    display: block;
    margin-top: 1rem;
    font-weight: bold;
    font-size: 0.8rem;
  }

  input[type=\"text\"],
  input[type=\"number\"],
  textarea,
  select {
    padding: 0.4rem;
    border-radius: 4px;
    border: none;
    margin-top: 0.4rem;
    font-size: 0.8rem;
    color: #black;
    background-color: #F3F4F6;
    ::placeholder {
      color: #black;
    }
    width: 100%;
  }

  /* Style pour le bouton de formulaire */
  .my-button-class {
    background-color: #E8A803;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 0.4rem 0.8rem;
    font-size: 0.8rem;
    cursor: pointer;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  }

  .my-button-class:hover {
    background-color: #fff;
    color: #E8A803;
  }

  /* Ajout de la classe \"form-control\" pour appliquer les styles Bootstrap aux champs de formulaire */
  .form-control {
    font-size: 0.8rem;
    padding: 0.4rem;
    border-radius: 4px;
    border: none;
    margin-top: 0.4rem;
    color: #black;
    background-color: #F3F4F6;
    ::placeholder {
      color: #000;
    }
  }

  /* Style pour la container de bouton */
  .button-container {
    text-align: center;
    margin-top: 1rem;
  }
</style>

{{ form_row(form.catProd, {'attr': {'class': 'form-control', 'placeholder': 'Category name'}}) }}

<br>

<div class=\"button-container\">
  <button class=\"my-button-class center-button\">{{ button_label|default('Save') }}</button>
</div>
{{ form_end(form) }}
", "categorie_prod/_form.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\categorie_prod\\_form.html.twig");
    }
}

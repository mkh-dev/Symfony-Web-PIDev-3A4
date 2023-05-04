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

/* produit/_form.html.twig */
class __TwigTemplate_4048dc21f39565fec9e3ef878791db86 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form-class"]]);
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
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "nomProd", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de produit"]]);
        echo "
";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Description de produit"]]);
        echo "
";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "prix", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prix de produit"]]);
        echo "
";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "quantite", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Quantité de produit"]]);
        echo "
";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nomPart", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de fournisseur"]]);
        echo "
";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "idCatProd", [], "any", false, false, false, 84), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
<br>

<div class=\"button-container\">
  <button class=\"my-button-class center-button\">";
        // line 88
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
</div>
";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 90,  151 => 88,  144 => 84,  140 => 83,  136 => 82,  132 => 81,  128 => 80,  124 => 79,  120 => 78,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'my-form-class'}}) }}

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

{{ form_row(form.nomProd, {'attr': {'class': 'form-control', 'placeholder': 'Nom de produit'}}) }}
{{ form_row(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description de produit'}}) }}
{{ form_row(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Prix de produit'}}) }}
{{ form_row(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Quantité de produit'}}) }}
{{ form_row(form.nomPart, {'attr': {'class': 'form-control', 'placeholder': 'Nom de fournisseur'}}) }}
{{ form_row(form.image, {'attr': {'class': 'form-control'}}) }}
{{ form_row(form.idCatProd, {'attr': {'class': 'form-control'}}) }}
<br>

<div class=\"button-container\">
  <button class=\"my-button-class center-button\">{{ button_label|default('Save') }}</button>
</div>
{{ form_end(form) }}", "produit/_form.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\produit\\_form.html.twig");
    }
}

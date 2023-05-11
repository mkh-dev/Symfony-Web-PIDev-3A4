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

/* abonnement/_form.html.twig */
class __TwigTemplate_a48022ef7355180696ea8d34fa536be2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/_form.html.twig"));

        // line 1
        echo "
<style>
.my-form {
    background-color: #f5f5f5;
    border: 2px solid #ddd;
    padding: 10px;
}
.my-form button {
    background-color: #F1C40F;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0px 5px 10px #888888;
    transition: all 0.2s ease-in-out;
    margin-top: 20px;
}
.my-form button:hover {
    background-color: #e6b800;
    transform: translateY(-2px);
}
.my-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}
.my-form input[type=text], 
.my-form input[type=email], 
.my-form textarea {
    width: 10%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: none;
    transition: all 0.2s ease-in-out;
}
.my-form input[type=text]:focus, 
.my-form input[type=email]:focus, 
.my-form textarea:focus {
    border: 1px solid #F1C40F;
    box-shadow: 0px 0px 10px #F1C40F;
    outline: none;
}
/* Set a max-height of 200px for the textarea */
.my-form textarea {
    max-height: 200px;
}
h1 {
  font-family: 'Pacifico', cursive;
  font-size: 20px;
  margin-bottom: 20px;
  text-align: center;
  text-shadow: 2px 2px #f5f5f5;
}



    .btnd {
        background-color: #F1C40F;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
margin-top: 25px;   
margin-left: 45px;  }

    .btnd:hover {
        background-color: #E6B90F;
        cursor: pointer;
    }


</style>



";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form", "novalidate" => "novalidate"]]);
        echo "

    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'widget');
        echo "

    <button class=\"btnd\">";
        // line 83
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 83, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 84,  130 => 83,  125 => 81,  120 => 79,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<style>
.my-form {
    background-color: #f5f5f5;
    border: 2px solid #ddd;
    padding: 10px;
}
.my-form button {
    background-color: #F1C40F;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0px 5px 10px #888888;
    transition: all 0.2s ease-in-out;
    margin-top: 20px;
}
.my-form button:hover {
    background-color: #e6b800;
    transform: translateY(-2px);
}
.my-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}
.my-form input[type=text], 
.my-form input[type=email], 
.my-form textarea {
    width: 10%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: none;
    transition: all 0.2s ease-in-out;
}
.my-form input[type=text]:focus, 
.my-form input[type=email]:focus, 
.my-form textarea:focus {
    border: 1px solid #F1C40F;
    box-shadow: 0px 0px 10px #F1C40F;
    outline: none;
}
/* Set a max-height of 200px for the textarea */
.my-form textarea {
    max-height: 200px;
}
h1 {
  font-family: 'Pacifico', cursive;
  font-size: 20px;
  margin-bottom: 20px;
  text-align: center;
  text-shadow: 2px 2px #f5f5f5;
}



    .btnd {
        background-color: #F1C40F;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
margin-top: 25px;   
margin-left: 45px;  }

    .btnd:hover {
        background-color: #E6B90F;
        cursor: pointer;
    }


</style>



{{ form_start(form, {'attr': {'class': 'my-form', 'novalidate': 'novalidate'}}) }}

    {{ form_widget(form) }}

    <button class=\"btnd\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}
", "abonnement/_form.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\abonnement\\_form.html.twig");
    }
}

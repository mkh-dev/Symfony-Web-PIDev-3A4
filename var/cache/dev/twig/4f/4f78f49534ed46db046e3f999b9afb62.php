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

/* evenement/_delete_form.html.twig */
class __TwigTemplate_5667de24a57596de03e25d5b890563b1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_delete_form.html.twig"));

        // line 1
        echo "
<style>
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


<form method=\"post\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["idEvent" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "idEvent", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "idEvent", [], "any", false, false, false, 24))), "html", null, true);
        echo "\">
    <br>
    <button class=\"boutton\">Delete</button>
</form>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  63 => 22,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<style>
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


<form method=\"post\" action=\"{{ path('app_evenement_delete', {'idEvent': evenement.idEvent}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.idEvent) }}\">
    <br>
    <button class=\"boutton\">Delete</button>
</form>


", "evenement/_delete_form.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\evenement\\_delete_form.html.twig");
    }
}

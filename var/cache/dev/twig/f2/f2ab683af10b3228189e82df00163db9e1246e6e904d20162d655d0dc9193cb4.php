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

/* reservation/_delete_form.html.twig */
class __TwigTemplate_770f7c5739ee25d994c6daddf45cbe3a6de0d1cf31f6a29e963d0d488aa82449 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_delete_form.html.twig"));

        // line 1
        echo "


<style>
    h1 {
        font-size: 2em;
        margin-bottom: 20px;
        color: #333;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #F1C40F;
        color: white;
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
<form method=\"post\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["numres" => twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), "numres", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "numres", [], "any", false, false, false, 45))), "html", null, true);
        echo "\">
    <button class=\"btnd\">Supprimer</button>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  85 => 44,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<style>
    h1 {
        font-size: 2em;
        margin-bottom: 20px;
        color: #333;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #F1C40F;
        color: white;
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
<form method=\"post\" action=\"{{ path('app_reservation_delete', {'numres': reservation.numres}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.numres) }}\">
    <button class=\"btnd\">Supprimer</button>
</form>
", "reservation/_delete_form.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\reservation\\_delete_form.html.twig");
    }
}

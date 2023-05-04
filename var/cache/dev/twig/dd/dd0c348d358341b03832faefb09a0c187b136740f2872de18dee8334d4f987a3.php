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

/* categorie_event/_delete_form.html.twig */
class __TwigTemplate_a3b8d74256403830e63287206fdaeb7f0b4d2d901bc6e8ccf919d8bc0449ee00 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_event/_delete_form.html.twig"));

        // line 1
        echo "<style>
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
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_event_delete", ["idCatEvent" => twig_get_attribute($this->env, $this->source, (isset($context["categorie_event"]) || array_key_exists("categorie_event", $context) ? $context["categorie_event"] : (function () { throw new RuntimeError('Variable "categorie_event" does not exist.', 21, $this->source); })()), "idCatEvent", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["categorie_event"]) || array_key_exists("categorie_event", $context) ? $context["categorie_event"] : (function () { throw new RuntimeError('Variable "categorie_event" does not exist.', 22, $this->source); })()), "idCatEvent", [], "any", false, false, false, 22))), "html", null, true);
        echo "\">
    <br>
    <button class=\"boutton\">Delete</button>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie_event/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  62 => 21,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
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


<form method=\"post\" action=\"{{ path('app_categorie_event_delete', {'idCatEvent': categorie_event.idCatEvent}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie_event.idCatEvent) }}\">
    <br>
    <button class=\"boutton\">Delete</button>
</form>
", "categorie_event/_delete_form.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\categorie_event\\_delete_form.html.twig");
    }
}

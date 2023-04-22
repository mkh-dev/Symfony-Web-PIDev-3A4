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

/* produit/_delete_form.html.twig */
class __TwigTemplate_1c050d90bbf6cb2fc77a883742e5c804 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_delete_form.html.twig"));

        // line 1
        echo "
<style>
    /* Style pour la boîte de confirmation de suppression */
    .delete-confirm-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 750px;
        max-width: 90%;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0,0,0,.2);
        z-index: 9999;
    }
    .delete-confirm-box h2 {
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 20px;
        text-align: center;
    }
    .delete-confirm-box p {
        margin-bottom: 20px;
        font-size: 16px;
        text-align: center;
    }
    .delete-confirm-box .btn-group {
        display: flex;
        justify-content: center;
    }
    .delete-confirm-box .btn-group button {
        margin: 0 10px;
        display: inline-block;
        padding: 12px 24px;
        border-radius: 30px;
        background-color: #E8A803;
        color: #fff;
        text-decoration: none;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        font-size: 16px;
        line-height: 1;
        border: none;
        cursor: pointer;
    }
    .delete-confirm-box img {
        display: block;
        margin: 0 auto;
        width: 150px;
    }
</style>



";
        // line 56
        echo "<form id=\"delete-form-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 56, $this->source); })()), "idProd", [], "any", false, false, false, 56), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete", ["idProd" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 56, $this->source); })()), "idProd", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 57, $this->source); })()), "idProd", [], "any", false, false, false, 57))), "html", null, true);
        echo "\">
</form>
<button type=\"button\" onclick=\"confirmDelete('";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 59, $this->source); })()), "idProd", [], "any", false, false, false, 59), "html", null, true);
        echo "')\" style=\"background:none; border:none; padding:0;\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/traverser.png"), "html", null, true);
        echo "\" alt=\"Supprimer le produit\" style=\"width: 20px; height: 20px;\"></button>

<script>
    function confirmDelete(id) {
        var confirmBox = document.createElement('div');
        confirmBox.classList.add('delete-confirm-box');
        confirmBox.innerHTML = `
            <img src=\"/back/img/logo.png\" alt=\"logo\">
            <h2>Confirmation de suppression</h2>
            <p>Êtes-vous sûr(e) de vouloir supprimer cet élément ?</p>
            <div class=\"btn-group\">
                <button type=\"submit\" class=\"btn\" onclick=\"document.getElementById('delete-form-\${id}').submit()\">Oui</button>
                <button type=\"button\" class=\"btn\" onclick=\"closeConfirmBox()\">Non</button>
            </div>
        `;
        document.body.appendChild(confirmBox);
        return false;
    }

    function closeConfirmBox() {
        var confirmBox = document.querySelector('.delete-confirm-box');
        if (confirmBox) {
            confirmBox.remove();
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 59,  103 => 57,  96 => 56,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<style>
    /* Style pour la boîte de confirmation de suppression */
    .delete-confirm-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 750px;
        max-width: 90%;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0,0,0,.2);
        z-index: 9999;
    }
    .delete-confirm-box h2 {
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 20px;
        text-align: center;
    }
    .delete-confirm-box p {
        margin-bottom: 20px;
        font-size: 16px;
        text-align: center;
    }
    .delete-confirm-box .btn-group {
        display: flex;
        justify-content: center;
    }
    .delete-confirm-box .btn-group button {
        margin: 0 10px;
        display: inline-block;
        padding: 12px 24px;
        border-radius: 30px;
        background-color: #E8A803;
        color: #fff;
        text-decoration: none;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        font-size: 16px;
        line-height: 1;
        border: none;
        cursor: pointer;
    }
    .delete-confirm-box img {
        display: block;
        margin: 0 auto;
        width: 150px;
    }
</style>



{# Modifier le formulaire de suppression #}
<form id=\"delete-form-{{ produit.idProd }}\" method=\"post\" action=\"{{ path('app_produit_delete', {'idProd': produit.idProd}) }}\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.idProd) }}\">
</form>
<button type=\"button\" onclick=\"confirmDelete('{{ produit.idProd }}')\" style=\"background:none; border:none; padding:0;\"><img src=\"{{ asset('back/img/traverser.png') }}\" alt=\"Supprimer le produit\" style=\"width: 20px; height: 20px;\"></button>

<script>
    function confirmDelete(id) {
        var confirmBox = document.createElement('div');
        confirmBox.classList.add('delete-confirm-box');
        confirmBox.innerHTML = `
            <img src=\"/back/img/logo.png\" alt=\"logo\">
            <h2>Confirmation de suppression</h2>
            <p>Êtes-vous sûr(e) de vouloir supprimer cet élément ?</p>
            <div class=\"btn-group\">
                <button type=\"submit\" class=\"btn\" onclick=\"document.getElementById('delete-form-\${id}').submit()\">Oui</button>
                <button type=\"button\" class=\"btn\" onclick=\"closeConfirmBox()\">Non</button>
            </div>
        `;
        document.body.appendChild(confirmBox);
        return false;
    }

    function closeConfirmBox() {
        var confirmBox = document.querySelector('.delete-confirm-box');
        if (confirmBox) {
            confirmBox.remove();
        }
    }
</script>
", "produit/_delete_form.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\produit\\_delete_form.html.twig");
    }
}

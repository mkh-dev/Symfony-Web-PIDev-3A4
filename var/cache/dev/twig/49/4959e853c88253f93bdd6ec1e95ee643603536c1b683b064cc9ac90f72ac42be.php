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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_19cadd71a5a22cc048449adb5996e97cbbca25b513825eb9e49aeed7941f3c89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<h3>Bonjour,</h3>

<p>
Nous vous remercions de vous être inscrit à Evento ! Votre compte a été créé avec succès.
<br>
Veuillez cliquer sur le lien ci-dessous pour confirmer votre adresse e-mail et activer votre compte :<br><br>
    <a href=\"";
        // line 7
        echo (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 7, $this->source); })());
        echo "\">Confirmer mon e-mail</a>.
    Ce lien expirera dans ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 8, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 8, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".
   

</p>
<br>
<p>  Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter. </p>
<br>
<p>
    Cordialement,
<br><br>
L'équipe Evento
</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Bonjour,</h3>

<p>
Nous vous remercions de vous être inscrit à Evento ! Votre compte a été créé avec succès.
<br>
Veuillez cliquer sur le lien ci-dessous pour confirmer votre adresse e-mail et activer votre compte :<br><br>
    <a href=\"{{ signedUrl|raw }}\">Confirmer mon e-mail</a>.
    Ce lien expirera dans {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
   

</p>
<br>
<p>  Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter. </p>
<br>
<p>
    Cordialement,
<br><br>
L'équipe Evento
</p>
", "registration/confirmation_email.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\registration\\confirmation_email.html.twig");
    }
}

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

/* registration/register.html.twig */
class __TwigTemplate_9134320ffab56dc27b7779d567f63054 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Evento</title>

    <!-- CSS FILES -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
     <link rel=\"icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/tab.png"), "html", null, true);
        echo "\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap\" rel=\"stylesheet\">

    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/templatemo-festava-live.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

</head>

<body>

    <main>

        <header class=\"site-header\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-12 col-12 d-flex flex-wrap\">
                        <p class=\"d-flex me-4 mb-0\">
                            <i class=\"bi-person custom-icon me-2\" style=\"color: black;\"></i>
                            <strong class=\"text-dark\">Bienvenue dans Evento</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo de Evento\" style=\"width: 13%; margin-top: -5px;\">
                    Evento
                </a>

                <a href=\"ticket.html\" class=\"btn custom-btn d-lg-none ms-auto me-4\">Se Connecter</a>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav align-items-lg-center ms-auto me-lg-5\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_1\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_2\">À propos</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_3\">Artistes</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_4\">Événement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_5\">Abonnement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_6\">Contact</a>
                        </li>
                    </ul>

                    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn custom-btn d-lg-block d-none\">Se Connecter</a>
                </div>
            </div>
        </nav>


      <section class=\"ticket-section section-padding\">
    <div class=\"section-overlay\"></div>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8 col-md-10\">
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 110
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            <form class=\"custom-form ticket-form mb-5 mb-lg-0\" method=\"POST\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
            ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <h2 class=\"text-center mb-4\">Inscription</h2>
                <div class=\"form-group\">
                    <label for=\"prenom\">Prenom:</label>
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "prenom", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom", "required" => "required"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom\">Nom:</label>
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "nom", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom", "required" => "required"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"email\">Email:</label>
                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email", "required" => "required", "pattern" => "[^@]+@[^@]+.[a-zA-Z]{2,6}"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"datenaissance\">Date de Naissance:</label>
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 129, $this->source); })()), "datenaissance", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre date de naissance", "required" => "required"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"numtel\">Numéro de téléphone:</label>
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 133, $this->source); })()), "numtel", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre numéro de téléphone", "required" => "required"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"userrole\">Role:</label>
                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "userrole", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                </div>
 <div class=\"form-group\">
    <label for=\"password\">Mot de passe:</label>
    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "password", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre mot de passe", "required" => "required"]]);
        echo "
</div>



                <div class=\"form-group form-check\">
                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 147, $this->source); })()), "agreeTerms", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-check-input", "required" => "required"]]);
        echo "
                    <label class=\"form-check-label\" for=\"agreeTerms\">J'accepte les conditions d'utilisation.</label>
                </div>
                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                </div>
                ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 153, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>


</section>

    </main>


    <footer class=\"site-footer\">
        <div class=\"site-footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12\">
                        <h2 class=\"text-white mb-lg-0\">Evento</h2>
                    </div>

                    <div class=\"col-lg-6 col-12 d-flex justify-content-lg-end align-items-center\">
                        <ul class=\"social-icon d-flex justify-content-lg-end\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-twitter\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-apple\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-instagram\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-youtube\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-pinterest\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 col-12 mb-4 pb-2\">
                    <h5 class=\"site-footer-title mb-3\">Liens</h5>

                    <ul class=\"site-footer-links\">
                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Accueil</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">À propos</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Artistes</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Événement</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Abonnement</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-6 col-12 mb-4 mb-lg-0\">
                    <h5 class=\"site-footer-title mb-3\">Tu as une question ?</h5>

                    <p class=\"text-white d-flex mb-1\">
                        <a href=\"tel: 090-080-0760\" class=\"site-footer-link\">
                            090-080-0760
                        </a>
                    </p>

                    <p class=\"text-white d-flex\">
                        <a href=\"mailto:pidevtestapp@gmail.com\" class=\"site-footer-link\">
                            pidevtestapp@gmail.com
                        </a>
                    </p>
                </div>

                <div class=\"col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0\">
                    <h5 class=\"site-footer-title mb-3\">Location</h5>

                    <p class=\"text-white d-flex mt-3 mb-2\">
                       18, rue de l'Usine - ZI Aéroport Charguia II 2035 Ariana</p>

                    <a class=\"link-fx-1 color-contrast-higher mt-3\" href=\"#\">
                        <span>Notre Carte</span>
                        <svg class=\"icon\" viewBox=\"0 0 32 32\" aria-hidden=\"true\">
                            <g fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <circle cx=\"16\" cy=\"16\" r=\"15.5\"></circle>
                                <line x1=\"10\" y1=\"18\" x2=\"16\" y2=\"12\"></line>
                                <line x1=\"16\" y1=\"12\" x2=\"22\" y2=\"18\"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

      
    </footer>

    <!--

T e m p l a t e M o

-->
    <!-- JAVASCRIPT FILES -->
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 292,  400 => 291,  396 => 290,  392 => 289,  253 => 153,  244 => 147,  235 => 141,  228 => 137,  221 => 133,  214 => 129,  207 => 125,  200 => 121,  193 => 117,  186 => 113,  181 => 112,  172 => 110,  168 => 109,  153 => 97,  112 => 59,  76 => 26,  71 => 24,  66 => 22,  57 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Evento</title>

    <!-- CSS FILES -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
     <link rel=\"icon\" href=\"{{asset('front/images/tab.png')}}\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap\" rel=\"stylesheet\">

    <link href=\"{{asset('front/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <link href=\"{{asset('front/css/bootstrap-icons.css')}}\" rel=\"stylesheet\">

    <link href=\"{{asset('front/css/templatemo-festava-live.css')}}\" rel=\"stylesheet\">
    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

</head>

<body>

    <main>

        <header class=\"site-header\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-12 col-12 d-flex flex-wrap\">
                        <p class=\"d-flex me-4 mb-0\">
                            <i class=\"bi-person custom-icon me-2\" style=\"color: black;\"></i>
                            <strong class=\"text-dark\">Bienvenue dans Evento</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"{{asset('front/images/logo.png')}}\" alt=\"Logo de Evento\" style=\"width: 13%; margin-top: -5px;\">
                    Evento
                </a>

                <a href=\"ticket.html\" class=\"btn custom-btn d-lg-none ms-auto me-4\">Se Connecter</a>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav align-items-lg-center ms-auto me-lg-5\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_1\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_2\">À propos</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_3\">Artistes</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_4\">Événement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_5\">Abonnement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"index.html#section_6\">Contact</a>
                        </li>
                    </ul>

                    <a href=\"{{ path('app_login') }}\" class=\"btn custom-btn d-lg-block d-none\">Se Connecter</a>
                </div>
            </div>
        </nav>


      <section class=\"ticket-section section-padding\">
    <div class=\"section-overlay\"></div>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8 col-md-10\">
            {% for flash_error in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
            {% endfor %}
            <form class=\"custom-form ticket-form mb-5 mb-lg-0\" method=\"POST\" action=\"{{ path('app_register') }}\">
            {{ form_start(registrationForm,{'attr': {'novalidate': 'novalidate'}} ) }}
                <h2 class=\"text-center mb-4\">Inscription</h2>
                <div class=\"form-group\">
                    <label for=\"prenom\">Prenom:</label>
                    {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre prénom', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom\">Nom:</label>
                    {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre nom', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"email\">Email:</label>
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre email', 'required': 'required', 'pattern': '[^@]+@[^@]+\\.[a-zA-Z]{2,6}'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"datenaissance\">Date de Naissance:</label>
                    {{ form_widget(registrationForm.datenaissance, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre date de naissance', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"numtel\">Numéro de téléphone:</label>
                    {{ form_widget(registrationForm.numtel, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre numéro de téléphone', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"userrole\">Role:</label>
                    {{ form_widget(registrationForm.userrole, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                </div>
 <div class=\"form-group\">
    <label for=\"password\">Mot de passe:</label>
    {{ form_widget(registrationForm.password, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre mot de passe', 'required': 'required'}}) }}
</div>



                <div class=\"form-group form-check\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input', 'required': 'required'}}) }}
                    <label class=\"form-check-label\" for=\"agreeTerms\">J'accepte les conditions d'utilisation.</label>
                </div>
                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                </div>
                {{ form_end(registrationForm) }}
            </form>
        </div>
    </div>
</div>


</section>

    </main>


    <footer class=\"site-footer\">
        <div class=\"site-footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12\">
                        <h2 class=\"text-white mb-lg-0\">Evento</h2>
                    </div>

                    <div class=\"col-lg-6 col-12 d-flex justify-content-lg-end align-items-center\">
                        <ul class=\"social-icon d-flex justify-content-lg-end\">
                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-twitter\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-apple\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-instagram\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-youtube\"></span>
                                </a>
                            </li>

                            <li class=\"social-icon-item\">
                                <a href=\"#\" class=\"social-icon-link\">
                                    <span class=\"bi-pinterest\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 col-12 mb-4 pb-2\">
                    <h5 class=\"site-footer-title mb-3\">Liens</h5>

                    <ul class=\"site-footer-links\">
                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Accueil</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">À propos</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Artistes</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Événement</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Abonnement</a>
                        </li>

                        <li class=\"site-footer-link-item\">
                            <a href=\"#\" class=\"site-footer-link\">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-6 col-12 mb-4 mb-lg-0\">
                    <h5 class=\"site-footer-title mb-3\">Tu as une question ?</h5>

                    <p class=\"text-white d-flex mb-1\">
                        <a href=\"tel: 090-080-0760\" class=\"site-footer-link\">
                            090-080-0760
                        </a>
                    </p>

                    <p class=\"text-white d-flex\">
                        <a href=\"mailto:pidevtestapp@gmail.com\" class=\"site-footer-link\">
                            pidevtestapp@gmail.com
                        </a>
                    </p>
                </div>

                <div class=\"col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0\">
                    <h5 class=\"site-footer-title mb-3\">Location</h5>

                    <p class=\"text-white d-flex mt-3 mb-2\">
                       18, rue de l'Usine - ZI Aéroport Charguia II 2035 Ariana</p>

                    <a class=\"link-fx-1 color-contrast-higher mt-3\" href=\"#\">
                        <span>Notre Carte</span>
                        <svg class=\"icon\" viewBox=\"0 0 32 32\" aria-hidden=\"true\">
                            <g fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <circle cx=\"16\" cy=\"16\" r=\"15.5\"></circle>
                                <line x1=\"10\" y1=\"18\" x2=\"16\" y2=\"12\"></line>
                                <line x1=\"16\" y1=\"12\" x2=\"22\" y2=\"18\"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

      
    </footer>

    <!--

T e m p l a t e M o

-->
    <!-- JAVASCRIPT FILES -->
    <script src=\"{{asset('front/js/jquery.min.js')}}\" ></script>
    <script src=\"{{asset('front/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('front/js/jquery.sticky.js')}}\"></script>
    <script src=\"{{asset('front/js/custom.js')}}\"></script>

</body>

</html>


", "registration/register.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\registration\\register.html.twig");
    }
}

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

/* register/index.html.twig */
class __TwigTemplate_d0dae32a80b96f7654f59a5b05c2a666 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

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
    <div class=\"row\">
        <div class=\"col-lg-6 col-10 mx-auto\">
            ";
        // line 110
        $this->loadTemplate("register.html.twig", "register/index.html.twig", 110)->display($context);
        // line 111
        echo "        </div>
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
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 246,  313 => 245,  309 => 244,  305 => 243,  171 => 111,  169 => 110,  153 => 97,  112 => 59,  76 => 26,  71 => 24,  66 => 22,  57 => 16,  40 => 1,);
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
    <div class=\"row\">
        <div class=\"col-lg-6 col-10 mx-auto\">
            {% include 'register.html.twig' %}
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

</html>", "register/index.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\register\\index.html.twig");
    }
}

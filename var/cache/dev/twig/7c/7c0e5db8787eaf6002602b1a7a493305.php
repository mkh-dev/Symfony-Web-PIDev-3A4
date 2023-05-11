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

/* evenement/index.html.twig */
class __TwigTemplate_0d1a6b2cda7ec36540cf69caff2d0f33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
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
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo de Evento\" style=\"width: 13%; margin-top: -5px;\">
                    Evento
                </a>

                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn custom-btn d-lg-none ms-auto me-4\">Se Connecter</a>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav align-items-lg-center ms-auto me-lg-5\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_1\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_2\">À propos</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_3\">Artistes</a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_index");
        echo "\" class=\"nav-link click-scroll\">Événement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_5\">Abonnement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_6\">Contact</a>
                        </li>
                    </ul>

                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/login.html.twig"), "html", null, true);
        echo "\" class=\"btn custom-btn d-lg-block d-none\">Se Connecter</a>
                </div>
            </div>
        </nav>


        <section class=\"hero-section\" id=\"section_1\">
            <div class=\"section-overlay\"></div>

            <div class=\"container d-flex justify-content-center align-items-center\">
                <div class=\"row\">

                    <div class=\"col-12 mt-auto mb-5 text-center\">
                        <small>Evento Présente</small>

                        <h1 class=\"text-white mb-5\">Night Live 2023</h1>

                        <a class=\"btn custom-btn smoothscroll\" href=\"#section_2\">C'est parti</a>
                    </div>

                    <div class=\"col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center\">
                        <div class=\"date-wrap\">
                            <h5 class=\"text-white\">
                                <i class=\"custom-icon bi-clock me-2\"></i>
                                10 - 12, Nov 2023
                            </h5>
                        </div>

                        <div class=\"location-wrap mx-auto py-3 py-lg-0\">
                            <h5 class=\"text-white\">
                                <i class=\"custom-icon bi-geo-alt me-2\"></i>
                                Billionaire, Gammarth
                            </h5>
                        </div>

                        <div class=\"social-share\">
                            <ul class=\"social-icon d-flex align-items-center justify-content-center\">
                                <span class=\"text-white me-3\">Partagé:</span>

                                <li class=\"social-icon-item\">
                                    <a href=\"#\" class=\"social-icon-link\">
                                        <span class=\"bi-facebook\"></span>
                                    </a>
                                </li>

                                <li class=\"social-icon-item\">
                                    <a href=\"#\" class=\"social-icon-link\">
                                        <span class=\"bi-twitter\"></span>
                                    </a>
                                </li>

                                <li class=\"social-icon-item\">
                                    <a href=\"#\" class=\"social-icon-link\">
                                        <span class=\"bi-instagram\"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"video-wrap\">
                <video autoplay=\"\" loop=\"\" muted=\"\" class=\"custom-video\" poster=\"\">
                    <source src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/video/pexels-2022395.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>








        <section class=\"schedule-section section-padding\" id=\"section_4\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12 text-center\">
                        <h2 class=\"text-white mb-4\">Nos événements</h1>

                            <div class=\"table-responsive\">




                                <div class=\"carousel-container\">
                                    <div class=\"carousel\">
                                        <!--debut-->
                                        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 159, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 160
            echo "                                        <div class=\"card-container\">
                                            <div class=\"card\">

                                                <div class=\"card-content\">
                                                    <h3>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 164), "html", null, true);
            echo " <br/> El Maestro</h3>
                                                    <p>Date Debut: ";
            // line 165
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 165)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 165), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                                                    <p>Date Fin: ";
            // line 166
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 166), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                                                    <p>Location: ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieuEvent", [], "any", false, false, false, 167), "html", null, true);
            echo "</p>
                                                    <p>Prix: ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 168), "html", null, true);
            echo "</p>
                                                    <p>Capacite: ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "capacite", [], "any", false, false, false, 169), "html", null, true);
            echo "</p>
                                                    <p>Description: ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "descriptionEvent", [], "any", false, false, false, 170), "html", null, true);
            echo "</p>
                                                    <a href=\"#\" class=\"btn\">Réserver</a>

                                                </div>
                                            </div>
                                        </div>
                                        <!--debut-->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
                                    </div>
                                    <div class=\"buttons-container\">
                                        <button id=\"prev-btn\" class=\"btn\">Prev</button>
                                        <button id=\"next-btn\" class=\"btn\">Next</button>
                                    </div>
                                </div>







                            </div>
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
                        18, rue de l'Usine - ZI Aéroport Charguia II 2035 Ariana </p>

                    <a class=\"link-fx-1 color-contrast-higher mt-3\" href=\"#\">
                        <span>Notre carte</span>
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
<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6444190231ebfa0fe7f9cfee/1gupcdjg4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 178,  277 => 170,  273 => 169,  269 => 168,  265 => 167,  261 => 166,  257 => 165,  253 => 164,  247 => 160,  243 => 159,  211 => 130,  144 => 66,  129 => 54,  104 => 32,  97 => 28,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evenement index{% endblock %}

{% block body %}

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

                <a href=\"{{ path('app_login') }}\" class=\"btn custom-btn d-lg-none ms-auto me-4\">Se Connecter</a>

                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav align-items-lg-center ms-auto me-lg-5\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_1\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_2\">À propos</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_3\">Artistes</a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_transport_index')}}\" class=\"nav-link click-scroll\">Événement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_5\">Abonnement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_6\">Contact</a>
                        </li>
                    </ul>

                    <a href=\"{{asset('front/login.html.twig')}}\" class=\"btn custom-btn d-lg-block d-none\">Se Connecter</a>
                </div>
            </div>
        </nav>


        <section class=\"hero-section\" id=\"section_1\">
            <div class=\"section-overlay\"></div>

            <div class=\"container d-flex justify-content-center align-items-center\">
                <div class=\"row\">

                    <div class=\"col-12 mt-auto mb-5 text-center\">
                        <small>Evento Présente</small>

                        <h1 class=\"text-white mb-5\">Night Live 2023</h1>

                        <a class=\"btn custom-btn smoothscroll\" href=\"#section_2\">C'est parti</a>
                    </div>

                    <div class=\"col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center\">
                        <div class=\"date-wrap\">
                            <h5 class=\"text-white\">
                                <i class=\"custom-icon bi-clock me-2\"></i>
                                10 - 12, Nov 2023
                            </h5>
                        </div>

                        <div class=\"location-wrap mx-auto py-3 py-lg-0\">
                            <h5 class=\"text-white\">
                                <i class=\"custom-icon bi-geo-alt me-2\"></i>
                                Billionaire, Gammarth
                            </h5>
                        </div>

                        <div class=\"social-share\">
                            <ul class=\"social-icon d-flex align-items-center justify-content-center\">
                                <span class=\"text-white me-3\">Partagé:</span>

                                <li class=\"social-icon-item\">
                                    <a href=\"#\" class=\"social-icon-link\">
                                        <span class=\"bi-facebook\"></span>
                                    </a>
                                </li>

                                <li class=\"social-icon-item\">
                                    <a href=\"#\" class=\"social-icon-link\">
                                        <span class=\"bi-twitter\"></span>
                                    </a>
                                </li>

                                <li class=\"social-icon-item\">
                                    <a href=\"#\" class=\"social-icon-link\">
                                        <span class=\"bi-instagram\"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"video-wrap\">
                <video autoplay=\"\" loop=\"\" muted=\"\" class=\"custom-video\" poster=\"\">
                    <source src=\"{{asset('front/video/pexels-2022395.mp4')}}\" type=\"video/mp4\">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>








        <section class=\"schedule-section section-padding\" id=\"section_4\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-12 text-center\">
                        <h2 class=\"text-white mb-4\">Nos événements</h1>

                            <div class=\"table-responsive\">




                                <div class=\"carousel-container\">
                                    <div class=\"carousel\">
                                        <!--debut-->
                                        {% for evenement in evenements %}
                                        <div class=\"card-container\">
                                            <div class=\"card\">

                                                <div class=\"card-content\">
                                                    <h3>{{ evenement.nomEvent }} <br/> El Maestro</h3>
                                                    <p>Date Debut: {{ evenement.dateDebutEvent ? evenement.dateDebutEvent|date('Y-m-d') : '' }}</p>
                                                    <p>Date Fin: {{ evenement.dateDebutEvent ? evenement.dateDebutEvent|date('Y-m-d') : '' }}</p>
                                                    <p>Location: {{ evenement.lieuEvent }}</p>
                                                    <p>Prix: {{ evenement.prix }}</p>
                                                    <p>Capacite: {{ evenement.capacite }}</p>
                                                    <p>Description: {{ evenement.descriptionEvent }}</p>
                                                    <a href=\"#\" class=\"btn\">Réserver</a>

                                                </div>
                                            </div>
                                        </div>
                                        <!--debut-->
                                        {% endfor %}

                                    </div>
                                    <div class=\"buttons-container\">
                                        <button id=\"prev-btn\" class=\"btn\">Prev</button>
                                        <button id=\"next-btn\" class=\"btn\">Next</button>
                                    </div>
                                </div>







                            </div>
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
                        18, rue de l'Usine - ZI Aéroport Charguia II 2035 Ariana </p>

                    <a class=\"link-fx-1 color-contrast-higher mt-3\" href=\"#\">
                        <span>Notre carte</span>
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
<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6444190231ebfa0fe7f9cfee/1gupcdjg4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\evenement\\index.html.twig");
    }
}

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

/* front/transport/index.html.twig */
class __TwigTemplate_5d949ecb293158c57495d57857cd1f07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/transport/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/transport/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   

    <style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #e9ad19;
  color: white;
}
tr:nth-child(even){background-color: #f2f2f2}

.link-as-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: orange;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  text-align: center;
  font-size: 16px;
  font-weight: bold;
}

/* Effet hover */
.link-as-button:hover {
  background-color: #0062cc;
  color: #fff;
}

</style>
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
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo de Evento\" style=\"width: 13%; margin-top: -5px;\">
                    Evento
                </a>

                <a href=\"";
        // line 67
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
        // line 89
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
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/login.html.twig"), "html", null, true);
        echo "\" class=\"btn custom-btn d-lg-block d-none\">Se Connecter</a>
                </div>
            </div>
        </nav>

<section class=\"pricing-section section-padding section-bg\" id=\"section_5\">
            <div class=\"container\">
                <div class=\"row\">
                <h1>Transport liste</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>IdTransport</th>
                <th>TypeTransport</th>
                <th>DateDepart</th>
                <th>HeureDepart</th>
                <th>LieuDepart</th>
                <th>LieuArriver</th>
                <th>PrixTransport</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 124, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 125
            echo "            <tr>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 126), "html", null, true);
            echo "</td>
                <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "typeTransport", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
                <td>";
            // line 128
            ((twig_get_attribute($this->env, $this->source, $context["transport"], "dateDepart", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "dateDepart", [], "any", false, false, false, 128), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 129
            ((twig_get_attribute($this->env, $this->source, $context["transport"], "heureDepart", [], "any", false, false, false, 129)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "heureDepart", [], "any", false, false, false, 129), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "lieuDepart", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "lieuArriver", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "prixTransport", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_show", ["idTransport" => twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_edit", ["idTransport" => twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 135)]), "html", null, true);
            echo "\">edit</a>                   
                    <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_front_new", ["idTransport" => twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" >vehicule</a>
                      
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        </tbody>
    </table>
<br> <br>
    <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_new");
        echo "\" class=\"link-as-button\" >Create new</a>
    </div></div>
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/transport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 148,  256 => 145,  247 => 141,  237 => 136,  233 => 135,  229 => 134,  224 => 132,  220 => 131,  216 => 130,  212 => 129,  208 => 128,  204 => 127,  200 => 126,  197 => 125,  192 => 124,  166 => 101,  151 => 89,  126 => 67,  119 => 63,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
   

    <style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #e9ad19;
  color: white;
}
tr:nth-child(even){background-color: #f2f2f2}

.link-as-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: orange;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  text-align: center;
  font-size: 16px;
  font-weight: bold;
}

/* Effet hover */
.link-as-button:hover {
  background-color: #0062cc;
  color: #fff;
}

</style>
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

<section class=\"pricing-section section-padding section-bg\" id=\"section_5\">
            <div class=\"container\">
                <div class=\"row\">
                <h1>Transport liste</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>IdTransport</th>
                <th>TypeTransport</th>
                <th>DateDepart</th>
                <th>HeureDepart</th>
                <th>LieuDepart</th>
                <th>LieuArriver</th>
                <th>PrixTransport</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for transport in transports %}
            <tr>
                <td>{{ transport.idTransport }}</td>
                <td>{{ transport.typeTransport }}</td>
                <td>{{ transport.dateDepart ? transport.dateDepart|date('Y-m-d') : '' }}</td>
                <td>{{ transport.heureDepart ? transport.heureDepart|date('H:i:s') : '' }}</td>
                <td>{{ transport.lieuDepart }}</td>
                <td>{{ transport.lieuArriver }}</td>
                <td>{{ transport.prixTransport }}</td>
                <td>
                    <a href=\"{{ path('app_transport_front_show', {'idTransport': transport.idTransport}) }}\">show</a>
                    <a href=\"{{ path('app_transport_front_edit', {'idTransport': transport.idTransport}) }}\">edit</a>                   
                    <a href=\"{{ path('app_vehicule_front_new', {'idTransport': transport.idTransport}) }}\" >vehicule</a>
                      
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<br> <br>
    <a href=\"{{ path('app_transport_front_new') }}\" class=\"link-as-button\" >Create new</a>
    </div></div>
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

{% endblock %}
", "front/transport/index.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\front\\transport\\index.html.twig");
    }
}

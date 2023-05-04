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

/* front/utilisateur.html.twig */
class __TwigTemplate_929e3598bc28bf0351a94241f02b9625 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/utilisateur.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Evento</title>

    <!-- CSS FILES -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"icon\" href=\"";
        // line 15
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 28
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
                            <strong class=\"text-dark\">Bienvenue dans Evento !  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            echo "              
                          Vous êtes actuellement connecté en tant que ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "userIdentifier", [], "any", false, false, false, 51), "html", null, true);
            echo "
                    ";
        }
        // line 52
        echo " </strong>
                            
                        </p>
                        
                    </div>

                </div>
            </div>
        </header>


        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo de Evento\" style=\"width: 13%; margin-top: -5px;\">
                    Evento
                </a>

                <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn custom-btn d-lg-none ms-auto me-4\">Votre Compte</a>

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
                            <a class=\"nav-link click-scroll\" href=\"#section_4\">Événement</a>
                        </li>
                        <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_front");
        echo "\" style=\"color: white; display: inline-block;\">Produits</a>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_5\">Abonnement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_6\">Contact</a>
                        </li>
                    </ul>

                 <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn custom-btn d-lg-block d-none\">Déconnexion</a>


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
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/video/pexels-2022395.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>


        <section class=\"about-section section-padding\" id=\"section_2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center\">
                        <div class=\"services-info\">
                            <h2 class=\"text-white mb-4\">À propos de Evento</h2>

                            <p class=\"text-white\">Evento simplifie la réservation d'événements en offrant une sélection de lieux pour toutes les occasions. Avec une réservation rapide et facile, Evento est la solution idéale pour vos besoins événementiels.</p>

                            <h6 class=\"text-white mt-4\">Large sélection de lieux </h6>

                            <p class=\"text-white\"> Evento propose de nombreux lieux pour tous les types d'événements, adaptés à tous les budgets.</p>

                            <h6 class=\"text-white mt-4\">Personnalisation de l'événement</h6>

                            <p class=\"text-white\">Evento offre des options de personnalisation pour la décoration, les services traiteurs et les équipements pour répondre aux besoins de chaque client.</p>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12\">
                        <div class=\"about-text-wrap\">
                            <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/pexels-alexander-suhorucov-6457579.jpg"), "html", null, true);
        echo "\" class=\"about-image img-fluid\">

                            <div class=\"about-text-info d-flex\">
                                <div class=\"d-flex\">
                                    <i class=\"about-text-icon bi-person\"></i>
                                </div>


                                <div class=\"ms-4\">
                                    <h3>Un moment heureux</h3>

                                    <p class=\"mb-0\">Créez des moments inoubliables</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"artists-section section-padding\" id=\"section_3\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-12 text-center\">
                        <h2 class=\"mb-4\">Nos Artistes</h1>
                    </div>

                    <div class=\"col-lg-5 col-12\">
                        <div class=\"artists-thumb\">
                            <div class=\"artists-image-wrap\">
                                <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/joecalih-UmTZqmMvQcw-unsplash.jpg"), "html", null, true);
        echo "\"
                                    class=\"artists-image img-fluid\">
                            </div>

                            <div class=\"artists-hover\">
                                <p>
                                    <strong>Nom:</strong>
                                    Manel Amara
                                </p>

                                <p>
                                    <strong>Date de Naissance:</strong>
                                    7 février 1981
                                </p>

                                <p>
                                    <strong>Musique:</strong>
                                    Maghreb Pop
                                </p>

                                <hr>

                                <p class=\"mb-0\">
                                    <strong>Youtube Channel:</strong>
                                    <a href=\"https://www.youtube.com/@ManelAmara\">Manel Amara</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-5 col-12\">
                        <div class=\"artists-thumb\">
                            <div class=\"artists-image-wrap\">
                                <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg"), "html", null, true);
        echo "\"
                                    class=\"artists-image img-fluid\">
                            </div>

                            <div class=\"artists-hover\">
                                <p>
                                    <strong>Nom:</strong>
                                    Nordo
                                </p>

                                <p>
                                    <strong>Date de naissance:</strong>
                                    29 Février 1990
                                </p>

                                <p>
                                    <strong>Musique:</strong>
                                    Arabic Rap/Pop
                                </p>

                                <hr>

                                <p class=\"mb-0\">
                                    <strong>Youtube Channel:</strong>
                                    <a href=\"https://www.youtube.com/@MARWENNORDO\">Marwen Nordo</a>
                                </p>
                            </div>
                        </div>

                        <div class=\"artists-thumb\">
                            <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg"), "html", null, true);
        echo "\"
                                class=\"artists-image img-fluid\">

                            <div class=\"artists-hover\">
                                <p>
                                    <strong>Nom:</strong>
                                    Balti
                                </p>

                                <p>
                                    <strong>Date de naissance:</strong>
                                    10 avril 1980
                                </p>

                                <p>
                                    <strong>Musique:</strong>
                                    Maghreb Rap
                                </p>

                                <hr>

                                <p class=\"mb-0\">
                                    <strong>Youtube Channel:</strong>
                                    <a href=\"https://www.youtube.com/@ThisizBaltiofficial\">Thisiz Balti </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
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
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/Couverture-Bassem-13-Avril-2023-01.jpg"), "html", null, true);
        echo "\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>Bassem Hamraoui <br/> El Maestro</h3>
                                            <p>Date: 13/04/2023</p>
                                            <p>Location: Théâtre Municipal de Tunis</p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/Couverture-Ahmed-Jelmem-11-Avril-2023-01.jpg"), "html", null, true);
        echo "\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>Spectacle Ahmed Jelmem</h3>
                                            <p>Date: 11/04/2023</p>
                                            <p>Location: Théâtre Municipal de Tunis</p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/C866770A-C91A-4F1F-BE6E-462470D168C8-1024x495.jpeg"), "html", null, true);
        echo "\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>EL KAADA : Al Disco Al Arabi </h3>
                                            <p>Date: 07/04/2023 </p>
                                            <p>Location: Zebra Club Gammarth </p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/artists/77826f92-295c-4106-bb0d-61bd4b9768f9-1024x553.jpg"), "html", null, true);
        echo "\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>Belhassen <br/> Ichi Ichi</h3>
                                            <p>Date: 07/04/2023</p>
                                            <p>Location: Regency Tunis Hotel</p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
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


        <section class=\"pricing-section section-padding section-bg\" id=\"section_5\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-12 mx-auto\">
                        <h2 class=\"text-center mb-4\">Nos Abonnement</h2>
                    </div>

                    <div class=\"col-lg-6 col-12\">
                        <div class=\"pricing-thumb\">
                            <div class=\"d-flex\">
                                <div>
                                    <h3><small>Standard</small> 200DT</h3>

                                    <p>L’abonnement comprend:</p>
                                </div>

                                <p class=\"pricing-tag ms-auto\">Réduction de<span>50%</span></h2>
                            </div>

                            <ul class=\"pricing-list mt-3\">
                                <li class=\"pricing-list-item\">Réservation de billets pour certains événements.</li>

                                <li class=\"pricing-list-item\">Réductions et accès prioritaire aux ventes.</li>

                                <li class=\"pricing-list-item\">Possibilité de réserver des sièges réservés pour les événements populaires.</li>

                                <li class=\"pricing-list-item\">Newsletters régulières avec des offres exclusives et mises à jour sur les événements à venir.</li>
                            </ul>

                            <a class=\"link-fx-1 color-contrast-higher mt-4\" href=\"ticket.html\">
                                <span>Acheter un billet</span>
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

                    <div class=\"col-lg-6 col-12 mt-4 mt-lg-0\">
                        <div class=\"pricing-thumb\">
                            <div class=\"d-flex\">
                                <div>
                                    <h3><small>Premium</small> 350DT</h3>

                                    <p>L’abonnement comprend:</p>
                                </div>
                            </div>

                            <ul class=\"pricing-list mt-3\">
                                <li class=\"pricing-list-item\">Réservation de billets illimitée pour tous les événements.</li>

                                <li class=\"pricing-list-item\">Réductions et accès prioritaire aux ventes.</li>

                                <li class=\"pricing-list-item\">Offres exclusives sur les événements à venir.</li>

                                <li class=\"pricing-list-item\">Contenu exclusif comme des vidéos en coulisses et des interviews avec les artistes.</li>

                                
                            </ul>

                            <a class=\"link-fx-1 color-contrast-higher mt-4\" href=\"ticket.html\">
                                <span>Acheter un billet</span>
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
            </div>
        </section>


       <section class=\"contact-section section-padding\" id=\"section_6\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-12 mx-auto\">
        <h2 class=\"text-center mb-4\">Contactez Nous</h2>
        <nav class=\"d-flex justify-content-center\">
          <div class=\"nav nav-tabs align-items-baseline justify-content-center\" id=\"nav-tab\" role=\"tablist\">
            <button class=\"nav-link active\" id=\"nav-ContactForm-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-ContactForm\" type=\"button\" role=\"tab\" aria-controls=\"nav-ContactForm\" aria-selected=\"false\">
              <h5>Contact Form</h5>
            </button>
            <button class=\"nav-link\" id=\"nav-ContactMap-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-ContactMap\" type=\"button\" role=\"tab\" aria-controls=\"nav-ContactMap\" aria-selected=\"false\">
              <h5>Google Maps</h5>
            </button>
          </div>
        </nav>
        <div class=\"tab-content shadow-lg mt-5\" id=\"nav-tabContent\">
          <div class=\"tab-pane fade show active\" id=\"nav-ContactForm\" role=\"tabpanel\" aria-labelledby=\"nav-ContactForm-tab\">
            <form class=\"custom-form contact-form mb-5 mb-lg-0\" action=\"https://formspree.io/f/mbjepqbk\" method=\"post\">
              <div class=\"contact-form-body\">
                <div class=\"row\">
                  <div class=\"col-lg-6 col-md-6 col-12\">
                    <input type=\"text\" name=\"Nom\" id=\"Nom\" class=\"form-control\" placeholder=\"Votre nom et prénom\" required>
                  </div>
                  <div class=\"col-lg-6 col-md-6 col-12\">
                    <input type=\"email\" name=\"Email\" id=\"Email\" class=\"form-control\" placeholder=\"Votre addresse mail\" required>
                  </div>
                </div>
                <input type=\"text\" name=\"Entreprise\" id=\"Entreprise\" class=\"form-control\" placeholder=\"Votre entreprise\" required>
                <textarea name=\"Message\" rows=\"3\" class=\"form-control\" id=\"Message\" placeholder=\"Votre message\"></textarea>
                <div class=\"col-lg-4 col-md-10 col-8 mx-auto\">
                  <button type=\"submit\" class=\"form-control\">Envoyer</button>
                </div>
                                    </div>
                                </form>
                            </div>
      


                            <div class=\"tab-pane fade\" id=\"nav-ContactMap\" role=\"tabpanel\"
                                aria-labelledby=\"nav-ContactMap-tab\">
                               <iframe class=\"google-map\"
    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.2555795905095!2d10.174361115246848!3d36.86245257775636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12edae0ec7c8e3e9%3A0x20074e2af4c4c4b2!2s18%20Rue%20de%20l&#39;Usine%2C%20ZI%20A%C3%A9roport%20Charguia%20II%2C%202035%20Ariana!5e0!3m2!1sfr!2stn!4v1670344209509!5m2!1sfr!2stn\"
    width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
    referrerpolicy=\"no-referrer-when-downgrade\"></iframe>


                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
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

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/click-scroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 678,  793 => 677,  789 => 676,  785 => 675,  781 => 674,  777 => 673,  481 => 380,  467 => 369,  453 => 358,  439 => 347,  386 => 297,  353 => 267,  317 => 234,  281 => 201,  248 => 171,  179 => 105,  165 => 94,  138 => 70,  131 => 66,  115 => 52,  110 => 51,  106 => 50,  81 => 28,  76 => 26,  71 => 24,  66 => 22,  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

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

    <link href=\"{{asset('front/css/carousel.css')}}\" rel=\"stylesheet\">

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
                            <strong class=\"text-dark\">Bienvenue dans Evento !  {% if app.user %}              
                          Vous êtes actuellement connecté en tant que {{ app.user.userIdentifier }}
                    {% endif %} </strong>
                            
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

                <a href=\"{{ path('app_login') }}\" class=\"btn custom-btn d-lg-none ms-auto me-4\">Votre Compte</a>

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
                            <a class=\"nav-link click-scroll\" href=\"#section_4\">Événement</a>
                        </li>
                        <a href=\"{{ path('produit_front')}}\" style=\"color: white; display: inline-block;\">Produits</a>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_5\">Abonnement</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link click-scroll\" href=\"#section_6\">Contact</a>
                        </li>
                    </ul>

                 <a href=\"{{ path('app_logout') }}\" class=\"btn custom-btn d-lg-block d-none\">Déconnexion</a>


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


        <section class=\"about-section section-padding\" id=\"section_2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center\">
                        <div class=\"services-info\">
                            <h2 class=\"text-white mb-4\">À propos de Evento</h2>

                            <p class=\"text-white\">Evento simplifie la réservation d'événements en offrant une sélection de lieux pour toutes les occasions. Avec une réservation rapide et facile, Evento est la solution idéale pour vos besoins événementiels.</p>

                            <h6 class=\"text-white mt-4\">Large sélection de lieux </h6>

                            <p class=\"text-white\"> Evento propose de nombreux lieux pour tous les types d'événements, adaptés à tous les budgets.</p>

                            <h6 class=\"text-white mt-4\">Personnalisation de l'événement</h6>

                            <p class=\"text-white\">Evento offre des options de personnalisation pour la décoration, les services traiteurs et les équipements pour répondre aux besoins de chaque client.</p>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-12\">
                        <div class=\"about-text-wrap\">
                            <img src=\"{{asset('front/images/pexels-alexander-suhorucov-6457579.jpg')}}\" class=\"about-image img-fluid\">

                            <div class=\"about-text-info d-flex\">
                                <div class=\"d-flex\">
                                    <i class=\"about-text-icon bi-person\"></i>
                                </div>


                                <div class=\"ms-4\">
                                    <h3>Un moment heureux</h3>

                                    <p class=\"mb-0\">Créez des moments inoubliables</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=\"artists-section section-padding\" id=\"section_3\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-12 text-center\">
                        <h2 class=\"mb-4\">Nos Artistes</h1>
                    </div>

                    <div class=\"col-lg-5 col-12\">
                        <div class=\"artists-thumb\">
                            <div class=\"artists-image-wrap\">
                                <img src=\"{{asset('front/images/artists/joecalih-UmTZqmMvQcw-unsplash.jpg')}}\"
                                    class=\"artists-image img-fluid\">
                            </div>

                            <div class=\"artists-hover\">
                                <p>
                                    <strong>Nom:</strong>
                                    Manel Amara
                                </p>

                                <p>
                                    <strong>Date de Naissance:</strong>
                                    7 février 1981
                                </p>

                                <p>
                                    <strong>Musique:</strong>
                                    Maghreb Pop
                                </p>

                                <hr>

                                <p class=\"mb-0\">
                                    <strong>Youtube Channel:</strong>
                                    <a href=\"https://www.youtube.com/@ManelAmara\">Manel Amara</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-5 col-12\">
                        <div class=\"artists-thumb\">
                            <div class=\"artists-image-wrap\">
                                <img src=\"{{asset('front/images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg')}}\"
                                    class=\"artists-image img-fluid\">
                            </div>

                            <div class=\"artists-hover\">
                                <p>
                                    <strong>Nom:</strong>
                                    Nordo
                                </p>

                                <p>
                                    <strong>Date de naissance:</strong>
                                    29 Février 1990
                                </p>

                                <p>
                                    <strong>Musique:</strong>
                                    Arabic Rap/Pop
                                </p>

                                <hr>

                                <p class=\"mb-0\">
                                    <strong>Youtube Channel:</strong>
                                    <a href=\"https://www.youtube.com/@MARWENNORDO\">Marwen Nordo</a>
                                </p>
                            </div>
                        </div>

                        <div class=\"artists-thumb\">
                            <img src=\"{{asset('front/images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg')}}\"
                                class=\"artists-image img-fluid\">

                            <div class=\"artists-hover\">
                                <p>
                                    <strong>Nom:</strong>
                                    Balti
                                </p>

                                <p>
                                    <strong>Date de naissance:</strong>
                                    10 avril 1980
                                </p>

                                <p>
                                    <strong>Musique:</strong>
                                    Maghreb Rap
                                </p>

                                <hr>

                                <p class=\"mb-0\">
                                    <strong>Youtube Channel:</strong>
                                    <a href=\"https://www.youtube.com/@ThisizBaltiofficial\">Thisiz Balti </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
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
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"{{asset('front/images/artists/Couverture-Bassem-13-Avril-2023-01.jpg')}}\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>Bassem Hamraoui <br/> El Maestro</h3>
                                            <p>Date: 13/04/2023</p>
                                            <p>Location: Théâtre Municipal de Tunis</p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"{{asset('front/images/artists/Couverture-Ahmed-Jelmem-11-Avril-2023-01.jpg')}}\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>Spectacle Ahmed Jelmem</h3>
                                            <p>Date: 11/04/2023</p>
                                            <p>Location: Théâtre Municipal de Tunis</p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"{{asset('front/images/artists/C866770A-C91A-4F1F-BE6E-462470D168C8-1024x495.jpeg')}}\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>EL KAADA : Al Disco Al Arabi </h3>
                                            <p>Date: 07/04/2023 </p>
                                            <p>Location: Zebra Club Gammarth </p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"card-container\">
                                        <div class=\"card\">
                                          <img src=\"{{asset('front/images/artists/77826f92-295c-4106-bb0d-61bd4b9768f9-1024x553.jpg')}}\" alt=\"Event Image\">
                                          <div class=\"card-content\">
                                            <h3>Belhassen <br/> Ichi Ichi</h3>
                                            <p>Date: 07/04/2023</p>
                                            <p>Location: Regency Tunis Hotel</p>
                                            <a href=\"#\" class=\"btn\">Réserver</a>
                                          </div>
                                        </div>
                                      </div>
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


        <section class=\"pricing-section section-padding section-bg\" id=\"section_5\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-8 col-12 mx-auto\">
                        <h2 class=\"text-center mb-4\">Nos Abonnement</h2>
                    </div>

                    <div class=\"col-lg-6 col-12\">
                        <div class=\"pricing-thumb\">
                            <div class=\"d-flex\">
                                <div>
                                    <h3><small>Standard</small> 200DT</h3>

                                    <p>L’abonnement comprend:</p>
                                </div>

                                <p class=\"pricing-tag ms-auto\">Réduction de<span>50%</span></h2>
                            </div>

                            <ul class=\"pricing-list mt-3\">
                                <li class=\"pricing-list-item\">Réservation de billets pour certains événements.</li>

                                <li class=\"pricing-list-item\">Réductions et accès prioritaire aux ventes.</li>

                                <li class=\"pricing-list-item\">Possibilité de réserver des sièges réservés pour les événements populaires.</li>

                                <li class=\"pricing-list-item\">Newsletters régulières avec des offres exclusives et mises à jour sur les événements à venir.</li>
                            </ul>

                            <a class=\"link-fx-1 color-contrast-higher mt-4\" href=\"ticket.html\">
                                <span>Acheter un billet</span>
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

                    <div class=\"col-lg-6 col-12 mt-4 mt-lg-0\">
                        <div class=\"pricing-thumb\">
                            <div class=\"d-flex\">
                                <div>
                                    <h3><small>Premium</small> 350DT</h3>

                                    <p>L’abonnement comprend:</p>
                                </div>
                            </div>

                            <ul class=\"pricing-list mt-3\">
                                <li class=\"pricing-list-item\">Réservation de billets illimitée pour tous les événements.</li>

                                <li class=\"pricing-list-item\">Réductions et accès prioritaire aux ventes.</li>

                                <li class=\"pricing-list-item\">Offres exclusives sur les événements à venir.</li>

                                <li class=\"pricing-list-item\">Contenu exclusif comme des vidéos en coulisses et des interviews avec les artistes.</li>

                                
                            </ul>

                            <a class=\"link-fx-1 color-contrast-higher mt-4\" href=\"ticket.html\">
                                <span>Acheter un billet</span>
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
            </div>
        </section>


       <section class=\"contact-section section-padding\" id=\"section_6\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-12 mx-auto\">
        <h2 class=\"text-center mb-4\">Contactez Nous</h2>
        <nav class=\"d-flex justify-content-center\">
          <div class=\"nav nav-tabs align-items-baseline justify-content-center\" id=\"nav-tab\" role=\"tablist\">
            <button class=\"nav-link active\" id=\"nav-ContactForm-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-ContactForm\" type=\"button\" role=\"tab\" aria-controls=\"nav-ContactForm\" aria-selected=\"false\">
              <h5>Contact Form</h5>
            </button>
            <button class=\"nav-link\" id=\"nav-ContactMap-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-ContactMap\" type=\"button\" role=\"tab\" aria-controls=\"nav-ContactMap\" aria-selected=\"false\">
              <h5>Google Maps</h5>
            </button>
          </div>
        </nav>
        <div class=\"tab-content shadow-lg mt-5\" id=\"nav-tabContent\">
          <div class=\"tab-pane fade show active\" id=\"nav-ContactForm\" role=\"tabpanel\" aria-labelledby=\"nav-ContactForm-tab\">
            <form class=\"custom-form contact-form mb-5 mb-lg-0\" action=\"https://formspree.io/f/mbjepqbk\" method=\"post\">
              <div class=\"contact-form-body\">
                <div class=\"row\">
                  <div class=\"col-lg-6 col-md-6 col-12\">
                    <input type=\"text\" name=\"Nom\" id=\"Nom\" class=\"form-control\" placeholder=\"Votre nom et prénom\" required>
                  </div>
                  <div class=\"col-lg-6 col-md-6 col-12\">
                    <input type=\"email\" name=\"Email\" id=\"Email\" class=\"form-control\" placeholder=\"Votre addresse mail\" required>
                  </div>
                </div>
                <input type=\"text\" name=\"Entreprise\" id=\"Entreprise\" class=\"form-control\" placeholder=\"Votre entreprise\" required>
                <textarea name=\"Message\" rows=\"3\" class=\"form-control\" id=\"Message\" placeholder=\"Votre message\"></textarea>
                <div class=\"col-lg-4 col-md-10 col-8 mx-auto\">
                  <button type=\"submit\" class=\"form-control\">Envoyer</button>
                </div>
                                    </div>
                                </form>
                            </div>
      


                            <div class=\"tab-pane fade\" id=\"nav-ContactMap\" role=\"tabpanel\"
                                aria-labelledby=\"nav-ContactMap-tab\">
                               <iframe class=\"google-map\"
    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.2555795905095!2d10.174361115246848!3d36.86245257775636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12edae0ec7c8e3e9%3A0x20074e2af4c4c4b2!2s18%20Rue%20de%20l&#39;Usine%2C%20ZI%20A%C3%A9roport%20Charguia%20II%2C%202035%20Ariana!5e0!3m2!1sfr!2stn!4v1670344209509!5m2!1sfr!2stn\"
    width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
    referrerpolicy=\"no-referrer-when-downgrade\"></iframe>


                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
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

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src=\"{{asset('front/js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('front/js/carousel.js')}}\"></script>
    <script src=\"{{asset('front/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('front/js/jquery.sticky.js')}}\"></script>
    <script src=\"{{asset('front/js/click-scroll.js')}}\"></script>
    <script src=\"{{asset('front/js/custom.js')}}\"></script>

</body>

</html>", "front/utilisateur.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\front\\utilisateur.html.twig");
    }
}

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

/* front/produit.html.twig */
class __TwigTemplate_1d2f3b20a6cb22ca5660334b61356061371eed1dce482f7d58198f42c1fc4257 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/produit.html.twig"));

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
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            echo "              
                          Vous êtes actuellement connecté en tant que ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "userIdentifier", [], "any", false, false, false, 53), "html", null, true);
            echo "
                    ";
        }
        // line 54
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
                            <a class=\"nav-link click-scroll\" href=\"#section_4\">Événement</a>
                        </li>
                
                        <a href=\"";
        // line 95
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
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        echo "\" class=\"btn custom-btn d-lg-block d-none\">Votre Compte</a>

                </div>
            </div>
        </nav>


<style>
 
 
  .card {
    width: 250px;
    height: 500px;
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 5px #ccc;
  }
  
  
  .card-content p {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 6; /* Nombre de lignes de texte maximum */
  }

  .prix-label {
  display: inline-block; /* pour que le label s'affiche sur la même ligne */
  width: 200px; /* pour définir la largeur du label */
  text-align: left; /* pour aligner le texte à gauche */
  color: white; /* pour changer la couleur du texte */
  margin-right: 10px; /* pour ajouter un espace entre le label et l'élément suivant */
}
    .like-dislike-buttons {
        display: flex;
        align-items: center;
          display: inline-block;

    }

    .like-image,
    .dislike-image {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .like-image img,
    .dislike-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }


</style>

<section class=\"schedule-section section-padding\" id=\"section_4\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h2 class=\"text-white mb-4\">Nos produits</h2>
        <form id=\"recherche-produits-form\">
          <div class=\"form-group\">
            <label for=\"recherche-produits-input\">Recherche</label>
            <input type=\"text\" class=\"form-control\" id=\"recherche-produits-input\" placeholder=\"Nom du produit\">
            <br>
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
          </div>
        </form>
        <br>
        <label for=\"prix-produits-input\" class=\"prix-label\">Filtrer par prix (DT):</label>
        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"10\" step=\"0.1\" id=\"prix-produits-input\" oninput=\"afficherPrix(this.value);\">
        <div class=\"table-responsive\">
          <div class=\"carousel-container\">
            <div class=\"carousel\" id=\"produits-carousel\">
              ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 189, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 190
            echo "              <div class=\"card-container\">
                <div tabindex=\"0\" class=\"card\">
                  <div style=\"text-align:center;\">
                    <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 193))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomProd", [], "any", false, false, false, 193), "html", null, true);
            echo "\" style=\"width:200px;\">
                  </div>
                  <div class=\"card-content\">
                    <h3 style=\"font-size: 20px;\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getNomProd", [], "method", false, false, false, 196), "html", null, true);
            echo "</h3>
                    <p>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getDescription", [], "method", false, false, false, 197), "html", null, true);
            echo "</p>
                    <p>Prix: ";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getPrix", [], "method", false, false, false, 198), "html", null, true);
            echo " DT</p>
                    <div class=\"like-dislike-buttons\" align:center>
                      <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_like", ["idProd" => twig_get_attribute($this->env, $this->source, $context["produit"], "idProd", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\" class=\"like-image\"><img src=\"front/images/like.png\" alt=\"Like\"></a>
                      <span class=\"like-count\">";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nbLikes", [], "any", false, false, false, 201), "html", null, true);
            echo "</span>
                      <a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_dislike", ["idProd" => twig_get_attribute($this->env, $this->source, $context["produit"], "idProd", [], "any", false, false, false, 202)]), "html", null, true);
            echo "\" class=\"dislike-image\"><img src=\"front/images/dislike.png\" alt=\"Dislike\"></a>
                      <span class=\"dislike-count\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nbDislikes", [], "any", false, false, false, 203), "html", null, true);
            echo "</span>
                    </div>
                  </div>
                </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "            </div>
            <br>
            
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

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
 \$(document).ready(function() {
  \$('.like-image, .dislike-image').on('click', function(event) {
    event.preventDefault();
    var button = \$(this);
    var url = button.attr('href');
    var type = button.hasClass('like-image') ? 'like' : 'dislike';
    \$.ajax({
      url: url,
      method: 'POST',
      dataType: 'json',
      data: {type: type}
    }).done(function(data) {
      button.siblings('.like-count').text(data.likes);
      button.siblings('.dislike-count').text(data.dislikes);
      if(type === 'like'){
          button.siblings('.dislike-image').find('.dislike-count').text(data.dislikes);
      } else {
          button.siblings('.like-image').find('.like-count').text(data.likes);
      }
    });
  });
});

</script>


<!-- JavaScript code to trigger AJAX request on slider movement -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélection du champ de filtrage par prix
        var priceInput = document.getElementById('prix-produits-input');

        // Événement d'écouteur pour l'événement \"input\" du champ de filtrage par prix
        priceInput.addEventListener('input', function() {
            // Récupération de la valeur du champ de filtrage par prix
            var priceFilter = priceInput.value;

            // Requête AJAX pour récupérer les produits correspondants au filtre de prix
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);

                        // Effacer les produits précédemment affichés dans le carousel
                        var produitsCarousel = document.getElementById('produits-carousel');
                        while (produitsCarousel.firstChild) {
                            produitsCarousel.removeChild(produitsCarousel.firstChild);
                        }

                        // Boucle pour afficher les produits correspondants au filtre de prix
                        for (var i = 0; i < response.length; i++) {
                            var produit = response[i];

                            // Vérification si le produit correspond au filtre de prix
                            if (produit.prix <= priceFilter) {

                                // Construction de la carte du produit
                                var cardContainer = document.createElement('div');
                                cardContainer.classList.add('card-container');
                                var card = document.createElement('div');
                                card.setAttribute('tabindex', '0');
                                card.classList.add('card');
                                var imageDiv = document.createElement('div');
                                imageDiv.style.textAlign = 'center';
                                var image = document.createElement('img');
                                image.setAttribute('src', \"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/produits/"), "html", null, true);
        echo "\" + produit.image);
                                image.setAttribute('alt', produit.nomProd);
                                image.style.width = '200px';
                                var cardContent = document.createElement('div');
                                cardContent.classList.add('card-content');
                                var nomProd = document.createElement('h3');
                                nomProd.style.fontSize = '20px';
                                nomProd.textContent = produit.nomProd;
                                var description = document.createElement('p');
                                description.textContent = produit.description;
                                var prix = document.createElement('p');
                                prix.textContent = 'Prix: ' + produit.prix + ' DT';

                                // Ajout des éléments à la carte
                                imageDiv.appendChild(image);
                                cardContent.appendChild(nomProd);
                                cardContent.appendChild(description);
                                cardContent.appendChild(prix);
                                card.appendChild(imageDiv);
                                card.appendChild(cardContent);
                                cardContainer.appendChild(card);

                                // Ajout de la carte au carousel
                                produitsCarousel.appendChild(cardContainer);
                            }
                        }

                    } else {
                        console.error(xhr.responseText);
                    }
                }
            };
            xhr.open('GET', \"";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercherParPrix");
        echo "?prixMin=\" + 0 + \"&prixMax=\" + priceFilter);
            xhr.send();
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Sélection du champ de recherche
    var searchInput = document.getElementById('recherche-produits-input');

    // Événement d'écouteur pour l'événement \"input\" du champ de recherche
    searchInput.addEventListener('input', function() {
        // Récupération de la valeur du champ de recherche
        var searchTerm = searchInput.value;

        // Requête AJAX pour récupérer les produits correspondants à la recherche
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    // Effacer les produits précédemment affichés dans le carousel
                    var produitsCarousel = document.getElementById('produits-carousel');
                    while (produitsCarousel.firstChild) {
                        produitsCarousel.removeChild(produitsCarousel.firstChild);
                    }

                    // Boucle pour afficher les produits correspondants à la recherche
                    for (var i = 0; i < response.length; i++) {
                        var produit = response[i];

                        // Construction de la carte du produit
                        var cardContainer = document.createElement('div');
                        cardContainer.classList.add('card-container');
                        var card = document.createElement('div');
                        card.setAttribute('tabindex', '0');
                        card.classList.add('card');
                        var imageDiv = document.createElement('div');
                        imageDiv.style.textAlign = 'center';
                        var image = document.createElement('img');
                        image.setAttribute('src', \"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/produits/"), "html", null, true);
        echo "\" + produit.image);
                        image.setAttribute('alt', produit.nomProd);
                        image.style.width = '200px';
                        var cardContent = document.createElement('div');
                        cardContent.classList.add('card-content');
                        var nomProd = document.createElement('h3');
                        nomProd.style.fontSize = '20px';
                        nomProd.textContent = produit.nomProd;
                        var description = document.createElement('p');
                        description.textContent = produit.description;
                        var prix = document.createElement('p');
                        prix.textContent = 'Prix: ' + produit.prix + ' DT';

                        // Ajout des éléments à la carte
                        imageDiv.appendChild(image);
                        cardContent.appendChild(nomProd);
                        cardContent.appendChild(description);
                        cardContent.appendChild(prix);
                        card.appendChild(imageDiv);
                        card.appendChild(cardContent);
                        cardContainer.appendChild(card);

                        // Ajout de la carte au carousel
                        produitsCarousel.appendChild(cardContainer);
                    }

                } else {
                    console.error(xhr.responseText);
                }
            }
        };
        xhr.open('GET', \"";
        // line 401
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercherParNom");
        echo "?term=\" + searchTerm);
        xhr.send();
        });
        });


    </script>


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
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/click-scroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 542,  678 => 541,  674 => 540,  670 => 539,  666 => 538,  662 => 537,  523 => 401,  489 => 370,  443 => 327,  408 => 295,  320 => 209,  308 => 203,  304 => 202,  300 => 201,  296 => 200,  291 => 198,  287 => 197,  283 => 196,  275 => 193,  270 => 190,  266 => 189,  183 => 109,  166 => 95,  138 => 70,  131 => 66,  117 => 54,  112 => 53,  108 => 52,  81 => 28,  76 => 26,  71 => 24,  66 => 22,  56 => 15,  40 => 1,);
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

                    <a href=\"{{ path('app_produit_index') }}\" class=\"btn custom-btn d-lg-block d-none\">Votre Compte</a>

                </div>
            </div>
        </nav>


<style>
 
 
  .card {
    width: 250px;
    height: 500px;
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 5px #ccc;
  }
  
  
  .card-content p {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 6; /* Nombre de lignes de texte maximum */
  }

  .prix-label {
  display: inline-block; /* pour que le label s'affiche sur la même ligne */
  width: 200px; /* pour définir la largeur du label */
  text-align: left; /* pour aligner le texte à gauche */
  color: white; /* pour changer la couleur du texte */
  margin-right: 10px; /* pour ajouter un espace entre le label et l'élément suivant */
}
    .like-dislike-buttons {
        display: flex;
        align-items: center;
          display: inline-block;

    }

    .like-image,
    .dislike-image {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .like-image img,
    .dislike-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }


</style>

<section class=\"schedule-section section-padding\" id=\"section_4\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h2 class=\"text-white mb-4\">Nos produits</h2>
        <form id=\"recherche-produits-form\">
          <div class=\"form-group\">
            <label for=\"recherche-produits-input\">Recherche</label>
            <input type=\"text\" class=\"form-control\" id=\"recherche-produits-input\" placeholder=\"Nom du produit\">
            <br>
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
          </div>
        </form>
        <br>
        <label for=\"prix-produits-input\" class=\"prix-label\">Filtrer par prix (DT):</label>
        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"10\" step=\"0.1\" id=\"prix-produits-input\" oninput=\"afficherPrix(this.value);\">
        <div class=\"table-responsive\">
          <div class=\"carousel-container\">
            <div class=\"carousel\" id=\"produits-carousel\">
              {% for produit in produits %}
              <div class=\"card-container\">
                <div tabindex=\"0\" class=\"card\">
                  <div style=\"text-align:center;\">
                    <img src=\"{{ asset('uploads/produits/' ~ produit.image) }}\" alt=\"{{ produit.nomProd }}\" style=\"width:200px;\">
                  </div>
                  <div class=\"card-content\">
                    <h3 style=\"font-size: 20px;\">{{ produit.getNomProd() }}</h3>
                    <p>{{ produit.getDescription() }}</p>
                    <p>Prix: {{ produit.getPrix() }} DT</p>
                    <div class=\"like-dislike-buttons\" align:center>
                      <a href=\"{{ path('app_produit_like', {'idProd': produit.idProd}) }}\" class=\"like-image\"><img src=\"front/images/like.png\" alt=\"Like\"></a>
                      <span class=\"like-count\">{{ produit.nbLikes }}</span>
                      <a href=\"{{ path('app_produit_dislike', {'idProd': produit.idProd}) }}\" class=\"dislike-image\"><img src=\"front/images/dislike.png\" alt=\"Dislike\"></a>
                      <span class=\"dislike-count\">{{ produit.nbDislikes }}</span>
                    </div>
                  </div>
                </div>
              </div>
              {% endfor %}
            </div>
            <br>
            
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

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
 \$(document).ready(function() {
  \$('.like-image, .dislike-image').on('click', function(event) {
    event.preventDefault();
    var button = \$(this);
    var url = button.attr('href');
    var type = button.hasClass('like-image') ? 'like' : 'dislike';
    \$.ajax({
      url: url,
      method: 'POST',
      dataType: 'json',
      data: {type: type}
    }).done(function(data) {
      button.siblings('.like-count').text(data.likes);
      button.siblings('.dislike-count').text(data.dislikes);
      if(type === 'like'){
          button.siblings('.dislike-image').find('.dislike-count').text(data.dislikes);
      } else {
          button.siblings('.like-image').find('.like-count').text(data.likes);
      }
    });
  });
});

</script>


<!-- JavaScript code to trigger AJAX request on slider movement -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélection du champ de filtrage par prix
        var priceInput = document.getElementById('prix-produits-input');

        // Événement d'écouteur pour l'événement \"input\" du champ de filtrage par prix
        priceInput.addEventListener('input', function() {
            // Récupération de la valeur du champ de filtrage par prix
            var priceFilter = priceInput.value;

            // Requête AJAX pour récupérer les produits correspondants au filtre de prix
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);

                        // Effacer les produits précédemment affichés dans le carousel
                        var produitsCarousel = document.getElementById('produits-carousel');
                        while (produitsCarousel.firstChild) {
                            produitsCarousel.removeChild(produitsCarousel.firstChild);
                        }

                        // Boucle pour afficher les produits correspondants au filtre de prix
                        for (var i = 0; i < response.length; i++) {
                            var produit = response[i];

                            // Vérification si le produit correspond au filtre de prix
                            if (produit.prix <= priceFilter) {

                                // Construction de la carte du produit
                                var cardContainer = document.createElement('div');
                                cardContainer.classList.add('card-container');
                                var card = document.createElement('div');
                                card.setAttribute('tabindex', '0');
                                card.classList.add('card');
                                var imageDiv = document.createElement('div');
                                imageDiv.style.textAlign = 'center';
                                var image = document.createElement('img');
                                image.setAttribute('src', \"{{ asset('uploads/produits/') }}\" + produit.image);
                                image.setAttribute('alt', produit.nomProd);
                                image.style.width = '200px';
                                var cardContent = document.createElement('div');
                                cardContent.classList.add('card-content');
                                var nomProd = document.createElement('h3');
                                nomProd.style.fontSize = '20px';
                                nomProd.textContent = produit.nomProd;
                                var description = document.createElement('p');
                                description.textContent = produit.description;
                                var prix = document.createElement('p');
                                prix.textContent = 'Prix: ' + produit.prix + ' DT';

                                // Ajout des éléments à la carte
                                imageDiv.appendChild(image);
                                cardContent.appendChild(nomProd);
                                cardContent.appendChild(description);
                                cardContent.appendChild(prix);
                                card.appendChild(imageDiv);
                                card.appendChild(cardContent);
                                cardContainer.appendChild(card);

                                // Ajout de la carte au carousel
                                produitsCarousel.appendChild(cardContainer);
                            }
                        }

                    } else {
                        console.error(xhr.responseText);
                    }
                }
            };
            xhr.open('GET', \"{{ path('rechercherParPrix') }}?prixMin=\" + 0 + \"&prixMax=\" + priceFilter);
            xhr.send();
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Sélection du champ de recherche
    var searchInput = document.getElementById('recherche-produits-input');

    // Événement d'écouteur pour l'événement \"input\" du champ de recherche
    searchInput.addEventListener('input', function() {
        // Récupération de la valeur du champ de recherche
        var searchTerm = searchInput.value;

        // Requête AJAX pour récupérer les produits correspondants à la recherche
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    // Effacer les produits précédemment affichés dans le carousel
                    var produitsCarousel = document.getElementById('produits-carousel');
                    while (produitsCarousel.firstChild) {
                        produitsCarousel.removeChild(produitsCarousel.firstChild);
                    }

                    // Boucle pour afficher les produits correspondants à la recherche
                    for (var i = 0; i < response.length; i++) {
                        var produit = response[i];

                        // Construction de la carte du produit
                        var cardContainer = document.createElement('div');
                        cardContainer.classList.add('card-container');
                        var card = document.createElement('div');
                        card.setAttribute('tabindex', '0');
                        card.classList.add('card');
                        var imageDiv = document.createElement('div');
                        imageDiv.style.textAlign = 'center';
                        var image = document.createElement('img');
                        image.setAttribute('src', \"{{ asset('uploads/produits/') }}\" + produit.image);
                        image.setAttribute('alt', produit.nomProd);
                        image.style.width = '200px';
                        var cardContent = document.createElement('div');
                        cardContent.classList.add('card-content');
                        var nomProd = document.createElement('h3');
                        nomProd.style.fontSize = '20px';
                        nomProd.textContent = produit.nomProd;
                        var description = document.createElement('p');
                        description.textContent = produit.description;
                        var prix = document.createElement('p');
                        prix.textContent = 'Prix: ' + produit.prix + ' DT';

                        // Ajout des éléments à la carte
                        imageDiv.appendChild(image);
                        cardContent.appendChild(nomProd);
                        cardContent.appendChild(description);
                        cardContent.appendChild(prix);
                        card.appendChild(imageDiv);
                        card.appendChild(cardContent);
                        cardContainer.appendChild(card);

                        // Ajout de la carte au carousel
                        produitsCarousel.appendChild(cardContainer);
                    }

                } else {
                    console.error(xhr.responseText);
                }
            }
        };
        xhr.open('GET', \"{{ path('rechercherParNom') }}?term=\" + searchTerm);
        xhr.send();
        });
        });


    </script>


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

</html>", "front/produit.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\front\\produit.html.twig");
    }
}

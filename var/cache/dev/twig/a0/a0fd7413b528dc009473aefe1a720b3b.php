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

/* evenement/showEvenementBack.html.twig */
class __TwigTemplate_af74473a672c648f57480a90a38b705f extends Template
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
        return "back/backbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showEvenementBack.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "evenement/showEvenementBack.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Evenement";
        
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
<h1 class=\"myTitle\">LES EVENEMENTS</h1>
    <!-- New Table -->
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">
                <thead>
                <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                    <th class=\"px-4 py-3\">Nom</th>
                    <th class=\"px-4 py-3\">Les Montants</th>
                    <th class=\"px-4 py-3\">Duree</th>
                    <th class=\"px-4 py-3\">Actions</th>
                </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 24
            echo "                <tr class=\"text-gray-700 dark:text-gray-400\">
                    <td class=\"px-4 py-3\">
                        <div class=\"flex items-center text-sm\">
                            <!-- Avatar with inset shadow -->
                            <div class=\"relative hidden w-8 h-8 mr-3 rounded-full md:block\">
                                <!--<img class=\"object-cover w-full h-full rounded-full\"
                                     src=\"https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ\"
                                     alt=\"\" loading=\"lazy\" />-->
                                <div class=\"absolute inset-0 rounded-full shadow-inner\" aria-hidden=\"true\"></div>
                            </div>
                            <div>
                                <p class=\"font-semibold\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                                <p class=\"text-xs text-gray-600 dark:text-gray-400\">
                                    lieu: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieuEvent", [], "any", false, false, false, 37), "html", null, true);
            echo "
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class=\"px-4 py-3 text-sm\">
                        Prix: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 43), "html", null, true);
            echo "
                        Budget: ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "budgetEvent", [], "any", false, false, false, 44), "html", null, true);
            echo "
                    </td>
                    <td class=\"px-4 py-3 text-sm\">
                        Du : ";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                        Au: ";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebutEvent", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                    </td>
                    <td class=\"px-4 py-3 text-xs\">
                      <a
                              class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
                        Modifier
                      </a>
                        <a
                                class=\"px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                            Supprimer
                        </a>
                    </td>

                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "




                </tbody>
            </table>
        </div>
        <div
                class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\">
              <span class=\"flex items-center col-span-3\">
                Showing 21-30 of 100
              </span>
            <span class=\"col-span-2\"></span>
            <!-- Pagination -->
            <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
                <nav aria-label=\"Table navigation\">
                  <ul class=\"inline-flex items-center\">
                    <li>
                      <button class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                              aria-label=\"Previous\">
                        <svg aria-hidden=\"true\" class=\"w-4 h-4 fill-current\" viewBox=\"0 0 20 20\">
                          <path
                                  d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
                                  clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                        </svg>
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        1
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        2
                      </button>
                    </li>
                    <li>
                      <button
                              class=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        3
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        4
                      </button>
                    </li>
                    <li>
                      <span class=\"px-3 py-1\">...</span>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        8
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        9
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                              aria-label=\"Next\">
                        <svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewBox=\"0 0 20 20\">
                          <path
                                  d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
                                  clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                        </svg>
                      </button>
                    </li>
                  </ul>
                </nav>
              </span>
        </div>
    </div>
    <style>
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

        .myTitle {
            font-size: 2em; /* Taille de la police */
            font-weight: bold; /* Gras */
            text-align: center; /* Alignement du texte */
            text-transform: uppercase; /* Mise en majuscules */
            color: orange; /* Couleur du texte */
            margin-top: 20px; /* Marge supérieure */
            margin-bottom: 20px; /* Marge inférieure */
        }
    </style>
    <br>
    <a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\" class=\"boutton\">Create new</a>
    <br>
    <br>
    <div class=\"statDiv\">
        <div id=\"div_chart\" ></div>

    </div>



    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 181
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 181, $this->source); })()), "div_chart");
        echo "


    </script>
    <br>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/showEvenementBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 181,  272 => 169,  164 => 63,  151 => 56,  144 => 52,  137 => 48,  133 => 47,  127 => 44,  123 => 43,  114 => 37,  109 => 35,  96 => 24,  92 => 23,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %}

{% block title %}New Evenement{% endblock %}

{% block body %}

<h1 class=\"myTitle\">LES EVENEMENTS</h1>
    <!-- New Table -->
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">
                <thead>
                <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                    <th class=\"px-4 py-3\">Nom</th>
                    <th class=\"px-4 py-3\">Les Montants</th>
                    <th class=\"px-4 py-3\">Duree</th>
                    <th class=\"px-4 py-3\">Actions</th>
                </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

                {% for evenement in evenements %}
                <tr class=\"text-gray-700 dark:text-gray-400\">
                    <td class=\"px-4 py-3\">
                        <div class=\"flex items-center text-sm\">
                            <!-- Avatar with inset shadow -->
                            <div class=\"relative hidden w-8 h-8 mr-3 rounded-full md:block\">
                                <!--<img class=\"object-cover w-full h-full rounded-full\"
                                     src=\"https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ\"
                                     alt=\"\" loading=\"lazy\" />-->
                                <div class=\"absolute inset-0 rounded-full shadow-inner\" aria-hidden=\"true\"></div>
                            </div>
                            <div>
                                <p class=\"font-semibold\">{{ evenement.nomEvent }}</p>
                                <p class=\"text-xs text-gray-600 dark:text-gray-400\">
                                    lieu: {{ evenement.lieuEvent }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class=\"px-4 py-3 text-sm\">
                        Prix: {{ evenement.prix }}
                        Budget: {{ evenement.budgetEvent }}
                    </td>
                    <td class=\"px-4 py-3 text-sm\">
                        Du : {{ evenement.dateDebutEvent ? evenement.dateDebutEvent|date('Y-m-d') : '' }}
                        Au: {{ evenement.dateDebutEvent ? evenement.dateDebutEvent|date('Y-m-d') : '' }}
                    </td>
                    <td class=\"px-4 py-3 text-xs\">
                      <a
                              class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\" href=\"{{ path('app_evenement_show', {'idEvent': evenement.idEvent}) }}\">
                        Modifier
                      </a>
                        <a
                                class=\"px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700\" href=\"{{ path('app_evenement_delete', {'idEvent': evenement.idEvent}) }}\">
                            Supprimer
                        </a>
                    </td>

                </tr>
                {% endfor %}





                </tbody>
            </table>
        </div>
        <div
                class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\">
              <span class=\"flex items-center col-span-3\">
                Showing 21-30 of 100
              </span>
            <span class=\"col-span-2\"></span>
            <!-- Pagination -->
            <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
                <nav aria-label=\"Table navigation\">
                  <ul class=\"inline-flex items-center\">
                    <li>
                      <button class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                              aria-label=\"Previous\">
                        <svg aria-hidden=\"true\" class=\"w-4 h-4 fill-current\" viewBox=\"0 0 20 20\">
                          <path
                                  d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
                                  clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                        </svg>
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        1
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        2
                      </button>
                    </li>
                    <li>
                      <button
                              class=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        3
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        4
                      </button>
                    </li>
                    <li>
                      <span class=\"px-3 py-1\">...</span>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        8
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">
                        9
                      </button>
                    </li>
                    <li>
                      <button class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                              aria-label=\"Next\">
                        <svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewBox=\"0 0 20 20\">
                          <path
                                  d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
                                  clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                        </svg>
                      </button>
                    </li>
                  </ul>
                </nav>
              </span>
        </div>
    </div>
    <style>
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

        .myTitle {
            font-size: 2em; /* Taille de la police */
            font-weight: bold; /* Gras */
            text-align: center; /* Alignement du texte */
            text-transform: uppercase; /* Mise en majuscules */
            color: orange; /* Couleur du texte */
            margin-top: 20px; /* Marge supérieure */
            margin-bottom: 20px; /* Marge inférieure */
        }
    </style>
    <br>
    <a href=\"{{ path('app_evenement_new') }}\" class=\"boutton\">Create new</a>
    <br>
    <br>
    <div class=\"statDiv\">
        <div id=\"div_chart\" ></div>

    </div>



    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        {{ gc_draw(chart, 'div_chart') }}


    </script>
    <br>
    <br>
{% endblock %}
", "evenement/showEvenementBack.html.twig", "C:\\Users\\henri\\OneDrive\\Documents\\GitHub\\Symfony-Web-PIDev-3A4\\templates\\evenement\\showEvenementBack.html.twig");
    }
}

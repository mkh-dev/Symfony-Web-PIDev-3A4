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

/* abonnement/index.html.twig */
class __TwigTemplate_388706dade3dd86597eeb685a3404e8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("back/back.html.twig", "abonnement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t/* Style for the header */
\t\theader {
\t\t\tbackground-color: #1c1c1c;
\t\t\tcolor: #fff;
\t\t\tpadding: 20px;
\t\t}

\t\t/* Style for the table */
\t\t.table {
\t\t\tborder-collapse: collapse;
\t\t\twidth: 100%;
\t\t}

\t\t/* Style for table headers */
\t\t.table th {
\t\t\tbackground-color: #f1c40f;
\t\t\tcolor: #000;
\t\t\tfont-weight: bold;
\t\t\tpadding: 10px;
\t\t\ttext-align: left;
\t\t\ttext-transform: uppercase;
\t\t}

\t\t/* Style for table rows */
\t\t.table tr {
\t\t\tborder-bottom: 1px solid #ccc;
\t\t}

\t\t/* Style for table data cells */
\t\t.table td {
\t\t\tpadding: 10px;
\t\t\tvertical-align: middle;
\t\t}

\t\t/* Style for the \"Create new\" button */
\t\t#create-new {
\t\t\tbackground-color: #f1c40f;
\t\t\tborder-radius: 4px;
\t\t\tcolor: #000;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 20px;
\t\t\tpadding: 10px 20px;
\t\t\ttext-decoration: none;
\t\t\ttransition: background-color 0.3s ease;
\t\t}

\t\t#create-new:hover {
\t\t\tbackground-color: #f39c12;
\t\t}
        /* Styles for the show button */
a.show-button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #1abc9c;
  border-radius: 3px;
  background-color: #1abc9c;
  color: white;
  text-decoration: none;
  transition: background-color 0.2s ease-in-out;
}

a.show-button:hover {
  background-color: #148f77;
  border-color: #148f77;
}

/* Styles for the edit button */
a.edit-button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #3498db;
  border-radius: 3px;
  background-color: #3498db;
  color: white;
  text-decoration: none;
  transition: background-color 0.2s ease-in-out;
}

a.edit-button:hover {
  background-color: #217dbb;
  border-color: #217dbb;
}

/* Styles for the create new button */
a.create-new-button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #f1c40f;
  border-radius: 3px;
  background-color: #f1c40f;
  color: white;
  text-decoration: none;
  transition: background-color 0.2s ease-in-out;
}

a.create-new-button:hover {
  background-color: #d4af37;
  border-color: #d4af37;
}

\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 108
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Abonnement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 110
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "\t<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/evento.png"), "html", null, true);
        echo "\" alt=\"Evento\" width=\"30\" height=\"40\" style=\"position: absolute; top: 0; left: 3%; transform: translateY(10%);\">
        </a>
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_home");
        echo "\" style=\"position: absolute; top: 15px; left: 4%;\">
          EVENTO
        </a>
        
        
      <ul class=\"mt-6\" >
           <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes factures </span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes réservations</span>
            </a>
          </li>
          <li class=\"relative px-6 py-3\">
            <span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\"
              aria-hidden=\"true\"></span>
            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
              href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes Abonnements </span>
            </a>
          </li>

           <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamationsusers_index");
        echo "\">
              
<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z\">
                </path>
              </svg>


              <span class=\"ml-4\">Mes réclamations</span>
            </a>
          </li>
       

        </ul>
        <div class=\"px-6 my-6\">
      </div>
    </aside>
<!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
      x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\"
      x-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
      x-transition:leave-end=\"opacity-0\"
      class=\"fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center\"></div>
    <aside class=\"fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden\"
      x-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
      x-transition:enter-start=\"opacity-0 transform -translate-x-20\" x-transition:enter-end=\"opacity-100\"
      x-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
      x-transition:leave-end=\"opacity-0 transform -translate-x-20\" @click.away=\"closeSideMenu\"
      @keydown.escape=\"closeSideMenu\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          Evento
        </a>
        <ul class=\"mt-6\">
          <li class=\"relative px-6 py-3\">

            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
             href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes factures</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes réservations</span>
            </a>
          </li>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes abonnements</span>
            </a>
          </li>
        
         
        </ul>

      </div>
    </aside>
    <div class=\"flex flex-col flex-1 w-full\">
      <header class=\"z-10 py-4 bg-white shadow-md dark:bg-gray-800\">
        <div
          class=\"container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300\">
          <!-- Mobile hamburger -->
          <button class=\"p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple\"
            @click=\"toggleSideMenu\" aria-label=\"Menu\">
            <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
              <path fill-rule=\"evenodd\"
                d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\"
                clip-rule=\"evenodd\"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class=\"flex justify-center flex-1 lg:mr-32\">
            <div class=\"relative w-full max-w-xl mr-6 focus-within:text-purple-500\">
              <div class=\"absolute inset-y-0 flex items-center pl-2\">
                <svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                  <path fill-rule=\"evenodd\"
                    d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\"
                    clip-rule=\"evenodd\"></path>
                </svg>
              </div>
              <input
                class=\"w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input\"
                type=\"text\" placeholder=\"Search for projects\" aria-label=\"Search\" />
            </div>
          </div>
          <ul class=\"flex items-center flex-shrink-0 space-x-6\">
            <!-- Theme toggler -->
            <li class=\"flex\">
              <button class=\"rounded-md focus:outline-none focus:shadow-outline-purple\" @click=\"toggleTheme\"
                aria-label=\"Toggle color mode\">
                <template x-if=\"!dark\">
                  <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                    <path d=\"M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z\"></path>
                  </svg>
                </template>
                <template x-if=\"dark\">
                  <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                    <path fill-rule=\"evenodd\"
                      d=\"M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z\"
                      clip-rule=\"evenodd\"></path>
                  </svg>
                </template>
              </button>
            </li>
            <!-- Notifications menu -->
            <li class=\"relative\">
              <button class=\"relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple\"
                @click=\"toggleNotificationsMenu\" @keydown.escape=\"closeNotificationsMenu\" aria-label=\"Notifications\"
                aria-haspopup=\"true\">
                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                  <path
                    d=\"M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z\">
                  </path>
                </svg>
                <!-- Notification badge -->
                <span aria-hidden=\"true\"
                  class=\"absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800\"></span>
              </button>
              <template x-if=\"isNotificationsMenuOpen\">
                <ul x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100\"
                  x-transition:leave-end=\"opacity-0\" @click.away=\"closeNotificationsMenu\"
                  @keydown.escape=\"closeNotificationsMenu\"
                  class=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700\">
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <span>Messages</span>
                      <span
                        class=\"inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600\">
                        13
                      </span>
                    </a>
                  </li>
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <span>Sales</span>
                      <span
                        class=\"inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600\">
                        2
                      </span>
                    </a>
                  </li>
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <span>Alerts</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <!-- Profile menu -->
            <li class=\"relative\">
              <button class=\"align-middle rounded-full focus:shadow-outline-purple focus:outline-none\"
                @click=\"toggleProfileMenu\" @keydown.escape=\"closeProfileMenu\" aria-label=\"Account\" aria-haspopup=\"true\">
                <img class=\"object-cover w-8 h-8 rounded-full\"
                  src=\"https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82\"
                  alt=\"\" aria-hidden=\"true\" />
              </button>
              <template x-if=\"isProfileMenuOpen\">
                <ul x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100\"
                  x-transition:leave-end=\"opacity-0\" @click.away=\"closeProfileMenu\" @keydown.escape=\"closeProfileMenu\"
                  class=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700\"
                  aria-label=\"submenu\">
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path
                          d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
                        </path>
                      </svg>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
    <header>
\t\t<h1>Mes Abonnements</h1>
\t\t
\t</header>
\t<main class=\"h-full overflow-y-auto\">
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Renouvellement</th>
\t\t\t\t\t<th>DateExpire</th>
\t\t\t\t\t<th>Prix</th>
          <th>Devise</th>
\t\t\t\t\t<th>Plafond</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 396, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 397
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 398), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 399
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 399)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 399), ", "), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 400
            echo ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "renouvellement", [], "any", false, false, false, 400)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t<td>";
            // line 401
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "dateExpire", [], "any", false, false, false, 401)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "dateExpire", [], "any", false, false, false, 401), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 402
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 402), "html", null, true);
            echo "</td>
          <td>";
            // line 403
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "currency", [], "any", false, false, false, 403), "html", null, true);
            echo "</td>

\t\t\t\t\t<td>";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "plafond", [], "any", false, false, false, 405), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
          \t<a href=\"";
            // line 407
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exportpdf", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 407)]), "html", null, true);
            echo "\" class=\" create-new-button \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-filetype-pdf\" viewBox=\"0 0 16 16\">
  <path fill-rule=\"evenodd\" d=\"M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z\"/>
</svg>  </a>

\t\t\t\t\t\t<a href=\"";
            // line 411
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 411)]), "html", null, true);
            echo "\" class=\"show-button\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
  <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
</svg> </a>
\t\t\t\t\t\t<a href=\"";
            // line 414
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 414)]), "html", null, true);
            echo "\" class=\"edit-button\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
  <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
  <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
</svg></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 421
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">aucun abonnement</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "
\t\t\t</tbody>
\t\t</table>
      ";
        // line 428
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 428, $this->source); })()), "knp_pagination/sliding.html.twig");
        echo "

\t\t<a href=\"";
        // line 430
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_new");
        echo "\"class=\"create-new-button\">Ajouter un abonnement</a>
\t</main>
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
        return "abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 430,  584 => 428,  579 => 425,  570 => 421,  558 => 414,  552 => 411,  545 => 407,  540 => 405,  535 => 403,  531 => 402,  527 => 401,  523 => 400,  519 => 399,  515 => 398,  512 => 397,  507 => 396,  343 => 235,  328 => 223,  311 => 209,  268 => 169,  252 => 156,  235 => 142,  218 => 128,  207 => 120,  202 => 118,  193 => 111,  186 => 110,  173 => 108,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/back.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\t/* Style for the header */
\t\theader {
\t\t\tbackground-color: #1c1c1c;
\t\t\tcolor: #fff;
\t\t\tpadding: 20px;
\t\t}

\t\t/* Style for the table */
\t\t.table {
\t\t\tborder-collapse: collapse;
\t\t\twidth: 100%;
\t\t}

\t\t/* Style for table headers */
\t\t.table th {
\t\t\tbackground-color: #f1c40f;
\t\t\tcolor: #000;
\t\t\tfont-weight: bold;
\t\t\tpadding: 10px;
\t\t\ttext-align: left;
\t\t\ttext-transform: uppercase;
\t\t}

\t\t/* Style for table rows */
\t\t.table tr {
\t\t\tborder-bottom: 1px solid #ccc;
\t\t}

\t\t/* Style for table data cells */
\t\t.table td {
\t\t\tpadding: 10px;
\t\t\tvertical-align: middle;
\t\t}

\t\t/* Style for the \"Create new\" button */
\t\t#create-new {
\t\t\tbackground-color: #f1c40f;
\t\t\tborder-radius: 4px;
\t\t\tcolor: #000;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 20px;
\t\t\tpadding: 10px 20px;
\t\t\ttext-decoration: none;
\t\t\ttransition: background-color 0.3s ease;
\t\t}

\t\t#create-new:hover {
\t\t\tbackground-color: #f39c12;
\t\t}
        /* Styles for the show button */
a.show-button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #1abc9c;
  border-radius: 3px;
  background-color: #1abc9c;
  color: white;
  text-decoration: none;
  transition: background-color 0.2s ease-in-out;
}

a.show-button:hover {
  background-color: #148f77;
  border-color: #148f77;
}

/* Styles for the edit button */
a.edit-button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #3498db;
  border-radius: 3px;
  background-color: #3498db;
  color: white;
  text-decoration: none;
  transition: background-color 0.2s ease-in-out;
}

a.edit-button:hover {
  background-color: #217dbb;
  border-color: #217dbb;
}

/* Styles for the create new button */
a.create-new-button {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: 1px solid #f1c40f;
  border-radius: 3px;
  background-color: #f1c40f;
  color: white;
  text-decoration: none;
  transition: background-color 0.2s ease-in-out;
}

a.create-new-button:hover {
  background-color: #d4af37;
  border-color: #d4af37;
}

\t</style>
{% endblock %}

{% block title %}Abonnement{% endblock %}

{% block body %}
\t<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          <img src=\"{{asset('back/img/evento.png')}}\" alt=\"Evento\" width=\"30\" height=\"40\" style=\"position: absolute; top: 0; left: 3%; transform: translateY(10%);\">
        </a>
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"{{ path('login_home') }}\" style=\"position: absolute; top: 15px; left: 4%;\">
          EVENTO
        </a>
        
        
      <ul class=\"mt-6\" >
           <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_facture_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes factures </span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_reservation_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes réservations</span>
            </a>
          </li>
          <li class=\"relative px-6 py-3\">
            <span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\"
              aria-hidden=\"true\"></span>
            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
              href=\"{{ path('app_abonnement_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes Abonnements </span>
            </a>
          </li>

           <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_reclamationsusers_index') }}\">
              
<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z\">
                </path>
              </svg>


              <span class=\"ml-4\">Mes réclamations</span>
            </a>
          </li>
       

        </ul>
        <div class=\"px-6 my-6\">
      </div>
    </aside>
<!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
      x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\"
      x-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
      x-transition:leave-end=\"opacity-0\"
      class=\"fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center\"></div>
    <aside class=\"fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden\"
      x-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
      x-transition:enter-start=\"opacity-0 transform -translate-x-20\" x-transition:enter-end=\"opacity-100\"
      x-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
      x-transition:leave-end=\"opacity-0 transform -translate-x-20\" @click.away=\"closeSideMenu\"
      @keydown.escape=\"closeSideMenu\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          Evento
        </a>
        <ul class=\"mt-6\">
          <li class=\"relative px-6 py-3\">

            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
             href=\"{{ path('app_facture_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes factures</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_reservation_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes réservations</span>
            </a>
          </li>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_abonnement_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\">
                </path>
              </svg>
              <span class=\"ml-4\">Mes abonnements</span>
            </a>
          </li>
        
         
        </ul>

      </div>
    </aside>
    <div class=\"flex flex-col flex-1 w-full\">
      <header class=\"z-10 py-4 bg-white shadow-md dark:bg-gray-800\">
        <div
          class=\"container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300\">
          <!-- Mobile hamburger -->
          <button class=\"p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple\"
            @click=\"toggleSideMenu\" aria-label=\"Menu\">
            <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
              <path fill-rule=\"evenodd\"
                d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\"
                clip-rule=\"evenodd\"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class=\"flex justify-center flex-1 lg:mr-32\">
            <div class=\"relative w-full max-w-xl mr-6 focus-within:text-purple-500\">
              <div class=\"absolute inset-y-0 flex items-center pl-2\">
                <svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                  <path fill-rule=\"evenodd\"
                    d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\"
                    clip-rule=\"evenodd\"></path>
                </svg>
              </div>
              <input
                class=\"w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input\"
                type=\"text\" placeholder=\"Search for projects\" aria-label=\"Search\" />
            </div>
          </div>
          <ul class=\"flex items-center flex-shrink-0 space-x-6\">
            <!-- Theme toggler -->
            <li class=\"flex\">
              <button class=\"rounded-md focus:outline-none focus:shadow-outline-purple\" @click=\"toggleTheme\"
                aria-label=\"Toggle color mode\">
                <template x-if=\"!dark\">
                  <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                    <path d=\"M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z\"></path>
                  </svg>
                </template>
                <template x-if=\"dark\">
                  <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                    <path fill-rule=\"evenodd\"
                      d=\"M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z\"
                      clip-rule=\"evenodd\"></path>
                  </svg>
                </template>
              </button>
            </li>
            <!-- Notifications menu -->
            <li class=\"relative\">
              <button class=\"relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple\"
                @click=\"toggleNotificationsMenu\" @keydown.escape=\"closeNotificationsMenu\" aria-label=\"Notifications\"
                aria-haspopup=\"true\">
                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"#efae06\" viewBox=\"0 0 20 20\">
                  <path
                    d=\"M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z\">
                  </path>
                </svg>
                <!-- Notification badge -->
                <span aria-hidden=\"true\"
                  class=\"absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800\"></span>
              </button>
              <template x-if=\"isNotificationsMenuOpen\">
                <ul x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100\"
                  x-transition:leave-end=\"opacity-0\" @click.away=\"closeNotificationsMenu\"
                  @keydown.escape=\"closeNotificationsMenu\"
                  class=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700\">
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <span>Messages</span>
                      <span
                        class=\"inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600\">
                        13
                      </span>
                    </a>
                  </li>
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <span>Sales</span>
                      <span
                        class=\"inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600\">
                        2
                      </span>
                    </a>
                  </li>
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <span>Alerts</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <!-- Profile menu -->
            <li class=\"relative\">
              <button class=\"align-middle rounded-full focus:shadow-outline-purple focus:outline-none\"
                @click=\"toggleProfileMenu\" @keydown.escape=\"closeProfileMenu\" aria-label=\"Account\" aria-haspopup=\"true\">
                <img class=\"object-cover w-8 h-8 rounded-full\"
                  src=\"https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82\"
                  alt=\"\" aria-hidden=\"true\" />
              </button>
              <template x-if=\"isProfileMenuOpen\">
                <ul x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100\"
                  x-transition:leave-end=\"opacity-0\" @click.away=\"closeProfileMenu\" @keydown.escape=\"closeProfileMenu\"
                  class=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700\"
                  aria-label=\"submenu\">
                  <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"#\">
                      <svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path
                          d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
                        </path>
                      </svg>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
    <header>
\t\t<h1>Mes Abonnements</h1>
\t\t
\t</header>
\t<main class=\"h-full overflow-y-auto\">
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Renouvellement</th>
\t\t\t\t\t<th>DateExpire</th>
\t\t\t\t\t<th>Prix</th>
          <th>Devise</th>
\t\t\t\t\t<th>Plafond</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for abonnement in abonnements %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ abonnement.id }}</td>
\t\t\t\t\t<td>{{ abonnement.type ? abonnement.type|join(', ') : '' }}</td>
\t\t\t\t\t<td>{{ abonnement.renouvellement ? 'Yes' : 'No' }}</td>
\t\t\t\t\t<td>{{ abonnement.dateExpire ? abonnement.dateExpire|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ abonnement.prix }}</td>
          <td>{{ abonnement.currency}}</td>

\t\t\t\t\t<td>{{ abonnement.plafond }}</td>
\t\t\t\t\t<td>
          \t<a href=\"{{ path('exportpdf', {'id': abonnement.id}) }}\" class=\" create-new-button \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-filetype-pdf\" viewBox=\"0 0 16 16\">
  <path fill-rule=\"evenodd\" d=\"M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z\"/>
</svg>  </a>

\t\t\t\t\t\t<a href=\"{{ path('app_abonnement_show', {'id': abonnement.id}) }}\" class=\"show-button\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
  <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
</svg> </a>
\t\t\t\t\t\t<a href=\"{{ path('app_abonnement_edit', {'id': abonnement.id}) }}\" class=\"edit-button\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
  <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
  <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
</svg></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">aucun abonnement</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}

\t\t\t</tbody>
\t\t</table>
      {{ knp_pagination_render(abonnements,'knp_pagination/sliding.html.twig') }}

\t\t<a href=\"{{ path('app_abonnement_new') }}\"class=\"create-new-button\">Ajouter un abonnement</a>
\t</main>
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
", "abonnement/index.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\abonnement\\index.html.twig");
    }
}

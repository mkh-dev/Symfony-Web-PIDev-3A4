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

/* users/index.html.twig */
class __TwigTemplate_d308df08c40f0fc58ba7cfb52eff5902 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent = $this->loadTemplate("back/back.html.twig", "users/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/tableUsers.css"), "html", null, true);
        echo "\" />
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/evento.png"), "html", null, true);
        echo "\" alt=\"Evento\" width=\"30\" height=\"40\" style=\"position: absolute; top: 0; left: 3%; transform: translateY(10%);\">
        </a>
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\" style=\"position: absolute; top: 15px; left: 4%;\">
          EVENTO
        </a>
        
        
         <ul class=\"mt-6\">
          <li class=\"relative px-6 py-3\">
            <span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\"
              aria-hidden=\"true\"></span>
            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
              href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Utilisateurs</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Réclamations</span>
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
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Utilisateurs</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_index");
        echo "\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Réclamations</span>
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
                      
                         ";
        // line 228
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228)) {
            echo "              
                          Vous êtes connecté en tant que ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229), "userIdentifier", [], "any", false, false, false, 229), "html", null, true);
            echo "
                    ";
        }
        // line 230
        echo " 
                    </a>
                  </li> 
                     <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                      <svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path
                          d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
                        </path>
                      </svg>
                        <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
    


      
      <main class=\"h-full overflow-y-auto\">

      

<table class=\"table\">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Numéro de téléphone</th>
                <th>Role</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 273, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 274
            echo "            <tr>
                <td>";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 275), "html", null, true);
            echo "</td>
                <td>";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 276), "html", null, true);
            echo "</td>
                <td>";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 277), "html", null, true);
            echo "</td>
                <td>";
            // line 278
            ((twig_get_attribute($this->env, $this->source, $context["user"], "datenaissance", [], "any", false, false, false, 278)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datenaissance", [], "any", false, false, false, 278), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numtel", [], "any", false, false, false, 279), "html", null, true);
            echo "</td>
                <td>";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userrole", [], "any", false, false, false, 280), "html", null, true);
            echo "</td>
                <td>";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 281), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 283)]), "html", null, true);
            echo "\">Montrer</a>
                    <a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 284)]), "html", null, true);
            echo "\">Editer</a>
                    <form method=\"post\" action=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 285)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 286))), "html", null, true);
            echo "\">
    <button class=\"btn\" type=\"submit\">
        ";
            // line 288
            $this->loadTemplate("users/_delete_form.html.twig", "users/index.html.twig", 288)->display($context);
            // line 289
            echo "    </button>
</form>

         
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 296
            echo "            <tr>
                <td colspan=\"9\">Aucun enregistrement trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 303
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        echo "\" class=\"button\"> Ajouter</a>

      </main>
     
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 303,  481 => 300,  472 => 296,  453 => 289,  451 => 288,  446 => 286,  442 => 285,  438 => 284,  434 => 283,  429 => 281,  425 => 280,  421 => 279,  417 => 278,  413 => 277,  409 => 276,  405 => 275,  402 => 274,  384 => 273,  343 => 235,  336 => 230,  331 => 229,  327 => 228,  196 => 100,  179 => 86,  138 => 48,  121 => 34,  106 => 22,  95 => 13,  88 => 12,  79 => 8,  74 => 7,  67 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/back.html.twig' %}

{% block title %}Utilisateurs{% endblock %}


  {% block stylesheets %}
  {{ parent() }}
<link rel=\"stylesheet\" href=\"{{asset('back/css/users/tableUsers.css')}}\" />
  {% endblock %}


{% block body %}


<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          <img src=\"{{asset('back/img/evento.png')}}\" alt=\"Evento\" width=\"30\" height=\"40\" style=\"position: absolute; top: 0; left: 3%; transform: translateY(10%);\">
        </a>
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\" style=\"position: absolute; top: 15px; left: 4%;\">
          EVENTO
        </a>
        
        
         <ul class=\"mt-6\">
          <li class=\"relative px-6 py-3\">
            <span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\"
              aria-hidden=\"true\"></span>
            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
              href=\"{{ path('app_users_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Utilisateurs</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_reclamations_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Réclamations</span>
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
              href=\"{{ path('app_users_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
                </path>
              </svg>
              <span class=\"ml-4\">Utilisateurs</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class=\"relative px-6 py-3\">
            <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
              href=\"{{ path('app_reclamations_index') }}\">
              <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path
                  d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\">
                </path>
              </svg>
              <span class=\"ml-4\">Réclamations</span>
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
                      
                         {% if app.user %}              
                          Vous êtes connecté en tant que {{ app.user.userIdentifier }}
                    {% endif %} 
                    </a>
                  </li> 
                     <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"{{ path('app_logout') }}\">
                      <svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path
                          d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
                        </path>
                      </svg>
                        <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
    


      
      <main class=\"h-full overflow-y-auto\">

      

<table class=\"table\">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Numéro de téléphone</th>
                <th>Role</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.prenom }}</td>
                <td>{{ user.nom }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.datenaissance ? user.datenaissance|date('Y-m-d') : '' }}</td>
                <td>{{ user.numtel }}</td>
                <td>{{ user.userrole }}</td>
                <td>{{ user.password }}</td>
                <td>
                    <a href=\"{{ path('app_users_show', {'id': user.id}) }}\">Montrer</a>
                    <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\">Editer</a>
                    <form method=\"post\" action=\"{{ path('app_users_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
    <button class=\"btn\" type=\"submit\">
        {% include 'users/_delete_form.html.twig' %}
    </button>
</form>

         
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">Aucun enregistrement trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_users_new') }}\" class=\"button\"> Ajouter</a>

      </main>
     
    </div>
  </div>
{% endblock %}
", "users/index.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\users\\index.html.twig");
    }
}

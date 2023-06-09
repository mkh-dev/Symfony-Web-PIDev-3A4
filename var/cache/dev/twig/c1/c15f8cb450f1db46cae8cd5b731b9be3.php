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

/* users/_form.html.twig */
class __TwigTemplate_91537262507497486a0afea556e9bde4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/_form.html.twig"));

        $this->parent = $this->loadTemplate("back/back.html.twig", "users/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/form.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/form.js"), "html", null, true);
        echo "\">
     
    <!----===== Iconscout CSS ===== -->
    <link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">

    <!--<title>Responsive Regisration Form </title>--> 
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
          <img src=\"";
        // line 24
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
        // line 36
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
        // line 50
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
        // line 88
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
        // line 102
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
        // line 230
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230)) {
            echo "              
                          Vous êtes connecté en tant que ";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "userIdentifier", [], "any", false, false, false, 231), "html", null, true);
            echo "
                    ";
        }
        // line 232
        echo " 
                    </a>
                  </li> 
                     <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"";
        // line 237
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
    <div class=\"contrainerform\">
        <header>Gestion des Utilisateurs</header>

<div class=\"fields\">
    <div class=\"input-field\">
        ";
        // line 261
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;   padding-left: 60px;\">
                ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "prenom", [], "any", false, false, false, 264), 'label', ["label" => "Prénom"]);
        echo "
                ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "prenom", [], "any", false, false, false, 265), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "prenom", [], "any", false, false, false, 266), 'errors');
        echo "
            </div>
            <div style=\"display:inline-block; width: 45%; float:right; \">
                ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "nom", [], "any", false, false, false, 269), 'label', ["label" => "Nom"]);
        echo "
                ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "nom", [], "any", false, false, false, 270), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "nom", [], "any", false, false, false, 271), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;    padding-left: 60px;\">
                ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "email", [], "any", false, false, false, 276), 'label', ["label" => "Email"]);
        echo "
                ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "email", [], "any", false, false, false, 277), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "email", [], "any", false, false, false, 278), 'errors');
        echo "
            </div>
            <div style=\"display:inline-block; width: 45%; float:right;\">
                ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "datenaissance", [], "any", false, false, false, 281), 'label', ["label" => "Date de naissance"]);
        echo "
                ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "datenaissance", [], "any", false, false, false, 282), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "datenaissance", [], "any", false, false, false, 283), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;    padding-left: 60px;\">
                ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "numtel", [], "any", false, false, false, 288), 'label', ["label" => "Numéro de téléphone"]);
        echo "
                ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "numtel", [], "any", false, false, false, 289), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "numtel", [], "any", false, false, false, 290), 'errors');
        echo "
            </div>
            <div style=\"display:inline-block; width: 45%; float:right;\">
                ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "userrole", [], "any", false, false, false, 293), 'label', ["label" => "Rôle"]);
        echo "
                ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "userrole", [], "any", false, false, false, 294), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "userrole", [], "any", false, false, false, 295), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\" style=\" padding-left: 60px;\">
            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "password", [], "any", false, false, false, 299), 'label', ["label" => "Mot de passe"]);
        echo "
            ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "password", [], "any", false, false, false, 300), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "password", [], "any", false, false, false, 301), 'errors');
        echo "
        </div>

                    <div class=\"buttons\" style=\"display: flex; justify-content: space-between;\">
                <a href=\"";
        // line 305
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        echo "\" class=\"backBtn\">
                    <i class=\"uil uil-navigator\"></i>
                    <span class=\"btnText\">Revenir</span>
                </a>
                <button class=\"submit\">
                    <span class=\"btnText\">";
        // line 310
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 310, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</span>
                    <i class=\"uil uil-navigator\"></i>
                </button>
            </div>
            ";
        // line 314
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), 'form_end');
        echo "

       </div>
            </div>
            </div>
            </div>
     
    
   </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "users/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 314,  496 => 310,  488 => 305,  481 => 301,  477 => 300,  473 => 299,  466 => 295,  462 => 294,  458 => 293,  452 => 290,  448 => 289,  444 => 288,  436 => 283,  432 => 282,  428 => 281,  422 => 278,  418 => 277,  414 => 276,  406 => 271,  402 => 270,  398 => 269,  392 => 266,  388 => 265,  384 => 264,  378 => 261,  351 => 237,  344 => 232,  339 => 231,  335 => 230,  204 => 102,  187 => 88,  146 => 50,  129 => 36,  114 => 24,  104 => 16,  97 => 15,  83 => 8,  79 => 7,  74 => 6,  67 => 5,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/back.html.twig' %}
{% block title %}Utilisateurs{% endblock %}


  {% block stylesheets %}
  {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('back/css/users/form.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('back/css/users/form.js')}}\">
     
    <!----===== Iconscout CSS ===== -->
    <link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">

    <!--<title>Responsive Regisration Form </title>--> 
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
    <div class=\"contrainerform\">
        <header>Gestion des Utilisateurs</header>

<div class=\"fields\">
    <div class=\"input-field\">
        {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;   padding-left: 60px;\">
                {{ form_label(form.prenom, 'Prénom') }}
                {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.prenom) }}
            </div>
            <div style=\"display:inline-block; width: 45%; float:right; \">
                {{ form_label(form.nom, 'Nom') }}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.nom) }}
            </div>
        </div>
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;    padding-left: 60px;\">
                {{ form_label(form.email, 'Email') }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.email) }}
            </div>
            <div style=\"display:inline-block; width: 45%; float:right;\">
                {{ form_label(form.datenaissance, 'Date de naissance') }}
                {{ form_widget(form.datenaissance, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.datenaissance) }}
            </div>
        </div>
        <div class=\"form-group\">
            <div style=\"display:inline-block; width: 45%;    padding-left: 60px;\">
                {{ form_label(form.numtel, 'Numéro de téléphone') }}
                {{ form_widget(form.numtel, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.numtel) }}
            </div>
            <div style=\"display:inline-block; width: 45%; float:right;\">
                {{ form_label(form.userrole, 'Rôle') }}
                {{ form_widget(form.userrole, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.userrole) }}
            </div>
        </div>
        <div class=\"form-group\" style=\" padding-left: 60px;\">
            {{ form_label(form.password, 'Mot de passe') }}
            {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.password) }}
        </div>

                    <div class=\"buttons\" style=\"display: flex; justify-content: space-between;\">
                <a href=\"{{ path('app_users_index') }}\" class=\"backBtn\">
                    <i class=\"uil uil-navigator\"></i>
                    <span class=\"btnText\">Revenir</span>
                </a>
                <button class=\"submit\">
                    <span class=\"btnText\">{{ button_label|default('Valider') }}</span>
                    <i class=\"uil uil-navigator\"></i>
                </button>
            </div>
            {{ form_end(form) }}

       </div>
            </div>
            </div>
            </div>
     
    
   </main>
{% endblock %}", "users/_form.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\users\\_form.html.twig");
    }
}

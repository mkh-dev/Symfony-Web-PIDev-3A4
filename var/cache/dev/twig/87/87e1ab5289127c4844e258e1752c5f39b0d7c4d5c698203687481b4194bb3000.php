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

/* reclamations/index.html.twig */
class __TwigTemplate_c2ce792ff82fa55d64ca824d3d23d6c6bb7cd855b11761666d714ef072ca5904 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamations/index.html.twig"));

        $this->parent = $this->loadTemplate("back/back.html.twig", "reclamations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réclamations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
<style>

body {
\tcolor: #566787;
\tbackground: #f5f5f5;
\tfont-family: 'Varela Round', sans-serif;
\tfont-size: 13px;

}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
\tbackground: #fff;
\tpadding: 20px 25px;
\tborder-radius: 3px;
\tmin-width: 800px;
\tbox-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
\tpadding-bottom: 15px;
\tbackground: #000000;
\tcolor: #fff;
\tpadding: 16px 30px;
\tmin-width: 100%;
\tmargin: -20px -25px 10px;
\tborder-radius: 3px 3px 0 0;
}
.table-title h2 {
\tmargin: 5px 0 0;
\tfont-size: 24px;
}
.table-title .btn-group {
\tfloat: right;
}
.table-title .btn {
\tcolor: #fff;
\tfloat: right;
\tfont-size: 13px;
\tborder: none;
\tmin-width: 50px;
\tborder-radius: 2px;
\tborder: none;
\toutline: none !important;
\tmargin-left: 10px;
 
}
.table-title .btn i {
\tfloat: left;
\tfont-size: 21px;
\tmargin-right: 5px;
}
.table-title .btn span {
\tfloat: left;
\tmargin-top: 2px;
}
table.table tr th, table.table tr td {
\tborder-color: #e9e9e9;
\tpadding: 12px 15px;
\tvertical-align: middle;
}
table.table tr th:first-child {
\twidth: 60px;
}
table.table tr th:last-child {
\twidth: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
\tbackground-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
\tbackground: #f5f5f5;
}
table.table th i {
\tfont-size: 13px;
\tmargin: 0 5px;
\tcursor: pointer;
}\t
table.table td:last-child i {
\topacity: 0.9;
\tfont-size: 22px;
\tmargin: 0 5px;
}
table.table td a {
\tfont-weight: bold;
\tcolor: #566787;
\tdisplay: inline-block;
\ttext-decoration: none;
\toutline: none !important;
}
table.table td a:hover {
\tcolor: #e9ad19;
}
table.table td a.edit {
\tcolor: #FFC107;
}

table.table td a.show {
\tcolor: black;
}
table.table td a.delete {
\tcolor: #F44336;
}
table.table td i {
\tfont-size: 19px;
}
table.table .avatar {
\tborder-radius: 50%;
\tvertical-align: middle;
\tmargin-right: 10px;
}
.pagination {
\tfloat: right;
\tmargin: 0 0 5px;
}
.pagination li a {
\tborder: none;
\tfont-size: 13px;
\tmin-width: 30px;
\tmin-height: 30px;
\tcolor: #999;
\tmargin: 0 2px;
\tline-height: 30px;
\tborder-radius: 2px !important;
\ttext-align: center;
\tpadding: 0 6px;
  
}


.pagination li a:hover {
\tcolor: #666;
}\t
.pagination li.active a, .pagination li.active a.page-link {
\tbackground: black;
}
.pagination li.active a:hover {        
\tbackground: #ffbf1c;
}
.pagination li.disabled i {
\tcolor: #ccc;
}
.pagination li i {
\tfont-size: 16px;
\tpadding-top: 6px
}
.hint-text {
\tfloat: left;
\tmargin-top: 10px;
\tfont-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
\tposition: relative;
}
.custom-checkbox input[type=\"checkbox\"] {    
\topacity: 0;
\tposition: absolute;
\tmargin: 5px 0 0 3px;
\tz-index: 9;
}
.custom-checkbox label:before{
\twidth: 18px;
\theight: 18px;
}
.custom-checkbox label:before {
\tcontent: '';
\tmargin-right: 10px;
\tdisplay: inline-block;
\tvertical-align: text-top;
\tbackground: white;
\tborder: 1px solid #bbb;
\tborder-radius: 2px;
\tbox-sizing: border-box;
\tz-index: 2;
}
.custom-checkbox input[type=\"checkbox\"]:checked + label:after {
\tcontent: '';
\tposition: absolute;
\tleft: 6px;
\ttop: 3px;
\twidth: 6px;
\theight: 11px;
\tborder: solid #000;
\tborder-width: 0 3px 3px 0;
\ttransform: inherit;
\tz-index: 3;
\ttransform: rotateZ(45deg);
}
.custom-checkbox input[type=\"checkbox\"]:checked + label:before {
\tborder-color: #e9ad19;
\tbackground: #e9ad19;
}
.custom-checkbox input[type=\"checkbox\"]:checked + label:after {
\tborder-color: #fff;
}
.custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
\tcolor: #b8b8b8;
\tcursor: auto;
\tbox-shadow: none;
\tbackground: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
\tmax-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
\tpadding: 20px 30px;
}
.modal .modal-content {
\tborder-radius: 3px;
\tfont-size: 14px;
}
.modal .modal-footer {
\tbackground: #ecf0f1;
\tborder-radius: 0 0 3px 3px;
}
.modal .modal-title {
\tdisplay: inline-block;
}
.modal .form-control {
\tborder-radius: 2px;
\tbox-shadow: none;
\tborder-color: #dddddd;
}
.modal textarea.form-control {
\tresize: vertical;
}
.modal .btn {
\tborder-radius: 2px;
\tmin-width: 100px;
}\t
.modal form label {
\tfont-weight: normal;
}\t
</style>
<script>
\$(document).ready(function(){
\t// Activate tooltip
\t\$('[data-toggle=\"tooltip\"]').tooltip();
\t
\t// Select/Deselect checkboxes
\tvar checkbox = \$('table tbody input[type=\"checkbox\"]');
\t\$(\"#selectAll\").click(function(){
\t\tif(this.checked){
\t\t\tcheckbox.each(function(){
\t\t\t\tthis.checked = true;                        
\t\t\t});
\t\t} else{
\t\t\tcheckbox.each(function(){
\t\t\t\tthis.checked = false;                        
\t\t\t});
\t\t} 
\t});
\tcheckbox.click(function(){
\t\tif(!this.checked){
\t\t\t\$(\"#selectAll\").prop(\"checked\", false);
\t\t}
\t});
});
</script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 280
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 281
        echo "
<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_home");
        echo "\">
          <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/evento.png"), "html", null, true);
        echo "\" alt=\"Evento\" width=\"30\" height=\"40\" style=\"position: absolute; top: 0; left: 3%; transform: translateY(10%);\">
        </a>
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_home");
        echo "\" style=\"position: absolute; top: 15px; left: 4%;\">
          EVENTO
        </a>
        
    <ul class=\"mt-6\">
  <li class=\"relative px-6 py-3 \">
    <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\" href=\"";
        // line 297
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        echo "\">
      <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" style=\"color: black;\">
        <path d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"></path>
      </svg>
      <span class=\"ml-4\" style=\"color: black;\">Utilisateurs</span>
    </a>
  </li>
  <li class=\"relative px-6 py-3 \">
    <span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\" aria-hidden=\"true\"></span>
    <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\" href=\"";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_index");
        echo "\">
      <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"></path>
      </svg>
      <span class=\"ml-4\" style=\"color: black;\">Réclamations</span>
    </a>
  </li>
</ul>


 
  

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
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\" style=\"color: black;\">
          Evento
        </a>
        <ul class=\"mt-6\">
          <li class=\"relative px-6 py-3\">

            <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\"
              href=\"";
        // line 344
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
        // line 358
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
                type=\"text\" placeholder=\"Rechercher\" aria-label=\"Search\" />
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
                  src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/user.png"), "html", null, true);
        echo "\"
                  alt=\"\" aria-hidden=\"true\" />
              </button>
              <template x-if=\"isProfileMenuOpen\">
                <ul x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100\"
                  x-transition:leave-end=\"opacity-0\" @click.away=\"closeProfileMenu\" @keydown.escape=\"closeProfileMenu\"
                  class=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700\"
                  aria-label=\"submenu\">
                  <li class=\"flex\">
                   <span class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\" style=\"color: black;\">
    ";
        // line 484
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 484, $this->source); })()), "user", [], "any", false, false, false, 484)) {
            echo "              
        Vous êtes actuellement connecté en tant que ";
            // line 485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 485, $this->source); })()), "user", [], "any", false, false, false, 485), "userIdentifier", [], "any", false, false, false, 485), "html", null, true);
            echo "
    ";
        }
        // line 486
        echo " 
</span>

                  </li> 
                     <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"";
        // line 492
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                      <svg style=\"color: black;\" class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path
                          d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
                        </path>
                      </svg>
                        <span style=\"color: black;\">Logout</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
    


      
       <main class=\"h-full overflow-y-auto\">

      

<div class=\"container-xl\">
\t<div class=\"table-responsive\">
\t\t<div class=\"table-wrapper\">
\t\t\t<div class=\"table-title\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h2> <b>Liste des Réclamations</b></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<a href=\"";
        // line 525
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_new");
        echo "\" class=\"btn btn-warning\" ><i class=\"material-icons\">&#xE147;</i> <span>Ajouter Une Nouvelle Réclamation</span></a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"selectAll\">
\t\t\t\t\t\t\t\t<label for=\"selectAll\"></label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Message</th>
            <th style=\"width:140px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t\t<tbody>
           ";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 547, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 548
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox1\" name=\"options[]\" value=\"1\">
\t\t\t\t\t\t\t\t<label for=\"checkbox1\"></label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
                <td>";
            // line 555
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "prenom", [], "any", false, false, false, 555), "html", null, true);
            echo "</td>
                <td>";
            // line 556
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 556), "html", null, true);
            echo "</td>
                <td>";
            // line 557
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 557), "html", null, true);
            echo "</td>
                <td>";
            // line 558
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 558), "html", null, true);
            echo "</td>
           
\t\t\t\t\t\t<td>
              <a href=\"";
            // line 561
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 561)]), "html", null, true);
            echo "\" class=\"show\"><i class=\"material-icons title=\"Show\">&#xE8F4;</i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 562
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 562)]), "html", null, true);
            echo "\" class=\"edit\"><i class=\"material-icons\"  title=\"Edit\">&#xE254;</i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 563
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 563)]), "html", null, true);
            echo "\" class=\"delete\" onclick=\"event.preventDefault(); if(confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?')){document.getElementById('delete-form-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 563), "html", null, true);
            echo "').submit();}\">
    <i class=\"material-icons\" title=\"Delete\">&#xE872;</i>
</a>
<form id=\"delete-form-";
            // line 566
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 566), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 566)]), "html", null, true);
            echo "\" style=\"display: none;\">
    ";
            // line 567
            echo twig_include($this->env, $context, "reclamations/_delete_form.html.twig");
            echo "
</form>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
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
            // line 573
            echo "            <tr>
                <td>Aucun enregistrement trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"pagination\">
    ";
        // line 581
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 581, $this->source); })()));
        echo "
</div>
\t\t</div>
\t</div>        
</div>

<a href=\"https://dashboard.tawk.to/#/chat\" target=\"_blank\">
    <img src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/live-chat.png"), "html", null, true);
        echo "\" alt=\"Logo de Evento\" style=\"width:55px; position:fixed; bottom:20px; right:40px;\">
</a>

</main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 588,  768 => 581,  762 => 577,  753 => 573,  734 => 567,  728 => 566,  720 => 563,  716 => 562,  712 => 561,  706 => 558,  702 => 557,  698 => 556,  694 => 555,  685 => 548,  667 => 547,  642 => 525,  606 => 492,  598 => 486,  593 => 485,  589 => 484,  576 => 474,  457 => 358,  440 => 344,  399 => 306,  387 => 297,  378 => 291,  373 => 289,  369 => 288,  360 => 281,  353 => 280,  74 => 7,  67 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/back.html.twig' %}

{% block title %}Réclamations{% endblock %}


  {% block stylesheets %}
  {{ parent() }}

<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
<style>

body {
\tcolor: #566787;
\tbackground: #f5f5f5;
\tfont-family: 'Varela Round', sans-serif;
\tfont-size: 13px;

}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
\tbackground: #fff;
\tpadding: 20px 25px;
\tborder-radius: 3px;
\tmin-width: 800px;
\tbox-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
\tpadding-bottom: 15px;
\tbackground: #000000;
\tcolor: #fff;
\tpadding: 16px 30px;
\tmin-width: 100%;
\tmargin: -20px -25px 10px;
\tborder-radius: 3px 3px 0 0;
}
.table-title h2 {
\tmargin: 5px 0 0;
\tfont-size: 24px;
}
.table-title .btn-group {
\tfloat: right;
}
.table-title .btn {
\tcolor: #fff;
\tfloat: right;
\tfont-size: 13px;
\tborder: none;
\tmin-width: 50px;
\tborder-radius: 2px;
\tborder: none;
\toutline: none !important;
\tmargin-left: 10px;
 
}
.table-title .btn i {
\tfloat: left;
\tfont-size: 21px;
\tmargin-right: 5px;
}
.table-title .btn span {
\tfloat: left;
\tmargin-top: 2px;
}
table.table tr th, table.table tr td {
\tborder-color: #e9e9e9;
\tpadding: 12px 15px;
\tvertical-align: middle;
}
table.table tr th:first-child {
\twidth: 60px;
}
table.table tr th:last-child {
\twidth: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
\tbackground-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
\tbackground: #f5f5f5;
}
table.table th i {
\tfont-size: 13px;
\tmargin: 0 5px;
\tcursor: pointer;
}\t
table.table td:last-child i {
\topacity: 0.9;
\tfont-size: 22px;
\tmargin: 0 5px;
}
table.table td a {
\tfont-weight: bold;
\tcolor: #566787;
\tdisplay: inline-block;
\ttext-decoration: none;
\toutline: none !important;
}
table.table td a:hover {
\tcolor: #e9ad19;
}
table.table td a.edit {
\tcolor: #FFC107;
}

table.table td a.show {
\tcolor: black;
}
table.table td a.delete {
\tcolor: #F44336;
}
table.table td i {
\tfont-size: 19px;
}
table.table .avatar {
\tborder-radius: 50%;
\tvertical-align: middle;
\tmargin-right: 10px;
}
.pagination {
\tfloat: right;
\tmargin: 0 0 5px;
}
.pagination li a {
\tborder: none;
\tfont-size: 13px;
\tmin-width: 30px;
\tmin-height: 30px;
\tcolor: #999;
\tmargin: 0 2px;
\tline-height: 30px;
\tborder-radius: 2px !important;
\ttext-align: center;
\tpadding: 0 6px;
  
}


.pagination li a:hover {
\tcolor: #666;
}\t
.pagination li.active a, .pagination li.active a.page-link {
\tbackground: black;
}
.pagination li.active a:hover {        
\tbackground: #ffbf1c;
}
.pagination li.disabled i {
\tcolor: #ccc;
}
.pagination li i {
\tfont-size: 16px;
\tpadding-top: 6px
}
.hint-text {
\tfloat: left;
\tmargin-top: 10px;
\tfont-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
\tposition: relative;
}
.custom-checkbox input[type=\"checkbox\"] {    
\topacity: 0;
\tposition: absolute;
\tmargin: 5px 0 0 3px;
\tz-index: 9;
}
.custom-checkbox label:before{
\twidth: 18px;
\theight: 18px;
}
.custom-checkbox label:before {
\tcontent: '';
\tmargin-right: 10px;
\tdisplay: inline-block;
\tvertical-align: text-top;
\tbackground: white;
\tborder: 1px solid #bbb;
\tborder-radius: 2px;
\tbox-sizing: border-box;
\tz-index: 2;
}
.custom-checkbox input[type=\"checkbox\"]:checked + label:after {
\tcontent: '';
\tposition: absolute;
\tleft: 6px;
\ttop: 3px;
\twidth: 6px;
\theight: 11px;
\tborder: solid #000;
\tborder-width: 0 3px 3px 0;
\ttransform: inherit;
\tz-index: 3;
\ttransform: rotateZ(45deg);
}
.custom-checkbox input[type=\"checkbox\"]:checked + label:before {
\tborder-color: #e9ad19;
\tbackground: #e9ad19;
}
.custom-checkbox input[type=\"checkbox\"]:checked + label:after {
\tborder-color: #fff;
}
.custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
\tcolor: #b8b8b8;
\tcursor: auto;
\tbox-shadow: none;
\tbackground: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
\tmax-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
\tpadding: 20px 30px;
}
.modal .modal-content {
\tborder-radius: 3px;
\tfont-size: 14px;
}
.modal .modal-footer {
\tbackground: #ecf0f1;
\tborder-radius: 0 0 3px 3px;
}
.modal .modal-title {
\tdisplay: inline-block;
}
.modal .form-control {
\tborder-radius: 2px;
\tbox-shadow: none;
\tborder-color: #dddddd;
}
.modal textarea.form-control {
\tresize: vertical;
}
.modal .btn {
\tborder-radius: 2px;
\tmin-width: 100px;
}\t
.modal form label {
\tfont-weight: normal;
}\t
</style>
<script>
\$(document).ready(function(){
\t// Activate tooltip
\t\$('[data-toggle=\"tooltip\"]').tooltip();
\t
\t// Select/Deselect checkboxes
\tvar checkbox = \$('table tbody input[type=\"checkbox\"]');
\t\$(\"#selectAll\").click(function(){
\t\tif(this.checked){
\t\t\tcheckbox.each(function(){
\t\t\t\tthis.checked = true;                        
\t\t\t});
\t\t} else{
\t\t\tcheckbox.each(function(){
\t\t\t\tthis.checked = false;                        
\t\t\t});
\t\t} 
\t});
\tcheckbox.click(function(){
\t\tif(!this.checked){
\t\t\t\$(\"#selectAll\").prop(\"checked\", false);
\t\t}
\t});
});
</script>
  {% endblock %}


{% block body %}

<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen }\">
      
    <!-- Desktop sidebar -->
    <aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
      <div class=\"py-4 text-gray-500 dark:text-gray-400\">
        
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"{{ path('login_home') }}\">
          <img src=\"{{asset('back/img/evento.png')}}\" alt=\"Evento\" width=\"30\" height=\"40\" style=\"position: absolute; top: 0; left: 3%; transform: translateY(10%);\">
        </a>
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"{{ path('login_home') }}\" style=\"position: absolute; top: 15px; left: 4%;\">
          EVENTO
        </a>
        
    <ul class=\"mt-6\">
  <li class=\"relative px-6 py-3 \">
    <a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\" href=\"{{ path('app_users_index') }}\">
      <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" style=\"color: black;\">
        <path d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"></path>
      </svg>
      <span class=\"ml-4\" style=\"color: black;\">Utilisateurs</span>
    </a>
  </li>
  <li class=\"relative px-6 py-3 \">
    <span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\" aria-hidden=\"true\"></span>
    <a class=\"inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100\" href=\"{{ path('app_reclamations_index') }}\">
      <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"></path>
      </svg>
      <span class=\"ml-4\" style=\"color: black;\">Réclamations</span>
    </a>
  </li>
</ul>


 
  

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
        <a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\" style=\"color: black;\">
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
                type=\"text\" placeholder=\"Rechercher\" aria-label=\"Search\" />
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
                  src=\"{{asset('back/img/user.png')}}\"
                  alt=\"\" aria-hidden=\"true\" />
              </button>
              <template x-if=\"isProfileMenuOpen\">
                <ul x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100\"
                  x-transition:leave-end=\"opacity-0\" @click.away=\"closeProfileMenu\" @keydown.escape=\"closeProfileMenu\"
                  class=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700\"
                  aria-label=\"submenu\">
                  <li class=\"flex\">
                   <span class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\" style=\"color: black;\">
    {% if app.user %}              
        Vous êtes actuellement connecté en tant que {{ app.user.userIdentifier }}
    {% endif %} 
</span>

                  </li> 
                     <li class=\"flex\">
                    <a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
                      href=\"{{ path('app_logout') }}\">
                      <svg style=\"color: black;\" class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path
                          d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
                        </path>
                      </svg>
                        <span style=\"color: black;\">Logout</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
    


      
       <main class=\"h-full overflow-y-auto\">

      

<div class=\"container-xl\">
\t<div class=\"table-responsive\">
\t\t<div class=\"table-wrapper\">
\t\t\t<div class=\"table-title\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h2> <b>Liste des Réclamations</b></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<a href=\"{{ path('app_reclamations_new') }}\" class=\"btn btn-warning\" ><i class=\"material-icons\">&#xE147;</i> <span>Ajouter Une Nouvelle Réclamation</span></a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"selectAll\">
\t\t\t\t\t\t\t\t<label for=\"selectAll\"></label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Message</th>
            <th style=\"width:140px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t\t<tbody>
           {% for reclamation in pagination %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox1\" name=\"options[]\" value=\"1\">
\t\t\t\t\t\t\t\t<label for=\"checkbox1\"></label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
                <td>{{ reclamation.prenom }}</td>
                <td>{{ reclamation.nom }}</td>
                <td>{{ reclamation.email }}</td>
                <td>{{ reclamation.message }}</td>
           
\t\t\t\t\t\t<td>
              <a href=\"{{ path('app_reclamations_show', {'id': reclamation.id}) }}\" class=\"show\"><i class=\"material-icons title=\"Show\">&#xE8F4;</i></a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamations_edit', {'id':  reclamation.id}) }}\" class=\"edit\"><i class=\"material-icons\"  title=\"Edit\">&#xE254;</i></a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamations_delete', {'id': reclamation.id}) }}\" class=\"delete\" onclick=\"event.preventDefault(); if(confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?')){document.getElementById('delete-form-{{ reclamation.id }}').submit();}\">
    <i class=\"material-icons\" title=\"Delete\">&#xE872;</i>
</a>
<form id=\"delete-form-{{ reclamation.id }}\" method=\"post\" action=\"{{ path('app_reclamations_delete', {'id': reclamation.id}) }}\" style=\"display: none;\">
    {{ include('reclamations/_delete_form.html.twig') }}
</form>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
          {% else %}
            <tr>
                <td>Aucun enregistrement trouvé</td>
            </tr>
        {% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"pagination\">
    {{ knp_pagination_render(pagination) }}
</div>
\t\t</div>
\t</div>        
</div>

<a href=\"https://dashboard.tawk.to/#/chat\" target=\"_blank\">
    <img src=\"{{asset('back/img/live-chat.png')}}\" alt=\"Logo de Evento\" style=\"width:55px; position:fixed; bottom:20px; right:40px;\">
</a>

</main>



{% endblock %}

", "reclamations/index.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\reclamations\\index.html.twig");
    }
}

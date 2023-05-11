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

/* reclamations/show.html.twig */
class __TwigTemplate_24b89de137374312baa9a16011354f15 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamations/show.html.twig"));

        $this->parent = $this->loadTemplate("back/back.html.twig", "reclamations/show.html.twig", 1);
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

<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/show.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/users/show.js"), "html", null, true);
        echo "\"></script>

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">


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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 286
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 287
        echo "



      
      <main class=\"h-full overflow-y-auto\">

      

 <div class=\"main-content\" style=\"top:-10px; margin-bottom:10px; \">
    <div class=\"container mt-7\" >
      <!-- Table -->
     
      <div class=\"row\">
        <div class=\"col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0\">
          <div class=\"card card-profile shadow\">
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-3 order-lg-2\">
                <div class=\"card-profile-image\">
                  <a href=\"#\">
                    <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/girl.png"), "html", null, true);
        echo "\" class=\"rounded-circle\">
                  </a>
                </div>
              </div>
            </div>
            <div class=\"card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4\">
              <div class=\"d-flex justify-content-between\">
                <a href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_index");
        echo "\" class=\"btn btn-sm btn-info mr-4\" style=\"font-size: 16px; background-color:#e9ad19;  border-color: #e9ad19;\">Retour</a>
                
              </div>
            </div>

              <div class=\"text-center\" >
<h3 style=\"color:black;\" >
  ";
        // line 321
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 321, $this->source); })()), "prenom", [], "any", false, false, false, 321), "html", null, true);
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 321, $this->source); })()), "nom", [], "any", false, false, false, 321), "html", null, true);
        echo "
</h3>

                <div class=\"h5 mt-4\" style=\"font-size: 16px; color:black;\">
                  <i class=\"ni business_briefcase-24 mr-2\" ></i>Email
                </div>
                <div style=\"font-size: 16px; color:#323233;\">
                  <i class=\"ni education_hat mr-2\"></i>";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 328, $this->source); })()), "email", [], "any", false, false, false, 328), "html", null, true);
        echo "
                </div>

                <div class=\"h5 mt-4\" style=\"font-size: 16px; color:black;\">
                  <i class=\"ni business_briefcase-24 mr-2\" ></i>Message
                </div>
                <div style=\"font-size: 16px; color:#323233;\">
                  <i class=\"ni education_hat mr-2\"></i>";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 335, $this->source); })()), "message", [], "any", false, false, false, 335), "html", null, true);
        echo "
                </div>
                                                         
            
              </div>
            </div>
          </div>
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
        return "reclamations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 335,  426 => 328,  414 => 321,  404 => 314,  394 => 307,  372 => 287,  365 => 286,  91 => 17,  87 => 16,  74 => 7,  67 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/back.html.twig' %}

{% block title %}Utilisateurs{% endblock %}


  {% block stylesheets %}
  {{ parent() }}

<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
<link href=\"{{asset('back/css/users/show.css')}}\" rel=\"stylesheet\">
<script src=\"{{asset('back/css/users/show.js')}}\"></script>

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">


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




      
      <main class=\"h-full overflow-y-auto\">

      

 <div class=\"main-content\" style=\"top:-10px; margin-bottom:10px; \">
    <div class=\"container mt-7\" >
      <!-- Table -->
     
      <div class=\"row\">
        <div class=\"col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0\">
          <div class=\"card card-profile shadow\">
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-3 order-lg-2\">
                <div class=\"card-profile-image\">
                  <a href=\"#\">
                    <img src=\"{{asset('back/img/girl.png')}}\" class=\"rounded-circle\">
                  </a>
                </div>
              </div>
            </div>
            <div class=\"card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4\">
              <div class=\"d-flex justify-content-between\">
                <a href=\"{{ path('app_reclamations_index') }}\" class=\"btn btn-sm btn-info mr-4\" style=\"font-size: 16px; background-color:#e9ad19;  border-color: #e9ad19;\">Retour</a>
                
              </div>
            </div>

              <div class=\"text-center\" >
<h3 style=\"color:black;\" >
  {{ reclamation.prenom }}    {{ reclamation.nom }}
</h3>

                <div class=\"h5 mt-4\" style=\"font-size: 16px; color:black;\">
                  <i class=\"ni business_briefcase-24 mr-2\" ></i>Email
                </div>
                <div style=\"font-size: 16px; color:#323233;\">
                  <i class=\"ni education_hat mr-2\"></i>{{ reclamation.email }}
                </div>

                <div class=\"h5 mt-4\" style=\"font-size: 16px; color:black;\">
                  <i class=\"ni business_briefcase-24 mr-2\" ></i>Message
                </div>
                <div style=\"font-size: 16px; color:#323233;\">
                  <i class=\"ni education_hat mr-2\"></i>{{ reclamation.message }}
                </div>
                                                         
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 


</main>



{% endblock %}

", "reclamations/show.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\reclamations\\show.html.twig");
    }
}

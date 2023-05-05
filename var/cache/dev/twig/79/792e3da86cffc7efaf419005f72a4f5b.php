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

/* back/vehicule/indexv.html.twig */
class __TwigTemplate_f805b82a5415ef6e156035ec4b8cba67 extends Template
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
        return "back/backbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/vehicule/indexv.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/vehicule/indexv.html.twig", 1);
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
";
        // line 21
        echo "
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

      <!-- With actions -->
            <h4
              class=\"mb-4 text-lg font-semibold text-orange-600 dark:text-gray-300\"
            >
              List vehicules
            </h4>

 <div class=\"w-full overflow-hidden rounded-lg shadow-xs\">
              <div class=\"w-full overflow-x-auto\">
                <table class=\"w-full whitespace-no-wrap\">
                  <thead>
                    <tr
                      class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\"
                    >

                      <th>IdVehicule</th>
                <th>Marque</th>
                <th>Modele</th>
                <th>Immatriculation</th>
                <th>Disponibilite</th>
                <th>TypeTransport</th>
                <th>actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 72
            echo "            <tr  class=\"text-gray-700 dark:text-gray-400\">
               <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "disponibilite", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                  ";
            // line 79
            echo "                   <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicule"], "transport", [], "any", false, false, false, 79), "typeTransport", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td  class=\"px-4 py-3\">
                <div class=\"flex items-center space-x-4 text-sm\">
                          <button>
                              <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_b_show", ["idVehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>show</a>
                          </button>

                           <button>
                    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_back_edit", ["idVehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>edit</a>
                      </button>
";
            // line 96
            echo "                      
               
                        </div>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                  </tbody>
                </table>
              </div>
              
              <div
                class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\"
              >
                <span class=\"col-span-2\"></span>
                <!-- Pagination -->
                <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
                  <nav aria-label=\"Table navigation\">
                    <ul class=\"inline-flex items-center\">
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                          aria-label=\"Previous\"
                        >
                          <svg
                            class=\"w-4 h-4 fill-current\"
                            aria-hidden=\"true\"
                            viewBox=\"0 0 20 20\"
                          >
                            <path
                              d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
                              clip-rule=\"evenodd\"
                              fill-rule=\"evenodd\"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          1
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          2
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          3
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          4
                        </button>
                      </li>
                      <li>
                        <span class=\"px-3 py-1\">...</span>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          8
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          9
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                          aria-label=\"Next\"
                        >
                          <svg
                            class=\"w-4 h-4 fill-current\"
                            aria-hidden=\"true\"
                            viewBox=\"0 0 20 20\"
                          >
                            <path
                              d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
                              clip-rule=\"evenodd\"
                              fill-rule=\"evenodd\"
                            ></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
              ";
        // line 200
        echo "            </div>
          </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back/vehicule/indexv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 200,  176 => 102,  165 => 96,  159 => 88,  151 => 83,  143 => 79,  139 => 77,  135 => 76,  131 => 75,  127 => 74,  123 => 73,  120 => 72,  116 => 71,  64 => 21,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/backbase.html.twig' %} 


{% block body %}
  

    <style>
{# table {
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
tr:nth-child(even){background-color: #f2f2f2} #}

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

      <!-- With actions -->
            <h4
              class=\"mb-4 text-lg font-semibold text-orange-600 dark:text-gray-300\"
            >
              List vehicules
            </h4>

 <div class=\"w-full overflow-hidden rounded-lg shadow-xs\">
              <div class=\"w-full overflow-x-auto\">
                <table class=\"w-full whitespace-no-wrap\">
                  <thead>
                    <tr
                      class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\"
                    >

                      <th>IdVehicule</th>
                <th>Marque</th>
                <th>Modele</th>
                <th>Immatriculation</th>
                <th>Disponibilite</th>
                <th>TypeTransport</th>
                <th>actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

                    {% for vehicule in vehicules %}
            <tr  class=\"text-gray-700 dark:text-gray-400\">
               <td>{{ vehicule.idVehicule }}</td>
                <td>{{ vehicule.marque }}</td>
                <td>{{ vehicule.modele }}</td>
                <td>{{ vehicule.immatriculation }}</td>
                <td>{{ vehicule.disponibilite }}</td>
                  {# <td>{{ vehicule.disponibilite }}</td> #}
                   <td>{{ vehicule.transport.typeTransport }}</td>
                <td  class=\"px-4 py-3\">
                <div class=\"flex items-center space-x-4 text-sm\">
                          <button>
                              <a href=\"{{ path('app_vehicule_b_show',  {'idVehicule': vehicule.idVehicule}) }}\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>show</a>
                          </button>

                           <button>
                    <a href=\"{{ path('app_vehicule_back_edit', {'idVehicule': vehicule.idVehicule}) }}\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>edit</a>
                      </button>
{# 
                      <button>
                    <a href=\"{{ path('app_vehicule_back_new', {'idVehicule': vehicule.idVehicule}) }}\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>vehicule</a>
                      </button> #}
                      
               
                        </div>
                      </td>
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
              
              <div
                class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\"
              >
                <span class=\"col-span-2\"></span>
                <!-- Pagination -->
                <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
                  <nav aria-label=\"Table navigation\">
                    <ul class=\"inline-flex items-center\">
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                          aria-label=\"Previous\"
                        >
                          <svg
                            class=\"w-4 h-4 fill-current\"
                            aria-hidden=\"true\"
                            viewBox=\"0 0 20 20\"
                          >
                            <path
                              d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
                              clip-rule=\"evenodd\"
                              fill-rule=\"evenodd\"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          1
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          2
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          3
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          4
                        </button>
                      </li>
                      <li>
                        <span class=\"px-3 py-1\">...</span>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          8
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\"
                        >
                          9
                        </button>
                      </li>
                      <li>
                        <button
                          class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                          aria-label=\"Next\"
                        >
                          <svg
                            class=\"w-4 h-4 fill-current\"
                            aria-hidden=\"true\"
                            viewBox=\"0 0 20 20\"
                          >
                            <path
                              d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
                              clip-rule=\"evenodd\"
                              fill-rule=\"evenodd\"
                            ></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
              {# <a href=\"{{ path('app_vehicule_back_new') }}\" class=\"link-as-button\" >Create new</a> #}
            </div>
          </div>


{% endblock %}
<<<<<<< Updated upstream
", "back/vehicule/indexv.html.twig", "C:\\Users\\MALEK-ADMIN\\Documents\\NetBeansProjects\\Symfony-Web-PIDev-3A4\\templates\\back\\vehicule\\indexv.html.twig");
=======
", "back/vehicule/indexv.html.twig", "C:\\Users\\rimbs\\Desktop\\pidev symfony\\PI\\Symfony-Web-PIDev-3A4\\templates\\back\\vehicule\\indexv.html.twig");
>>>>>>> Stashed changes
    }
}

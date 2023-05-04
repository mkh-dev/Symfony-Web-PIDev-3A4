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

/* back/transport/index.html.twig */
class __TwigTemplate_f5964596d5af64ccc4fc1d8e56e7866f24d2b7435815f525dcd3e5b99c52c3e5 extends Template
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
        // line 2
        return "back/backbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/transport/index.html.twig"));

        $this->parent = $this->loadTemplate("back/backbase.html.twig", "back/transport/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  

    <style>
";
        // line 22
        echo "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


.notification {
  position: fixed;
  top: 0;
  right: 0;
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  z-index: 9999;
  display: none;
}

.notification p {
  margin: 0;
}

.notification-close {
  float: right;
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
}

.notification-close:hover {
  color: black;
}



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
              List Transports
            </h4>


<script>
\$(document).ready(function() {
  \$(\".notification\").slideDown();

  \$(\".notification-close\").click(function() {
    \$(\".notification\").slideUp();
  });
});
</script>


 <div class=\"w-full overflow-hidden rounded-lg shadow-xs\">
              <div class=\"w-full overflow-x-auto\">
                <table class=\"w-full whitespace-no-wrap\">
                  <thead>
                    <tr
                      class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\"
                    >

                      <th class=\"px-4 py-3\">IdTransport</th>
                      <th class=\"px-4 py-3\">TypeTransport</th>
                      <th class=\"px-4 py-3\">DateDepart</th>
                      <th class=\"px-4 py-3\">HeureDepart</th>
                      <th class=\"px-4 py-3\">LieuDepart</th>
                      <th class=\"px-4 py-3\">LieuArriver</th>
                      <th class=\"px-4 py-3\">PrixTransport</th>
                      <th class=\"px-4 py-3\">actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 117
            echo "            <tr  class=\"text-gray-700 dark:text-gray-400\">
                <td class=\"px-4 py-3\"> ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
                <td  class=\"px-4 py-3 text-sm\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "typeTransport", [], "any", false, false, false, 119), "html", null, true);
            echo "</td>
                <td  class=\"px-4 py-3 text-sm\">";
            // line 120
            ((twig_get_attribute($this->env, $this->source, $context["transport"], "dateDepart", [], "any", false, false, false, 120)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "dateDepart", [], "any", false, false, false, 120), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td  class=\"px-4 py-3 text-sm\">";
            // line 121
            ((twig_get_attribute($this->env, $this->source, $context["transport"], "heureDepart", [], "any", false, false, false, 121)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "heureDepart", [], "any", false, false, false, 121), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td  class=\"px-4 py-3 text-sm\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "lieuDepart", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
                <td  class=\"px-4 py-3 text-sm\">";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "lieuArriver", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                <td  class=\"px-4 py-3 text-sm\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "prixTransport", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
                <td  class=\"px-4 py-3\">
                <div class=\"flex items-center space-x-4 text-sm\">
                          <button>
                              <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back_show", ["idTransport" => twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>show</a>
                          </button>

                           <button>
                    <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back_edit", ["idTransport" => twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>edit</a>
                      </button>

                      <button>
                    <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_back_new", ["idTransport" => twig_get_attribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 138)]), "html", null, true);
            echo "\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>vehicule</a>
                      </button>
                      
               
                        </div>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                  </tbody>
                </table>
                ";
        // line 149
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 149, $this->source); })()));
        echo "
              </div>
              
              ";
        // line 161
        echo "                        ";
        // line 198
        echo "                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
              <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_back_new");
        echo "\" class=\"link-as-button\" >Create new</a>
            </div>
          </div>


";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "session", [], "any", false, false, false, 208), "flashbag", [], "any", false, false, false, 208), "get", [0 => "success"], "method", false, false, false, 208));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 209
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
        ";
            // line 210
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/transport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 214,  263 => 210,  260 => 209,  256 => 208,  248 => 203,  241 => 198,  239 => 161,  233 => 149,  229 => 147,  214 => 138,  206 => 133,  198 => 128,  191 => 124,  187 => 123,  183 => 122,  179 => 121,  175 => 120,  171 => 119,  167 => 118,  164 => 117,  160 => 116,  64 => 22,  59 => 6,  52 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'back/backbase.html.twig' %} 


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

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


.notification {
  position: fixed;
  top: 0;
  right: 0;
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  z-index: 9999;
  display: none;
}

.notification p {
  margin: 0;
}

.notification-close {
  float: right;
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
}

.notification-close:hover {
  color: black;
}



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
              List Transports
            </h4>


<script>
\$(document).ready(function() {
  \$(\".notification\").slideDown();

  \$(\".notification-close\").click(function() {
    \$(\".notification\").slideUp();
  });
});
</script>


 <div class=\"w-full overflow-hidden rounded-lg shadow-xs\">
              <div class=\"w-full overflow-x-auto\">
                <table class=\"w-full whitespace-no-wrap\">
                  <thead>
                    <tr
                      class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\"
                    >

                      <th class=\"px-4 py-3\">IdTransport</th>
                      <th class=\"px-4 py-3\">TypeTransport</th>
                      <th class=\"px-4 py-3\">DateDepart</th>
                      <th class=\"px-4 py-3\">HeureDepart</th>
                      <th class=\"px-4 py-3\">LieuDepart</th>
                      <th class=\"px-4 py-3\">LieuArriver</th>
                      <th class=\"px-4 py-3\">PrixTransport</th>
                      <th class=\"px-4 py-3\">actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

                    {% for transport in transports %}
            <tr  class=\"text-gray-700 dark:text-gray-400\">
                <td class=\"px-4 py-3\"> {{ transport.idTransport }}</td>
                <td  class=\"px-4 py-3 text-sm\">{{ transport.typeTransport }}</td>
                <td  class=\"px-4 py-3 text-sm\">{{ transport.dateDepart ? transport.dateDepart|date('Y-m-d') : '' }}</td>
                <td  class=\"px-4 py-3 text-sm\">{{ transport.heureDepart ? transport.heureDepart|date('H:i:s') : '' }}</td>
                <td  class=\"px-4 py-3 text-sm\">{{ transport.lieuDepart }}</td>
                <td  class=\"px-4 py-3 text-sm\">{{ transport.lieuArriver }}</td>
                <td  class=\"px-4 py-3 text-sm\">{{ transport.prixTransport }}</td>
                <td  class=\"px-4 py-3\">
                <div class=\"flex items-center space-x-4 text-sm\">
                          <button>
                              <a href=\"{{ path('app_transport_back_show', {'idTransport': transport.idTransport}) }}\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>show</a>
                          </button>

                           <button>
                    <a href=\"{{ path('app_transport_back_edit', {'idTransport': transport.idTransport}) }}\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>edit</a>
                      </button>

                      <button>
                    <a href=\"{{ path('app_vehicule_back_new', {'idTransport': transport.idTransport}) }}\" class=\"px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100\"
>vehicule</a>
                      </button>
                      
               
                        </div>
                      </td>
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
                {{ knp_pagination_render(transports)}}
              </div>
              
              {# <div
                class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\"
              > 
                 <span class=\"col-span-2\"></span>
                <!-- Pagination -->
                <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
                  <nav aria-label=\"Table navigation\">
                    <ul class=\"inline-flex items-center\">
                      <li>  #}
                        {# <button
                          class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                          aria-label=\"Previous\"
                        >
                          <svg
                          fill=\"#efae06\"

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
                          class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                          aria-label=\"Next\"
                        >
                          <svg
                          fill=\"#efae06\"
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
                        </button> #}
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
              <a href=\"{{ path('app_transport_back_new') }}\" class=\"link-as-button\" >Create new</a>
            </div>
          </div>


{% for flash_message in app.session.flashbag.get('success') %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
        {{ flash_message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endfor %}

{% endblock %}
", "back/transport/index.html.twig", "C:\\Users\\ouesl\\Desktop\\3A\\Symfony-Web-PIDev-3A4\\templates\\back\\transport\\index.html.twig");
    }
}

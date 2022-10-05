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

/* partials/header.html.twig  */
class __TwigTemplate_9e843e3257d71797bb9b0d1cdc2023e7c1f6aeb4ad408c60ce18b62fa968e9e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig "));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig "));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark\" id=\"navbar\">
<a class=\"navbar-brand\" href=\"/\"><img id=\"imgLogo\"src=\"assets/images/Alpha.png\" alt=\"Logo AlphaBetise\"></a>

<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa-solid fa-bars\"></i></button>

\t<div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
\t\t<ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/\" aria-current=\"page\">Accueil
\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/meeting\">Rencontres</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/conseils\">Conseils de lecture</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/library\">La librairie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/contacts\">Contact</a>
\t\t\t</li>
\t\t</ul>
\t\t<form class=\"d-flex my-2 my-lg-0\">
\t\t\t<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t</form>
\t\t<a href=\"/login\">
\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\">connexion</button>
\t\t</a>
\t\t<a href=\"/register\">
\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\">inscription</button>
\t\t</a>


\t</div>
\t&nbsp &nbsp
\t";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 41
            echo "\t\t<div class=\"dropdown text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t</a>
\t\t\t<ul id=\"burger\" class=\"dropdown-menu text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" id=\"panier\" href=\"/cart\">Panier <i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i>
\t\t\t\t\t\t";
            // line 49
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [0 => "cart"], "method", false, false, false, 49)) {
                // line 50
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "session", [], "any", false, false, false, 50), "get", [0 => "cartData"], "method", false, false, false, 50), "data", [], "any", false, false, false, 50), "quantity_cart", [], "any", false, false, false, 50), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t\t0
\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t</a>
            <div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t\t<ul class=\"cart_list\">
\t\t\t\t\t";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "session", [], "any", false, false, false, 57), "get", [0 => "cartData"], "method", false, false, false, 57)) {
                // line 58
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "get", [0 => "cartData"], "method", false, false, false, 58), "data", [], "any", false, false, false, 58), "quantity_cart", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 59
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartDeleteAll", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
                    echo "\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/uploads/book/";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 61), "couvertureBook", [], "any", false, false, false, 61), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t<span class=\"cart_quantity\">";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 62), "html", null, true);
                    echo "<span class=\"cart_amount\"> x <span class=\"price_symbole\">€</span></span>";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 62), "priceBook", [], "any", false, false, false, 62) / 100), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t\t<li>Votre panier est vide !</li>
\t\t\t\t\t";
            }
            // line 68
            echo "        </ul>
        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "get", [0 => "cartData"], "method", false, false, false, 69)) {
                // line 70
                echo "        <div class=\"cart_footer\">
                <p class=\"cart_total\"><strong>Soustotal HT:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">€</span></span>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "session", [], "any", false, false, false, 71), "get", [0 => "cartData"], "method", false, false, false, 71), "data", [], "any", false, false, false, 71), "subTotalTTC", [], "any", false, false, false, 71), "html", null, true);
                echo "</p>
                <p class=\"cart_buttons\"><a href=\"/cart\" class=\"btn btn-fill-line rounded-0 view-cart\">Retour panier</a><a href=\"\" class=\"btn btn-fill-out rounded-0 checkout\">Valider</a></p>
            </div>
        ";
            }
            // line 74
            echo "                           
    </div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Paramètre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 84
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 85
            echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Dashboard</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 89
        echo "\t\t\t<li><hr></li>
\t\t\t";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 91
            echo "\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>
    ";
        }
        // line 96
        echo "        </div>   
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 96,  197 => 91,  195 => 90,  192 => 89,  186 => 86,  183 => 85,  180 => 84,  168 => 74,  161 => 71,  158 => 70,  156 => 69,  153 => 68,  149 => 66,  146 => 65,  135 => 62,  127 => 61,  123 => 60,  120 => 59,  115 => 58,  113 => 57,  108 => 54,  104 => 52,  98 => 50,  95 => 49,  86 => 41,  84 => 40,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark\" id=\"navbar\">
<a class=\"navbar-brand\" href=\"/\"><img id=\"imgLogo\"src=\"assets/images/Alpha.png\" alt=\"Logo AlphaBetise\"></a>

<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa-solid fa-bars\"></i></button>

\t<div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
\t\t<ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/\" aria-current=\"page\">Accueil
\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/meeting\">Rencontres</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/conseils\">Conseils de lecture</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/library\">La librairie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/contacts\">Contact</a>
\t\t\t</li>
\t\t</ul>
\t\t<form class=\"d-flex my-2 my-lg-0\">
\t\t\t<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t</form>
\t\t<a href=\"/login\">
\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\">connexion</button>
\t\t</a>
\t\t<a href=\"/register\">
\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\">inscription</button>
\t\t</a>


\t</div>
\t&nbsp &nbsp
\t{% if is_granted(\"ROLE_USER\") %}
\t\t<div class=\"dropdown text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t</a>
\t\t\t<ul id=\"burger\" class=\"dropdown-menu text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" id=\"panier\" href=\"/cart\">Panier <i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i>
\t\t\t\t\t\t{# <a href=\"/cart\">Panier <i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i></a> #}
\t\t\t\t\t\t{% if app.session.get('cart') %}
\t\t\t\t\t\t\t{{ app.session.get('cartData').data.quantity_cart }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t0
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
            <div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t\t<ul class=\"cart_list\">
\t\t\t\t\t{% if app.session.get('cartData') %}
\t\t\t\t\t\t{% for element in app.session.get('cartData').data.quantity_cart %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('cartDeleteAll', {'id':element.book.id})}}\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/uploads/book/{{ element.book.couvertureBook}}\" alt=\"{{ element.book.title}}\">{{ element.book.title}}</a>
\t\t\t\t\t\t\t\t\t\t<span class=\"cart_quantity\">{{ element.quantity }}<span class=\"cart_amount\"> x <span class=\"price_symbole\">€</span></span>{{ element.book.priceBook/100 }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li>Votre panier est vide !</li>
\t\t\t\t\t{% endif %}
        </ul>
        {% if app.session.get('cartData') %}
        <div class=\"cart_footer\">
                <p class=\"cart_total\"><strong>Soustotal HT:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">€</span></span>{{ app.session.get('cartData').data.subTotalTTC }}</p>
                <p class=\"cart_buttons\"><a href=\"/cart\" class=\"btn btn-fill-line rounded-0 view-cart\">Retour panier</a><a href=\"\" class=\"btn btn-fill-out rounded-0 checkout\">Valider</a></p>
            </div>
        {% endif %}                           
    </div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Paramètre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin') }}\">Dashboard</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li><hr></li>
\t\t\t{% if is_granted(\"ROLE_USER\") %}
\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>
    {% endif %}
        </div>   
    </div>
</nav>
", "partials/header.html.twig ", "C:\\Users\\lunic\\projet-symfony\\Alpha-Betise\\templates\\partials\\header.html.twig");
    }
}

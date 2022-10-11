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
        echo "<nav class=\"navbar-expand-lg navbar fixed-top sticky-top\" style=\"padding: 5px 40px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #9de8ab;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-weight: 700;\">
\t<img src=\"https://i.goopics.net/56i7af.png\" class=\"rounded-circle\" width=\"50\">
\t<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<i class=\"fa-solid fa-bars\"></i>
\t</button>

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
\t\t";
        // line 30
        echo "\t\t<style>
\t\t\t.nav-link:hover{
\t\t\t\t\tcolor: rgba(0, 60, 255, 0.605)!important;
\t\t\t\t\tbackground-color: rgba(255, 255, 255, 0.5)!important;
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tmargin: 0px 5px; }
\t\t</style>
\t\t<form class=\"d-flex my-2 my-lg-0\">
\t\t\t<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t</form>
\t\t<a href=\"/login\">
\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\">connexion</button>
\t\t</a>


\t</div>
\t&nbsp; &nbsp;
\t";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 49
            echo "\t\t<div class=\"dropstart text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"40\" height=\"40\" class=\"rounded-circle\">
\t\t\t\t";
            // line 52
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "get", [0 => "cart"], "method", false, false, false, 52)) {
                // line 53
                echo "\t\t\t\t\t<span class=\"dropdown-item\" style=\"
\t\t\t\t\t\t\t\t\tbackground-color: rgba(255, 255, 0, 0.85);
\t\t\t\t\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t\t\t\t\tpadding: 2px 4px;
\t\t\t\t\t\t\t\t\twidth: fit-content;
\t\t\t\t\t\t\t\t\ttop: 26px;
\t\t\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\t\t\tright: -4px;
\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t\t\tline-height: initial;
\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "get", [0 => "cartData"], "method", false, false, false, 65), "data", [], "any", false, false, false, 65), "quantity_cart", [], "any", false, false, false, 65), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t</span>
\t\t\t</a>
\t\t\t<ul id=\"burger\" class=\"dropdown-menu dropdown-menu-right text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/cart\">Panier
\t\t\t\t\t\t<i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i>
\t\t\t\t\t\t";
            // line 74
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "get", [0 => "cart"], "method", false, false, false, 74)) {
                // line 75
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "get", [0 => "cartData"], "method", false, false, false, 75), "data", [], "any", false, false, false, 75), "quantity_cart", [], "any", false, false, false, 75), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t\t0
\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t<ul class=\"cart_list\">
\t\t\t\t\t\t\t";
            // line 82
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", [0 => "cartData"], "method", false, false, false, 82)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "get", [0 => "cartData"], "method", false, false, false, 83), "data", [], "any", false, false, false, 83), "quantity_cart", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartDeleteAll", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" class=\"item_remove\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-close\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/uploads/book/";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 88), "couvertureBook", [], "any", false, false, false, 88), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 88), "title", [], "any", false, false, false, 88), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 88), "title", [], "any", false, false, false, 88), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t<span class=\"cart_quantity\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 89), "html", null, true);
                    echo "<span class=\"cart_amount\">
\t\t\t\t\t\t\t\t\t\t\t\tx
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_symbole\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 93
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 93), "priceBook", [], "any", false, false, false, 93) / 100), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t<li>Votre panier est vide !</li>
\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 100
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "get", [0 => "cartData"], "method", false, false, false, 100)) {
                // line 101
                echo "\t\t\t\t\t\t\t<div class=\"cart_footer\">
\t\t\t\t\t\t\t\t<p class=\"cart_total\">
\t\t\t\t\t\t\t\t\t<strong>Soustotal HT:</strong>
\t\t\t\t\t\t\t\t\t<span class=\"cart_price\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price_symbole\">€</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "session", [], "any", false, false, false, 107), "get", [0 => "cartData"], "method", false, false, false, 107), "data", [], "any", false, false, false, 107), "subTotalTTC", [], "any", false, false, false, 107), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"cart_buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"/cart\" class=\"btn btn-fill-line rounded-0 view-cart\">Retour panier</a>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-fill-out rounded-0 checkout\">Valider</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Paramètre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 123
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 124
            echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\"><i class=\"fa-solid fa-house-user\"></i> Dashboard</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 128
        echo "\t\t\t<li><hr></li>
\t\t\t";
        // line 129
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 130
            echo "\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>

";
        }
        // line 135
        echo "</div></div></nav>
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
        return array (  255 => 135,  245 => 130,  243 => 129,  240 => 128,  234 => 125,  231 => 124,  228 => 123,  217 => 114,  207 => 107,  199 => 101,  197 => 100,  194 => 99,  190 => 97,  187 => 96,  178 => 93,  171 => 89,  163 => 88,  157 => 85,  154 => 84,  149 => 83,  147 => 82,  142 => 79,  138 => 77,  132 => 75,  129 => 74,  121 => 67,  116 => 65,  102 => 53,  100 => 52,  95 => 49,  93 => 48,  73 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar-expand-lg navbar fixed-top sticky-top\" style=\"padding: 5px 40px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #9de8ab;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-weight: 700;\">
\t<img src=\"https://i.goopics.net/56i7af.png\" class=\"rounded-circle\" width=\"50\">
\t<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<i class=\"fa-solid fa-bars\"></i>
\t</button>

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
\t\t{# STYLE DE LA NAVAR #}
\t\t<style>
\t\t\t.nav-link:hover{
\t\t\t\t\tcolor: rgba(0, 60, 255, 0.605)!important;
\t\t\t\t\tbackground-color: rgba(255, 255, 255, 0.5)!important;
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tmargin: 0px 5px; }
\t\t</style>
\t\t<form class=\"d-flex my-2 my-lg-0\">
\t\t\t<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t</form>
\t\t<a href=\"/login\">
\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0\">connexion</button>
\t\t</a>


\t</div>
\t&nbsp; &nbsp;
\t{% if is_granted(\"ROLE_USER\") %}
\t\t<div class=\"dropstart text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"40\" height=\"40\" class=\"rounded-circle\">
\t\t\t\t{% if app.session.get('cart') %}
\t\t\t\t\t<span class=\"dropdown-item\" style=\"
\t\t\t\t\t\t\t\t\tbackground-color: rgba(255, 255, 0, 0.85);
\t\t\t\t\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t\t\t\t\tpadding: 2px 4px;
\t\t\t\t\t\t\t\t\twidth: fit-content;
\t\t\t\t\t\t\t\t\ttop: 26px;
\t\t\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\t\t\tright: -4px;
\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\t\t\tline-height: initial;
\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t{{ app.session.get('cartData').data.quantity_cart }}
\t\t\t\t\t{% endif %}
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<ul id=\"burger\" class=\"dropdown-menu dropdown-menu-right text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/cart\">Panier
\t\t\t\t\t\t<i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i>
\t\t\t\t\t\t{# <a href=\"/cart\">Panier <i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i></a> #}
\t\t\t\t\t\t{% if app.session.get('cart') %}
\t\t\t\t\t\t\t{{ app.session.get('cartData').data.quantity_cart }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t0
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t<ul class=\"cart_list\">
\t\t\t\t\t\t\t{% if app.session.get('cartData') %}
\t\t\t\t\t\t\t\t{% for element in app.session.get('cartData').data.quantity_cart %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cartDeleteAll', {'id':element.book.id})}}\" class=\"item_remove\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-close\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/uploads/book/{{ element.book.couvertureBook}}\" alt=\"{{ element.book.title}}\">{{ element.book.title}}</a>
\t\t\t\t\t\t\t\t\t\t<span class=\"cart_quantity\">{{ element.quantity }}<span class=\"cart_amount\">
\t\t\t\t\t\t\t\t\t\t\t\tx
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_symbole\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t{{ element.book.priceBook/100 }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>Votre panier est vide !</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% if app.session.get('cartData') %}
\t\t\t\t\t\t\t<div class=\"cart_footer\">
\t\t\t\t\t\t\t\t<p class=\"cart_total\">
\t\t\t\t\t\t\t\t\t<strong>Soustotal HT:</strong>
\t\t\t\t\t\t\t\t\t<span class=\"cart_price\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price_symbole\">€</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{{ app.session.get('cartData').data.subTotalTTC }}</p>
\t\t\t\t\t\t\t\t<p class=\"cart_buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"/cart\" class=\"btn btn-fill-line rounded-0 view-cart\">Retour panier</a>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-fill-out rounded-0 checkout\">Valider</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
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
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin') }}\"><i class=\"fa-solid fa-house-user\"></i> Dashboard</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li><hr></li>
\t\t\t{% if is_granted(\"ROLE_USER\") %}
\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>

{% endif %}</div></div></nav>
", "partials/header.html.twig ", "C:\\Users\\ydumi\\Desktop\\Alpha-Betise\\templates\\partials\\header.html.twig");
    }
}

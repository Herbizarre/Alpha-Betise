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
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark\" id=\"navbar\">
\t<a class=\"navbar-brand\" id=\"imgLogo\" href=\"/\"><img src=\"https://i.goopics.net/kwkwyv.png\" alt=\"Logo AlphaBetise\" width=\"50vw\"></a>
\t<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
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
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 39
            echo "\t\t<div class=\"dropdown text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t</a>
\t\t\t<ul id=\"burger\" class=\"dropdown-menu text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" id=\"panier\" href=\"/cart\">Panier <i class=\"fa-solid fa-cart-arrow-down fa-beat\"></i>
\t\t\t\t\t\t";
            // line 47
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "cart"], "method", false, false, false, 47)) {
                // line 48
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", [0 => "cartData"], "method", false, false, false, 48), "data", [], "any", false, false, false, 48), "quantity_cart", [], "any", false, false, false, 48), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t\t\t0
\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t</a>
            <div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t\t<ul class=\"cart_list\">
\t\t\t\t\t";
            // line 55
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "get", [0 => "cartData"], "method", false, false, false, 55)) {
                // line 56
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "cartData"], "method", false, false, false, 56), "data", [], "any", false, false, false, 56), "quantity_cart", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 57
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartDeleteAll", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/uploads/book/";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 59), "couvertureBook", [], "any", false, false, false, 59), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t<span class=\"cart_quantity\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 60), "html", null, true);
                    echo "<span class=\"cart_amount\"> x <span class=\"price_symbole\">€</span></span>";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "book", [], "any", false, false, false, 60), "priceBook", [], "any", false, false, false, 60) / 100), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t\t<li>Votre panier est vide !</li>
\t\t\t\t\t";
            }
            // line 66
            echo "        </ul>
        ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "session", [], "any", false, false, false, 67), "get", [0 => "cartData"], "method", false, false, false, 67)) {
                // line 68
                echo "        <div class=\"cart_footer\">
                <p class=\"cart_total\"><strong>Soustotal HT:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">€</span></span>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "get", [0 => "cartData"], "method", false, false, false, 69), "data", [], "any", false, false, false, 69), "subTotalTTC", [], "any", false, false, false, 69), "html", null, true);
                echo "</p>
                <p class=\"cart_buttons\"><a href=\"/cart\" class=\"btn btn-fill-line rounded-0 view-cart\">Retour panier</a><a href=\"\" class=\"btn btn-fill-out rounded-0 checkout\">Valider</a></p>
            </div>
        ";
            }
            // line 72
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
        // line 82
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Dashboard</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 87
        echo "\t\t\t<li><hr></li>
\t\t\t";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 89
            echo "\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>
    ";
        }
        // line 94
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
        return array (  204 => 94,  195 => 89,  193 => 88,  190 => 87,  184 => 84,  181 => 83,  178 => 82,  166 => 72,  159 => 69,  156 => 68,  154 => 67,  151 => 66,  147 => 64,  144 => 63,  133 => 60,  125 => 59,  121 => 58,  118 => 57,  113 => 56,  111 => 55,  106 => 52,  102 => 50,  96 => 48,  93 => 47,  84 => 39,  82 => 38,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark\" id=\"navbar\">
\t<a class=\"navbar-brand\" id=\"imgLogo\" href=\"/\"><img src=\"https://i.goopics.net/kwkwyv.png\" alt=\"Logo AlphaBetise\" width=\"50vw\"></a>
\t<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
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
", "partials/header.html.twig ", "C:\\Users\\ydumi\\Desktop\\Alpha-Betise\\templates\\partials\\header.html.twig");
    }
}

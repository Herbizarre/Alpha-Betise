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
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark\" style=\"background-color: #000;\">
\t<a class=\"navbar-brand\" href=\"#\">Logo</a>
\t<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t<div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
\t\t<ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"#\" aria-current=\"page\">Accueil
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
\t\t\t\t<a class=\"nav-link\" href=\"#\">La librairie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/contacts#\">Contact</a>
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

\t</div>&nbsp &nbsp


\t";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 39
            echo "\t\t<div class=\"dropdown text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Panier</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Paramètre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 54
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Dashboard</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 59
        echo "            <li><hr>
            </li>
\t\t\t";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 62
            echo "\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>
";
        }
        // line 66
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
        return array (  128 => 66,  119 => 62,  117 => 61,  113 => 59,  107 => 56,  104 => 55,  101 => 54,  84 => 39,  82 => 38,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark\" style=\"background-color: #000;\">
\t<a class=\"navbar-brand\" href=\"#\">Logo</a>
\t<button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t<div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
\t\t<ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"#\" aria-current=\"page\">Accueil
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
\t\t\t\t<a class=\"nav-link\" href=\"#\">La librairie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/contacts#\">Contact</a>
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

\t</div>&nbsp &nbsp


\t{% if is_granted(\"ROLE_USER\") %}
\t\t<div class=\"dropdown text-end\">
\t\t\t<a href=\"#\" class=\"d-block link-dark text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img src=\"https://github.com/mdo.png\" alt=\"mdo\" width=\"32\" height=\"32\" class=\"rounded-circle\">
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Panier</a>
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
            <li><hr>
            </li>
\t\t\t{% if is_granted(\"ROLE_USER\") %}
\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t</li>
\t\t</ul>
\t</div>
{% endif %}</div></div></nav>
", "partials/header.html.twig ", "C:\\Users\\Stagiaire01\\Alpha-Betise\\templates\\partials\\header.html.twig");
    }
}

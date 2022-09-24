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

/* partial/header.html.twig  */
class __TwigTemplate_06379b6ee112d1fc067fc90ffa8a6ee77239c08c1846dfc453de30587c442739 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/header.html.twig "));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/header.html.twig "));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark\" style=\"background-color: #000;\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
    <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
        <ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\" aria-current=\"page\">Accueil <span class=\"visually-hidden\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Rencontres</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Conseils de lecture</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">La librairie</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>
        <form class=\"d-flex my-2 my-lg-0\">
            <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/header.html.twig ";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark\" style=\"background-color: #000;\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
    <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
        <ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\" aria-current=\"page\">Accueil <span class=\"visually-hidden\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Rencontres</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Conseils de lecture</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">La librairie</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>
        <form class=\"d-flex my-2 my-lg-0\">
            <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>", "partial/header.html.twig ", "C:\\Users\\lunic\\projet-symfony\\Alpha-Betise\\templates\\partial\\header.html.twig");
    }
}

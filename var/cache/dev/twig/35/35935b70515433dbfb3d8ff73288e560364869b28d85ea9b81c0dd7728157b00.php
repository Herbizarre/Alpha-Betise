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
class __TwigTemplate_6493ad77221c9ad9ad51ad9aff7958a8a21a0eb345c8ae898b73d7aabd5cb02c extends Template
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
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
    <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
        <ul class=\"navbar-nav me-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\" aria-current=\"page\">Accueil <span class=\"visually-hidden\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
<<<<<<< HEAD
                <a class=\"nav-link\" href=\"/meeting\">Rencontres</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/reading/tips\">Conseils de lecture</a>
=======
                <a class=\"nav-link\" href=\"#\">Rencontres</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/conseils\">Conseils de lecture</a>
>>>>>>> conseilsLecture
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">La librairie</a>
            </li>
            <li class=\"nav-item\">
<<<<<<< HEAD
                <a class=\"nav-link\" href=\"/contacts#\">Contact</a>
=======
                <a class=\"nav-link\" href=\"#\">Contact</a>
>>>>>>> conseilsLecture
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
        return "partials/header.html.twig ";
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
                <a class=\"nav-link\" href=\"/conseils\">Conseils de lecture</a>
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
</nav>", "partials/header.html.twig ", "C:\\wamp64\\www\\symfony5\\Alpha-Betise\\templates\\partials\\header.html.twig");
    }
}

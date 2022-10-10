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

/* home/index.html.twig */
class __TwigTemplate_1f873466f6bb2114b5aa7355959dfd746aa1fa46a587c1c0621233d94d381a16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Alpha-Bétise
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        // line 8
        echo "\t<div id=\"ancre\"></div>
\t";
        // line 10
        echo "\t<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-inner\">

\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img  src=\"/assets/images/librairie-enfant.jpg\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>

\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img  src=\"/assets/images/slider2.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>

\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img  src=\"/assets/images/slider1.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t</div>

\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t</button>

\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t</button>
\t</div>

\t";
        // line 38
        echo "
\t<div class=\"card mb-3 border-warning\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 m-auto\">
\t\t\t<h3>Prochain évenement :</h3>
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["calendars"]));
        foreach ($context['_seq'] as $context["_key"] => $context["calendars"]) {
            // line 42
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<u><h6 class=\"text-danger\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendars"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "</h6></u>
\t\t\t\t\t\t<img src=\"/assets/uploads/event/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendars"], "eventCover", [], "any", false, false, false, 44), "html", null, true);
            echo "\" width=35%>
\t\t\t\t\t\t<p>Le : ";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["calendars"], "start", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendars"], "start", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendars'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>


\t";
        // line 72
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 75, $this->source); })())), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 76
            echo "
\t\t\t\t<div class=\" card card-fluid mb-4 \" style=\"max-width:900px; margin:auto; min-height:450px;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-5 \">
\t\t\t\t\t\t\t<img src=\"/assets/uploads/book/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "couvertureBook", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\"img-fluid rounded\" alt=\"Image du livre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 80), "html", null, true);
            echo "\" style=\"max-height:400px;\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<p class=\"card-text\" style=\"font-size:1.9em;\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 83
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["book"], "priceBook", [], "any", false, false, false, 83) / 100), "html", null, true);
            echo "&nbsp; €</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-size:2em;\">";
            // line 92
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 92)), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "rate", [], "any", false, false, false, 92), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 94
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 94)), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 96
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["book"], "commentLibraire", [], "any", false, false, false, 96)), 0, 150) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details_book", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Plus de Détails>></small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t</div>
\t</div>
\t<center>
\t\t<a href=\"/conseils\">
\t\t\t<button class=\"btn btn-outline-secondary my-2 my-sm-0\">Afficher plus >></button>
\t\t</a>
\t</center><br>
\t";
        // line 117
        echo "\t<div class=\"card mb-3 border-success\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 m-auto\">

\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, $context["users"], 0, 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 122
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<p>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 123), "html", null, true);
            echo "
\t\t\t\t\t\t\tc'est inscrit a notre newsletter</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 132
        echo "\t<a href=\"#ancre\">
\t\t<i class=\"fa-solid fa-arrow-up\"></i>
\t</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 113,  258 => 108,  249 => 105,  246 => 104,  242 => 103,  236 => 99,  227 => 91,  210 => 80,  205 => 78,  200 => 76,  193 => 74,  181 => 65,  173 => 62,  167 => 58,  163 => 57,  158 => 54,  151 => 48,  142 => 45,  138 => 44,  134 => 43,  131 => 42,  127 => 41,  120 => 36,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Alpha-Bétise
{% endblock %}

{% block body %}
\t{# DEBUT ANCRE #}
\t<div id=\"ancre\"></div>
\t{# -----------------Caroussel---------------------- #}
\t<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-inner\">

\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img  src=\"/assets/images/librairie-enfant.jpg\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>

\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img  src=\"/assets/images/slider2.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>

\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img  src=\"/assets/images/slider1.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t</div>

\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t</button>

\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t</button>
\t</div>

\t{# -----------------------Prochain évenement----------------------- #}

\t<div class=\"card mb-3 border-warning\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-5 m-auto\">

\t\t\t\t<div class=\"carousel-fluid slide \" data-bs-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-inner\">

\t\t\t\t\t\t<div class=\"carousel-item active\" style=\"height:120px;\">
\t\t\t\t\t\t\t<h3>Les Evenements</h3>
\t\t\t\t\t\t\t<p>Atelier Parent/Enfants, Rencontre d'Auteurs et autres</p>
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<u>Inscription libre</u>
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for calendars in calendars|slice(0,5)|reverse %}
\t\t\t\t\t\t\t<div class=\"carousel-item\" style=\"height:120px;\">
\t\t\t\t\t\t\t\t<div class=\"carousel-text \">
\t\t\t\t\t\t\t\t\t<h3>Prochain évenement :</h3>
\t\t\t\t\t\t\t\t\t<h5 class=\"text-danger\">{{ calendars.title }}</h5>
\t\t\t\t\t\t\t\t\t<p>Le :
\t\t\t\t\t\t\t\t\t\t{{ calendars.start ? calendars.start|date('d-m-Y') : '' }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>


\t{# ------------------- Apercu de livre ---------------- #}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t{% for book in books|reverse|slice(0,4) %}

\t\t\t\t<div class=\" card card-fluid mb-4 \" style=\"max-width:900px; margin:auto; min-height:450px;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-5 \">
\t\t\t\t\t\t\t<img src=\"/assets/uploads/book/{{book.couvertureBook}}\" class=\"img-fluid rounded\" alt=\"Image du livre {{ book.title }}\" style=\"max-height:400px;\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<p class=\"card-text\" style=\"font-size:1.9em;\">
\t\t\t\t\t\t\t\t\t<strong>{{ book.priceBook /100 }}&nbsp; €</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-size:2em;\">{{ book.title | upper}}&nbsp;{{ book.rate }}</h3>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<strong>{{book.author | upper}}</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ book.commentLibraire|striptags|slice(0, 150)~ '...' }}</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_details_book', {'id': book.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Plus de Détails>></small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
\t<center>
\t\t<a href=\"/conseils\">
\t\t\t<button class=\"btn btn-outline-secondary my-2 my-sm-0\">Afficher plus >></button>
\t\t</a>
\t</center><br>
\t{# --------------newsletter------------ #}
\t<div class=\"card mb-3 border-success\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 m-auto\">

\t\t\t\t{% for users in users|slice(0,1)|reverse %}
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>{{ users.email }}
\t\t\t\t\t\t\tc'est inscrit a notre newsletter</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>
\t{# --------------ANCRE------------ #}
\t<a href=\"#ancre\">
\t\t<i class=\"fa-solid fa-arrow-up\"></i>
\t</a>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\lunic\\projet-symfony\\Alpha-Betise\\templates\\home\\index.html.twig");
    }
}

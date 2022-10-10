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
        // line 11
        echo "
\t<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div
\t\t\tclass=\"carousel-inner\">
\t\t\t";
        // line 16
        echo "\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"/assets/images/librairie-enfant.jpg\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t\t";
        // line 20
        echo "\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider2.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t\t";
        // line 24
        echo "\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider1.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t</div>
\t\t";
        // line 29
        echo "\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t</button>
\t\t";
        // line 34
        echo "\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t</button>
\t</div>

\t";
        // line 41
        echo "
\t";
        // line 43
        echo "\t<div class=\"card mb-3 border-warning\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-5 m-auto\">

\t\t\t\t<div class=\"carousel-fluid slide \" data-bs-ride=\"carousel\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"carousel-inner\">
\t\t\t\t\t\t";
        // line 51
        echo "\t\t\t\t\t\t<div class=\"carousel-item active\" style=\"height:120px;\">
\t\t\t\t\t\t\t<h3>Les Evenements</h3>
\t\t\t\t\t\t\t<p>Atelier Parent/Enfants, Rencontre d'Auteurs et autres</p>
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<p>Inscription libre</p>
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 59
        echo "
\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, $context["calendars"], 0, 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["calendars"]) {
            // line 62
            echo "\t\t\t\t\t\t\t";
            // line 63
            echo "\t\t\t\t\t\t\t<div class=\"carousel-item\" style=\"height:200px;\">
\t\t\t\t\t\t\t\t<div class=\"carousel-text \">
\t\t\t\t\t\t\t\t\t<h3>Prochain évenement :</h3>
\t\t\t\t\t\t\t\t\t";
            // line 67
            echo "\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tsrc=\"/assets/uploads/event/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendars"], "eventCover", [], "any", false, false, false, 68), "html", null, true);
            echo "\" width=\"35%\">
\t\t\t\t\t\t\t\t\t";
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<h5 class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendars"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t";
            // line 72
            echo "\t\t\t\t\t\t\t\t\t<p>Le :";
            ((twig_get_attribute($this->env, $this->source, $context["calendars"], "start", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendars"], "start", [], "any", false, false, false, 72), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendars'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t";
        // line 85
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t";
        // line 89
        echo "
\t\t\t";
        // line 91
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 91, $this->source); })())), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 92
            echo "\t\t\t\t";
            // line 93
            echo "\t\t\t\t\t<div class=\" card card-fluid mb-4 \" style=\"max-width:900px; margin:auto; min-height:450px;\"> <div class=\"row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-5 \">
\t\t\t\t\t\t\t";
            // line 97
            echo "\t\t\t\t\t\t\t<img src=\"/assets/uploads/book/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "couvertureBook", [], "any", false, false, false, 97), "html", null, true);
            echo "\" class=\"img-fluid rounded\" alt=\"Image du livre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 97), "html", null, true);
            echo "\" style=\"max-height:400px;\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t";
            // line 100
            echo "\t\t\t\t\t\t\t\t<p class=\"card-text price\" style=\"font-size:1.9em;\">
\t\t\t\t\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["book"], "priceBook", [], "any", false, false, false, 101) / 100), "html", null, true);
            echo "&nbsp;€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t";
            // line 112
            echo "\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-size:2em;\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 112)), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "rate", [], "any", false, false, false, 112), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\tclass=\"card-text author\">
\t\t\t\t\t\t\t\t\t";
            // line 116
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 116)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 119
            echo "\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["book"], "commentLibraire", [], "any", false, false, false, 119)), 0, 150) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">

\t\t\t\t\t\t\t\t";
            // line 123
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details_book", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Plus de Détails>></small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 134
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t</div>
\t</div>
\t<center>

\t";
        // line 140
        echo "\t\t<a href=\"/conseils\">
\t\t\t<button class=\"btn btn-outline-secondary my-2 my-sm-0\">Afficher plus >></button>
\t\t</a>
\t</center><br>
\t";
        // line 145
        echo "\t<div class=\"card mb-3 border-success\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 m-auto\">
";
        // line 149
        echo "
\t\t\t";
        // line 151
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, $context["users"], 0, 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 152
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<p>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 153), "html", null, true);
            echo "
\t\t\t\t\t\t\tc'est inscrit a notre newsletter</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 162
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
        return array (  331 => 162,  325 => 157,  315 => 153,  312 => 152,  307 => 151,  304 => 149,  299 => 145,  293 => 140,  287 => 135,  281 => 134,  267 => 123,  260 => 119,  254 => 116,  245 => 112,  232 => 101,  229 => 100,  221 => 97,  216 => 93,  214 => 92,  209 => 91,  206 => 89,  201 => 85,  192 => 77,  190 => 76,  179 => 72,  174 => 70,  170 => 68,  167 => 67,  162 => 63,  160 => 62,  155 => 61,  152 => 59,  143 => 51,  134 => 43,  131 => 41,  123 => 34,  117 => 29,  111 => 24,  106 => 20,  101 => 16,  95 => 11,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Alpha-Bétise
{% endblock %}

{% block body %}
\t{# --------------DEBUT ANCRE------------ #}
\t<div id=\"ancre\"></div>

\t{# -----------------Caroussel---------------------- #}

\t<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div
\t\t\tclass=\"carousel-inner\">
\t\t\t{# premiere image de caroussel #}
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"/assets/images/librairie-enfant.jpg\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t\t{# image de caroussel 2 #}
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider2.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t\t{# image de caroussel 3 #}
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider1.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t</div>
\t\t</div>
\t\t{# Boutton de navigation \"précédent\" #}
\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t</button>
\t\t{# Boutton de navigation \"suivant\" #}
\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t</button>
\t</div>

\t{# -----------------------Prochain évenement----------------------- #}

\t{# Caroussel events #}
\t<div class=\"card mb-3 border-warning\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-5 m-auto\">

\t\t\t\t<div class=\"carousel-fluid slide \" data-bs-ride=\"carousel\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"carousel-inner\">
\t\t\t\t\t\t{# Texte d'accueil des évenements #}
\t\t\t\t\t\t<div class=\"carousel-item active\" style=\"height:120px;\">
\t\t\t\t\t\t\t<h3>Les Evenements</h3>
\t\t\t\t\t\t\t<p>Atelier Parent/Enfants, Rencontre d'Auteurs et autres</p>
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<p>Inscription libre</p>
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# -----Boucle d'affichage par ID des évenements ---- #}

\t\t\t\t\t\t{# Renvoie des 5 dernier ID #}
\t\t\t\t\t\t{% for calendars in calendars|slice(0,5)|reverse %}
\t\t\t\t\t\t\t{# Pour chaque évenements trouvé effectue  le code suivants #}
\t\t\t\t\t\t\t<div class=\"carousel-item\" style=\"height:200px;\">
\t\t\t\t\t\t\t\t<div class=\"carousel-text \">
\t\t\t\t\t\t\t\t\t<h3>Prochain évenement :</h3>
\t\t\t\t\t\t\t\t\t{# Images d'évenement #}
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tsrc=\"/assets/uploads/event/{{calendars.eventCover}}\" width=\"35%\">
\t\t\t\t\t\t\t\t\t{# Titre d'évenement #}
\t\t\t\t\t\t\t\t\t<h5 class=\"text-danger\">{{ calendars.title }}</h5>
\t\t\t\t\t\t\t\t\t{# Date de début d'évenements#}
\t\t\t\t\t\t\t\t\t<p>Le :{{ calendars.start ? calendars.start|date('d-m-Y') : '' }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{# fin de boucle #}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t{# ----------------------- Apercu de livre -------------------- #}

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t{# -----Boucle d'affichage par ID des livres ---- #}

\t\t\t{# Renvoie des 4 dernier ID #}
\t\t\t\t{% for book in books|reverse|slice(0,4) %}
\t\t\t\t{# Pour chaque livre trouvé effectue  le code suivants dans une Card #}
\t\t\t\t\t<div class=\" card card-fluid mb-4 \" style=\"max-width:900px; margin:auto; min-height:450px;\"> <div class=\"row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-5 \">
\t\t\t\t\t\t\t{# Images de couverture ainsi que son titre en accéssibilité #}
\t\t\t\t\t\t\t<img src=\"/assets/uploads/book/{{book.couvertureBook}}\" class=\"img-fluid rounded\" alt=\"Image du livre {{ book.title }}\" style=\"max-height:400px;\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t{# Prix du livre #}
\t\t\t\t\t\t\t\t<p class=\"card-text price\" style=\"font-size:1.9em;\">
\t\t\t\t\t\t\t\t\t{{ book.priceBook /100 }}&nbsp;€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t{# titre du livre et notes du livre  #}
\t\t\t\t\t\t\t\t<h3 class=\"card-title\" style=\"font-size:2em;\">{{ book.title | upper}}&nbsp;{{ book.rate }}</h3>
\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\tclass=\"card-text author\">
\t\t\t\t\t\t\t\t\t{# Nom d'auteur#}
\t\t\t\t\t\t\t\t\t{{book.author | upper}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{# Apercu du Commentaire de la librairie (les 150 premiers caracteres #}
\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ book.commentLibraire|striptags|slice(0, 150)~ '...' }}</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">

\t\t\t\t\t\t\t\t{# Liens d'acces au details complet du livre => ID du livre récupéré  #}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_details_book', {'id': book.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Plus de Détails>></small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# Fin de boucle #}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
\t<center>

\t{# Redirection page Conseils de lecture #}
\t\t<a href=\"/conseils\">
\t\t\t<button class=\"btn btn-outline-secondary my-2 my-sm-0\">Afficher plus >></button>
\t\t</a>
\t</center><br>
\t{# --------------newsletter------------ #}
\t<div class=\"card mb-3 border-success\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 m-auto\">
{# -----Boucle d'affichage par ID des inscriptions a la newsletters  ---- #}

\t\t\t{# Renvoie le dernier ID #}
\t\t\t\t{% for users in users|slice(0,1)|reverse %}
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>{{ users.email }}
\t\t\t\t\t\t\tc'est inscrit a notre newsletter</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>
\t{# --------------FIN ANCRE------------ #}
\t<a href=\"#ancre\">
\t\t<i class=\"fa-solid fa-arrow-up\"></i>
\t</a>

{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\Symfony5\\Alpha-Betise\\templates\\home\\index.html.twig");
    }
}

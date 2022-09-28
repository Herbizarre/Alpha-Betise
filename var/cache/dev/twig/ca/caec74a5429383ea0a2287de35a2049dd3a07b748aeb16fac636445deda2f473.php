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
        echo "\t<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-indicators\">
\t\t\t<button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t<button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t<button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t</div>
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"/assets/images/slider3.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption text-start\">
\t\t\t\t\t\t<h2>Achats en ligne.</h2>
\t\t\t\t\t\t<p>Achetez l'article de vos rèves en quelques clics</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning border-dark btn-outline-dark\" href=\"#\">Boutique</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider2.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Livraison</h2>
\t\t\t\t\t\t<p>Envoyez ou Reçevez vos achats où que vous soyez !</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning border-dark btn-outline-dark\" href=\"#\">Livrer</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider1.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption text-end\">
\t\t\t\t\t\t<h2>Ventes</h2>
\t\t\t\t\t\t<p>Gagner de l'argent facilement en vendant vos objets</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning border-dark btn-outline-dark\" href=\"#\">Ventes d'articles</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
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
        // line 64
        echo "\t<div class=\"book-item\">
\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 66
            echo "\t\t\t<div class=\"cardBookHome\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img class=\"card-img-top\" src=\"/assets/uploads/book/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "couvertureBook", [], "any", false, false, false, 68), "html", null, true);
            echo "\" alt='Image du livre\"...\"'>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h3 class=\"card-title\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "rate", [], "any", false, false, false, 70), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<p class=\"card-text\"><strong>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 71), "html", null, true);
            echo "</strong></p>
\t\t\t\t\t\t<p class=\"card-text\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "commentLibraire", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p class=\"card-text\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "priceBook", [], "any", false, false, false, 73), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\" role=\"button\">details</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t</div>
</div>";
        
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
        return array (  190 => 79,  178 => 73,  174 => 72,  170 => 71,  164 => 70,  159 => 68,  155 => 66,  151 => 65,  148 => 64,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Alpha-Bétise
{% endblock %}

{% block body %}
\t{# -----------------Caroussel---------------------- #}
\t<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-indicators\">
\t\t\t<button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t<button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t<button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t</div>
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"/assets/images/slider3.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption text-start\">
\t\t\t\t\t\t<h2>Achats en ligne.</h2>
\t\t\t\t\t\t<p>Achetez l'article de vos rèves en quelques clics</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning border-dark btn-outline-dark\" href=\"#\">Boutique</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider2.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Livraison</h2>
\t\t\t\t\t\t<p>Envoyez ou Reçevez vos achats où que vous soyez !</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning border-dark btn-outline-dark\" href=\"#\">Livrer</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"/assets/images/slider1.png\" alt=\"image d'enfant en pleine lecture\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption text-end\">
\t\t\t\t\t\t<h2>Ventes</h2>
\t\t\t\t\t\t<p>Gagner de l'argent facilement en vendant vos objets</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning border-dark btn-outline-dark\" href=\"#\">Ventes d'articles</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
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


\t{# ------------------- Apercu de livre ---------------- #}
\t<div class=\"book-item\">
\t\t{% for book in books %}
\t\t\t<div class=\"cardBookHome\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img class=\"card-img-top\" src=\"/assets/uploads/book/{{book.couvertureBook}}\" alt='Image du livre\"...\"'>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h3 class=\"card-title\">{{ book.title }}&nbsp;{{ book.rate }}</h3>
\t\t\t\t\t\t<p class=\"card-text\"><strong>{{book.author}}</strong></p>
\t\t\t\t\t\t<p class=\"card-text\">{{ book.commentLibraire }}</p>
\t\t\t\t\t\t<p class=\"card-text\">{{ book.priceBook }}€</p>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\" role=\"button\">details</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
</div>{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\Symfony5\\Alpha-Betise\\templates\\home\\index.html.twig");
    }
}

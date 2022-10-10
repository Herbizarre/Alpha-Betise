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

/* conseils/index.html.twig */
class __TwigTemplate_e92cd471bc0c0593c3ef359b15a876d91b609491cc2fe5170955f7bac6aaad2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseils/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseils/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conseils/index.html.twig", 1);
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

        echo "Conseils de Lecture !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"ancre\"></div>

\t<h1>Conseils de Lecture</h1>

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, $context["book"]));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 12
            echo "\t";
            // line 13
            echo "\t\t<div class=\"card mb-3\" style=\"min-width: 540px;\">
\t\t\t<div class=\"row g-0\">
\t\t\t\t";
            // line 16
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img id=\"book\" src=\"/assets/uploads/book/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "couvertureBook", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
            // line 23
            echo "\t\t\t\t\t\t<h3 class=\"mb-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t";
            // line 25
            echo "\t\t\t\t\t\t<span class=\"mb-1 text-muted\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["book"], "priceBook", [], "any", false, false, false, 25) / 100), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t";
            // line 27
            echo "\t\t\t\t\t\t<p class=\"card-text mb-auto\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 27), "html", null, true);
            echo "</strong></p>
\t\t\t\t\t\t";
            // line 29
            echo "\t\t\t\t\t\t<p class=\"card-text mb-auto\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "editeur", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
\t\t\t\t\t\t";
            // line 31
            echo "\t\t\t\t\t\t<p class=\"card-text mb-auto\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "rate", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
\t\t\t\t\t\t";
            // line 33
            echo "\t\t\t\t\t\t<p class=\"card-text mb-auto\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "commentLibraire", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
\t\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartAdd", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-basket-shopping fa-beat\"></i>
\t\t\t\t\t\t\tAjouter au panier</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t";
        // line 47
        echo "\t<a href=\"#ancre\">
\t\t<i class=\"fa-solid fa-arrow-up\"></i>
\t</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conseils/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  164 => 45,  147 => 35,  142 => 33,  137 => 31,  132 => 29,  127 => 27,  122 => 25,  117 => 23,  107 => 17,  104 => 16,  100 => 13,  98 => 12,  94 => 11,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conseils de Lecture !{% endblock %}

{% block body %}
{# -------------- DEBUT ANCRE------------ #}
\t<div id=\"ancre\"></div>

\t<h1>Conseils de Lecture</h1>

\t{% for book in book|sort %}
\t{# --------------aperçu d'un livre------------ #}
\t\t<div class=\"card mb-3\" style=\"min-width: 540px;\">
\t\t\t<div class=\"row g-0\">
\t\t\t\t{# --------------IMAGE BOOK------------ #}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img id=\"book\" src=\"/assets/uploads/book/{{book.couvertureBook}}\" alt=\"{{book.title}}\" class=\"img-fluid rounded-start\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{# --------------BOOK TITRE------------ #}
\t\t\t\t\t\t<h3 class=\"mb-0\">{{book.title}}</h3>
\t\t\t\t\t\t{# --------------BOOK PRIX------------ #}
\t\t\t\t\t\t<span class=\"mb-1 text-muted\">{{book.priceBook /100 }} €</span>
\t\t\t\t\t\t{# --------------BOOK AUTEUR------------ #}
\t\t\t\t\t\t<p class=\"card-text mb-auto\"><strong>{{book.author}}</strong></p>
\t\t\t\t\t\t{# --------------BOOK EDITEUR------------ #}
\t\t\t\t\t\t<p class=\"card-text mb-auto\">{{book.editeur}}</p>
\t\t\t\t\t\t{# --------------BOOK NOTE------------ #}
\t\t\t\t\t\t<p class=\"card-text mb-auto\">{{book.rate}}</p>
\t\t\t\t\t\t{# --------------BOOK COMMENTAIRE DU LIBRAIRE------------ #}
\t\t\t\t\t\t<p class=\"card-text mb-auto\">{{book.commentLibraire}}</p>
\t\t\t\t\t\t{# --------------PANIER/CART------------ #}
\t\t\t\t\t\t<a href=\"{{path('cartAdd',{'id':book.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-basket-shopping fa-beat\"></i>
\t\t\t\t\t\t\tAjouter au panier</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% endfor %}

\t{# -------------- FIN ANCRE------------ #}
\t<a href=\"#ancre\">
\t\t<i class=\"fa-solid fa-arrow-up\"></i>
\t</a>

{% endblock %}
", "conseils/index.html.twig", "C:\\wamp64\\www\\Symfony5\\Alpha-Betise\\templates\\conseils\\index.html.twig");
    }
}

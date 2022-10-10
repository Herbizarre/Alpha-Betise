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

        echo "Hello Conseils!";
        
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

        // line 6
        echo "    <h1>Conseils de Lecture</h1>

    <div id=\"ancre\"></div>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["book"]);
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 11
            echo "<div class=\"card mb-3\" style=\"min-width: 540px;\">
    <div class=\"row g-0\">
        <div class=\"col-md-4\">
            <img id=\"book\" src=\"/assets/uploads/book/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "couvertureBook", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\">
        </div>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h3 class=\"mb-0\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3>
                <span class=\"mb-1 text-muted\">";
            // line 19
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["book"], "priceBook", [], "any", false, false, false, 19) / 100), "html", null, true);
            echo " €</span>
                <p class=\"card-text mb-auto\"><strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 20), "html", null, true);
            echo "</strong></p>
                <p class=\"card-text mb-auto\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "editeur", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                <p class=\"card-text mb-auto\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "rate", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                <p class=\"card-text mb-auto\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "commentLibraire", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartAdd", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-basket-shopping fa-beat\"></i> Ajouter au panier</a>
            </div>
        </div>
    </div>
</div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 33
        echo "<a href=\"#ancre\">
\t<i class=\"fa-solid fa-arrow-up\"></i>
</a>

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
        return array (  152 => 33,  149 => 31,  136 => 24,  132 => 23,  128 => 22,  124 => 21,  120 => 20,  116 => 19,  112 => 18,  103 => 14,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Conseils!{% endblock %}

{% block body %}
    <h1>Conseils de Lecture</h1>

    <div id=\"ancre\"></div>

    {% for book in book %}
<div class=\"card mb-3\" style=\"min-width: 540px;\">
    <div class=\"row g-0\">
        <div class=\"col-md-4\">
            <img id=\"book\" src=\"/assets/uploads/book/{{book.couvertureBook}}\" alt=\"{{book.title}}\" class=\"img-fluid rounded-start\">
        </div>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h3 class=\"mb-0\">{{book.title}}</h3>
                <span class=\"mb-1 text-muted\">{{book.priceBook /100 }} €</span>
                <p class=\"card-text mb-auto\"><strong>{{book.author}}</strong></p>
                <p class=\"card-text mb-auto\">{{book.editeur}}</p>
                <p class=\"card-text mb-auto\">{{book.rate}}</p>
                <p class=\"card-text mb-auto\">{{book.commentLibraire}}</p>
                <a href=\"{{path('cartAdd',{'id':book.id})}}\"><i class=\"fa-solid fa-basket-shopping fa-beat\"></i> Ajouter au panier</a>
            </div>
        </div>
    </div>
</div>

    {% endfor %}

{# --------------ANCRE------------ #}
<a href=\"#ancre\">
\t<i class=\"fa-solid fa-arrow-up\"></i>
</a>

{% endblock %}
", "conseils/index.html.twig", "C:\\Users\\lunic\\projet-symfony\\Alpha-Betise\\templates\\conseils\\index.html.twig");
    }
}

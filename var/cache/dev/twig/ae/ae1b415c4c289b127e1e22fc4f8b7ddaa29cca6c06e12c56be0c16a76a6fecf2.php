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

/* contacts/index.html.twig */
class __TwigTemplate_446572e0fff3db9ea764e92d76cf524d6cb729b77eb75cd3210d6c551bb5806a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/index.html.twig", 1);
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

        echo "Contact";
        
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
        echo "<style>
    #form,#description{
        width:400px;
        height:300px;
        margin:auto;
        margin-top: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        align-content: center;
    }
    #form{
        background-color: beige;
        border-radius : 10px;
        padding: 15px;
    }
    .separation{
        width:70%;
        height:1px;
        background-color: black;
    }

    ";
        // line 38
        echo "
</style>
    <div id=\"form\">
        <h1>Contactez-nous</h1>
        <div class=\"separation\"></div>
        <label> Email : </label>";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'form');
        echo "
        <label> Message : </label> ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 44, $this->source); })()), "message", [], "any", false, false, false, 44), 'form');
        echo "

        <input name=\"\" id=\"\" class=\"btn btn-primary\" type=\"button\" value=\"Envoyer\">

    
    </div>

    <div id=\"description\">
        <p>Numéro de téléphone : 0690123465 <br>
        Le siege social se situe au : <br/> CWTC Complexe World Trade Center <br/>
        Route du CWTC 97122 ZI de Jarry <br/> Baie Mahault, 97122, Guadeloupe <br/>
        </p>
        <img src=\"assets/images/librairie-enfant.jpg\" style=\"max-width:400px;\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contacts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  120 => 43,  113 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
<style>
    #form,#description{
        width:400px;
        height:300px;
        margin:auto;
        margin-top: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        align-content: center;
    }
    #form{
        background-color: beige;
        border-radius : 10px;
        padding: 15px;
    }
    .separation{
        width:70%;
        height:1px;
        background-color: black;
    }

    {# .img{
        width:250px;
        height:250px;
        margin:auto;
        background-image: url(../assets/images/librairie-enfant.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    } #}

</style>
    <div id=\"form\">
        <h1>Contactez-nous</h1>
        <div class=\"separation\"></div>
        <label> Email : </label>{{form(formulaire.email)}}
        <label> Message : </label> {{form(formulaire.message)}}

        <input name=\"\" id=\"\" class=\"btn btn-primary\" type=\"button\" value=\"Envoyer\">

    
    </div>

    <div id=\"description\">
        <p>Numéro de téléphone : 0690123465 <br>
        Le siege social se situe au : <br/> CWTC Complexe World Trade Center <br/>
        Route du CWTC 97122 ZI de Jarry <br/> Baie Mahault, 97122, Guadeloupe <br/>
        </p>
        <img src=\"assets/images/librairie-enfant.jpg\" style=\"max-width:400px;\">
    </div>
{% endblock %}
", "contacts/index.html.twig", "C:\\wamp64\\www\\Symfony5\\Alpha-Betise\\templates\\contacts\\index.html.twig");
    }
}

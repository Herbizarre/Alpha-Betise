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

/* partials/footer.html.twig  */
class __TwigTemplate_39bcfa78438613d5ea58efbd9b71ad757ce9ae010e35bf64be7590e2f6451e6c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig "));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig "));

        // line 1
        echo "<hr>
";
        // line 3
        echo "\t<footer>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 offset-md-1 mb-3\">
\t\t\t\t\t<h5>Souscription à la newsletter!</h5>
\t\t\t\t\t<p>Monthly digest of what's new and exciting from us.</p>
\t\t\t\t\t<a href=\"/newsletters\"><button class=\"btn btn-primary\" type=\"button\">Subscribe</button></a>

\t\t\t</div>
      <div class=\"col-md-3\"></div>
\t\t\t<div class=\"col-6 col-md-2 mb-3\">
\t\t\t\t<h5>Section</h5>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t<div class=\"col-6 col-md-2 mb-3\">
\t\t\t\t<h5>Section</h5>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t</div>

\t\t<div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\">
\t\t\t<p>&copy; 2022 Company, Inc. All rights reserved.</p>
\t\t</div>
\t</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig ";
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<hr>
{# <div class=\"container\"> #}
\t<footer>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 offset-md-1 mb-3\">
\t\t\t\t\t<h5>Souscription à la newsletter!</h5>
\t\t\t\t\t<p>Monthly digest of what's new and exciting from us.</p>
\t\t\t\t\t<a href=\"/newsletters\"><button class=\"btn btn-primary\" type=\"button\">Subscribe</button></a>

\t\t\t</div>
      <div class=\"col-md-3\"></div>
\t\t\t<div class=\"col-6 col-md-2 mb-3\">
\t\t\t\t<h5>Section</h5>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t<div class=\"col-6 col-md-2 mb-3\">
\t\t\t\t<h5>Section</h5>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t</div>

\t\t<div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\">
\t\t\t<p>&copy; 2022 Company, Inc. All rights reserved.</p>
\t\t</div>
\t</footer>
{# </div> #}
", "partials/footer.html.twig ", "C:\\wamp\\www\\symfony\\Alpha-Betise2\\templates\\partials\\footer.html.twig");
    }
}

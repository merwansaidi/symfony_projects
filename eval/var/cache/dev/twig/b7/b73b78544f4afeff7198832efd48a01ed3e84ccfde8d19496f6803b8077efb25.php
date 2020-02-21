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

/* ficheProduit/index.html.twig */
class __TwigTemplate_ff8963c80765099a300a938680b6e61b1715e301e8a425f51e12750c50ea12b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ficheProduit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ficheProduit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ficheProduit/index.html.twig", 1);
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

        echo "Detail produit";
        
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
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"text-center\">Détail du produit</h1>
</div>

";
        // line 16
        echo "<div class=\"container\">

    ";
        // line 19
        echo "    <div class=\"section border border-dark m-1 p-3\">

        <div class=\"row\">

            <div class=\"col-12\">
                - Détail du produits :
            </div>

            <div class=\"col-12\">

                <table class=\"table\">
                <thead>
                    <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Photo</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 40
        echo "                    <tr>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.nom</td>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.photo</td>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.qte</td>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.prix</td>
                    </tr>
                ";
        // line 47
        echo "                </tbody>
                </table>

            </div>

        </div>

        <div class=\"row\">
            
            <div class=\"col-12\">
                ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPanier"]) || array_key_exists("formPanier", $context) ? $context["formPanier"] : (function () { throw new RuntimeError('Variable "formPanier" does not exist.', 57, $this->source); })()), 'form');
        echo "
            </div>
        </div>

    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ficheProduit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  133 => 47,  125 => 40,  103 => 19,  99 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detail produit{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"text-center\">Détail du produit</h1>
</div>

{# CORPS DE LA PAGE #}
<div class=\"container\">

    {# Section LISTE DES SERIES #}
    <div class=\"section border border-dark m-1 p-3\">

        <div class=\"row\">

            <div class=\"col-12\">
                - Détail du produits :
            </div>

            <div class=\"col-12\">

                <table class=\"table\">
                <thead>
                    <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Photo</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                    </tr>
                </thead>
                <tbody>
                {# {% for produit in produits %}     #}
                    <tr>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.nom</td>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.photo</td>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.qte</td>
                    <td class=\"text-uppercase font-weight-bold text-danger\">produit.prix</td>
                    </tr>
                {# {% endfor %} #}
                </tbody>
                </table>

            </div>

        </div>

        <div class=\"row\">
            
            <div class=\"col-12\">
                {{ form(formPanier) }}
            </div>
        </div>

    </div>

</div>
{% endblock %}
", "ficheProduit/index.html.twig", "/home/merwan/Bureau/IPSSI/Symfony/symfony_projects/awbd_eval/templates/ficheProduit/index.html.twig");
    }
}

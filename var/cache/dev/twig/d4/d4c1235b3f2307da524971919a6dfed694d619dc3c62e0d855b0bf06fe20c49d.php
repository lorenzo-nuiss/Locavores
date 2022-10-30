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

/* admin/categorie/showCategorie.html.twig */
class __TwigTemplate_ab59f0f01b361acda104f203cdb7c147239faddbf6ce41a1b3fd4463410b2fd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'h1' => [$this, 'block_h1'],
            'card' => [$this, 'block_card'],
            'linkAdd' => [$this, 'block_linkAdd'],
            'table' => [$this, 'block_table'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/showCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/showCategorie.html.twig"));

        $this->parent = $this->loadTemplate("admin/table.html.twig", "admin/categorie/showCategorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Catégories";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        // line 5
        echo "\tCatégories
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        // line 9
        echo "\t<h1 class=\"h2 pt-md-5 pb-md-3 text-center fw-bold\">Catégories</h1>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 11
            echo "\t\t<div class=\"col-md-6 mx-auto text-center alert alert-success\">";
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_linkAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAdd"));

        // line 16
        echo "
\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategorie.admin");
        echo "\" class=\"btn btn-primary\">Ajouter une catégorie</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 21
        echo "\t<thead>

\t\t<tr>
\t\t\t<th>Nom</th>
\t\t\t<th>Image</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 32
            echo "
\t\t\t<tr>
\t\t\t\t<td><b>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</b></td>
\t\t\t\t<td><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, $context["res"], "image", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" width=\"auto\" height=\"150\"></td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editCategorie.admin", ["id" => twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">modifier</a>
\t\t\t\t</td>
\t\t\t\t<td>
    \t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie.admin", ["id" => twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>

\t\t\t\t</td>

\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categorie/showCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 46,  208 => 40,  202 => 37,  197 => 35,  193 => 34,  189 => 32,  185 => 31,  173 => 21,  163 => 20,  151 => 17,  148 => 16,  138 => 15,  128 => 13,  119 => 11,  115 => 10,  112 => 9,  102 => 8,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/table.html.twig' %}
    {% block title %}Gestion Catégories{% endblock %}

{% block h1 %}
\tCatégories
{% endblock h1 %}

{% block card %}
\t<h1 class=\"h2 pt-md-5 pb-md-3 text-center fw-bold\">Catégories</h1>
\t{% for notification in app.flashes('success') %}
\t\t<div class=\"col-md-6 mx-auto text-center alert alert-success\">{{ notification }}</div>
\t{% endfor %}
\t{% endblock card %}

{% block linkAdd %}

\t<a href=\"{{ path(\"addCategorie.admin\") }}\" class=\"btn btn-primary\">Ajouter une catégorie</a>
{% endblock %}

{% block table %}
\t<thead>

\t\t<tr>
\t\t\t<th>Nom</th>
\t\t\t<th>Image</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for res in resultat %}

\t\t\t<tr>
\t\t\t\t<td><b>{{res.nom}}</b></td>
\t\t\t\t<td><img src=\"{{asset('upload/'~res.image)}}\" width=\"auto\" height=\"150\"></td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ path( 'editCategorie.admin', {'id': res.id} ) }}\" class=\"btn btn-warning\">modifier</a>
\t\t\t\t</td>
\t\t\t\t<td>
    \t\t\t<a href=\"{{ path( 'deleteCategorie.admin', {'id': res.id} ) }}\" class=\"btn btn-danger\">Supprimer</a>

\t\t\t\t</td>

\t\t\t</tr>
\t\t{% endfor %}


\t{% endblock table %}
", "admin/categorie/showCategorie.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\admin\\categorie\\showCategorie.html.twig");
    }
}

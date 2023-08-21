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

/* admin/agriculteur/ASupprimer.adminShow.html.twig */
class __TwigTemplate_4eed421ae05b297abb15006ee33adeef89c15eec950b3491a9723002c9d37a29 extends Template
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
            'linkAddBase' => [$this, 'block_linkAddBase'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/ASupprimer.adminShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/ASupprimer.adminShow.html.twig"));

        $this->parent = $this->loadTemplate("layout-admin.html.twig", "admin/agriculteur/ASupprimer.adminShow.html.twig", 1);
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

        echo "Agriculteur";
        
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
        echo "\tProfil: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 5, $this->source); })()), "Nom", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_linkAddBase($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAddBase"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAddBase"));

        // line 12
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allAgri.admin");
        echo "\">Retournerà la liste</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <table class=\"table\">
        <tbody>      
            <tr>
                <th>Nom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom du gerant</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 24, $this->source); })()), "NomDomaine", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
                <tr>
                <th>Categorie</th>
                  <td>
                ";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29))) {
            // line 30
            echo "                 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 30, $this->source); })()), "categorie", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 31
                echo "                \t";
                if (($context["cat"] == twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 31, $this->source); })()), "categorie", [], "any", false, false, false, 31)))) {
                    // line 32
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 32), "html", null, true);
                    echo "  

                \t\t\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 35), "html", null, true);
                    echo "  /
                                 ";
                }
                // line 37
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                 ";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\t\tPas de catégorie associé</td>
                 ";
        }
        // line 41
        echo "
                 </td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 50, $this->source); })()), "ville", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code postal</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 54, $this->source); })()), "codePostal", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptif</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 58, $this->source); })()), "descriptif", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Identifiant</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 62, $this->source); })()), "telPortable", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Disponible</th>
                <td>";
        // line 67
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 67, $this->source); })()), "disponible", [], "any", false, false, false, 67)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editAgri.admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\" class=\"btn btn-warning\" >Modifier</a>

    ";
        // line 77
        echo twig_include($this->env, $context, "agriculteur/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/agriculteur/ASupprimer.adminShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 77,  250 => 75,  243 => 71,  236 => 67,  228 => 62,  221 => 58,  214 => 54,  207 => 50,  200 => 46,  193 => 41,  189 => 39,  186 => 38,  180 => 37,  174 => 35,  167 => 32,  164 => 31,  159 => 30,  157 => 29,  149 => 24,  142 => 20,  136 => 16,  126 => 15,  113 => 12,  103 => 11,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-admin.html.twig' %}

{% block title %}Agriculteur{% endblock %}
{% block h1 %}
\tProfil: {{ agriculteur.Nom }}
{% endblock h1 %}




{% block linkAddBase %}
    <a href=\"{{ path('allAgri.admin') }}\">Retournerà la liste</a>
{% endblock %}

{% block content %}
    <table class=\"table\">
        <tbody>      
            <tr>
                <th>Nom</th>
                <td>{{ agriculteur.nom }}</td>
            </tr>
            <tr>
                <th>Nom du gerant</th>
                <td>{{ agriculteur.NomDomaine }}</td>
            </tr>
                <tr>
                <th>Categorie</th>
                  <td>
                {% if agriculteur.categorie is not empty %}
                 {% for cat in agriculteur.categorie %}
                \t{% if cat == agriculteur.categorie|last %}
                {{ cat.nom }}  

                \t\t\t\t\t\t\t\t\t{% else %}
                {{ cat.nom }}  /
                                 {% endif %}
                 {% endfor %}
                 {% else %}
\t\t\t\t\t\t\t\tPas de catégorie associé</td>
                 {% endif %}

                 </td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ agriculteur.adresse }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ agriculteur.ville }}</td>
            </tr>
            <tr>
                <th>Code postal</th>
                <td>{{ agriculteur.codePostal }}</td>
            </tr>
            <tr>
                <th>Descriptif</th>
                <td>{{ agriculteur.descriptif }}</td>
            </tr>
            <tr>
                <th>Identifiant</th>
                <td>{{ agriculteur.telPortable }}</td>
            </tr>

            <tr>
                <th>Disponible</th>
                <td>{{ agriculteur.disponible ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ agriculteur.email }}</td>
            </tr>
        </tbody>
    </table>
    <a href=\"{{ path('editAgri.admin', {'id': agriculteur.id}) }}\" class=\"btn btn-warning\" >Modifier</a>

    {{ include('agriculteur/_delete_form.html.twig') }}
{% endblock %}
", "admin/agriculteur/ASupprimer.adminShow.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\admin\\agriculteur\\ASupprimer.adminShow.html.twig");
    }
}

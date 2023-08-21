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

/* admin/agriculteur/agriculteurAttente.html.twig */
class __TwigTemplate_3ae84de22990cf02206bf1d07e91fbb4575f5e1f749ed009fd0dfcf34407ff0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'card' => [$this, 'block_card'],
            'linkAdd' => [$this, 'block_linkAdd'],
            'tableHeader' => [$this, 'block_tableHeader'],
            'table' => [$this, 'block_table'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "admin/table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/agriculteurAttente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/agriculteurAttente.html.twig"));

        $this->parent = $this->loadTemplate("admin/table.html.twig", "admin/agriculteur/agriculteurAttente.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration Producteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "<style>
    .card .notif {
        font-size: 17;
        font-weight: 600;
    }
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        // line 15
        echo "\t<h1 class=\"h2 pt-md-5 pb-md-3 text-center\">Producteurs 
    <span class=\"fw-bold\">
            ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17) == "unnabledAgri.admin")) {
            // line 18
            echo "            supprimés
        ";
        }
        // line 20
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "attAgri.admin")) {
            // line 21
            echo "    en attente de validation
        ";
        }
        // line 23
        echo "    </span></h1>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 25
            echo "<div class=\"col-md-6 mx-auto text-center alert alert-success\">";
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_linkAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAdd"));

        // line 30
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addAgri.admin");
        echo "\" class=\"btn btn-primary\">Enregistrer un nouveau producteur</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_tableHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeader"));

        // line 35
        echo "
            ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36) == "unnabledAgri.admin")) {
            // line 37
            echo "\t<div class=\"card-header bg-table-danger\">
\t\t<i class=\"fas fa-table me-1\"></i> Liste des producteurs supprimés
\t</div>
    ";
        }
        // line 41
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41) == "attAgri.admin")) {
            // line 42
            echo "\t<div class=\"card-header bg-table-warning\">
\t\t<i class=\"fas fa-table me-1\"></i> Liste des producteurs en attentes de validation
\t</div>
        ";
        }
        // line 46
        echo "        
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 51
        echo "
<thead>
    <tr>
        <th>Nom du domaine</th>
        <th>Photo</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Disponible</th>
        <th>Etat</th>
        <th>Action</th>

    </tr>
</thead>
<tbody>
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agriculteurs"]) || array_key_exists("agriculteurs", $context) ? $context["agriculteurs"] : (function () { throw new RuntimeError('Variable "agriculteurs" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["agriculteur"]) {
            // line 66
            echo "    <tr>
        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "NomDomaine", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, $context["agriculteur"], "photo", [], "any", false, false, false, 69)) {
                // line 70
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, $context["agriculteur"], "photo", [], "any", false, false, false, 70))), "thumbMedium"), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Photo de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "nom", [], "any", false, false, false, 70), "html", null, true);
                echo "\">
            ";
            } else {
                // line 72
                echo "            Le producteur n'a pas de photo.
            ";
            }
            // line 74
            echo "        </td>
        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "nom", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>


        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "email", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
        <td>";
            // line 79
            echo ((twig_get_attribute($this->env, $this->source, $context["agriculteur"], "disponible", [], "any", false, false, false, 79)) ? ("Oui") : ("Non"));
            echo "</td>
        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "etat", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>

        <td>
            ";
            // line 84
            echo "            ";
            // line 85
            echo "            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                Voir
            </button>
        </td>
        
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal";
            // line 91
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-xl\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Détail producteur</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, $context["agriculteur"], "photo", [], "any", false, false, false, 102)) {
                // line 103
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, $context["agriculteur"], "photo", [], "any", false, false, false, 103))), "thumbMedium"), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Photo de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "nom", [], "any", false, false, false, 103), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 105
                echo "                                        Le producteur n'a pas de photo
                                        ";
            }
            // line 107
            echo "                                    </div>
                                    <div class=\"col-md-3\">
                                        <p>Nom de l'établissement : <span class=\"fw-bolder\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "NomDomaine", [], "any", false, false, false, 109), "html", null, true);
            echo "</span> </br>
                                            Ville : <span class=\"fw-bolder\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "ville", [], "any", false, false, false, 110), "html", null, true);
            echo "</span></br>
                                            N° téléphone portable : <span class=\"fw-bolder\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "TelPortable", [], "any", false, false, false, 111), "html", null, true);
            echo "</span></br>
                                            Disponible : <span class=\"fw-bolder\">";
            // line 112
            echo ((twig_get_attribute($this->env, $this->source, $context["agriculteur"], "disponible", [], "any", false, false, false, 112)) ? ("Oui") : ("Non"));
            echo "</span></br>
                                            Email : <span class=\"fw-bolder\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "email", [], "any", false, false, false, 113), "html", null, true);
            echo "</span></br>
                                        </p>
                                    </div>

                                    <div class=\"col-md-3\">
                                        <p>Adresse : <span class=\"fw-bolder\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "adresse", [], "any", false, false, false, 118), "html", null, true);
            echo "</span> </br>
                                            Code postal : <span class=\"fw-bolder\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "CodePostal", [], "any", false, false, false, 119), "html", null, true);
            echo "</span></br>
                                            N° téléphone fixe : <span class=\"fw-bolder\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "TelFixe", [], "any", false, false, false, 120), "html", null, true);
            echo "</span></br>
                                            Etat : <span class=\"fw-bolder\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "etat", [], "any", false, false, false, 121), "html", null, true);
            echo "</span></br>
                                            Nom : <span class=\"fw-bolder\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "Nom", [], "any", false, false, false, 122), "html", null, true);
            echo "</span></br>
                                        </p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <p>
                                            Description : </br>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "descriptif", [], "any", false, false, false, 127), "html", null, true);
            echo "
                                        </p>

                                        <p>
                                            Catégorie :
                                            <span class=\"fw-bolder\">
                                                ";
            // line 133
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["agriculteur"], "categorie", [], "any", false, false, false, 133))) {
                // line 134
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["agriculteur"], "categorie", [], "any", false, false, false, 134));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 135
                    echo "                                                ";
                    if (($context["cat"] == twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "categorie", [], "any", false, false, false, 135)))) {
                        // line 136
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 136), "html", null, true);
                        echo "

                                                ";
                    } else {
                        // line 139
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 139), "html", null, true);
                        echo " /
                                                ";
                    }
                    // line 141
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "                                                ";
            } else {
                // line 143
                echo "                                                Pas de catégorie associée
        ";
            }
            // line 145
            echo "        </span>
        </p>
        </div>
        </div>
        </div>


                </div>
                    <div class=\"modal-footer\">
                        <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAgri.admin", ["id" => twig_get_attribute($this->env, $this->source, $context["agriculteur"], "id", [], "any", false, false, false, 154)]), "html", null, true);
            echo "\" class=\"btn btn-danger me-auto\">Supprimer</a>
                        <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editAgri.admin", ["id" => twig_get_attribute($this->env, $this->source, $context["agriculteur"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateEtat", ["id" => twig_get_attribute($this->env, $this->source, $context["agriculteur"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Valider</a>
                    </div>
                </div>
            </div>
        </div>


        ";
            // line 164
            echo "        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 167
            echo "    <tr>
        <td colspan=\"12\">Liste vide</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['agriculteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/agriculteur/agriculteurAttente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 171,  473 => 167,  466 => 164,  456 => 156,  452 => 155,  448 => 154,  437 => 145,  433 => 143,  430 => 142,  424 => 141,  418 => 139,  411 => 136,  408 => 135,  403 => 134,  401 => 133,  392 => 127,  384 => 122,  380 => 121,  376 => 120,  372 => 119,  368 => 118,  360 => 113,  356 => 112,  352 => 111,  348 => 110,  344 => 109,  340 => 107,  336 => 105,  328 => 103,  326 => 102,  312 => 91,  302 => 85,  300 => 84,  294 => 80,  290 => 79,  286 => 78,  280 => 75,  277 => 74,  273 => 72,  265 => 70,  263 => 69,  258 => 67,  255 => 66,  250 => 65,  234 => 51,  224 => 50,  213 => 46,  207 => 42,  204 => 41,  198 => 37,  196 => 36,  193 => 35,  183 => 34,  170 => 30,  160 => 29,  143 => 25,  139 => 24,  136 => 23,  132 => 21,  129 => 20,  125 => 18,  123 => 17,  119 => 15,  109 => 14,  92 => 6,  82 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'admin/table.html.twig' %}

{% block title %}Administration Producteur{% endblock %}
{% block style %}
<style>
    .card .notif {
        font-size: 17;
        font-weight: 600;
    }
</style>

{% endblock %}
{% block card %}
\t<h1 class=\"h2 pt-md-5 pb-md-3 text-center\">Producteurs 
    <span class=\"fw-bold\">
            {% if app.request.attributes.get('_route') == 'unnabledAgri.admin' %}
            supprimés
        {% endif %}
        {% if app.request.attributes.get('_route') == 'attAgri.admin' %}
    en attente de validation
        {% endif %}
    </span></h1>
{% for notification in app.flashes('success') %}
<div class=\"col-md-6 mx-auto text-center alert alert-success\">{{ notification }}</div>
{% endfor %}
{% endblock card %}

{% block linkAdd %}
<a href=\"{{ path(\"addAgri.admin\") }}\" class=\"btn btn-primary\">Enregistrer un nouveau producteur</a>
{% endblock %}


{% block tableHeader %}

            {% if app.request.attributes.get('_route') == 'unnabledAgri.admin' %}
\t<div class=\"card-header bg-table-danger\">
\t\t<i class=\"fas fa-table me-1\"></i> Liste des producteurs supprimés
\t</div>
    {% endif %}
        {% if app.request.attributes.get('_route') == 'attAgri.admin' %}
\t<div class=\"card-header bg-table-warning\">
\t\t<i class=\"fas fa-table me-1\"></i> Liste des producteurs en attentes de validation
\t</div>
        {% endif %}
        
\t{% endblock %}


{% block table %}

<thead>
    <tr>
        <th>Nom du domaine</th>
        <th>Photo</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Disponible</th>
        <th>Etat</th>
        <th>Action</th>

    </tr>
</thead>
<tbody>
    {% for key, agriculteur in agriculteurs %}
    <tr>
        <td>{{ agriculteur.NomDomaine }}</td>
        <td>
            {% if agriculteur.photo %}
            <img src=\"{{ asset('/upload/' ~ agriculteur.photo) | imagine_filter('thumbMedium') }}\" class=\"img-fluid\" alt=\"Photo de {{ agriculteur.nom }}\">
            {% else %}
            Le producteur n'a pas de photo.
            {% endif %}
        </td>
        <td>{{ agriculteur.nom }}</td>


        <td>{{ agriculteur.email }}</td>
        <td>{{ agriculteur.disponible ? 'Oui' : 'Non' }}</td>
        <td>{{ agriculteur.etat }}</td>

        <td>
            {# <a href=\"{{ path('showAgri.admin', {'id': agriculteur.id}) }}\">Tout voir</a> #}
            {# ----------Modal ------------ #}
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ key }}\">
                Voir
            </button>
        </td>
        
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal{{ key }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-xl\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Détail producteur</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        {% if agriculteur.photo %}
                                        <img src=\"{{ asset('/upload/' ~ agriculteur.photo) | imagine_filter('thumbMedium') }}\" class=\"img-fluid\" alt=\"Photo de {{ agriculteur.nom }}\">
                                        {% else %}
                                        Le producteur n'a pas de photo
                                        {% endif %}
                                    </div>
                                    <div class=\"col-md-3\">
                                        <p>Nom de l'établissement : <span class=\"fw-bolder\">{{ agriculteur.NomDomaine }}</span> </br>
                                            Ville : <span class=\"fw-bolder\">{{ agriculteur.ville }}</span></br>
                                            N° téléphone portable : <span class=\"fw-bolder\">{{ agriculteur.TelPortable }}</span></br>
                                            Disponible : <span class=\"fw-bolder\">{{ agriculteur.disponible ? 'Oui' : 'Non' }}</span></br>
                                            Email : <span class=\"fw-bolder\">{{ agriculteur.email }}</span></br>
                                        </p>
                                    </div>

                                    <div class=\"col-md-3\">
                                        <p>Adresse : <span class=\"fw-bolder\">{{ agriculteur.adresse }}</span> </br>
                                            Code postal : <span class=\"fw-bolder\">{{ agriculteur.CodePostal }}</span></br>
                                            N° téléphone fixe : <span class=\"fw-bolder\">{{ agriculteur.TelFixe }}</span></br>
                                            Etat : <span class=\"fw-bolder\">{{ agriculteur.etat }}</span></br>
                                            Nom : <span class=\"fw-bolder\">{{ agriculteur.Nom }}</span></br>
                                        </p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <p>
                                            Description : </br>{{ agriculteur.descriptif }}
                                        </p>

                                        <p>
                                            Catégorie :
                                            <span class=\"fw-bolder\">
                                                {% if agriculteur.categorie is not empty %}
                                                {% for cat in agriculteur.categorie %}
                                                {% if cat == agriculteur.categorie|last %}
                                                {{ cat.nom }}

                                                {% else %}
                                                {{ cat.nom }} /
                                                {% endif %}
                                                {% endfor %}
                                                {% else %}
                                                Pas de catégorie associée
        {% endif %}
        </span>
        </p>
        </div>
        </div>
        </div>


                </div>
                    <div class=\"modal-footer\">
                        <a href=\"{{ path('deleteAgri.admin', {'id': agriculteur.id}) }}\" class=\"btn btn-danger me-auto\">Supprimer</a>
                        <a href=\"{{ path('editAgri.admin', {'id': agriculteur.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                        <a href=\"{{ path('updateEtat', {'id': agriculteur.id}) }}\" class=\"btn btn-primary\">Valider</a>
                    </div>
                </div>
            </div>
        </div>


        {# -------------------------- #}
        </td>
    </tr>
    {% else %}
    <tr>
        <td colspan=\"12\">Liste vide</td>
    </tr>
    {% endfor %}

    {% endblock %}", "admin/agriculteur/agriculteurAttente.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\admin\\agriculteur\\agriculteurAttente.html.twig");
    }
}

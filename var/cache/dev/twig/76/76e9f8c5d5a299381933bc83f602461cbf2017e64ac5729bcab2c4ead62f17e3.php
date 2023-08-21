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

/* admin/agriculteur/agriculteurAll.html.twig */
class __TwigTemplate_522fce3710a8c7aeaf746021f74cd2337d169017db3834b9ec537e073e612436 extends Template
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
            'contentfooter' => [$this, 'block_contentfooter'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/agriculteurAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/agriculteurAll.html.twig"));

        $this->parent = $this->loadTemplate("admin/table.html.twig", "admin/agriculteur/agriculteurAll.html.twig", 1);
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

        echo "Gestion Agriculteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 5
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
        echo "\t<h1 class=\"h2 pb-md-3 text-center fw-bold\">Producteurs</h1>

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 18
            echo "<div class=\"col-md-6 mx-auto text-center alert alert-success\">";
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        if (((isset($context["nb_att"]) || array_key_exists("nb_att", $context) ? $context["nb_att"] : (function () { throw new RuntimeError('Variable "nb_att" does not exist.', 21, $this->source); })()) > 0)) {
            // line 22
            echo "<div class=\"row mt-5\">

    <div class=\"col-xl-4 col-md-6\">
        <div class=\"card bg-warning text-white mb-4\">
            <div class=\"card-body notif\">Vous avez des producteurs qui vous attendent ! (";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["nb_att"]) || array_key_exists("nb_att", $context) ? $context["nb_att"] : (function () { throw new RuntimeError('Variable "nb_att" does not exist.', 26, $this->source); })()), "html", null, true);
            echo ")</div>
            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                <a class=\"small text-white stretched-link\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attAgri.admin");
            echo "\">Voir la liste</a>
                <div class=\"small text-white\">
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_linkAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAdd"));

        // line 40
        echo "
<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addAgri.admin");
        echo "\" class=\"btn btn-primary\">Ajouter un nouveau producteur</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_tableHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeader"));

        // line 45
        echo "\t<div class=\"card-header\">
\t\t<i class=\"fas fa-table me-1\"></i> Liste des producteurs
\t</div>
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
                        <button type=\"button\" class=\"btn btn-dark me-auto\" data-bs-dismiss=\"modal\">Fermer</button>
                        <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAgri.admin", ["id" => twig_get_attribute($this->env, $this->source, $context["agriculteur"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                        <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editAgri.admin", ["id" => twig_get_attribute($this->env, $this->source, $context["agriculteur"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
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
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_contentfooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfooter"));

        // line 174
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unnabledAgri.admin");
        echo "\" class=\"link\">Liste des producteurs supprimés</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/agriculteur/agriculteurAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 174,  486 => 173,  476 => 171,  467 => 167,  460 => 164,  450 => 156,  446 => 155,  434 => 145,  430 => 143,  427 => 142,  421 => 141,  415 => 139,  408 => 136,  405 => 135,  400 => 134,  398 => 133,  389 => 127,  381 => 122,  377 => 121,  373 => 120,  369 => 119,  365 => 118,  357 => 113,  353 => 112,  349 => 111,  345 => 110,  341 => 109,  337 => 107,  333 => 105,  325 => 103,  323 => 102,  309 => 91,  299 => 85,  297 => 84,  291 => 80,  287 => 79,  283 => 78,  277 => 75,  274 => 74,  270 => 72,  262 => 70,  260 => 69,  255 => 67,  252 => 66,  247 => 65,  231 => 51,  221 => 50,  208 => 45,  198 => 44,  186 => 41,  183 => 40,  173 => 39,  153 => 28,  148 => 26,  142 => 22,  140 => 21,  137 => 20,  128 => 18,  124 => 17,  120 => 15,  110 => 14,  93 => 5,  83 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/table.html.twig' %}

{% block title %}Gestion Agriculteur{% endblock %}
{% block style %}
<style>
    .card .notif {
        font-size: 17;
        font-weight: 600;
    }
</style>

{% endblock %}

{% block card %}
\t<h1 class=\"h2 pb-md-3 text-center fw-bold\">Producteurs</h1>

{% for notification in app.flashes('success') %}
<div class=\"col-md-6 mx-auto text-center alert alert-success\">{{ notification }}</div>
{% endfor %}

{% if nb_att > 0 %}
<div class=\"row mt-5\">

    <div class=\"col-xl-4 col-md-6\">
        <div class=\"card bg-warning text-white mb-4\">
            <div class=\"card-body notif\">Vous avez des producteurs qui vous attendent ! ({{ nb_att }})</div>
            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                <a class=\"small text-white stretched-link\" href=\"{{ path(\"attAgri.admin\") }}\">Voir la liste</a>
                <div class=\"small text-white\">
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock card %}

{% block linkAdd %}

<a href=\"{{ path(\"addAgri.admin\") }}\" class=\"btn btn-primary\">Ajouter un nouveau producteur</a>
{% endblock %}

{% block tableHeader %}
\t<div class=\"card-header\">
\t\t<i class=\"fas fa-table me-1\"></i> Liste des producteurs
\t</div>
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
                        <button type=\"button\" class=\"btn btn-dark me-auto\" data-bs-dismiss=\"modal\">Fermer</button>
                        <a href=\"{{ path('deleteAgri.admin', {'id': agriculteur.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                        <a href=\"{{ path('editAgri.admin', {'id': agriculteur.id}) }}\" class=\"btn btn-primary\">Modifier</a>
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
    {% endblock %}

    {% block contentfooter %}
<a href=\"{{ path(\"unnabledAgri.admin\") }}\" class=\"link\">Liste des producteurs supprimés</a>
{% endblock %}
", "admin/agriculteur/agriculteurAll.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\admin\\agriculteur\\agriculteurAll.html.twig");
    }
}

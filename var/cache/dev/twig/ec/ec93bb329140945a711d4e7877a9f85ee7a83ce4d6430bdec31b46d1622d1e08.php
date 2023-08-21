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

/* agriculteur/index.html.twig */
class __TwigTemplate_5214cc3de63a47092a64ffca79fdfcbb39532681f6424742c516a460368d5af6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'title' => [$this, 'block_title'],
            'navbarPageHome' => [$this, 'block_navbarPageHome'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout-agri.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/index.html.twig"));

        $this->parent = $this->loadTemplate("layout-agri.html.twig", "agriculteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "\t<style>
\t\tdiv.main {
\t\t\theight: auto !important;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les Locavores - Bienvenue 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_navbarPageHome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageHome"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageHome"));

        // line 14
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_index");
        echo "\" class=\"nav-link py-2 \" aria-current=\"page\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<section class=\"bgimage banner banner-radius shadow\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>La vitrine de vos produits locaux.</h1>
                    <p>Profitez de l'espace producteur pour mettre en avant la <strong>qualité de vos produits et séduire les consommateurs 
\t\t\t\t\t</strong> en quête de produits sains et naturels.
                    </p>
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn1\">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
";
        // line 34
        echo "\t<main class=\"container\">
\t\t<div class=\"\">
\t\t\t<div class=\"presentation row\">
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mx-auto alert-dismissible fade show alert alert-success\" role=\"alert\">
                    ";
            // line 39
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
                    </button>
                    </div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "disponible", [], "any", false, false, false, 44), false))) {
            // line 45
            echo "\t\t\t\t\t\t\t\t<div class=\"col-md-6 mx-auto text-center alert alert-warning d-flex\"  role=\"alert\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\tAttention <strong>vous êtes indisponible</strong>, rendez vous dans votre 
\t\t\t\t\t\t\t\t\t<br> espace magasin pour passer en mode disponible
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 53
        echo "

\t\t\t</div>

\t\t</div>

\t\t";
        // line 60
        echo "
\t\t<!--  PART WITH STICKY -->
\t\t<section class=\"sticky-element row\">
\t\t\t<aside class=\"col-lg-5 col-sm-12\">
\t\t\t\t<div class=\"sticky-div\">

\t\t\t\t\t<h2 class=\"\">Valorisez vos produits locaux dès maintenant</h2>
                    <p>Nous voulons que les que Les producteurs locaux puisses vendre directement leurs produits aux consommateurs sans avoir à passer par un distributeur 
            et pouvoirs <strong>fixés le prix de vente de ses produits librement</strong>, tandis que les consommateurs pourront
             <strong>savoir ce qu'il y a exactement dans leurs assiettes</strong> tout en participant au commerce local.</p>

\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_profil");
        echo "\" class=\"btn btn1\">Voir mon magasin</a>
\t\t\t\t\t<lottie-player src=\"https://assets1.lottiefiles.com/packages/lf20_fzq71t74.json\" background=\"transparent\" speed=\"0.75\" style=\"width: 300px; height: 300px;\" autoplay></lottie-player>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<div class=\"col-lg-7 col-sm-12 scrolling\">
\t\t\t\t<div class=\"card block-process\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4>Comment ça marche ?</h4>

\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">
\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M278.767,145.419c-3.126-4.003-7.276-6.006-12.451-6.006c-4.591,0-7.716,0.879-9.375,2.637
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-1.662,1.758-5.226,6.445-10.693,14.063c-5.47,7.617-11.744,14.502-18.823,20.654c-7.082,6.152-16.53,12.012-28.345,17.578
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-7.91,3.712-13.429,6.738-16.553,9.082c-3.126,2.344-4.688,6.006-4.688,10.986c0,4.298,1.586,8.082,4.761,11.353
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.172,3.273,6.812,4.907,10.913,4.907c8.592,0,25.292-9.521,50.098-28.564V335.41c0,7.814,1.806,13.722,5.42,17.725
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.612,4.003,8.397,6.006,14.355,6.006c13.378,0,20.068-9.814,20.068-29.443V161.972
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC283.455,154.941,281.892,149.425,278.767,145.419z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Je m'inscris sur le site</h5>
\t\t\t\t\t\t\t\t<p>Je crée un compte producteur sur le site en remplissant les informations demandées.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 101
        echo "\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">
\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M319.783,325.595c-4.005-3.124-9.814-4.688-17.432-4.688h-76.465c2.44-3.71,4.834-6.885,7.178-9.521
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc5.468-6.64,15.55-15.967,30.249-27.979c14.696-12.012,25.17-20.824,31.421-26.44c6.249-5.614,12.378-13.378,18.384-23.291
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc6.006-9.911,9.009-20.922,9.009-33.032c0-7.713-1.442-15.161-4.321-22.339c-2.882-7.178-6.91-13.5-12.085-18.97
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-5.177-5.468-11.183-9.764-18.018-12.891c-10.547-4.688-23.291-7.031-38.232-7.031c-12.403,0-23.218,1.831-32.446,5.493
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ts-16.846,8.473-22.852,14.429c-6.006,5.958-10.524,12.598-13.55,19.922c-3.028,7.324-4.541,14.355-4.541,21.094
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,5.566,1.611,9.961,4.834,13.184s7.274,4.834,12.158,4.834c5.566,0,9.789-1.758,12.671-5.273
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc2.879-3.516,5.468-8.544,7.764-15.088c2.293-6.542,3.93-10.547,4.907-12.012c7.324-11.229,17.381-16.846,30.176-16.846
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc6.054,0,11.646,1.369,16.772,4.102c5.127,2.735,9.178,6.569,12.158,11.499c2.978,4.933,4.468,10.524,4.468,16.772
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,5.763-1.392,11.646-4.175,17.651s-6.837,11.865-12.158,17.578c-5.324,5.713-11.989,11.403-19.995,17.065
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-4.493,3.028-11.964,9.352-22.412,18.97c-10.451,9.62-22.169,21.167-35.156,34.644c-3.126,3.321-6.006,7.887-8.643,13.696
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-2.637,5.812-3.955,10.474-3.955,13.989c0,5.47,2.051,10.231,6.152,14.282c4.102,4.054,9.814,6.079,17.139,6.079H306.6
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc6.445,0,11.254-1.659,14.429-4.98c3.172-3.319,4.761-7.372,4.761-12.158C325.789,332.97,323.786,328.722,319.783,325.595z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Je complète ma boutique</h5>
\t\t\t\t\t\t\t\t<p>Je peux ajouter mes produits, décrire leur provenance et leur mode de production, ajouter des photos pour les rendre plus attrayants.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 129
        echo "\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">
\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M319.637,269.711c-2.637-6.395-6.569-12.231-11.792-17.505c-5.226-5.273-11.646-9.961-19.263-14.063
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc7.91-6.64,13.989-13.451,18.237-20.435c4.248-6.981,6.372-15.355,6.372-25.122c0-7.42-1.465-14.355-4.395-20.801
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ts-7.276-12.108-13.037-16.992c-5.763-4.882-12.55-8.617-20.361-11.206c-7.814-2.586-16.457-3.882-25.928-3.882
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-10.84,0-20.654,1.538-29.443,4.614s-16.139,7.155-22.046,12.231c-5.91,5.079-10.4,10.426-13.477,16.04
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-3.076,5.617-4.614,10.963-4.614,16.04c0,5.273,1.634,9.499,4.907,12.671c3.271,3.175,6.859,4.761,10.767,4.761
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.319,0,6.249-0.586,8.789-1.758c2.538-1.172,4.296-2.783,5.273-4.834c1.659-3.809,3.49-7.86,5.493-12.158
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc2-4.296,4.125-7.812,6.372-10.547c2.245-2.733,5.296-4.93,9.155-6.592c3.856-1.659,8.764-2.49,14.722-2.49
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc8.789,0,15.77,2.71,20.947,8.13c5.175,5.42,7.764,11.891,7.764,19.409c0,9.865-3.248,17.432-9.741,22.705
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-6.496,5.273-14.234,7.91-23.218,7.91h-6.006c-6.935,0-12.158,1.442-15.674,4.321c-3.516,2.882-5.273,6.665-5.273,11.353
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,4.786,1.465,8.521,4.395,11.206c2.93,2.687,7.079,4.028,12.451,4.028c1.172,0,3.809-0.194,7.91-0.586
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc4.102-0.389,7.127-0.586,9.082-0.586c11.133,0,19.823,3.248,26.074,9.741c6.249,6.496,9.375,15.454,9.375,26.88
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,7.716-1.831,14.502-5.493,20.361s-8.302,10.279-13.916,13.257c-5.617,2.98-11.451,4.468-17.505,4.468
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-10.547,0-18.727-3.296-24.536-9.888c-5.812-6.592-11.256-16.674-16.333-30.249c-0.783-2.245-2.442-4.175-4.98-5.786
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-2.541-1.611-5.177-2.417-7.91-2.417c-5.47,0-10.034,1.735-13.696,5.2c-3.662,3.468-5.493,8.034-5.493,13.696
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,4.395,1.538,9.961,4.614,16.699s7.617,13.257,13.623,19.556s13.646,11.549,22.925,15.747c9.276,4.198,19.775,6.299,31.494,6.299
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc11.522,0,22.046-1.831,31.567-5.493s17.748-8.739,24.683-15.234c6.933-6.493,12.181-13.891,15.747-22.192
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.563-8.299,5.347-16.894,5.347-25.781C323.592,283.018,322.273,276.109,319.637,269.711z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Les consommateurs consultent ma boutique</h5>
\t\t\t\t\t\t\t\t<p>Les consommateurs peuvent consulter ma boutique en ligne et commander mes produits s'ils le souhaitent. Ils peuvent également me contacter pour toute question ou demande particulière.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 161
        echo "\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">

\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M324.983,279.892c-4.541-2.051-10.572-3.076-18.091-3.076h-6.299V163.437
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0-16.992-7.423-25.488-22.266-25.488c-4.591,0-8.521,1.538-11.792,4.614c-3.273,3.076-7.448,8.034-12.524,14.868l-77.637,103.857
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-2.149,2.833-3.955,5.226-5.42,7.178c-1.465,1.955-2.882,3.98-4.248,6.079c-1.369,2.101-2.394,4.102-3.076,6.006
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-0.685,1.904-1.025,3.786-1.025,5.64c0,7.228,2.318,12.941,6.958,17.139c4.637,4.2,11.595,6.299,20.874,6.299h73.535v27.246
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,7.324,1.685,12.868,5.054,16.626s7.787,5.64,13.257,5.64c5.566,0,10.009-1.831,13.33-5.493c3.319-3.662,4.98-9.251,4.98-16.772
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tV309.63h8.936c7.42,0,12.987-1.293,16.699-3.882c3.71-2.586,5.566-6.713,5.566-12.378
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC331.795,286.436,329.524,281.943,324.983,279.892z M263.973,276.816h-62.988l62.988-85.107V276.816z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Je reçois les clients</h5>
\t\t\t\t\t\t\t\t<p>Les clients intéressés par mes produits peuvent me contacter directement pour venir me rencontrer et acheter mes produits en personne. Je peux ainsi leur faire découvrir mes produits et leur expliquer ma méthode de production.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 184
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card block-advantage\">

\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t<h4>Les avantages chez les locavores</h4>
\t\t\t\t\t\t<div class=\"item pe-4\">

\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-droplet-half\"></i>
\t\t\t\t\t\t\t\tEcologique
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p>Vendez vos produits locaux en limitant les émissions de CO2 liées au transport.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item ps-4\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat-dots\"></i>Interactif</h5>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tRencontrez les consommateurs, partagez votre savoir-faire et faites connaître votre métier.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item pe-4\">

\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-shop\"></i>Visibilité</h5>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAvec notre plateforme en ligne, vous pouvez augmenter votre visibilité auprès des consommateurs locaux et attirer de nouveaux clients.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item ps-4\">

\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-piggy-bank\"></i>
\t\t\t\t\t\t\t\tEquitable</h5>
\t\t\t\t\t\t\t<p>Fixez le prix juste de votre production et valorisez votre travail en toute liberté et sans commission.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"card block-faq\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Question fréquentes</h4>
\t\t\t\t\t\t";
        // line 230
        echo "\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\tCombien coûte l'inscription sur le site ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\t<strong></strong>
\t\t\t\t\t\t\t\t\t\tVeuilliez vous rapprocher de l'administrateur pour avoir plus d'informations.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t\t\t\tQu'est ce que je peux mettre dans ma description ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
                                    Vous êtes libre de mettre ce que vous pensez pertinent, néanmoins nous vous conseillons d'expliquer aux clients vos spécialités et votre savoir-faire, vous pouvez aussi parler de l'histoire de votre enseigne. 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\t\t\tA quoi sert le site ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\tLe site a pour but de mettre en relation les producteurs locaux avec les consommateurs pour leur permettre de vendre leurs produits directement sans passer par un distributeur et ainsi favoriser le commerce local et les circuits courts.\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingFour\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\t\t\t\t\tEst-ce que je peux m'inscrire dans plusieurs catégories ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\tVous pouvez ajouter une ou plusieurs catégories à tout moment dans votre espace magasin si vous avez des produits qui peuvent correspondre à ces catégories.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 283
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>
\t</main>

\t<!--  FIN PART WITH STICKY -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 293
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 294
        echo "\t<script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agriculteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 294,  452 => 293,  434 => 283,  380 => 230,  333 => 184,  309 => 161,  276 => 129,  247 => 101,  215 => 71,  202 => 60,  194 => 53,  184 => 45,  181 => 44,  170 => 39,  167 => 38,  163 => 37,  158 => 34,  150 => 28,  140 => 20,  130 => 18,  117 => 14,  107 => 13,  87 => 9,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-agri.html.twig' %}
{% block style %}
\t<style>
\t\tdiv.main {
\t\t\theight: auto !important;
\t\t}
\t</style>
{% endblock %}
{% block title %}Les Locavores - Bienvenue 
{% endblock %}

{# je met la page accueil comme active pour la naviguation #}
{% block navbarPageHome %}
\t<a href=\"{{ path('agriculteur_index') }}\" class=\"nav-link py-2 \" aria-current=\"page\">
{% endblock %}


{% block body %}
{# BANNIERE Container #}
<section class=\"bgimage banner banner-radius shadow\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>La vitrine de vos produits locaux.</h1>
                    <p>Profitez de l'espace producteur pour mettre en avant la <strong>qualité de vos produits et séduire les consommateurs 
\t\t\t\t\t</strong> en quête de produits sains et naturels.
                    </p>
                    <a href=\"{{ path('contact') }}\" class=\"btn btn1\">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
{# FIN BANNIERE #}
\t<main class=\"container\">
\t\t<div class=\"\">
\t\t\t<div class=\"presentation row\">
\t\t\t\t{% for notification in app.flashes('success') %}
\t\t\t\t\t\t\t\t\t\t<div class=\"mx-auto alert-dismissible fade show alert alert-success\" role=\"alert\">
                    {{ notification }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
                    </button>
                    </div>
\t\t\t\t{% endfor %}
\t\t\t\t{% if app.user.disponible == false %}
\t\t\t\t\t\t\t\t<div class=\"col-md-6 mx-auto text-center alert alert-warning d-flex\"  role=\"alert\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\tAttention <strong>vous êtes indisponible</strong>, rendez vous dans votre 
\t\t\t\t\t\t\t\t\t<br> espace magasin pour passer en mode disponible
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t{% endif %}


\t\t\t</div>

\t\t</div>

\t\t{# -------------2 -------- #}

\t\t<!--  PART WITH STICKY -->
\t\t<section class=\"sticky-element row\">
\t\t\t<aside class=\"col-lg-5 col-sm-12\">
\t\t\t\t<div class=\"sticky-div\">

\t\t\t\t\t<h2 class=\"\">Valorisez vos produits locaux dès maintenant</h2>
                    <p>Nous voulons que les que Les producteurs locaux puisses vendre directement leurs produits aux consommateurs sans avoir à passer par un distributeur 
            et pouvoirs <strong>fixés le prix de vente de ses produits librement</strong>, tandis que les consommateurs pourront
             <strong>savoir ce qu'il y a exactement dans leurs assiettes</strong> tout en participant au commerce local.</p>

\t\t\t\t\t<a href=\"{{ path('agriculteur_profil') }}\" class=\"btn btn1\">Voir mon magasin</a>
\t\t\t\t\t<lottie-player src=\"https://assets1.lottiefiles.com/packages/lf20_fzq71t74.json\" background=\"transparent\" speed=\"0.75\" style=\"width: 300px; height: 300px;\" autoplay></lottie-player>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<div class=\"col-lg-7 col-sm-12 scrolling\">
\t\t\t\t<div class=\"card block-process\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4>Comment ça marche ?</h4>

\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">
\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M278.767,145.419c-3.126-4.003-7.276-6.006-12.451-6.006c-4.591,0-7.716,0.879-9.375,2.637
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-1.662,1.758-5.226,6.445-10.693,14.063c-5.47,7.617-11.744,14.502-18.823,20.654c-7.082,6.152-16.53,12.012-28.345,17.578
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-7.91,3.712-13.429,6.738-16.553,9.082c-3.126,2.344-4.688,6.006-4.688,10.986c0,4.298,1.586,8.082,4.761,11.353
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.172,3.273,6.812,4.907,10.913,4.907c8.592,0,25.292-9.521,50.098-28.564V335.41c0,7.814,1.806,13.722,5.42,17.725
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.612,4.003,8.397,6.006,14.355,6.006c13.378,0,20.068-9.814,20.068-29.443V161.972
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC283.455,154.941,281.892,149.425,278.767,145.419z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Je m'inscris sur le site</h5>
\t\t\t\t\t\t\t\t<p>Je crée un compte producteur sur le site en remplissant les informations demandées.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# ligne 2 #}
\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">
\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M319.783,325.595c-4.005-3.124-9.814-4.688-17.432-4.688h-76.465c2.44-3.71,4.834-6.885,7.178-9.521
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc5.468-6.64,15.55-15.967,30.249-27.979c14.696-12.012,25.17-20.824,31.421-26.44c6.249-5.614,12.378-13.378,18.384-23.291
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc6.006-9.911,9.009-20.922,9.009-33.032c0-7.713-1.442-15.161-4.321-22.339c-2.882-7.178-6.91-13.5-12.085-18.97
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-5.177-5.468-11.183-9.764-18.018-12.891c-10.547-4.688-23.291-7.031-38.232-7.031c-12.403,0-23.218,1.831-32.446,5.493
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ts-16.846,8.473-22.852,14.429c-6.006,5.958-10.524,12.598-13.55,19.922c-3.028,7.324-4.541,14.355-4.541,21.094
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,5.566,1.611,9.961,4.834,13.184s7.274,4.834,12.158,4.834c5.566,0,9.789-1.758,12.671-5.273
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc2.879-3.516,5.468-8.544,7.764-15.088c2.293-6.542,3.93-10.547,4.907-12.012c7.324-11.229,17.381-16.846,30.176-16.846
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc6.054,0,11.646,1.369,16.772,4.102c5.127,2.735,9.178,6.569,12.158,11.499c2.978,4.933,4.468,10.524,4.468,16.772
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,5.763-1.392,11.646-4.175,17.651s-6.837,11.865-12.158,17.578c-5.324,5.713-11.989,11.403-19.995,17.065
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-4.493,3.028-11.964,9.352-22.412,18.97c-10.451,9.62-22.169,21.167-35.156,34.644c-3.126,3.321-6.006,7.887-8.643,13.696
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-2.637,5.812-3.955,10.474-3.955,13.989c0,5.47,2.051,10.231,6.152,14.282c4.102,4.054,9.814,6.079,17.139,6.079H306.6
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc6.445,0,11.254-1.659,14.429-4.98c3.172-3.319,4.761-7.372,4.761-12.158C325.789,332.97,323.786,328.722,319.783,325.595z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Je complète ma boutique</h5>
\t\t\t\t\t\t\t\t<p>Je peux ajouter mes produits, décrire leur provenance et leur mode de production, ajouter des photos pour les rendre plus attrayants.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# ligne 3 #}
\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">
\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M319.637,269.711c-2.637-6.395-6.569-12.231-11.792-17.505c-5.226-5.273-11.646-9.961-19.263-14.063
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc7.91-6.64,13.989-13.451,18.237-20.435c4.248-6.981,6.372-15.355,6.372-25.122c0-7.42-1.465-14.355-4.395-20.801
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ts-7.276-12.108-13.037-16.992c-5.763-4.882-12.55-8.617-20.361-11.206c-7.814-2.586-16.457-3.882-25.928-3.882
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-10.84,0-20.654,1.538-29.443,4.614s-16.139,7.155-22.046,12.231c-5.91,5.079-10.4,10.426-13.477,16.04
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-3.076,5.617-4.614,10.963-4.614,16.04c0,5.273,1.634,9.499,4.907,12.671c3.271,3.175,6.859,4.761,10.767,4.761
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.319,0,6.249-0.586,8.789-1.758c2.538-1.172,4.296-2.783,5.273-4.834c1.659-3.809,3.49-7.86,5.493-12.158
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc2-4.296,4.125-7.812,6.372-10.547c2.245-2.733,5.296-4.93,9.155-6.592c3.856-1.659,8.764-2.49,14.722-2.49
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc8.789,0,15.77,2.71,20.947,8.13c5.175,5.42,7.764,11.891,7.764,19.409c0,9.865-3.248,17.432-9.741,22.705
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-6.496,5.273-14.234,7.91-23.218,7.91h-6.006c-6.935,0-12.158,1.442-15.674,4.321c-3.516,2.882-5.273,6.665-5.273,11.353
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,4.786,1.465,8.521,4.395,11.206c2.93,2.687,7.079,4.028,12.451,4.028c1.172,0,3.809-0.194,7.91-0.586
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc4.102-0.389,7.127-0.586,9.082-0.586c11.133,0,19.823,3.248,26.074,9.741c6.249,6.496,9.375,15.454,9.375,26.88
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,7.716-1.831,14.502-5.493,20.361s-8.302,10.279-13.916,13.257c-5.617,2.98-11.451,4.468-17.505,4.468
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-10.547,0-18.727-3.296-24.536-9.888c-5.812-6.592-11.256-16.674-16.333-30.249c-0.783-2.245-2.442-4.175-4.98-5.786
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-2.541-1.611-5.177-2.417-7.91-2.417c-5.47,0-10.034,1.735-13.696,5.2c-3.662,3.468-5.493,8.034-5.493,13.696
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,4.395,1.538,9.961,4.614,16.699s7.617,13.257,13.623,19.556s13.646,11.549,22.925,15.747c9.276,4.198,19.775,6.299,31.494,6.299
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc11.522,0,22.046-1.831,31.567-5.493s17.748-8.739,24.683-15.234c6.933-6.493,12.181-13.891,15.747-22.192
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc3.563-8.299,5.347-16.894,5.347-25.781C323.592,283.018,322.273,276.109,319.637,269.711z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Les consommateurs consultent ma boutique</h5>
\t\t\t\t\t\t\t\t<p>Les consommateurs peuvent consulter ma boutique en ligne et commander mes produits s'ils le souhaitent. Ils peuvent également me contacter pour toute question ou demande particulière.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# ligne 4 #}
\t\t\t\t\t\t<div class=\"ligne d-flex my-4\">

\t\t\t\t\t\t\t<div class=\"number pe-4\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewbox=\"0 0 496.158 496.158\" style=\"enable-background:new 0 0 496.158 496.158;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path style=\"fill:hsl(13, 44%, 21%);\" d=\"M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z\"/>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#FFFFFF;\" d=\"M324.983,279.892c-4.541-2.051-10.572-3.076-18.091-3.076h-6.299V163.437
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0-16.992-7.423-25.488-22.266-25.488c-4.591,0-8.521,1.538-11.792,4.614c-3.273,3.076-7.448,8.034-12.524,14.868l-77.637,103.857
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-2.149,2.833-3.955,5.226-5.42,7.178c-1.465,1.955-2.882,3.98-4.248,6.079c-1.369,2.101-2.394,4.102-3.076,6.006
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc-0.685,1.904-1.025,3.786-1.025,5.64c0,7.228,2.318,12.941,6.958,17.139c4.637,4.2,11.595,6.299,20.874,6.299h73.535v27.246
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc0,7.324,1.685,12.868,5.054,16.626s7.787,5.64,13.257,5.64c5.566,0,10.009-1.831,13.33-5.493c3.319-3.662,4.98-9.251,4.98-16.772
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tV309.63h8.936c7.42,0,12.987-1.293,16.699-3.882c3.71-2.586,5.566-6.713,5.566-12.378
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC331.795,286.436,329.524,281.943,324.983,279.892z M263.973,276.816h-62.988l62.988-85.107V276.816z\"/>
\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Je reçois les clients</h5>
\t\t\t\t\t\t\t\t<p>Les clients intéressés par mes produits peuvent me contacter directement pour venir me rencontrer et acheter mes produits en personne. Je peux ainsi leur faire découvrir mes produits et leur expliquer ma méthode de production.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{#  #}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card block-advantage\">

\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t<h4>Les avantages chez les locavores</h4>
\t\t\t\t\t\t<div class=\"item pe-4\">

\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-droplet-half\"></i>
\t\t\t\t\t\t\t\tEcologique
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p>Vendez vos produits locaux en limitant les émissions de CO2 liées au transport.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item ps-4\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat-dots\"></i>Interactif</h5>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tRencontrez les consommateurs, partagez votre savoir-faire et faites connaître votre métier.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item pe-4\">

\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-shop\"></i>Visibilité</h5>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAvec notre plateforme en ligne, vous pouvez augmenter votre visibilité auprès des consommateurs locaux et attirer de nouveaux clients.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item ps-4\">

\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<i class=\"bi bi-piggy-bank\"></i>
\t\t\t\t\t\t\t\tEquitable</h5>
\t\t\t\t\t\t\t<p>Fixez le prix juste de votre production et valorisez votre travail en toute liberté et sans commission.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"card block-faq\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Question fréquentes</h4>
\t\t\t\t\t\t{# accordeon #}
\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\tCombien coûte l'inscription sur le site ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\t<strong></strong>
\t\t\t\t\t\t\t\t\t\tVeuilliez vous rapprocher de l'administrateur pour avoir plus d'informations.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t\t\t\tQu'est ce que je peux mettre dans ma description ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
                                    Vous êtes libre de mettre ce que vous pensez pertinent, néanmoins nous vous conseillons d'expliquer aux clients vos spécialités et votre savoir-faire, vous pouvez aussi parler de l'histoire de votre enseigne. 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\t\t\tA quoi sert le site ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\tLe site a pour but de mettre en relation les producteurs locaux avec les consommateurs pour leur permettre de vendre leurs produits directement sans passer par un distributeur et ainsi favoriser le commerce local et les circuits courts.\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<h5 class=\"accordion-header\" id=\"headingFour\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\t\t\t\t\tEst-ce que je peux m'inscrire dans plusieurs catégories ?
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\tVous pouvez ajouter une ou plusieurs catégories à tout moment dans votre espace magasin si vous avez des produits qui peuvent correspondre à ces catégories.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# accordeon fin #}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>
\t</main>

\t<!--  FIN PART WITH STICKY -->
{% endblock %}

{% block js %}
\t<script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
{% endblock %}
", "agriculteur/index.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\agriculteur\\index.html.twig");
    }
}

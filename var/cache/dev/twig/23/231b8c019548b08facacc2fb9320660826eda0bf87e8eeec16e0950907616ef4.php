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

/* visiteur/listAgriByCategorie.html.twig */
class __TwigTemplate_b51ab50a6b059a3054817192d812f2b38f636996bea6cb596d525c1d273d077e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metaDescr' => [$this, 'block_metaDescr'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/listAgriByCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/listAgriByCategorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/listAgriByCategorie.html.twig", 1);
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

        // line 4
        echo "Les producteurs de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo " -
";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_metaDescr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        // line 9
        echo "\t\t<meta name=\"description\" content=\"Découvrez les producteurse de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo " de vos région, parce que chaque producteur est différent renseignez vous sur ceux qui vous correspondent le plus.\">
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        if ((isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "<section class=\"bgimage banner banner-epi shadow container mt-5\" style=\"background-image: linear-gradient( rgba(0, 0, 0, 0.68) 100%, rgba(0, 0, 0, 0.68)100%),
      url('";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15))), "html", null, true);
            echo "') !important;\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>
\t\t\t\t\t";
            // line 21
            echo "
\t\t\t\t\t<nav class=\"d-flex justify-content-center\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a class=\"link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Accueil</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</li>
  </ol>
</nav>
\t\t\t\t\t";
            // line 29
            echo "                </div>
            </div>
        </div>
    </section>
";
        }
        // line 34
        echo "

<main class=\"container mt-5\">

";
        // line 38
        if (twig_test_empty((isset($context["agriculteurs"]) || array_key_exists("agriculteurs", $context) ? $context["agriculteurs"] : (function () { throw new RuntimeError('Variable "agriculteurs" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "<div class=\"py-5 mb-4\">
<h4 class=\"pt-3 pb-5 text-center\">Il n'y a pas de producteurs inscrits dans cette catégorie pour l'instant.</h4>
</div>
";
        }
        // line 43
        echo "
    <section class=\"row row-cols-sm-1 row-cols-xs-1 row-cols-md-1 row-cols-lg-2 g-5 list-card\">
    ";
        // line 46
        echo "
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agriculteurs"]) || array_key_exists("agriculteurs", $context) ? $context["agriculteurs"] : (function () { throw new RuntimeError('Variable "agriculteurs" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agriculteur"]) {
            // line 48
            echo "<div class=\"col-md\">

    <div class=\"card h-100\">
        <a class=\"row\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showAgriVisiteur", ["name" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["agriculteur"], "nomDomaine", [], "any", false, false, false, 51), [" " => "_"]), "id" => twig_get_attribute($this->env, $this->source, $context["agriculteur"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
            <div class=\"col container-img\">
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["agriculteur"], "photo", [], "any", false, false, false, 53)) {
                // line 54
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, $context["agriculteur"], "photo", [], "any", false, false, false, 54))), "html", null, true);
                echo "\" class=\"img-fluid rounded\" alt=\"Images du producteur\">            
            ";
            } else {
                // line 56
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Profil-marchand.jpg"), "html", null, true);
                echo "\" class=\"img-fluid rounded\" alt=\"Images du producteur\">            
            ";
            }
            // line 58
            echo "            </div>
            <div class=\"col-7\">
                <div class=\"card-body\">
                    <h4 class=\"card-title typo\">";
            // line 61
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "nomDomaine", [], "any", false, false, false, 61)), "html", null, true);
            echo "</h4>
        <small class=\"text-muted\"> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "adresse", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "codePostal", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "ville", [], "any", false, false, false, 62), "html", null, true);
            echo "</small>

                    <p class=\"card-text\">
                        ";
            // line 65
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "descriptif", [], "any", false, false, false, 65)) > 160)) {
                // line 66
                echo "                    ";
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "descriptif", [], "any", false, false, false, 66)), 0, 160) . "..."), "html", null, true);
                echo "   
                    ";
            } else {
                // line 68
                echo "                    ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "descriptif", [], "any", false, false, false, 68)), "html", null, true);
                echo "
                      ";
            }
            // line 70
            echo "                    </p>
                    <hr>

                    <p class=\"card-text\"><small class=\"\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["agriculteur"], "categorie", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 75
                echo "                        ";
                if (($context["categorie"] == twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "categorie", [], "any", false, false, false, 75)))) {
                    // line 76
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 76), "html", null, true);
                    echo "  

                \t\t\t\t\t\t\t\t\t";
                } else {
                    // line 79
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 79), "html", null, true);
                    echo "  &bull;
                                 ";
                }
                // line 81
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    </small></p>
                </div>
            </div>
        </a>
    </div>

</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agriculteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    ";
        // line 91
        echo "
    </section>
    ";
        // line 93
        if ((isset($context["agriculteurs"]) || array_key_exists("agriculteurs", $context) ? $context["agriculteurs"] : (function () { throw new RuntimeError('Variable "agriculteurs" does not exist.', 93, $this->source); })())) {
            // line 94
            echo "<div class=\"mt-4 mb-5\">
<ul class=\"pagination\">

    <li class=\"page-item ";
            // line 97
            echo ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 97, $this->source); })()) == 1)) ? ("disabled") : (""));
            echo "\">
            <a href=\"";
            // line 98
            ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 98, $this->source); })()) > 1)) ? (print (twig_escape_filter($this->env, ("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 98, $this->source); })()) - 1)), "html", null, true))) : (print ("")));
            echo "\" class=\"page-link\" aria-label=\"Precedent\">
                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
        </li>
        
        ";
            // line 103
            $context["pages"] = twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 103, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 103, $this->source); })())), 0, "ceil");
            // line 104
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 104, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 105
                echo "    <li class=\"page-item ";
                echo ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 105, $this->source); })()) == $context["item"])) ? ("active") : (""));
                echo "\">
                <a href=\"?page=";
                // line 106
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
            </li>    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "
            <li class=\"page-item ";
            // line 109
            echo ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 109, $this->source); })()))) ? ("disabled") : (""));
            echo "\">
            <a href=\"";
            // line 110
            ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 110, $this->source); })()))) ? (print (twig_escape_filter($this->env, ("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()) + 1)), "html", null, true))) : (print ("")));
            echo "\" class=\"page-link\" aria-label=\"Suivant\">
                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
        </li>
</ul>
</div>
";
        }
        // line 117
        echo "
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/listAgriByCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 117,  339 => 110,  335 => 109,  332 => 108,  322 => 106,  317 => 105,  312 => 104,  310 => 103,  302 => 98,  298 => 97,  293 => 94,  291 => 93,  287 => 91,  285 => 90,  272 => 82,  266 => 81,  260 => 79,  253 => 76,  250 => 75,  246 => 74,  240 => 70,  234 => 68,  228 => 66,  226 => 65,  216 => 62,  212 => 61,  207 => 58,  201 => 56,  195 => 54,  193 => 53,  188 => 51,  183 => 48,  179 => 47,  176 => 46,  172 => 43,  166 => 39,  164 => 38,  158 => 34,  151 => 29,  145 => 25,  141 => 24,  136 => 21,  132 => 19,  125 => 15,  122 => 14,  120 => 13,  110 => 12,  97 => 9,  87 => 8,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

\t\t\t{% block title %}
Les producteurs de {{ categ.nom }} -
{{parent()}}
\t\t\t{% endblock %}

\t\t\t{% block metaDescr %}
\t\t<meta name=\"description\" content=\"Découvrez les producteurse de {{ categ.nom }} de vos région, parce que chaque producteur est différent renseignez vous sur ceux qui vous correspondent le plus.\">
\t\t\t{% endblock %}
            
{% block body %}
{% if categ %}
<section class=\"bgimage banner banner-epi shadow container mt-5\" style=\"background-image: linear-gradient( rgba(0, 0, 0, 0.68) 100%, rgba(0, 0, 0, 0.68)100%),
      url('{{ asset('/upload/' ~ categ.image) }}') !important;\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>{{ categ.nom }}</h1>
\t\t\t\t\t{# --------- #}

\t\t\t\t\t<nav class=\"d-flex justify-content-center\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a class=\"link\" href=\"{{ path('home') }}\">Accueil</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ categ.nom }}</li>
  </ol>
</nav>
\t\t\t\t\t{# --------- #}
                </div>
            </div>
        </div>
    </section>
{% endif %}


<main class=\"container mt-5\">

{% if agriculteurs is empty %}
<div class=\"py-5 mb-4\">
<h4 class=\"pt-3 pb-5 text-center\">Il n'y a pas de producteurs inscrits dans cette catégorie pour l'instant.</h4>
</div>
{% endif %}

    <section class=\"row row-cols-sm-1 row-cols-xs-1 row-cols-md-1 row-cols-lg-2 g-5 list-card\">
    {# -------- #}

    {% for agriculteur in agriculteurs %}
<div class=\"col-md\">

    <div class=\"card h-100\">
        <a class=\"row\" href=\"{{ path('showAgriVisiteur', {'name': agriculteur.nomDomaine|replace({' ': '_'}), 'id': agriculteur.id}) }}\">
            <div class=\"col container-img\">
            {% if agriculteur.photo %}
                <img src=\"{{ asset('/upload/' ~ agriculteur.photo) }}\" class=\"img-fluid rounded\" alt=\"Images du producteur\">            
            {% else %}
            <img src=\"{{ asset('/images/Profil-marchand.jpg') }}\" class=\"img-fluid rounded\" alt=\"Images du producteur\">            
            {% endif %}
            </div>
            <div class=\"col-7\">
                <div class=\"card-body\">
                    <h4 class=\"card-title typo\">{{ agriculteur.nomDomaine|capitalize}}</h4>
        <small class=\"text-muted\"> {{ agriculteur.adresse}} {{ agriculteur.codePostal}} {{ agriculteur.ville}}</small>

                    <p class=\"card-text\">
                        {% if agriculteur.descriptif|length > 160 %}
                    {{ agriculteur.descriptif|capitalize|slice(0, 160) ~ '...' }}   
                    {% else %}
                    {{ agriculteur.descriptif|capitalize}}
                      {% endif %}
                    </p>
                    <hr>

                    <p class=\"card-text\"><small class=\"\">
                        {% for categorie in agriculteur.categorie %}
                        {% if categorie == agriculteur.categorie|last %}
                {{ categorie.nom }}  

                \t\t\t\t\t\t\t\t\t{% else %}
                {{ categorie.nom }}  &bull;
                                 {% endif %}
                    {% endfor %}
                    </small></p>
                </div>
            </div>
        </a>
    </div>

</div>
    {% endfor %}
    {# -------- #}

    </section>
    {% if agriculteurs %}
<div class=\"mt-4 mb-5\">
<ul class=\"pagination\">

    <li class=\"page-item {{ (page == 1) ? 'disabled' : '' }}\">
            <a href=\"{{ (page > 1) ? '?page=' ~ (page - 1) : '' }}\" class=\"page-link\" aria-label=\"Precedent\">
                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
        </li>
        
        {% set pages = (total / limit)|round(0, 'ceil') %}
    {% for item in 1..pages %}
    <li class=\"page-item {{ (page == item) ? 'active' : '' }}\">
                <a href=\"?page={{ item }}\" class=\"page-link\">{{ item }}</a>
            </li>    {% endfor %}

            <li class=\"page-item {{ (page == pages) ? 'disabled' : '' }}\">
            <a href=\"{{ (page < pages) ? '?page=' ~ (page + 1) : '' }}\" class=\"page-link\" aria-label=\"Suivant\">
                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
        </li>
</ul>
</div>
{% endif %}

</main>
{% endblock %}
", "visiteur/listAgriByCategorie.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\visiteur\\listAgriByCategorie.html.twig");
    }
}

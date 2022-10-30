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
class __TwigTemplate_1d2511565929be4c1af20d00d0d7d46abfcc5d0d9d57c8bbfffc2ceae3fe625d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/listAgriByCategorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Les producteurs de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categ"] ?? null), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo " -
";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t\t\t";
    }

    // line 8
    public function block_metaDescr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t<meta name=\"description\" content=\"Découvrez les producteurse de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categ"] ?? null), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo " de vos région, parce que chaque producteur est différent renseignez vous sur ceux qui vous correspondent le plus.\">
\t\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if (($context["categ"] ?? null)) {
            // line 14
            echo "<section class=\"bgimage banner banner-epi shadow container mt-5\" style=\"background-image: linear-gradient( rgba(0, 0, 0, 0.68) 100%, rgba(0, 0, 0, 0.68)100%),
      url('";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, ($context["categ"] ?? null), "image", [], "any", false, false, false, 15))), "html", null, true);
            echo "') !important;\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categ"] ?? null), "nom", [], "any", false, false, false, 19), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categ"] ?? null), "nom", [], "any", false, false, false, 25), "html", null, true);
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
        if (twig_test_empty(($context["agriculteurs"] ?? null))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["agriculteurs"] ?? null));
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
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "descriptif", [], "any", false, false, false, 65)), 160))) {
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
                if ((0 === twig_compare($context["categorie"], twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["agriculteur"], "categorie", [], "any", false, false, false, 75))))) {
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
        if (($context["agriculteurs"] ?? null)) {
            // line 94
            echo "<div class=\"mt-4 mb-5\">
<ul class=\"pagination\">

    <li class=\"page-item ";
            // line 97
            echo (((0 === twig_compare(($context["page"] ?? null), 1))) ? ("disabled") : (""));
            echo "\">
            <a href=\"";
            // line 98
            (((1 === twig_compare(($context["page"] ?? null), 1))) ? (print (twig_escape_filter($this->env, ("?page=" . (($context["page"] ?? null) - 1)), "html", null, true))) : (print ("")));
            echo "\" class=\"page-link\" aria-label=\"Precedent\">
                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
        </li>
        
        ";
            // line 103
            $context["pages"] = twig_round((($context["total"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
            // line 104
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 105
                echo "    <li class=\"page-item ";
                echo (((0 === twig_compare(($context["page"] ?? null), $context["item"]))) ? ("active") : (""));
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
            echo (((0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null)))) ? ("disabled") : (""));
            echo "\">
            <a href=\"";
            // line 110
            (((-1 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null)))) ? (print (twig_escape_filter($this->env, ("?page=" . (($context["page"] ?? null) + 1)), "html", null, true))) : (print ("")));
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
        return array (  307 => 117,  297 => 110,  293 => 109,  290 => 108,  280 => 106,  275 => 105,  270 => 104,  268 => 103,  260 => 98,  256 => 97,  251 => 94,  249 => 93,  245 => 91,  243 => 90,  230 => 82,  224 => 81,  218 => 79,  211 => 76,  208 => 75,  204 => 74,  198 => 70,  192 => 68,  186 => 66,  184 => 65,  174 => 62,  170 => 61,  165 => 58,  159 => 56,  153 => 54,  151 => 53,  146 => 51,  141 => 48,  137 => 47,  134 => 46,  130 => 43,  124 => 39,  122 => 38,  116 => 34,  109 => 29,  103 => 25,  99 => 24,  94 => 21,  90 => 19,  83 => 15,  80 => 14,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "visiteur/listAgriByCategorie.html.twig", "/home/users7/c/czh4993/www/templates/visiteur/listAgriByCategorie.html.twig");
    }
}

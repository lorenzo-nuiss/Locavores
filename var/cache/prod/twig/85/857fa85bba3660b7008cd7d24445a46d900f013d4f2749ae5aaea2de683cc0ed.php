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

/* visiteur/showAgri.html.twig */
class __TwigTemplate_6afd248d5de18930b9122ebf2e2fdac44301eb2ee270144d7e3ef637f4c3bae9 extends Template
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
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/showAgri.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "nomDomaine", [], "any", false, false, false, 4), "html", null, true);
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
        echo "\t\t<meta name=\"description\" content=\"Consultez les produits de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "nomDomaine", [], "any", false, false, false, 9), "html", null, true);
        echo ", situé à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "ville", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t\t";
    }

    // line 11
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "

<style>
    li img {
        width: 100%;
    }
    .lSAction > a  {
     opacity: 1 !important; 
    }
</style>

<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/lightslider.css"), "html", null, true);
        echo "\" />

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightslider.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<main class=\"bg-grey pt-5 pb-5\">
<div class=\"container\">
<section class=\"row row-cols-sm-1 row-cols-xs-1 row-cols-md-1 row-cols-lg-1 g-4\">
";
        // line 36
        echo "
<div class=\"col\">
    <div class=\"card radius\">
        <div class=\"row g-3\">
            <div class=\"col-md-6 col-xs-12 col-sm-12\">
              ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "photo", [], "any", false, false, false, 41)) {
            // line 42
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "photo", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Photo du producteur\">
              ";
        } else {
            // line 44
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Profil-marchand.jpg"), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Images de producteur\">            
              ";
        }
        // line 46
        echo "            </div>

            <div class=\"col-md-6 col-xs-12 col-sm-12 d-flex flex-column\">
                <div class=\"card-body pt-lg-5 pt-sm-2 pt-xs-1\">
                    <h4 class=\"card-title semi-bold typo\">";
        // line 50
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "nomDomaine", [], "any", false, false, false, 50)), "html", null, true);
        echo "</h4>
                    <h6 class=\"card-subtitle mt-2 mb-2 text-muted\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "adresse", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "ville", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "codePostal", [], "any", false, false, false, 51), "html", null, true);
        echo "</h6>
                    <p class=\"card-text mt-4\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "descriptif", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                </div>

                <div class=\"d-flex justify-content-between ps-3 pe-lg-5 pe-3 pb-lg-4\">
                  <p><i class=\"bi bi-envelope-fill me-1\"></i>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                  <p>
                  
                  ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "telFixe", [], "any", false, false, false, 59)) {
            // line 60
            echo "                   <i class=\"bi bi-telephone-fill\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "telFixe", [], "any", false, false, false, 60), "html", null, true);
            echo " <br>
                  ";
        }
        // line 62
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "telPortable", [], "any", false, false, false, 62)) {
            // line 63
            echo "                   <i class=\"bi bi-phone-fill\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "telPortable", [], "any", false, false, false, 63), "html", null, true);
            echo "
                  ";
        }
        // line 65
        echo "                  </p>

                </div>

            </div>

        </div>

    </div>
</div>


";
        // line 78
        echo "<div class=\"col-md\">
<h3 class=\"p-4 semi-bold typo noir\">Ses produits <i class=\"bi bi-basket-fill ms-2\"></i> </h3>
";
        // line 80
        $context["i"] = 0;
        // line 81
        echo "
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "categorie", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 83
            echo "    <div class=\"card radius mb-4\">
  <div class=\"card-body p-3\">
    <h5 class=\"card-title noir\"> &bull; ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 85), "html", null, true);
            echo "</h5>
        <ul id=\"content-slider";
            // line 86
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\" class=\"content-slider mt-3\">

        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "images", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 89
                echo "        ";
                if (twig_in_filter($context["image"], twig_get_attribute($this->env, $this->source, $context["cat"], "images", [], "any", false, false, false, 89))) {
                    // line 90
                    echo "
        <li>
        <img src=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/produit/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 92))), "thumbMedium"), "html", null, true);
                    echo "\" alt=\"Les produits ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 92), "html", null, true);
                    echo "\">
        </li>
        ";
                }
                // line 95
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 98
            echo "
        </ul>
  </div>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
</div>
</section>
</div>
</main>

        <script>
            \$(document).ready(function () {
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agriculteur"] ?? null), "categorie", [], "any", false, false, false, 112));
        foreach ($context['_seq'] as $context["key"] => $context["img"]) {
            // line 113
            echo "                \$('#content-slider";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "').lightSlider({
                    item: 4,
                    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                    keyPress: true,
                    slideMove: 2,
                    speed: 600,
                    responsive: [
                        {
                            breakpoint: 800,
                            settings: {
                                item: 3,
                                slideMove: 1,
                                slideMargin: 6,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                item: 2,
                                slideMove: 1
                            }
                        }
                    ]
                });
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "
            });
        </script>

";
    }

    // line 144
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "        <script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "visiteur/showAgri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 145,  321 => 144,  313 => 138,  281 => 113,  277 => 112,  267 => 104,  256 => 98,  253 => 97,  246 => 95,  238 => 92,  234 => 90,  231 => 89,  227 => 88,  222 => 86,  218 => 85,  214 => 83,  210 => 82,  207 => 81,  205 => 80,  201 => 78,  187 => 65,  181 => 63,  178 => 62,  172 => 60,  170 => 59,  164 => 56,  157 => 52,  149 => 51,  145 => 50,  139 => 46,  133 => 44,  127 => 42,  125 => 41,  118 => 36,  113 => 32,  109 => 31,  102 => 27,  96 => 24,  82 => 12,  78 => 11,  69 => 9,  65 => 8,  59 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "visiteur/showAgri.html.twig", "/home/users7/c/czh4993/www/templates/visiteur/showAgri.html.twig");
    }
}

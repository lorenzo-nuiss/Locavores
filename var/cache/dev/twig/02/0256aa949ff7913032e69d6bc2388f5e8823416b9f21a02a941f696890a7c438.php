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
class __TwigTemplate_b0f40dea9bf8c59b96bbb7a2e94965adaabef3da6ac65f117bf757c3f22d5f9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/showAgri.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/showAgri.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/showAgri.html.twig", 1);
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
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 4, $this->source); })()), "nomDomaine", [], "any", false, false, false, 4), "html", null, true);
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
        echo "\t\t<meta name=\"description\" content=\"Consultez les produits de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 9, $this->source); })()), "nomDomaine", [], "any", false, false, false, 9), "html", null, true);
        echo ", situé à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 9, $this->source); })()), "ville", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 41, $this->source); })()), "photo", [], "any", false, false, false, 41)) {
            // line 42
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 42, $this->source); })()), "photo", [], "any", false, false, false, 42))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 50, $this->source); })()), "nomDomaine", [], "any", false, false, false, 50)), "html", null, true);
        echo "</h4>
                    <h6 class=\"card-subtitle mt-2 mb-2 text-muted\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 51, $this->source); })()), "adresse", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 51, $this->source); })()), "ville", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 51, $this->source); })()), "codePostal", [], "any", false, false, false, 51), "html", null, true);
        echo "</h6>
                    <p class=\"card-text mt-4\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 52, $this->source); })()), "descriptif", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                </div>

                <div class=\"d-flex justify-content-between ps-3 pe-lg-5 pe-3 pb-lg-4\">
                  <p><i class=\"bi bi-envelope-fill me-1\"></i>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                  <p>
                  
                  ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 59, $this->source); })()), "telFixe", [], "any", false, false, false, 59)) {
            // line 60
            echo "                   <i class=\"bi bi-telephone-fill\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 60, $this->source); })()), "telFixe", [], "any", false, false, false, 60), "html", null, true);
            echo " <br>
                  ";
        }
        // line 62
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 62, $this->source); })()), "telPortable", [], "any", false, false, false, 62)) {
            // line 63
            echo "                   <i class=\"bi bi-phone-fill\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 63, $this->source); })()), "telPortable", [], "any", false, false, false, 63), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 82, $this->source); })()), "categorie", [], "any", false, false, false, 82));
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
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "\" class=\"content-slider mt-3\">

        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 88, $this->source); })()), "images", [], "any", false, false, false, 88));
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
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 97, $this->source); })()) + 1);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agriculteur"]) || array_key_exists("agriculteur", $context) ? $context["agriculteur"] : (function () { throw new RuntimeError('Variable "agriculteur" does not exist.', 112, $this->source); })()), "categorie", [], "any", false, false, false, 112));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 145
        echo "        <script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  391 => 145,  381 => 144,  367 => 138,  335 => 113,  331 => 112,  321 => 104,  310 => 98,  307 => 97,  300 => 95,  292 => 92,  288 => 90,  285 => 89,  281 => 88,  276 => 86,  272 => 85,  268 => 83,  264 => 82,  261 => 81,  259 => 80,  255 => 78,  241 => 65,  235 => 63,  232 => 62,  226 => 60,  224 => 59,  218 => 56,  211 => 52,  203 => 51,  199 => 50,  193 => 46,  187 => 44,  181 => 42,  179 => 41,  172 => 36,  167 => 32,  157 => 31,  144 => 27,  138 => 24,  124 => 12,  114 => 11,  99 => 9,  89 => 8,  77 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
 {{ agriculteur.nomDomaine }} -
{{parent()}}
\t\t\t{% endblock %}

\t\t\t{% block metaDescr %}
\t\t<meta name=\"description\" content=\"Consultez les produits de {{ agriculteur.nomDomaine }}, situé à {{agriculteur.ville}}\">
\t\t\t{% endblock %}
{% block style %}


<style>
    li img {
        width: 100%;
    }
    .lSAction > a  {
     opacity: 1 !important; 
    }
</style>

<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
<link rel=\"stylesheet\" href=\"{{ asset('css/lightslider.css') }}\" />

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"{{ asset('js/lightslider.js') }}\"></script>

{% endblock style %}

{% block body %}
<main class=\"bg-grey pt-5 pb-5\">
<div class=\"container\">
<section class=\"row row-cols-sm-1 row-cols-xs-1 row-cols-md-1 row-cols-lg-1 g-4\">
{# ----------- card 1 #}

<div class=\"col\">
    <div class=\"card radius\">
        <div class=\"row g-3\">
            <div class=\"col-md-6 col-xs-12 col-sm-12\">
              {% if agriculteur.photo %}
                <img src=\"{{ asset('/upload/' ~ agriculteur.photo) }}\" class=\"img-fluid\" alt=\"Photo du producteur\">
              {% else %}
                <img src=\"{{ asset('/images/Profil-marchand.jpg') }}\" class=\"img-fluid\" alt=\"Images de producteur\">            
              {% endif %}
            </div>

            <div class=\"col-md-6 col-xs-12 col-sm-12 d-flex flex-column\">
                <div class=\"card-body pt-lg-5 pt-sm-2 pt-xs-1\">
                    <h4 class=\"card-title semi-bold typo\">{{ agriculteur.nomDomaine|capitalize }}</h4>
                    <h6 class=\"card-subtitle mt-2 mb-2 text-muted\">{{ agriculteur.adresse }} {{ agriculteur.ville }} {{ agriculteur.codePostal }}</h6>
                    <p class=\"card-text mt-4\">{{ agriculteur.descriptif }}</p>
                </div>

                <div class=\"d-flex justify-content-between ps-3 pe-lg-5 pe-3 pb-lg-4\">
                  <p><i class=\"bi bi-envelope-fill me-1\"></i>{{ agriculteur.email }}</p>
                  <p>
                  
                  {% if agriculteur.telFixe %}
                   <i class=\"bi bi-telephone-fill\"></i> {{ agriculteur.telFixe }} <br>
                  {% endif %}
                  {% if agriculteur.telPortable %}
                   <i class=\"bi bi-phone-fill\"></i> {{ agriculteur.telPortable }}
                  {% endif %}
                  </p>

                </div>

            </div>

        </div>

    </div>
</div>


{# ------------ card categories #}
<div class=\"col-md\">
<h3 class=\"p-4 semi-bold typo noir\">Ses produits <i class=\"bi bi-basket-fill ms-2\"></i> </h3>
{% set i = 0 %}

    {% for cat in agriculteur.categorie %}
    <div class=\"card radius mb-4\">
  <div class=\"card-body p-3\">
    <h5 class=\"card-title noir\"> &bull; {{ cat.nom }}</h5>
        <ul id=\"content-slider{{ i }}\" class=\"content-slider mt-3\">

        {% for image in agriculteur.images %}
        {% if image in cat.images %}

        <li>
        <img src=\"{{ asset('/upload/produit/' ~ image.nom) | imagine_filter('thumbMedium') }}\" alt=\"Les produits {{ cat.nom }}\">
        </li>
        {% endif %}

        {% endfor %}
        {% set i = i + 1 %}

        </ul>
  </div>

</div>
{% endfor %}

</div>
</section>
</div>
</main>

        <script>
            \$(document).ready(function () {
                {% for key, img in agriculteur.categorie %}
                \$('#content-slider{{key}}').lightSlider({
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
                {% endfor %}

            });
        </script>

{% endblock %}

{% block js %}
        <script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\"></script>

{% endblock js %}", "visiteur/showAgri.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\visiteur\\showAgri.html.twig");
    }
}

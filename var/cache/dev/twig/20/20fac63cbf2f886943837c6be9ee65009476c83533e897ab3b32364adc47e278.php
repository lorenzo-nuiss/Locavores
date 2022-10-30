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

/* agriculteur/produit/addImages.html.twig */
class __TwigTemplate_210cb3f86d8b3fb5915cf04ae9ea0aa88c638e8c8f8a320f31f918f7e5369c85 extends Template
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
            'h1' => [$this, 'block_h1'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/produit/addImages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/produit/addImages.html.twig"));

        $this->parent = $this->loadTemplate("layout-agri.html.twig", "agriculteur/produit/addImages.html.twig", 1);
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

        echo "Mes Produits
";
        
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
        echo "\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        // line 11
        echo "\tAjout d'image par categorie
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<section class=\"bgimage banner banner-epi shadow container\" style=\"background-image: linear-gradient( rgba(0, 0, 0, 0.68) 100%, rgba(0, 0, 0, 0.68)100%),
      url('";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/" . twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17))), "html", null, true);
        echo "') !important;\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</h1>
\t\t\t\t\t";
        // line 23
        echo "
\t\t\t\t\t<nav class=\"d-flex justify-content-center\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a class=\"link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_profil");
        echo "\">Magasin</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</li>
  </ol>
</nav>
\t\t\t\t\t";
        // line 31
        echo "                </div>
            </div>
        </div>
    </section>
";
        // line 36
        echo "
";
        // line 38
        echo "<div class=\"container\">
<div class=\"d-flex justify-content-end my-4\">
<form method=\"post\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriCategorie_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir de ne plus apparaitre dans cette catégorie');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41))), "html", null, true);
        echo "\">
    <button class=\"btn2\">Ne plus être dans cette catégorie</button>
</form>
</div>

<div>
\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_profil");
        echo "\" class=\"link\"><i class=\"bi bi-arrow-bar-left\"></i>Retourner en arrière</a>
<h2 class=\"semi-bold\">Catégorie : ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), "html", null, true);
        echo "</h2>
<p>Ajoutez des photos de vos produits pour la catégorie <b>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), "html", null, true);
        echo "</b>. Les visiteurs du site verront ces images et pourront se faire une idée des produits que vous vendez. 
</br>Vous pourrez à tout moment en ajouter, où en retirer en cliquent sur la poubelle en haut à droite de l'image.</p>
</div> 
</div>


";
        // line 56
        echo "
";
        // line 57
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "images", [], "any", false, false, false, 57))) {
            // line 58
            echo "\t<div class=\"swiper container\">
\t\t<span class=\"title-section d-flex justify-content-end\">
\t\t\t<button class=\"btn btn-archive btn-sm prev-btn\" type=\"button\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t<!-- <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> -->
\t\t\t\t<span class=\"visually-hidden\">Precedent</span>
\t\t\t</button>
\t\t\t<span class=\"mx-1\">&nbsp;</span>
\t\t\t<button class=\"btn btn-archive btn-sm next-btn\" type=\"button\">
\t\t\t\t<i class=\"bi bi-arrow-right\"></i>
\t\t\t\t<!-- <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> -->
\t\t\t\t<span class=\"visually-hidden\">Suivant</span>
\t\t\t</button>


\t\t</span>
\t\t<div class=\"swiper-wrapper\">
\t\t";
            // line 75
            $context["slugy"] = twig_replace_filter((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 75, $this->source); })()), ["_" => " "]);
            // line 76
            echo "    \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "images", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 77
                echo "\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "categorie", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, (isset($context["categ"]) || array_key_exists("categ", $context) ? $context["categ"] : (function () { throw new RuntimeError('Variable "categ" does not exist.', 77, $this->source); })()), "nom", [], "any", false, false, false, 77)))) {
                    // line 78
                    echo "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<img src=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/produit/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 79))), "thumb"), "html", null, true);
                    echo "\" alt=\"Image\">
\t\t\t\t\t\t<a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriCategorie_deleteImages", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                    echo "\" data-delete data-token=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 80))), "html", null, true);
                    echo "\">
            \t\t\t\t<i class=\"bi bi-trash\"></i>
            </a>
    \t</div>
\t\t\t\t";
                }
                // line 85
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
\t\t</div>
\t\t<!-- Add Pagination -->
\t\t<div class=\"swiper-pagination\"></div>
\t</div>

\t";
            // line 93
            echo "</div>
</div>
</section>
<!-- END CUSTOM SLIDER -->
";
        }
        // line 98
        echo "<section class=\"container mt-4 mb-5\">
\t<div class=\"row\">
\t<div class=\"col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6 col-xs-8\">
\t";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "images", [], "any", false, false, false, 102), 'label');
        echo "
\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "images", [], "any", false, false, false, 103), 'widget');
        echo "
\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "images", [], "any", false, false, false, 104), 'errors');
        echo "

\t</div>
\t</div>

\t<input type=\"submit\" class=\"btn btn1\" value=\"Sauvegarder\">

</section>
\t";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 116
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/images.js"), "html", null, true);
        echo "\">
</script>

<script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\">
</script>
<script>
var swiper = new Swiper('.swiper', {
slidesPerView: 4,
spaceBetween: 30,
navigation: {
nextEl: '.next-btn',
prevEl: '.prev-btn'
},
breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
        1440:{
      slidesPerView: 5,
      spaceBetween: 10,
    },
},
pagination: {
el: '.swiper-pagination',
clickable: true
}
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agriculteur/produit/addImages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 116,  320 => 115,  307 => 112,  296 => 104,  292 => 103,  288 => 102,  284 => 101,  279 => 98,  272 => 93,  264 => 86,  258 => 85,  248 => 80,  244 => 79,  241 => 78,  238 => 77,  233 => 76,  231 => 75,  212 => 58,  210 => 57,  207 => 56,  198 => 49,  194 => 48,  190 => 47,  181 => 41,  177 => 40,  173 => 38,  170 => 36,  164 => 31,  158 => 27,  154 => 26,  149 => 23,  145 => 21,  138 => 17,  135 => 16,  125 => 14,  114 => 11,  104 => 10,  92 => 6,  82 => 5,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-agri.html.twig' %}
{% block title %}Mes Produits
{% endblock %}

{% block style %}
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>

{% endblock %}

{% block h1 %}
\tAjout d'image par categorie
{% endblock h1 %}

{% block body %}
{# BANNIERE Container radius epi#}
<section class=\"bgimage banner banner-epi shadow container\" style=\"background-image: linear-gradient( rgba(0, 0, 0, 0.68) 100%, rgba(0, 0, 0, 0.68)100%),
      url('{{ asset('/upload/' ~ categ.image) }}') !important;\">
        <div class=\"container\">
            <div class=\"row d-flex align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 m-auto text-center\">
                    <h1>{{ categ.nom }}</h1>
\t\t\t\t\t{# --------- #}

\t\t\t\t\t<nav class=\"d-flex justify-content-center\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb\">
    <li class=\"breadcrumb-item\"><a class=\"link\" href=\"{{ path('agriculteur_profil') }}\">Magasin</a></li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ categ.nom }}</li>
  </ol>
</nav>
\t\t\t\t\t{# --------- #}
                </div>
            </div>
        </div>
    </section>
{# FIN BANNIERE #}

{# ----------------------- #}
<div class=\"container\">
<div class=\"d-flex justify-content-end my-4\">
<form method=\"post\" action=\"{{ path('agriCategorie_delete', {'id': categ.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir de ne plus apparaitre dans cette catégorie');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categ.id) }}\">
    <button class=\"btn2\">Ne plus être dans cette catégorie</button>
</form>
</div>

<div>
\t<a href=\"{{ path('agriculteur_profil') }}\" class=\"link\"><i class=\"bi bi-arrow-bar-left\"></i>Retourner en arrière</a>
<h2 class=\"semi-bold\">Catégorie : {{ categ.nom }}</h2>
<p>Ajoutez des photos de vos produits pour la catégorie <b>{{ categ.nom }}</b>. Les visiteurs du site verront ces images et pourront se faire une idée des produits que vous vendez. 
</br>Vous pourrez à tout moment en ajouter, où en retirer en cliquent sur la poubelle en haut à droite de l'image.</p>
</div> 
</div>


{# ----------------------- #}

{% if app.user.images is not empty %}
\t<div class=\"swiper container\">
\t\t<span class=\"title-section d-flex justify-content-end\">
\t\t\t<button class=\"btn btn-archive btn-sm prev-btn\" type=\"button\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t<!-- <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> -->
\t\t\t\t<span class=\"visually-hidden\">Precedent</span>
\t\t\t</button>
\t\t\t<span class=\"mx-1\">&nbsp;</span>
\t\t\t<button class=\"btn btn-archive btn-sm next-btn\" type=\"button\">
\t\t\t\t<i class=\"bi bi-arrow-right\"></i>
\t\t\t\t<!-- <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> -->
\t\t\t\t<span class=\"visually-hidden\">Suivant</span>
\t\t\t</button>


\t\t</span>
\t\t<div class=\"swiper-wrapper\">
\t\t{% set slugy = slug|replace({'_': ' '})  %}
    \t\t\t{% for image in app.user.images %}
\t\t\t\t{% if image.categorie.nom == categ.nom %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<img src=\"{{ asset('/upload/produit/' ~ image.nom) | imagine_filter('thumb')}}\" alt=\"Image\">
\t\t\t\t\t\t<a href=\"{{ path('agriCategorie_deleteImages', {'id': image.id}) }}\" data-delete data-token=\"{{ csrf_token('delete' ~ image.id)}}\">
            \t\t\t\t<i class=\"bi bi-trash\"></i>
            </a>
    \t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t</div>
\t\t<!-- Add Pagination -->
\t\t<div class=\"swiper-pagination\"></div>
\t</div>

\t{# ----------------------- #}
</div>
</div>
</section>
<!-- END CUSTOM SLIDER -->
{% endif %}
<section class=\"container mt-4 mb-5\">
\t<div class=\"row\">
\t<div class=\"col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6 col-xs-8\">
\t{{ form_start(form)}}
\t\t{{ form_label(form.images)}}
\t\t{{ form_widget(form.images)}}
\t\t{{ form_errors(form.images)}}

\t</div>
\t</div>

\t<input type=\"submit\" class=\"btn btn1\" value=\"Sauvegarder\">

</section>
\t{{ form_end(form)}}

{% endblock %}
{% block js %}
<script src=\"{{ asset('js/images.js') }}\">
</script>

<script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\">
</script>
<script>
var swiper = new Swiper('.swiper', {
slidesPerView: 4,
spaceBetween: 30,
navigation: {
nextEl: '.next-btn',
prevEl: '.prev-btn'
},
breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
        1440:{
      slidesPerView: 5,
      spaceBetween: 10,
    },
},
pagination: {
el: '.swiper-pagination',
clickable: true
}
});
</script>
{% endblock js %}
", "agriculteur/produit/addImages.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\agriculteur\\produit\\addImages.html.twig");
    }
}

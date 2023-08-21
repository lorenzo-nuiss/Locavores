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

/* agriculteur/profil/profilAgri.html.twig */
class __TwigTemplate_b8d80892412995aa03a6af79458f111209e972ba5ed43396ffe2a59cf67781d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/profil/profilAgri.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/profil/profilAgri.html.twig"));

        $this->parent = $this->loadTemplate("layout-agri.html.twig", "agriculteur/profil/profilAgri.html.twig", 1);
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
        echo "
<style>
    li img {
        width: 100%;
    }

    .lSAction > a  {
        opacity: 0.8 !important;
    }
</style>
<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/lightslider.css"), "html", null, true);
        echo "\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightslider.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Magasin
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        echo "Bienvenue
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "<div class=\"container\">
    <div class=\"presentation row\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 27
            echo "                <div class=\"col-md-6 mx-auto text-center alert alert-success d-flex mt-md-3\"  role=\"alert\">
                    <div class=\"flex-grow-1\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    </div>

    <section class=\"banniere row mt-5 pt-sm-5 pt-lg-0\">
<div class=\"col-xl-4 col-lg-4 col-md-8 col-sm-12 d-flex justify-content-evenly flex-column\">
<h2 class=\"large marron\">Votre magasin</h2>

<div class=\"form-important\">
        <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "disponible", [], "any", false, false, false, 43)) ? ("checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Disponible</label>
        </div>
        <p class=\"mt-3 pe-4\">Attention si vous indiquez que vous êtes indisponible, votre magasin apparaitra comme etant indisponible pour les visiteurs</p>
    </div>
</div>
<div class=\"col-xl-8 col-lg-8 col-md-10 col-sm-12 container-img\">
             <img class=\"photo-profil\" id=\"photo\"
             ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "photo", [], "any", false, false, false, 51)) {
            echo " 
             src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "photo", [], "any", false, false, false, 52))), "html", null, true);
            echo "\"
             ";
        } else {
            // line 53
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Photo-agriculteur.jpg"), "html", null, true);
            echo "\"
              ";
        }
        // line 55
        echo "               style=\"width:100%\" alt=\"Photo de profil\">
               <div class=\"d-flex justify-content-around content-form\">
                <div>

";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start');
        echo "
";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "photo", [], "any", false, false, false, 60), 'errors');
        echo "
";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "photo", [], "any", false, false, false, 61), 'widget', ["attr" => ["onChange" => "loadFile(event)"]]);
        // line 62
        echo "
</div>
<div class=\"\">
<input type=\"submit\" class=\"btn btn1 btn_sm\" value=\"Sauvegarder\">
";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
</div>
               </div>
</div>

    </section>
    ";
        // line 73
        echo "    <section class=\"banniere\">
        <div class=\"row justify-content-center\">
  
        </div>
    </section>


    ";
        // line 81
        echo "    <div class=\"d-flex lign-items-center my-3\">

    </div>
    ";
        // line 85
        echo "    <div class=\"row block-cards my-5\">
        <div class=\"col-xl-6 col-md-8 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h3 class=\"card-title typo mb-5\">Votre ferme <i class=\"bi bi-shop ps-3 \"></i></h3>
                    <div class=\"d-flex\">
                        <ul>
                            <li>
                                Nom :<span>
                                    ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true);
        echo "
                                </span>
                            </li>
                            <li>Mail :<span>
                                    ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "</span>
                            </li>
                            <li>
                                Nom de votre établissement:<span>
                                    ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "nomDomaine", [], "any", false, false, false, 102), "html", null, true);
        echo "
                                </span>
                            </li>
                            <li>Adresse :<span>
                                    ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "adresse", [], "any", false, false, false, 106), "html", null, true);
        echo "</span>
                            </li>

                        </ul>
                        <ul>
                            <li>Ville :<span>
                                    ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "ville", [], "any", false, false, false, 112), "html", null, true);
        echo "</span>
                            </li>
                            <li>Code Postal :<span>
                                    ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "codePostal", [], "any", false, false, false, 115), "html", null, true);
        echo "</span>
                            </li>
                            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "telPortable", [], "any", false, false, false, 117)) {
            // line 118
            echo "                            <li>Téléphone portable :<span>
                                    ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "telPortable", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
                            </li>
                            ";
        }
        // line 122
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "telFixe", [], "any", false, false, false, 122)) {
            // line 123
            echo "                            <li>Téléphone :<span>
                                    ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "telFixe", [], "any", false, false, false, 124), "html", null, true);
            echo "</span>
                            </li>
                            ";
        }
        // line 127
        echo "                        </ul>
                    </div>
                    <p>Descriptif :
                    </br>
                    <span>
                        ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "descriptif", [], "any", false, false, false, 132), "html", null, true);
        echo "</span>
                    </p>
                    <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_editProfil");
        echo "\" class=\"btn btn1 btn_sm\"><i class=\"bi bi-pencil-square me-1\"></i>Modifier</a>
                    <hr>
                    <p><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"link\"> Changer votre mot de passe</a></p>
                </div>
            </div>
        </div>


        <div class=\"col-xl-6 col-md-12 col-sm-12 mt-sm-5 mt-xl-0\">
            <div class=\"card categorie\">
                <div class=\"card-body p-4\">
                    <h3 class=\"card-title typo\">Gérez vos catégories <i class=\"ps-3 bi bi-list-ul\"></i></h3>
                    ";
        // line 147
        echo "                    ";
        $context["categorieOut"] = [];
        // line 148
        echo "                    ";
        $context["i"] = 0;
        // line 149
        echo "
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 150, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["catRepo"]) {
            // line 151
            echo "
                    ";
            // line 153
            echo "                    ";
            if (twig_in_filter($context["catRepo"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "categorie", [], "any", false, false, false, 153))) {
                // line 154
                echo "                    <div class=\"item ps-3\">
                    <div class=\"row align-items-center my-4\">
                        <h4 class=\"col typo\"> <i class=\"bi bi-dot\"></i>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 156), "html", null, true);
                echo "</h4>
                        <div class=\"col\">
                            <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriCategorie_addImages", ["userCategorie" => "edit", "id" => twig_get_attribute($this->env, $this->source, $context["catRepo"], "id", [], "any", false, false, false, 158), "slug" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 158), [" " => "_"])]), "html", null, true);
                echo "\" class=\"btn btn1 btn_sm col\"><i class=\"bi bi-pencil-square\"></i> Modifier</a>
                        </div>
                    </div>
                            ";
                // line 162
                echo "                        <ul id=\"content-slider";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 162, $this->source); })()), "html", null, true);
                echo "\" class=\"content-slider px-0\">

                            ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "images", [], "any", false, false, false, 164));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 165
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["image"], "categorie", [], "any", false, false, false, 165) == $context["catRepo"])) {
                        // line 166
                        echo "                            <li>
                                <img src=\"";
                        // line 167
                        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/produit/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 167))), "thumb"), "html", null, true);
                        echo "\" alt=\"Les produits ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 167), "html", null, true);
                        echo "\" width=\"auto\">
                            </li>
                            ";
                    }
                    // line 170
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 171, $this->source); })()) + 1);
                // line 172
                echo "
                        </ul>
                        </div>
                        <hr class=\"my-5\">

                            ";
            } elseif (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 177
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "categorie", [], "any", false, false, false, 177), twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 177))) {
                // line 178
                echo "                            ";
                $context["categorieOut"] = twig_array_merge((isset($context["categorieOut"]) || array_key_exists("categorieOut", $context) ? $context["categorieOut"] : (function () { throw new RuntimeError('Variable "categorieOut" does not exist.', 178, $this->source); })()), [0 => $context["catRepo"]]);
                // line 179
                echo "                            ";
            }
            // line 180
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catRepo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                            <ul>
                                ";
        // line 182
        if ((isset($context["categorieOut"]) || array_key_exists("categorieOut", $context) ? $context["categorieOut"] : (function () { throw new RuntimeError('Variable "categorieOut" does not exist.', 182, $this->source); })())) {
            // line 183
            echo "                            <li>
                            <h4 class=\"typo\">Autres catégories</h4>
                            </li>
                                ";
        }
        // line 187
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorieOut"]) || array_key_exists("categorieOut", $context) ? $context["categorieOut"] : (function () { throw new RuntimeError('Variable "categorieOut" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 188
            echo "                                <li class=\"mb-2\">
                                    <a class=\"btn btn2 btn_sm link-vide-categorie\" href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriCategorie_addImages", ["userCategorie" => "new", "id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 189), "slug" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 189), [" " => "_"])]), "html", null, true);
            echo "\">
                                     <i class=\"bi bi-plus-square\"></i> Ajouter <span class=\"nom-categorie-vide\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 190), "html", null, true);
            echo "</span></a>
                                </li>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                                ";
        // line 195
        echo "                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            \$(document).ready(function () {
                ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "user", [], "any", false, false, false, 205), "categorie", [], "any", false, false, false, 205));
        foreach ($context['_seq'] as $context["key"] => $context["img"]) {
            // line 206
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
        // line 231
        echo "
            });
        </script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 237
        echo "
        <script>
            window.onload = () => {
                let activer = document.querySelectorAll(\"[type=checkbox]\")
                for (let bouton of activer) {
                    bouton.addEventListener(\"click\", function () {
                        let xmlhttp = new XMLHttpRequest;

                        xmlhttp.open(\"get\", \"/agriculteur/disponible\")
                        xmlhttp.send()
                    })
                }
            }
        </script>

        <script>
            let loadFile = function (event) {
                let image = document.getElementById('photo');
                image.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
        <script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agriculteur/profil/profilAgri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 237,  548 => 236,  534 => 231,  502 => 206,  498 => 205,  486 => 195,  484 => 194,  474 => 190,  470 => 189,  467 => 188,  462 => 187,  456 => 183,  454 => 182,  451 => 181,  445 => 180,  442 => 179,  439 => 178,  437 => 177,  430 => 172,  427 => 171,  421 => 170,  413 => 167,  410 => 166,  407 => 165,  403 => 164,  397 => 162,  391 => 158,  386 => 156,  382 => 154,  379 => 153,  376 => 151,  372 => 150,  369 => 149,  366 => 148,  363 => 147,  350 => 136,  345 => 134,  340 => 132,  333 => 127,  327 => 124,  324 => 123,  321 => 122,  315 => 119,  312 => 118,  310 => 117,  305 => 115,  299 => 112,  290 => 106,  283 => 102,  276 => 98,  269 => 94,  258 => 85,  253 => 81,  244 => 73,  235 => 66,  229 => 62,  227 => 61,  223 => 60,  219 => 59,  213 => 55,  207 => 53,  202 => 52,  198 => 51,  187 => 43,  176 => 34,  165 => 29,  161 => 27,  157 => 26,  153 => 24,  143 => 23,  123 => 21,  103 => 19,  90 => 16,  85 => 14,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-agri.html.twig' %}
{% block style %}

<style>
    li img {
        width: 100%;
    }

    .lSAction > a  {
        opacity: 0.8 !important;
    }
</style>
<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/lightslider.css') }}\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"{{ asset('js/lightslider.js') }}\"></script>

{% endblock %}
{% block title %}Magasin
{% endblock %}
{% block h1 %}Bienvenue
{% endblock %}
{% block body %}
<div class=\"container\">
    <div class=\"presentation row\">
        {% for notification in app.flashes('success') %}
                <div class=\"col-md-6 mx-auto text-center alert alert-success d-flex mt-md-3\"  role=\"alert\">
                    <div class=\"flex-grow-1\">
                    {{ notification }}
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
        {% endfor %}

    </div>

    <section class=\"banniere row mt-5 pt-sm-5 pt-lg-0\">
<div class=\"col-xl-4 col-lg-4 col-md-8 col-sm-12 d-flex justify-content-evenly flex-column\">
<h2 class=\"large marron\">Votre magasin</h2>

<div class=\"form-important\">
        <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" {{ (app.user.disponible) ? 'checked' : '' }}>
            <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Disponible</label>
        </div>
        <p class=\"mt-3 pe-4\">Attention si vous indiquez que vous êtes indisponible, votre magasin apparaitra comme etant indisponible pour les visiteurs</p>
    </div>
</div>
<div class=\"col-xl-8 col-lg-8 col-md-10 col-sm-12 container-img\">
             <img class=\"photo-profil\" id=\"photo\"
             {% if app.user.photo %} 
             src=\"{{ asset(\"upload/\" ~ app.user.photo) }}\"
             {% else %} src=\"{{ asset(\"images/Photo-agriculteur.jpg\") }}\"
              {% endif %}
               style=\"width:100%\" alt=\"Photo de profil\">
               <div class=\"d-flex justify-content-around content-form\">
                <div>

{{ form_start(form)}}
{{ form_errors(form.photo) }}
{{ form_widget(form.photo, {'attr' : {\"onChange\" : \"loadFile(event)\"}}
) }}
</div>
<div class=\"\">
<input type=\"submit\" class=\"btn btn1 btn_sm\" value=\"Sauvegarder\">
{{ form_end(form)}}
</div>
               </div>
</div>

    </section>
    {# ------- 1 ------ #}
    <section class=\"banniere\">
        <div class=\"row justify-content-center\">
  
        </div>
    </section>


    {# ----- Chager image de profil ---- #}
    <div class=\"d-flex lign-items-center my-3\">

    </div>
    {# ------------- Modification perso -------- #}
    <div class=\"row block-cards my-5\">
        <div class=\"col-xl-6 col-md-8 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h3 class=\"card-title typo mb-5\">Votre ferme <i class=\"bi bi-shop ps-3 \"></i></h3>
                    <div class=\"d-flex\">
                        <ul>
                            <li>
                                Nom :<span>
                                    {{ app.user.nom }}
                                </span>
                            </li>
                            <li>Mail :<span>
                                    {{ app.user.email }}</span>
                            </li>
                            <li>
                                Nom de votre établissement:<span>
                                    {{ app.user.nomDomaine }}
                                </span>
                            </li>
                            <li>Adresse :<span>
                                    {{ app.user.adresse }}</span>
                            </li>

                        </ul>
                        <ul>
                            <li>Ville :<span>
                                    {{ app.user.ville }}</span>
                            </li>
                            <li>Code Postal :<span>
                                    {{ app.user.codePostal }}</span>
                            </li>
                            {% if app.user.telPortable %}
                            <li>Téléphone portable :<span>
                                    {{ app.user.telPortable }}</span>
                            </li>
                            {% endif %}
                            {% if app.user.telFixe %}
                            <li>Téléphone :<span>
                                    {{ app.user.telFixe }}</span>
                            </li>
                            {% endif %}
                        </ul>
                    </div>
                    <p>Descriptif :
                    </br>
                    <span>
                        {{ app.user.descriptif }}</span>
                    </p>
                    <a href=\"{{ path('agriculteur_editProfil')}}\" class=\"btn btn1 btn_sm\"><i class=\"bi bi-pencil-square me-1\"></i>Modifier</a>
                    <hr>
                    <p><a href=\"{{ path('app_forgot_password_request') }}\" class=\"link\"> Changer votre mot de passe</a></p>
                </div>
            </div>
        </div>


        <div class=\"col-xl-6 col-md-12 col-sm-12 mt-sm-5 mt-xl-0\">
            <div class=\"card categorie\">
                <div class=\"card-body p-4\">
                    <h3 class=\"card-title typo\">Gérez vos catégories <i class=\"ps-3 bi bi-list-ul\"></i></h3>
                    {# J'initialise un array pour stocker les categorie dont l'agriculteur n'est pas present #}
                    {% set categorieOut = [] %}
                    {% set i = 0 %}

                    {% for catRepo in categorie %}

                    {# Je compare si la categorie de la boucle est aussi dans les categorie actives de l'agriculteur #}
                    {% if catRepo in app.user.categorie %}
                    <div class=\"item ps-3\">
                    <div class=\"row align-items-center my-4\">
                        <h4 class=\"col typo\"> <i class=\"bi bi-dot\"></i>{{ catRepo.nom }}</h4>
                        <div class=\"col\">
                            <a href=\"{{ path('agriCategorie_addImages', {'userCategorie': 'edit', 'id': catRepo.id, 'slug': catRepo.nom|replace({' ': '_'}) } ) }}\" class=\"btn btn1 btn_sm col\"><i class=\"bi bi-pencil-square\"></i> Modifier</a>
                        </div>
                    </div>
                            {# J'affiche les images si celles ci est associé a la categorie en cours de boucle #}
                        <ul id=\"content-slider{{ i }}\" class=\"content-slider px-0\">

                            {% for image in app.user.images %}
                            {% if image.categorie == catRepo %}
                            <li>
                                <img src=\"{{ asset('/upload/produit/' ~ image.nom) | imagine_filter('thumb') }}\" alt=\"Les produits {{ catRepo.nom }}\" width=\"auto\">
                            </li>
                            {% endif %}
                            {% endfor %}
                            {% set i = i + 1 %}

                        </ul>
                        </div>
                        <hr class=\"my-5\">

                            {% elseif app.user.categorie not in catRepo.nom %}
                            {% set categorieOut = categorieOut|merge([catRepo]) %}
                            {% endif %}
                            {% endfor %}
                            <ul>
                                {% if categorieOut %}
                            <li>
                            <h4 class=\"typo\">Autres catégories</h4>
                            </li>
                                {% endif %}
                                {% for c in categorieOut %}
                                <li class=\"mb-2\">
                                    <a class=\"btn btn2 btn_sm link-vide-categorie\" href=\"{{ path('agriCategorie_addImages',{'userCategorie': 'new','id': c.id, 'slug': c.nom|replace({' ': '_'}) } ) }}\">
                                     <i class=\"bi bi-plus-square\"></i> Ajouter <span class=\"nom-categorie-vide\">{{ c.nom }}</span></a>
                                </li>

                                {% endfor %}
                                {# ------------------ BASE ------------------ #}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            \$(document).ready(function () {
                {% for key, img in app.user.categorie %}
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

        {% endblock body %}
        {% block js %}

        <script>
            window.onload = () => {
                let activer = document.querySelectorAll(\"[type=checkbox]\")
                for (let bouton of activer) {
                    bouton.addEventListener(\"click\", function () {
                        let xmlhttp = new XMLHttpRequest;

                        xmlhttp.open(\"get\", \"/agriculteur/disponible\")
                        xmlhttp.send()
                    })
                }
            }
        </script>

        <script>
            let loadFile = function (event) {
                let image = document.getElementById('photo');
                image.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
        <script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\"></script>
        {% endblock js %}", "agriculteur/profil/profilAgri.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\agriculteur\\profil\\profilAgri.html.twig");
    }
}

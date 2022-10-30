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

/* agriculteur/inscription.html.twig */
class __TwigTemplate_8a64b3faa8017d65ecdc1edfa40767c1661d1f69a3220f7457c57065386553eb extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
            'jsheader' => [$this, 'block_jsheader'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agriculteur/inscription.html.twig", 1);
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

        echo "Locavor-Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 7
        echo "<style>
header .navbar{
    position: relative !important;
}
header{
    padding-bottom:3.4rem !important;
}
</style>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "

";
        // line 20
        echo "
<main class=\"container-fluid mb-3\">
<div class=\"row signup pb-3\">
<div class=\"col-12 col-lg-6 d-flex flex-column pb-5\">
<div class=\"m-auto container_form\">
 <div class=\"form_inscription\">
    <h2 class=\"typo_large\">Créez votre compte</h2>
    <p class=\"typo mt-3 mb_1\"> <b>Vous êtes producteur ?</b> Il vous faut créer votre compte pour pouvoir apparaitre sur le site. Ça ne prendra que quelques minutes !</p>

";
        // line 30
        echo "<div class=\"step-indicator d-flex mb-2\">
</div>
<p class=\"text-muted small_text mb_2\">( Tous les champs sont obligatoires )</p>

";
        // line 35
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "

    <div class=\"step\" id=\"page1\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'errors');
        echo "
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "ville", [], "any", false, false, false, 39), 'errors');
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "code_postal", [], "any", false, false, false, 40), 'errors');
        echo "
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'errors');
        echo "
    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "nom_domaine", [], "any", false, false, false, 42), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "descriptif", [], "any", false, false, false, 43), 'errors');
        echo "
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "tel_portable", [], "any", false, false, false, 44), 'errors');
        echo "
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "tel_fixe", [], "any", false, false, false, 45), 'errors');
        echo "

        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "ville", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "code_postal", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "adresse", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
         <button class=\"next btn btn1 btn_sm mt-3\" type=\"btn btn1\">Suivant</button>

    </div>
    <div class=\"step\" id=\"page2\">
          <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>

    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "tel_portable", [], "any", false, false, false, 58), 'errors');
        echo "
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "tel_fixe", [], "any", false, false, false, 59), 'errors');
        echo "
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "ville", [], "any", false, false, false, 60), 'errors');
        echo "

        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "nom_domaine", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "descriptif", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "tel_portable", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "tel_fixe", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

          <button class=\"next btn btn1 btn_sm mt-3\" type=\"button\">Suivant</button>       
    </div>

    <div class=\"step\" id=\"page3\">
                <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>

       ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "disponible", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-select"]]);
        echo "
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "Categorie", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "checkbox-input mt-2"]]);
        echo "
                <button class=\"next btn btn1 btn_sm mt-3\" type=\"button\">Suivant</button>        
        </div>

    <div class=\"step\" id=\"page4\">
         <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'errors');
        echo "

        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "email", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "password", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "confirm_password", [], "any", false, false, false, 84), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

    <input type=\"submit\" class=\"btn btn1 mt-4\" value=\"Enregistrer\">
    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
    </div>

 </div>
</div>
</div>
<div class=\"col m-auto\">
<img class=\"radius\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Couple-agriculteur-devant-ordinateur.jpg"), "html", null, true);
        echo "\" alt=\"Inscription sur un site\">
</div>
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 102
        echo "
<script>
// On va chercher les différents éléments de notre page
const pages = document.querySelectorAll(\".step\")
const indicator = document.querySelector(\".step-indicator\")
const nbPages = pages.length // Nombre de pages du formulaire
let pageActive = 1

// On attend le chargement de la page
window.onload = () => {
    // On affiche la 1ère page du formulaire
    document.querySelector(\".step\").style.display = \"initial\"

    // On affiche les numéros des pages dans l'entête
    // On parcourt la liste des pages
    console.log(nbPages);
    pages.forEach((page, index) => {
        // On crée l'élément \"numéro de page\"
        let element = document.createElement(\"div\")
        let hr = document.createElement(\"hr\")

        element.classList.add(\"page-num\")
        element.id = \"num\" + (index + 1)
        if(pageActive === index + 1){
            element.classList.add(\"step-active\")
        }
        
        // element.innerHTML = index + 1      
        indicator.appendChild(element)
         indicator.appendChild(hr)
    })

    // On gère les boutons \"suivant\"
    let boutons = document.querySelectorAll(\".next\")

    for(let bouton of boutons){
        bouton.addEventListener(\"click\", pageSuivante)
    }

    // On gère les boutons \"suivant\"
    boutons = document.querySelectorAll(\".prev\")

    for(let bouton of boutons){
        bouton.addEventListener(\"click\", pagePrecedente)
    }
}

/**
 * Cette fonction fait avancer le formulaire d'une page
 */
function pageSuivante(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = \"none\"
    }

    // On affiche la page suivante
    this.parentElement.nextElementSibling.style.display = \"initial\"

    // On \"désactive\" la page active
    document.querySelector(\".step-active\").classList.remove(\"step-active\")

    // On incrémente pageActive
    pageActive++

    // On \"active\" le nouveau numéro
    document.querySelector(\"#num\"+pageActive).classList.add(\"step-active\")
}

/**
 * Cette fonction fait reculer le formulaire d'une page
 */
function pagePrecedente(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = \"none\"
    }

    // On affiche la page suivante
    this.parentElement.previousElementSibling.style.display = \"initial\"

    // On \"désactive\" la page active
    document.querySelector(\".step-active\").classList.remove(\"step-active\")

    // On incrémente pageActive
    pageActive--

    // On \"active\" le nouveau numéro
    document.querySelector(\"#num\"+pageActive).classList.add(\"step-active\")
}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_jsheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsheader"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agriculteur/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 194,  306 => 102,  296 => 101,  281 => 94,  271 => 87,  265 => 84,  261 => 83,  257 => 82,  252 => 80,  243 => 74,  239 => 73,  228 => 65,  224 => 64,  220 => 63,  216 => 62,  211 => 60,  207 => 59,  203 => 58,  193 => 51,  189 => 50,  185 => 49,  180 => 47,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  155 => 40,  151 => 39,  147 => 38,  140 => 35,  134 => 30,  123 => 20,  119 => 17,  109 => 16,  91 => 7,  81 => 6,  62 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Locavor-Inscription{% endblock %}

\t\t\t\t{% block style %}
<style>
header .navbar{
    position: relative !important;
}
header{
    padding-bottom:3.4rem !important;
}
</style>
\t\t{% endblock %}
{% block body %}


{# ---------- #}

<main class=\"container-fluid mb-3\">
<div class=\"row signup pb-3\">
<div class=\"col-12 col-lg-6 d-flex flex-column pb-5\">
<div class=\"m-auto container_form\">
 <div class=\"form_inscription\">
    <h2 class=\"typo_large\">Créez votre compte</h2>
    <p class=\"typo mt-3 mb_1\"> <b>Vous êtes producteur ?</b> Il vous faut créer votre compte pour pouvoir apparaitre sur le site. Ça ne prendra que quelques minutes !</p>

{# indique le nombre d etapes en javascript #}
<div class=\"step-indicator d-flex mb-2\">
</div>
<p class=\"text-muted small_text mb_2\">( Tous les champs sont obligatoires )</p>

{# debut formulaire #}
    {{ form_start(registrationForm)}}

    <div class=\"step\" id=\"page1\">
        {{ form_errors(registrationForm.nom) }}
    {{ form_errors(registrationForm.ville) }}
    {{ form_errors(registrationForm.code_postal) }}
    {{ form_errors(registrationForm.adresse) }}
    {{ form_errors(registrationForm.nom_domaine) }}
    {{ form_errors(registrationForm.descriptif) }}
    {{ form_errors(registrationForm.tel_portable) }}
    {{ form_errors(registrationForm.tel_fixe) }}

        {{ form_row(registrationForm.nom, {'attr': {'class': 'form-control'}})}}
        
        {{ form_row(registrationForm.ville, {'attr': {'class': 'form-control'}} )}}
        {{ form_row(registrationForm.code_postal, {'attr': {'class': 'form-control'}})}}
        {{ form_row(registrationForm.adresse, {'attr': {'class': 'form-control'}})}}
         <button class=\"next btn btn1 btn_sm mt-3\" type=\"btn btn1\">Suivant</button>

    </div>
    <div class=\"step\" id=\"page2\">
          <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>

    {{ form_errors(registrationForm.tel_portable) }}
    {{ form_errors(registrationForm.tel_fixe) }}
    {{ form_errors(registrationForm.ville) }}

        {{ form_row(registrationForm.nom_domaine, {'attr': {'class': 'form-control'}})}}
        {{ form_row(registrationForm.descriptif, {'attr': {'class': 'form-control'}})}}
       {{ form_row(registrationForm.tel_portable, {'attr': {'class': 'form-control'}})}}
       {{ form_row(registrationForm.tel_fixe, {'attr': {'class': 'form-control'}})}}

          <button class=\"next btn btn1 btn_sm mt-3\" type=\"button\">Suivant</button>       
    </div>

    <div class=\"step\" id=\"page3\">
                <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>

       {{ form_row(registrationForm.disponible, {'attr': {'class': 'form-select'}})}}
        {{ form_row(registrationForm.Categorie, {'attr': {'class': 'checkbox-input mt-2'}})}}
                <button class=\"next btn btn1 btn_sm mt-3\" type=\"button\">Suivant</button>        
        </div>

    <div class=\"step\" id=\"page4\">
         <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>
    {{ form_errors(registrationForm.email) }}

        {{ form_row(registrationForm.email, {'attr': {'class': 'form-control'}})}}
        {{ form_row(registrationForm.password, {'attr': {'class': 'form-control'}})}}
       {{ form_row(registrationForm.confirm_password, {'attr': {'class': 'form-control'}})}}

    <input type=\"submit\" class=\"btn btn1 mt-4\" value=\"Enregistrer\">
    {{ form_end(registrationForm) }}
    </div>

 </div>
</div>
</div>
<div class=\"col m-auto\">
<img class=\"radius\" src=\"{{ asset('/images/Couple-agriculteur-devant-ordinateur.jpg') }}\" alt=\"Inscription sur un site\">
</div>
</div>
</main>
{# ----------- #}
{% endblock %}

{% block js %}

<script>
// On va chercher les différents éléments de notre page
const pages = document.querySelectorAll(\".step\")
const indicator = document.querySelector(\".step-indicator\")
const nbPages = pages.length // Nombre de pages du formulaire
let pageActive = 1

// On attend le chargement de la page
window.onload = () => {
    // On affiche la 1ère page du formulaire
    document.querySelector(\".step\").style.display = \"initial\"

    // On affiche les numéros des pages dans l'entête
    // On parcourt la liste des pages
    console.log(nbPages);
    pages.forEach((page, index) => {
        // On crée l'élément \"numéro de page\"
        let element = document.createElement(\"div\")
        let hr = document.createElement(\"hr\")

        element.classList.add(\"page-num\")
        element.id = \"num\" + (index + 1)
        if(pageActive === index + 1){
            element.classList.add(\"step-active\")
        }
        
        // element.innerHTML = index + 1      
        indicator.appendChild(element)
         indicator.appendChild(hr)
    })

    // On gère les boutons \"suivant\"
    let boutons = document.querySelectorAll(\".next\")

    for(let bouton of boutons){
        bouton.addEventListener(\"click\", pageSuivante)
    }

    // On gère les boutons \"suivant\"
    boutons = document.querySelectorAll(\".prev\")

    for(let bouton of boutons){
        bouton.addEventListener(\"click\", pagePrecedente)
    }
}

/**
 * Cette fonction fait avancer le formulaire d'une page
 */
function pageSuivante(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = \"none\"
    }

    // On affiche la page suivante
    this.parentElement.nextElementSibling.style.display = \"initial\"

    // On \"désactive\" la page active
    document.querySelector(\".step-active\").classList.remove(\"step-active\")

    // On incrémente pageActive
    pageActive++

    // On \"active\" le nouveau numéro
    document.querySelector(\"#num\"+pageActive).classList.add(\"step-active\")
}

/**
 * Cette fonction fait reculer le formulaire d'une page
 */
function pagePrecedente(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = \"none\"
    }

    // On affiche la page suivante
    this.parentElement.previousElementSibling.style.display = \"initial\"

    // On \"désactive\" la page active
    document.querySelector(\".step-active\").classList.remove(\"step-active\")

    // On incrémente pageActive
    pageActive--

    // On \"active\" le nouveau numéro
    document.querySelector(\"#num\"+pageActive).classList.add(\"step-active\")
}
</script>
{% endblock %}
{% block jsheader %}
{% endblock %}
", "agriculteur/inscription.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\agriculteur\\inscription.html.twig");
    }
}

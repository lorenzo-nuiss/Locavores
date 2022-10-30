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
class __TwigTemplate_fa2a385b6f36e82e3d0b02d54bd9a2aeab1a932c0e81d0c7b92669752e5f8857 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agriculteur/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Locavor-Inscription";
    }

    // line 6
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "

    <div class=\"step\" id=\"page1\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", [], "any", false, false, false, 38), 'errors');
        echo "
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", [], "any", false, false, false, 39), 'errors');
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "code_postal", [], "any", false, false, false, 40), 'errors');
        echo "
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "adresse", [], "any", false, false, false, 41), 'errors');
        echo "
    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom_domaine", [], "any", false, false, false, 42), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "descriptif", [], "any", false, false, false, 43), 'errors');
        echo "
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "tel_portable", [], "any", false, false, false, 44), 'errors');
        echo "
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "tel_fixe", [], "any", false, false, false, 45), 'errors');
        echo "

        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "code_postal", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "adresse", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
         <button class=\"next btn btn1 btn_sm mt-3\" type=\"btn btn1\">Suivant</button>

    </div>
    <div class=\"step\" id=\"page2\">
          <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>

    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "tel_portable", [], "any", false, false, false, 58), 'errors');
        echo "
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "tel_fixe", [], "any", false, false, false, 59), 'errors');
        echo "
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", [], "any", false, false, false, 60), 'errors');
        echo "

        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom_domaine", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "descriptif", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "tel_portable", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "tel_fixe", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

          <button class=\"next btn btn1 btn_sm mt-3\" type=\"button\">Suivant</button>       
    </div>

    <div class=\"step\" id=\"page3\">
                <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>

       ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "disponible", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-select"]]);
        echo "
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "Categorie", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "checkbox-input mt-2"]]);
        echo "
                <button class=\"next btn btn1 btn_sm mt-3\" type=\"button\">Suivant</button>        
        </div>

    <div class=\"step\" id=\"page4\">
         <button class=\"prev btn btn2 btn_sm\" type=\"button\"><i class=\"bi bi-chevron-left\"></i>Précédent</button>
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 80), 'errors');
        echo "

        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "confirm_password", [], "any", false, false, false, 84), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

    <input type=\"submit\" class=\"btn btn1 mt-4\" value=\"Enregistrer\">
    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
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
    }

    // line 101
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 194
    public function block_jsheader($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  347 => 194,  252 => 102,  248 => 101,  239 => 94,  229 => 87,  223 => 84,  219 => 83,  215 => 82,  210 => 80,  201 => 74,  197 => 73,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  169 => 60,  165 => 59,  161 => 58,  151 => 51,  147 => 50,  143 => 49,  138 => 47,  133 => 45,  129 => 44,  125 => 43,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  98 => 35,  92 => 30,  81 => 20,  77 => 17,  73 => 16,  61 => 7,  57 => 6,  50 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agriculteur/inscription.html.twig", "/home/users7/c/czh4993/www/templates/agriculteur/inscription.html.twig");
    }
}

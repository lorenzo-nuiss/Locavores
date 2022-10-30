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

/* security/login_user.html.twig */
class __TwigTemplate_01bc9ac86e5f7ad9173dadca1c6070ffe55518b3bad5c9094eddba03e99f9165 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login_user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Locavor-Connexion";
    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<main class=\"container-fluid my-5 pt-5 px-5\">

<section class=\"row signup pb-3\">
<div class=\"col-md-6 col-12 d-flex flex-column\">
<div class=\"m-auto container_form\">
<form method=\"post\">
    ";
        // line 16
        if (($context["error"] ?? null)) {
            // line 17
            echo "        <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <div class=\"my-3\">
             ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo " Vous êtes connecter, <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
        </div>
    ";
        }
        // line 25
        echo "
    <h2 class=\"typo_large\">Connexion</h2>
    <p class=\"typo mt-3 mb-5\">Si vous êtes déjà membre connectez-vous içi.</p>
    <input type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control my-xl-4 my-sm-3\" autocomplete=\"email\" required autofocus placeholder=\"Email\">
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control my-xl-4 my-sm-3\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

    ";
        // line 44
        echo "
    <button class=\"btn btn1 my-3 width\" type=\"submit\">
        Se connecter
    </button>
        <br>
    
</form>
        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"link\">Mot de passe oublié ?</a>
<hr class=\"my_1\">
<div class=\"d-flex justify-content-between pb-4\">
<p class=\"typo m-auto\">Vous n'avez pas encore de compte ? 
</p>
<div class=\"ms-2\">
<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registere");
        echo "\" class=\"btn btn1 btn_sm ms-xl-3 ms-lg-2\">S'inscrire</a>
</div>
</div>

</div>
</div>
<div class=\"col-md-6 col-12\">
<img class=\"radius\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Femme-fait-des-recherches-sur-internet.jpg"), "html", null, true);
        echo "\" alt=\"Illustration connexion au site\">
</div>
</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "security/login_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 64,  135 => 57,  126 => 51,  117 => 44,  112 => 32,  105 => 28,  100 => 25,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  78 => 17,  76 => 16,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login_user.html.twig", "/home/users7/c/czh4993/www/templates/security/login_user.html.twig");
    }
}

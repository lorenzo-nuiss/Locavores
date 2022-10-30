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

/* reset_password/request.html.twig */
class __TwigTemplate_ee825df8ab694fa990125cd2c1f785d3cc23a2c25ef2fe6ae27b186eaf29aae1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Locavor - Réinitialisez votre mot de passe";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "       
<main class=\"container-fluid mb-5 mt-5 px-5\">

<section class=\"row signup pb-3\">
<div class=\"col-md-6 col-12 d-flex flex-column\">
";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "</div>


<div class=\"col\">
<img class=\"radius\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Producteur-qui-se-pose-questions-site.jpg"), "html", null, true);
        echo "\" alt=\"Illustration mot de passe perdu\">
</div>
</section>
</main>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"m-auto container_form\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "reset_password_error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 14
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <h2 class=\"typo mb-5\">Réinitialisez votre mot de passe</h2>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 20), 'row');
        echo "
        <div class=\"mt-4\">
            <small>
                Entrez votre adresse e-mail et nous vous enverrons un
                lien pour réinitialiser votre mot de passe.
            </small>
        </div>

    <button class=\"btn btn1 my-3 width\" type=\"submit\">
        Réinitialisez votre mot de passe
    </button>
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        echo "

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 31,  112 => 20,  108 => 19,  103 => 16,  94 => 14,  90 => 13,  87 => 12,  83 => 11,  74 => 39,  68 => 35,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/request.html.twig", "/home/users7/c/czh4993/www/templates/reset_password/request.html.twig");
    }
}

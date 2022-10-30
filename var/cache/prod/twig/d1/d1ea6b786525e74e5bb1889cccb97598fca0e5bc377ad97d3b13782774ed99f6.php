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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_8de3192f94677eefd1b94bd4109e619d156524fcc6c83ed956bda30f21645462 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page non trouvée
\t\t\t";
    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<style>
h2.status{
    font-size:20rem; 
    margin-top:-20px;
}
</style>
\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<main class=\"container py-md-5\">
<div class=\"text-center my-md-4\">

    <h1 class=\"fw-bold\">Oups !</h1>
    <h2 class=\"fw-bold status\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</h2>
    <p>
        Malheureusement la page est introuvable, vérifiez si L'URL est correcte </br>
    </p>

        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn1 mt-4\">Retourner à l'accueil</a>
</div>
</main>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  80 => 17,  74 => 13,  70 => 12,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "/home/users7/c/czh4993/www/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}

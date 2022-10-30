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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_f83533e6b3c1c61f84985c50edabd335c4079fe0012757d42cdfb4e4a3165227 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Erreur
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
        Une erreur s'est produite : ";
        // line 19
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo " .
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
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  85 => 19,  80 => 17,  74 => 13,  70 => 12,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error.html.twig", "/home/users7/c/czh4993/www/templates/bundles/TwigBundle/Exception/error.html.twig");
    }
}

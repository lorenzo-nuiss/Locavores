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

/* header.html.twig */
class __TwigTemplate_d0fa66933a91bfde815b93e086e0a5dce8595f3f519544819141e741a21ed167 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbarPageHome' => [$this, 'block_navbarPageHome'],
            'navbarPageContact' => [$this, 'block_navbarPageContact'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\t\t\t<header>
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
\t\t\t\t\t<div class=\"container-fluid p-1\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-les-locavores.svg"), "html", null, true);
        echo "\" class=\"brand-logo\" alt=\"logo les locavores\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-lg-3\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t";
        // line 13
        $this->displayBlock('navbarPageHome', $context, $blocks);
        // line 15
        echo " 
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        Nos producteurs
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 23
            echo "                                        <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listAgriByCategorie", ["categorie_name" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 24), [" " => "_"])]), "html", null, true);
            echo "\">
                                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "
                                        </a>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                    </ul>
                                    </li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t";
        // line 32
        $this->displayBlock('navbarPageContact', $context, $blocks);
        // line 34
        echo " 


\t\t\t\t\t\t\t\t<li class=\"nav-item d-lg-none\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn2 pt-2\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t\t\t\t\tEspace producteur</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t<a class=\"link me-2 d-none d-lg-block\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\tEspace producteur</a>
\t\t\t\t</nav>
\t\t\t</header>
";
    }

    // line 13
    public function block_navbarPageHome($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t";
    }

    // line 32
    public function block_navbarPageContact($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  136 => 32,  129 => 14,  125 => 13,  116 => 47,  104 => 38,  98 => 34,  96 => 32,  91 => 29,  81 => 25,  77 => 24,  74 => 23,  70 => 22,  61 => 15,  59 => 13,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/home/users7/c/czh4993/www/templates/header.html.twig");
    }
}

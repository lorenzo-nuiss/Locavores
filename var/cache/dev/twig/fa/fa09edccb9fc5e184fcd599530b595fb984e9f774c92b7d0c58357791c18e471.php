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
class __TwigTemplate_de1bd2bba5f35609af59afda339fc3c01f911de6b051aa81e656e89d3bcea973 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 22, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_navbarPageHome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageHome"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageHome"));

        // line 14
        echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_navbarPageContact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageContact"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageContact"));

        // line 33
        echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  170 => 33,  160 => 32,  147 => 14,  137 => 13,  122 => 47,  110 => 38,  104 => 34,  102 => 32,  97 => 29,  87 => 25,  83 => 24,  80 => 23,  76 => 22,  67 => 15,  65 => 13,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t\t\t<header>
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
\t\t\t\t\t<div class=\"container-fluid p-1\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('home')}}\">
\t\t\t\t\t\t<img src=\"{{ asset('/images/logo-les-locavores.svg') }}\" class=\"brand-logo\" alt=\"logo les locavores\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-lg-3\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t{% block navbarPageHome %}
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('home')}}\">Accueil</a>
\t\t\t\t\t\t\t\t{% endblock %} 
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        Nos producteurs
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    {% for categorie in categories %}
                                        <li>
                                        <a class=\"dropdown-item\" href=\"{{ path('listAgriByCategorie', {'categorie_name': categorie.nom|replace({' ': '_'}) }) }}\">
                                        {{ categorie.nom }}
                                        </a>
                                        </li>
                                    {% endfor %}
                                    </ul>
                                    </li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t{% block navbarPageContact %}
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('contact')}}\">Contact</a>
\t\t\t\t\t\t\t\t{% endblock %} 


\t\t\t\t\t\t\t\t<li class=\"nav-item d-lg-none\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn2 pt-2\" href=\"{{ path('app_login')}}\">
\t\t\t\t\t\t\t\t\tEspace producteur</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t<a class=\"link me-2 d-none d-lg-block\" href=\"{{ path('app_login')}}\">
\t\t\t\tEspace producteur</a>
\t\t\t\t</nav>
\t\t\t</header>
", "header.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\header.html.twig");
    }
}

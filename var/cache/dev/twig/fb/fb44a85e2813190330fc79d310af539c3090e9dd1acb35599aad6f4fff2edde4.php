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

/* footer.html.twig */
class __TwigTemplate_a6e3ca6411c1e45ed82039290456c211bdfc15ce71af6b8d3cb1f29476c5d93d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "\t<footer class=\"text-center text-lg-start\">

\t\t\t<section class=\"contenu-footer\">
\t\t\t\t<div class=\"container text-center text-md-start mt-5\">
\t\t\t\t\t<!-- Grid row -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row mt-3\">
\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div class=\"col-md-3 mx-auto mb-4 contact\">

\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t";
        // line 15
        if ( !(isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLes informations de contacts ne sont pas disponibles pour le moment.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-open\"></i>
                                ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
                echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 27
            echo "

\t\t\t\t\t\t\t\t";
            // line 29
            if (twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 29, $this->source); })()), "telFixe", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 32, $this->source); })()), "telFixe", [], "any", false, false, false, 32), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "
\t\t\t\t\t\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 36, $this->source); })()), "telPortable", [], "any", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 39, $this->source); })()), "telPortable", [], "any", false, false, false, 39), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t";
        }
        // line 43
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3 ps-lg-5 mb-4 page\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-reset\">Accueil</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"text-reset\">Contact</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-md-3 mx-auto mb-4 page\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tNos catégories
\t\t\t\t\t\t\t</h6>
                                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 64
            echo "                                        <p>
                                        <a class=\"text-reset\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listAgriByCategorie", ["categorie_name" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 65), [" " => "_"])]), "html", null, true);
            echo "\">
                                        ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                        </a>
                                        </p>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3 mx-auto mb-4\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tNos reseaux
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Section: Links  -->

\t\t\t<!-- Copyright -->
\t\t\t<div class=\"text-center p-4 copyright\">
\t\t\t\t
\t\t\t\t\t\t\t<span class=\"pe-4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
        echo "\" class=\"text-reset\">Mentions legales</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"pe-4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiqueConfidentialite");
        echo "\" class=\"text-reset\">Politique de confidentialité </a>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"pe-4\">
\t\t\t\t© 2021 Copyright
\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t\t<!-- Copyright -->
\t\t</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 100,  193 => 97,  164 => 70,  154 => 66,  150 => 65,  147 => 64,  143 => 63,  131 => 54,  125 => 51,  115 => 43,  112 => 42,  106 => 39,  102 => 37,  100 => 36,  97 => 35,  91 => 32,  87 => 30,  85 => 29,  81 => 27,  75 => 24,  71 => 22,  68 => 21,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<footer class=\"text-center text-lg-start\">

\t\t\t<section class=\"contenu-footer\">
\t\t\t\t<div class=\"container text-center text-md-start mt-5\">
\t\t\t\t\t<!-- Grid row -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row mt-3\">
\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div class=\"col-md-3 mx-auto mb-4 contact\">

\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t{% if not contactInfo %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLes informations de contacts ne sont pas disponibles pour le moment.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% if contactInfo.email %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-open\"></i>
                                {{ contactInfo.email}}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t{% if contactInfo.telFixe %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t{{ contactInfo.telFixe}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if contactInfo.telPortable %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t{{ contactInfo.telPortable}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3 ps-lg-5 mb-4 page\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('home')}}\" class=\"text-reset\">Accueil</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('contact')}}\" class=\"text-reset\">Contact</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-md-3 mx-auto mb-4 page\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tNos catégories
\t\t\t\t\t\t\t</h6>
                                    {% for categorie in categories %}
                                        <p>
                                        <a class=\"text-reset\" href=\"{{ path('listAgriByCategorie', {'categorie_name': categorie.nom|replace({' ': '_'}) }) }}\">
                                        {{ categorie.nom }}
                                        </a>
                                        </p>
                                    {% endfor %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3 mx-auto mb-4\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tNos reseaux
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Section: Links  -->

\t\t\t<!-- Copyright -->
\t\t\t<div class=\"text-center p-4 copyright\">
\t\t\t\t
\t\t\t\t\t\t\t<span class=\"pe-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('mention')}}\" class=\"text-reset\">Mentions legales</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"pe-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('politiqueConfidentialite')}}\" class=\"text-reset\">Politique de confidentialité </a>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"pe-4\">
\t\t\t\t© 2021 Copyright
\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t\t<!-- Copyright -->
\t\t</footer>", "footer.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\footer.html.twig");
    }
}

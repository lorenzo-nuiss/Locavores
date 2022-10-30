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
class __TwigTemplate_e3d8566d69f375b1ce1c4c77d32f4c93d5cfca8d0b06aceeb243aaf55d42db88 extends Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 15) && twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telFixe", [], "any", false, false, false, 15)) && twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telPortable", [], "any", false, false, false, 15))) {
            // line 16
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLes informations de contacts ne sont pas disponibles pour le moment.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 20
        echo "

\t\t\t\t\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-open\"></i>
                                ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 28
        echo "

\t\t\t\t\t\t\t\t";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telFixe", [], "any", false, false, false, 30)) {
            // line 31
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telFixe", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "
\t\t\t\t\t\t\t\t";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telPortable", [], "any", false, false, false, 37)) {
            // line 38
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telPortable", [], "any", false, false, false, 40), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        return array (  192 => 100,  186 => 97,  157 => 70,  147 => 66,  143 => 65,  140 => 64,  136 => 63,  124 => 54,  118 => 51,  108 => 43,  102 => 40,  98 => 38,  96 => 37,  93 => 36,  87 => 33,  83 => 31,  81 => 30,  77 => 28,  71 => 25,  67 => 23,  65 => 22,  61 => 20,  55 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/home/users7/c/czh4993/www/templates/footer.html.twig");
    }
}

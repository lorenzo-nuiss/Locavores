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

/* sitemap/index.html.twig */
class __TwigTemplate_ed66d71e50a4acbc026643052b646b220dc63fac21ca03e288fc590f30e562bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" 
xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
 xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">


";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 10
            echo "    <url>
        ";
            // line 12
            echo "        ";
            // line 13
            echo "        <loc>
            ";
            // line 14
            if ((0 === twig_compare(twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 14), ["hostname" => ""]), twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 14)))) {
                // line 15
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 15, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 15), "html", null, true);
                echo "
            ";
            } else {
                // line 17
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 17), "html", null, true);
                echo "
            ";
            }
            // line 19
            echo "        </loc>

        ";
            // line 22
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", true, true, false, 22)) {
                // line 23
                echo "            <priority>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", false, false, false, 23), "html", null, true);
                echo "</priority>
        ";
            }
            // line 25
            echo "

    </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
</urlset>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  92 => 25,  86 => 23,  83 => 22,  79 => 19,  73 => 17,  66 => 15,  64 => 14,  61 => 13,  59 => 12,  56 => 10,  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" 
xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
 xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">


{# On boucle sur les URLs #}
{% for url in urls %}
    <url>
        {# On vérifie si le nom d'hôte (hostname) est présent dans l'url #}
        {# Si il n'y est pas, on l'ajoute #}
        <loc>
            {% if url.loc|replace({hostname:''}) == url.loc %}
                {{ hostname }}{{ url.loc }}
            {% else %}
                {{ url.loc }}
            {% endif %}
        </loc>

        {# Si il y a une priorité #}
        {% if url.priority is defined %}
            <priority>{{url.priority}}</priority>
        {% endif %}


    </url>
{% endfor %}

</urlset>", "sitemap/index.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\sitemap\\index.html.twig");
    }
}

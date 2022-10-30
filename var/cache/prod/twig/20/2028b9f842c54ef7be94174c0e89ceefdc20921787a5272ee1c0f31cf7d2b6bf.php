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
class __TwigTemplate_f47fe2ec25f9dc8d45f5cd867b9b93dba4010802ce72fc1a31db4efe9d0de56f extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" 
xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
 xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">


";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
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
        return array (  95 => 29,  86 => 25,  80 => 23,  77 => 22,  73 => 19,  67 => 17,  60 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 10,  46 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sitemap/index.html.twig", "/home/users7/c/czh4993/www/templates/sitemap/index.html.twig");
    }
}

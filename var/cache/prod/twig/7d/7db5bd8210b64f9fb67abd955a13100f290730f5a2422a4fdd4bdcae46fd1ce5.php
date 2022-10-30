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

/* visiteur/contact.html.twig */
class __TwigTemplate_a2b86feb0c1d82c72d99a342eb468a0664afd5e06768bff2c2b1347dc745d156 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metaDescr' => [$this, 'block_metaDescr'],
            'style' => [$this, 'block_style'],
            'navbarPageContact' => [$this, 'block_navbarPageContact'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
            'jsheader' => [$this, 'block_jsheader'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo " Contact -
";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t\t\t";
    }

    // line 9
    public function block_metaDescr($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t<meta name=\"description\" content=\"Vous souhaitez contacter Les locavores ? vous pouvez nous appeller ou bien nous envoyer un message.\">
\t\t\t";
    }

    // line 12
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<style>
header .navbar{
    position: relative !important;
}
header{
    padding-bottom: 0 !important;
}
</style>
        <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
\t\t";
    }

    // line 24
    public function block_navbarPageContact($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
";
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "

";
        // line 33
        echo "
<main class=\"contact py-5\">
<div class=\"container mb-3 py-3\">
<div class=\"row gx-md-5 pb-3\">

<div class=\"col-12 col-lg-6 pe-md-3\">
    <h1 class=\"semi-bold marron\">Contactez nous</h1>
    <p class=\"typo mt-4 mb_1 pe-3 gris-fonce\">N’hésitez pas à nous envoyer un message pour toute question ou information, vous pouvez aussi nous joindre directement à l'aide des coordonnées ci-dessous.</p>

<div class=\"contact-detail my-3 col-md-8\">

";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telFixe", [], "any", false, false, false, 44)) {
            // line 45
            echo "<div class=\"card my-3\">
    <a href=\"tel:";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telFixe", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"card-body text-reset text-decoration-none\">
    <p class=\"link\">
    <i class=\"bi bi-telephone-fill me-3\"></i>
    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telFixe", [], "any", false, false, false, 49), "html", null, true);
            echo "
    </p>
    </a>
  </div>
";
        }
        // line 54
        echo "
";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telPortable", [], "any", false, false, false, 55)) {
            // line 56
            echo "  <div class=\"card my-3\">
    <a href=\"tel:";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telPortable", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"card-body text-reset text-decoration-none\">
    <p class=\"link\">
    <i class=\"bi bi-phone-fill me-3\"></i>
    ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "telPortable", [], "any", false, false, false, 60), "html", null, true);
            echo "
    </p>
    </a>
  </div>
  ";
        }
        // line 65
        echo "
";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 66)) {
            // line 67
            echo "  <div class=\"card my-3\">
    <a href=\"mailto:";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"card-body text-reset text-decoration-none\">
    <p class=\"link\">
    <i class=\"bi bi-envelope-fill me-3\"></i>
      ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "email", [], "any", false, false, false, 71), "html", null, true);
            echo "
    </p>
    </a>
</div>
";
        }
        // line 76
        echo "

</div>
<lottie-player src=\"https://assets1.lottiefiles.com/packages/lf20_rzusibpf.json\" background=\"transparent\"  speed=\"0.75\"  style=\"width: 250px; height: 250px; margin: auto;\" loop autoplay></lottie-player>

</div>

<div class=\"col px-5 my-auto\">
<div class=\"m-auto container_form p-5 radius small_shadow\">
 <div class=\"form_inscription\">

\t\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 88
            echo "\t\t\t\t\t<div class=\"mx-auto alert-dismissible fade show alert alert-success\" role=\"alert\">
                    ";
            // line 89
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
                    </button>
                    </div>
                  <style>
                    form{
                        display:none;
                    }
                  </style>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
";
        // line 101
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"list-form\">
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 103), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 104), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 106), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 108), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 110), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

<p class=\"text-muted small_text\">( Tous les champs sont obligatoires )</p>
<div class=\"text-end\">
     <input type=\"submit\" class=\"btn btn1 mt-4\" value=\"Envoyer le message\">
</div>
    ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>

 </div>
</div>
</div>

</div>
</div>
</main>
";
    }

    // line 129
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 131
    public function block_jsheader($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "visiteur/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 131,  274 => 129,  259 => 116,  250 => 110,  245 => 108,  240 => 106,  235 => 104,  231 => 103,  225 => 101,  222 => 99,  206 => 89,  203 => 88,  199 => 87,  186 => 76,  178 => 71,  172 => 68,  169 => 67,  167 => 66,  164 => 65,  156 => 60,  150 => 57,  147 => 56,  145 => 55,  142 => 54,  134 => 49,  128 => 46,  125 => 45,  123 => 44,  110 => 33,  106 => 30,  102 => 29,  95 => 25,  91 => 24,  78 => 13,  74 => 12,  69 => 10,  65 => 9,  59 => 6,  56 => 5,  52 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "visiteur/contact.html.twig", "/home/users7/c/czh4993/www/templates/visiteur/contact.html.twig");
    }
}

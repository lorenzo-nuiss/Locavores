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
class __TwigTemplate_38d96741bdd97ca3b5c33b4e2420c30c6cbfbf4e70c86528423183de3c962f59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo " Contact -
";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_metaDescr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        // line 10
        echo "\t\t<meta name=\"description\" content=\"Vous souhaitez contacter Les locavores ? vous pouvez nous appeller ou bien nous envoyer un message.\">
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_navbarPageContact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageContact"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarPageContact"));

        // line 25
        echo "<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        // line 43
        if ((isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 43, $this->source); })())) {
            // line 44
            if (twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 44, $this->source); })()), "telFixe", [], "any", false, false, false, 44)) {
                // line 45
                echo "<div class=\"card my-3\">
  <a href=\"tel:";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 46, $this->source); })()), "telFixe", [], "any", false, false, false, 46), "html", null, true);
                echo "\" class=\"card-body text-reset text-decoration-none\">
    <p class=\"link\">
      <i class=\"bi bi-telephone-fill me-3\"></i>
      ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 49, $this->source); })()), "telFixe", [], "any", false, false, false, 49), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 55, $this->source); })()), "telPortable", [], "any", false, false, false, 55)) {
                // line 56
                echo "<div class=\"card my-3\">
    <a href=\"tel:";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 57, $this->source); })()), "telPortable", [], "any", false, false, false, 57), "html", null, true);
                echo "\" class=\"card-body text-reset text-decoration-none\">
      <p class=\"link\">
        <i class=\"bi bi-phone-fill me-3\"></i>
        ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 60, $this->source); })()), "telPortable", [], "any", false, false, false, 60), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66)) {
                // line 67
                echo "  <div class=\"card my-3\">
    <a href=\"mailto:";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "html", null, true);
                echo "\" class=\"card-body text-reset text-decoration-none\">
      <p class=\"link\">
        <i class=\"bi bi-envelope-fill me-3\"></i>
        ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), "html", null, true);
                echo "
      </p>
    </a>
  </div>
  ";
            }
            // line 76
            echo "  ";
        }
        // line 77
        echo "  

</div>
<lottie-player src=\"https://assets1.lottiefiles.com/packages/lf20_rzusibpf.json\" background=\"transparent\"  speed=\"0.75\"  style=\"width: 250px; height: 250px; margin: auto;\" loop autoplay></lottie-player>

</div>

<div class=\"col px-5 my-auto\">
<div class=\"m-auto container_form p-5 radius small_shadow\">
 <div class=\"form_inscription\">

\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 89
            echo "\t\t\t\t\t<div class=\"mx-auto alert-dismissible fade show alert alert-success\" role=\"alert\">
                    ";
            // line 90
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
        // line 100
        echo "
";
        // line 102
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_start');
        echo "
    <div class=\"list-form\">
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "statut", [], "any", false, false, false, 104), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "nom", [], "any", false, false, false, 105), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "telephone", [], "any", false, false, false, 109), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "message", [], "any", false, false, false, 111), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

<p class=\"text-muted small_text\">( Tous les champs sont obligatoires )</p>
<div class=\"text-end\">
     <input type=\"submit\" class=\"btn btn1 mt-4\" value=\"Envoyer le message\">
</div>
    ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
    </div>

 </div>
</div>
</div>

</div>
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_jsheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsheader"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  368 => 132,  350 => 130,  329 => 117,  320 => 111,  315 => 109,  310 => 107,  305 => 105,  301 => 104,  295 => 102,  292 => 100,  276 => 90,  273 => 89,  269 => 88,  256 => 77,  253 => 76,  245 => 71,  239 => 68,  236 => 67,  234 => 66,  231 => 65,  223 => 60,  217 => 57,  214 => 56,  212 => 55,  209 => 54,  201 => 49,  195 => 46,  192 => 45,  190 => 44,  188 => 43,  176 => 33,  172 => 30,  162 => 29,  149 => 25,  139 => 24,  120 => 13,  110 => 12,  99 => 10,  89 => 9,  77 => 6,  74 => 5,  64 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
 Contact -
{{parent()}}
\t\t\t{% endblock %}

\t\t\t{% block metaDescr %}
\t\t<meta name=\"description\" content=\"Vous souhaitez contacter Les locavores ? vous pouvez nous appeller ou bien nous envoyer un message.\">
\t\t\t{% endblock %}
\t\t\t\t{% block style %}
<style>
header .navbar{
    position: relative !important;
}
header{
    padding-bottom: 0 !important;
}
</style>
        <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
\t\t{% endblock %}

{% block navbarPageContact %}
<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('contact')}}\">Contact</a>
{% endblock %}


{% block body %}


{# ---------- #}

<main class=\"contact py-5\">
<div class=\"container mb-3 py-3\">
<div class=\"row gx-md-5 pb-3\">

<div class=\"col-12 col-lg-6 pe-md-3\">
    <h1 class=\"semi-bold marron\">Contactez nous</h1>
    <p class=\"typo mt-4 mb_1 pe-3 gris-fonce\">N’hésitez pas à nous envoyer un message pour toute question ou information, vous pouvez aussi nous joindre directement à l'aide des coordonnées ci-dessous.</p>

<div class=\"contact-detail my-3 col-md-8\">
{% if contactInfo %}
{% if contactInfo.telFixe %}
<div class=\"card my-3\">
  <a href=\"tel:{{ contactInfo.telFixe }}\" class=\"card-body text-reset text-decoration-none\">
    <p class=\"link\">
      <i class=\"bi bi-telephone-fill me-3\"></i>
      {{ contactInfo.telFixe }}
    </p>
  </a>
</div>
{% endif %}

{% if contactInfo.telPortable %}
<div class=\"card my-3\">
    <a href=\"tel:{{ contactInfo.telPortable }}\" class=\"card-body text-reset text-decoration-none\">
      <p class=\"link\">
        <i class=\"bi bi-phone-fill me-3\"></i>
        {{ contactInfo.telPortable }}
      </p>
    </a>
  </div>
  {% endif %}
  
  {% if contactInfo.email %}
  <div class=\"card my-3\">
    <a href=\"mailto:{{ contactInfo.email }}\" class=\"card-body text-reset text-decoration-none\">
      <p class=\"link\">
        <i class=\"bi bi-envelope-fill me-3\"></i>
        {{ contactInfo.email }}
      </p>
    </a>
  </div>
  {% endif %}
  {% endif %}
  

</div>
<lottie-player src=\"https://assets1.lottiefiles.com/packages/lf20_rzusibpf.json\" background=\"transparent\"  speed=\"0.75\"  style=\"width: 250px; height: 250px; margin: auto;\" loop autoplay></lottie-player>

</div>

<div class=\"col px-5 my-auto\">
<div class=\"m-auto container_form p-5 radius small_shadow\">
 <div class=\"form_inscription\">

\t\t\t\t{% for notification in app.flashes('success') %}
\t\t\t\t\t<div class=\"mx-auto alert-dismissible fade show alert alert-success\" role=\"alert\">
                    {{ notification }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
                    </button>
                    </div>
                  <style>
                    form{
                        display:none;
                    }
                  </style>
                {% endfor %}

{# debut formulaire #}
    {{ form_start(form)}}
    <div class=\"list-form\">
        {{ form_row(form.statut, {'attr': {'class': 'form-control'}})}}
        {{ form_row(form.nom, {'attr': {'class': 'form-control'}})}}

        {{ form_row(form.email, {'attr': {'class': 'form-control'}})}}

        {{ form_row(form.telephone, {'attr': {'class': 'form-control'}} )}}

        {{ form_row(form.message, {'attr': {'class': 'form-control'}})}}

<p class=\"text-muted small_text\">( Tous les champs sont obligatoires )</p>
<div class=\"text-end\">
     <input type=\"submit\" class=\"btn btn1 mt-4\" value=\"Envoyer le message\">
</div>
    {{ form_end(form) }}
    </div>

 </div>
</div>
</div>

</div>
</div>
</main>
{# ----------- #}
{% endblock %}

{% block js %}
{% endblock %}
{% block jsheader %}
{% endblock %}
", "visiteur/contact.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\visiteur\\contact.html.twig");
    }
}

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

/* agriculteur/profil/profilEdit.html.twig */
class __TwigTemplate_589be49963324321d981a841ae5f71b66a1327348984dbc35272349f393935e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'h1' => [$this, 'block_h1'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout-agri.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/profil/profilEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agriculteur/profil/profilEdit.html.twig"));

        $this->parent = $this->loadTemplate("layout-agri.html.twig", "agriculteur/profil/profilEdit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Locavor - Mon magasin
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        // line 6
        echo "\tMa ferme
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"bg-gris-clair\">
<section class=\"container pt-5 pb-5 m-auto col-lg-8\">
<h1 class=\"typo text-center mb-md-3\"> <strong> Modification de vos informations</strong></h1>
<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_profil");
        echo "\" class=\"link\"><i class=\"bi bi-arrow-bar-left\"></i>Retourner dans mon espace boutique</a>
<div class=\"form-group mt-md-5\">
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>

        <div class=\"col-md-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
    
        <div class=\"col-md-6\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom_domaine", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "ville", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "code_postal", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>

        <div class=\"col-md-12\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "descriptif", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>

        <div class=\"col-md-4\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "tel_portable", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-4\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "tel_fixe", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>

    </div>

    <input type=\"submit\" class=\"btn btn1 mt-md-3\" value=\"Enregistrer les modifications\">
</div>
<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_deleteProfil");
        echo "\" class=\"link-danger mt-md-4\"
 onclick=\"return confirm('Confirmez vous la supression de votre compte ? Cette action est définitive.')\">
Supprimer mon compte <i class=\"bi bi-x-lg ms-1\"></i></a>

    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
</section>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agriculteur/profil/profilEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 39,  171 => 35,  162 => 29,  158 => 28,  153 => 26,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  131 => 19,  126 => 17,  121 => 15,  116 => 13,  111 => 10,  101 => 9,  90 => 6,  80 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-agri.html.twig' %}
{% block title %}Locavor - Mon magasin
{% endblock %}

{% block h1 %}
\tMa ferme
{% endblock h1 %}

{% block body %}
<div class=\"bg-gris-clair\">
<section class=\"container pt-5 pb-5 m-auto col-lg-8\">
<h1 class=\"typo text-center mb-md-3\"> <strong> Modification de vos informations</strong></h1>
<a href=\"{{ path('agriculteur_profil') }}\" class=\"link\"><i class=\"bi bi-arrow-bar-left\"></i>Retourner dans mon espace boutique</a>
<div class=\"form-group mt-md-5\">
    {{ form_start(form)}}
    <div class=\"row\">
                <div class=\"col-md-6\">{{ form_row(form.nom, {'attr': {'class': 'form-control'}})}}</div>

        <div class=\"col-md-6\">{{ form_row(form.email, {'attr': {'class': 'form-control'}})}}</div>
    
        <div class=\"col-md-6\">{{ form_row(form.nom_domaine, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.ville, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.adresse, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.code_postal, {'attr': {'class': 'form-control'}})}}</div>

        <div class=\"col-md-12\">{{ form_row(form.descriptif, {'attr': {'class': 'form-control'}})}}</div>

        <div class=\"col-md-4\">{{ form_row(form.tel_portable, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-4\">{{ form_row(form.tel_fixe, {'attr': {'class': 'form-control'}})}}</div>

    </div>

    <input type=\"submit\" class=\"btn btn1 mt-md-3\" value=\"Enregistrer les modifications\">
</div>
<a href=\"{{ path('agriculteur_deleteProfil') }}\" class=\"link-danger mt-md-4\"
 onclick=\"return confirm('Confirmez vous la supression de votre compte ? Cette action est définitive.')\">
Supprimer mon compte <i class=\"bi bi-x-lg ms-1\"></i></a>

    {{ form_end(form)}}
</section>
</div>

{% endblock %}
", "agriculteur/profil/profilEdit.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\agriculteur\\profil\\profilEdit.html.twig");
    }
}

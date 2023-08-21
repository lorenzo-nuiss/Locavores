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

/* admin/agriculteur/agriNew.html.twig */
class __TwigTemplate_9cd52c86ee39e247f5425a747564a7422142750ea882b8e383d4585cc088cac5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'h1' => [$this, 'block_h1'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/agriNew.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agriculteur/agriNew.html.twig"));

        $this->parent = $this->loadTemplate("layout-admin.html.twig", "admin/agriculteur/agriNew.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "<style>
    main {
        margin: 20px 10px;
        padding-top: 10px;
    }

    main ul li {
        color: #9D0806;
        font-size: 1rem;
    }

    .checkbox label {
        margin: 0 22px 0 6px;
    }

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        echo "Ajout d'agriculteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "<main class=\"form-group\">
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
  </div>

    <div class=\"row\">
        <div class=\"col-md-6\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "tel_portable", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "tel_fixe", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>

  </div>
      <div class=\"row\">
        <div class=\"col-md-6\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Nom_domaine", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "ville", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
  </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-6\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
        <div class=\"col-md-6\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "code_postal", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-8\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "descriptif", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-6\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "disponible", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-select"]]);
        echo "</div>
    </div>

    <div class=\"row mt-3\">

        <div class=\"col checkbox\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Categorie", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "checkbox-input mt-2"]]);
        echo "</div>
    </div>
    <div class=\"row my-4\">

        <div class=\"col-md-4\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
    </div>


    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\">

    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
</main>

<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allAgri.admin");
        echo "\">Retourner à la liste</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/agriculteur/agriNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 66,  205 => 63,  196 => 57,  189 => 53,  181 => 48,  175 => 45,  169 => 42,  165 => 41,  159 => 38,  155 => 37,  148 => 33,  144 => 32,  137 => 28,  133 => 27,  128 => 25,  125 => 24,  115 => 23,  96 => 21,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-admin.html.twig' %}

{% block style %}
<style>
    main {
        margin: 20px 10px;
        padding-top: 10px;
    }

    main ul li {
        color: #9D0806;
        font-size: 1rem;
    }

    .checkbox label {
        margin: 0 22px 0 6px;
    }

</style>
{% endblock %}
{% block h1 %}Ajout d'agriculteur{% endblock h1 %}

{% block content %}
<main class=\"form-group\">
    {{ form_start(form)}}
    <div class=\"row\">
        <div class=\"col-md-6\">{{ form_row(form.nom, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.email, {'attr': {'class': 'form-control'}})}}</div>
  </div>

    <div class=\"row\">
        <div class=\"col-md-6\">{{ form_row(form.tel_portable, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.tel_fixe, {'attr': {'class': 'form-control'}})}}</div>

  </div>
      <div class=\"row\">
        <div class=\"col-md-6\">{{ form_row(form.Nom_domaine, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.ville, {'attr': {'class': 'form-control'}})}}</div>
  </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-6\">{{ form_row(form.adresse, {'attr': {'class': 'form-control'}})}}</div>
        <div class=\"col-md-6\">{{ form_row(form.code_postal, {'attr': {'class': 'form-control'}})}}</div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-8\">{{ form_row(form.descriptif, {'attr': {'class': 'form-control'}})}}</div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-6\">{{ form_row(form.disponible, {'attr': {'class': 'form-select'}})}}</div>
    </div>

    <div class=\"row mt-3\">

        <div class=\"col checkbox\">{{ form_row(form.Categorie, {'attr': {'class': 'checkbox-input mt-2'}})}}</div>
    </div>
    <div class=\"row my-4\">

        <div class=\"col-md-4\">{{ form_row(form.password, {'attr': {'class': 'form-control'}})}}</div>
    </div>


    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\">

    {{ form_end(form)}}
</main>

<a href=\"{{ path('allAgri.admin') }}\">Retourner à la liste</a>
{% endblock %}", "admin/agriculteur/agriNew.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\admin\\agriculteur\\agriNew.html.twig");
    }
}

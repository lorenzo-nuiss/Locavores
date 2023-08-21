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

/* admin/contact/updateContact.html.twig */
class __TwigTemplate_015d5ff1c3902402c42c0a1b89679320b9cc8a2bfcc3cc3c1231e0a5f32345e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/updateContact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/updateContact.html.twig"));

        $this->parent = $this->loadTemplate("layout-admin.html.twig", "admin/contact/updateContact.html.twig", 1);
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "- Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        echo "Informations de contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<section class=\"row gx-5 pb-3\">
    <div class=\"col-12 col-lg-6 pe-3\">

        <div class=\"contact-detail my-3\">

            <div class=\"row\">
                <span class=\"my-auto col-4\">Téléphone fixe :</span>
                <div class=\"card my-3 col-8\">
                    <div class=\"card-body\">
                        <p class=\"my-auto\">
                            <i class=\"fas fa-phone-alt me-3\"></i>
                            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 21, $this->source); })()), "telFixe", [], "any", false, false, false, 21), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <span class=\"my-auto col-4\">Téléphone portable :</span>
                <div class=\"card my-3 col-8\">
                    <div class=\"card-body\">
                        <p class=\"my-auto\">
                            <i class=\"fas fa-mobile me-3\"></i>
                            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 33, $this->source); })()), "telPortable", [], "any", false, false, false, 33), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>


            <div class=\"row\">
                <span class=\"my-auto col-4\">Adresse mail :</span>

                <div class=\"card my-3 col-8\">
                    <div class=\"card-body\">
                        <p class=\"my-auto\">

                            <i class=\"fas fa-envelope me-3\"></i>
                            ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"col-12 col-lg-6 m-auto\">
        <div class=\"ps-md-5\">
            <!-- Button trigger modal -->
            <button type=\"button\" class=\"ms-md-5 btn btn-primary btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                Modifier
            </button>
        </div>


        <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier les informations de contact</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"form-group\">
                            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
        echo "

                            <div class=\"col\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
                            <div class=\"col\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "tel_fixe", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>
                            <div class=\"col\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "tel_portable", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control"]]);
        echo "</div>

                        </div>

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Modifier\">
                        ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact/updateContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 89,  218 => 81,  214 => 80,  210 => 79,  205 => 77,  173 => 48,  155 => 33,  140 => 21,  127 => 10,  117 => 9,  98 => 7,  79 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout-admin.html.twig' %}

{% block style %}
{% endblock %}
{% block title %}- Contact{% endblock %}

{% block h1 %}Informations de contact{% endblock h1 %}

{% block content %}
<section class=\"row gx-5 pb-3\">
    <div class=\"col-12 col-lg-6 pe-3\">

        <div class=\"contact-detail my-3\">

            <div class=\"row\">
                <span class=\"my-auto col-4\">Téléphone fixe :</span>
                <div class=\"card my-3 col-8\">
                    <div class=\"card-body\">
                        <p class=\"my-auto\">
                            <i class=\"fas fa-phone-alt me-3\"></i>
                            {{ contactInfo.telFixe }}
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <span class=\"my-auto col-4\">Téléphone portable :</span>
                <div class=\"card my-3 col-8\">
                    <div class=\"card-body\">
                        <p class=\"my-auto\">
                            <i class=\"fas fa-mobile me-3\"></i>
                            {{ contactInfo.telPortable }}
                        </p>
                    </div>
                </div>
            </div>


            <div class=\"row\">
                <span class=\"my-auto col-4\">Adresse mail :</span>

                <div class=\"card my-3 col-8\">
                    <div class=\"card-body\">
                        <p class=\"my-auto\">

                            <i class=\"fas fa-envelope me-3\"></i>
                            {{ contactInfo.email }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"col-12 col-lg-6 m-auto\">
        <div class=\"ps-md-5\">
            <!-- Button trigger modal -->
            <button type=\"button\" class=\"ms-md-5 btn btn-primary btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                Modifier
            </button>
        </div>


        <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier les informations de contact</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"form-group\">
                            {{ form_start(form)}}

                            <div class=\"col\">{{ form_row(form.email, {'attr': {'class': 'form-control'}})}}</div>
                            <div class=\"col\">{{ form_row(form.tel_fixe, {'attr': {'class': 'form-control'}})}}</div>
                            <div class=\"col\">{{ form_row(form.tel_portable, {'attr': {'class': 'form-control'}})}}</div>

                        </div>

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Modifier\">
                        {{ form_end(form)}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

{% endblock %}", "admin/contact/updateContact.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\admin\\contact\\updateContact.html.twig");
    }
}

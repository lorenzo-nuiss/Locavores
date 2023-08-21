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

/* layout-admin.html.twig */
class __TwigTemplate_5f5e2b6eda41bcf9d89c7ccef96a01c73f7f0e752704173fd79a88a8b2d4d560 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'h1' => [$this, 'block_h1'],
            'linkAddBase' => [$this, 'block_linkAddBase'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout-admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout-admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<title>
\t\t\tLes locavores - Admin
\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-locavor-miniature.png"), "html", null, true);
        echo "\">

\t\t<link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
\t\t";
        // line 18
        $this->displayBlock('style', $context, $blocks);
        // line 19
        echo "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body class=\"sb-nav-fixed\">
\t\t<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
\t\t\t<!-- Navbar Brand-->
\t\t\t<a class=\"navbar-brand ps-5 pt-2\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-les-locavores.svg"), "html", null, true);
        echo "\" class=\"brand-logo\" alt=\"logo les locavores\" width=\"95px\">
\t\t\t\t\t\t</a>
\t\t\t<!-- Sidebar Toggle-->
\t\t\t<button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>

\t\t\t<!-- Navbar-->
\t\t\t<ul class=\"navbar-nav w-100 ms-auto me-3 me-lg-4\">
\t\t\t\t<li class=\"nav-item dropdown ms-auto\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"fas fa-user fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil.admin");
        echo "\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"/></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Se déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t\t<div id=\"layoutSidenav\">
\t\t\t<div id=\"layoutSidenav_nav\">
\t\t\t\t<nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
\t\t\t\t\t<div class=\"sb-sidenav-menu\">
\t\t\t\t\t\t<div class=\"nav\">
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Administration</div>
\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard-list\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tProducteurs
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allAgri.admin");
        echo "\">Liste des producteurs</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addAgri.admin");
        echo "\">Ajouter un producteur</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attAgri.admin");
        echo "\">Producteurs en attente de validation</a>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts2\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-columns\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tCatégories
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseLayouts2\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategorie.admin");
        echo "\">Ajouter une catégorie</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showCategorie.admin");
        echo "\">Liste des catégories</a>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateContact.admin");
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-mail-bulk\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
        // line 97
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 98
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success\">Enregistrer un nouveau compte admin</button>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 104
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-sidenav-footer\">
\t\t\t\t\t\t<div class=\"small\">Connecté en tant que</div>
\t\t\t\t\t\tAdministrateur
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>


\t\t\t<div id=\"layoutSidenav_content\">
\t\t\t\t<main>
\t\t\t\t\t<div class=\"container-fluid px-4 div_content\">
\t\t\t\t\t\t<h1 class=\"titre mt-md-3\"> ";
        // line 118
        $this->displayBlock('h1', $context, $blocks);
        // line 119
        echo "\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t
";
        // line 121
        $this->displayBlock('linkAddBase', $context, $blocks);
        // line 123
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</main>
\t\t\t\t\t<footer class=\"py-4 bg-light mt-auto\">
\t\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between small\">
\t\t\t\t\t\t\t\t<div class=\"text-muted\">Copyright &copy; Your Website 2021</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t\t&middot;
\t\t\t\t\t\t\t\t\t<a href=\"#\">Terms &amp; Conditions</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/scripts.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\" crossorigin=\"anonymous\"></script>

\t\t\t<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/datatables-simple-demo.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 145
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "
\t\t</body>
\t</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
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

    // line 118
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_linkAddBase($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAddBase"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkAddBase"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 145,  346 => 123,  328 => 121,  310 => 118,  292 => 18,  282 => 12,  272 => 11,  259 => 146,  257 => 145,  253 => 144,  247 => 141,  228 => 124,  225 => 123,  223 => 121,  219 => 119,  217 => 118,  201 => 104,  193 => 99,  190 => 98,  188 => 97,  178 => 90,  171 => 86,  167 => 85,  148 => 69,  144 => 68,  140 => 67,  114 => 44,  107 => 40,  89 => 25,  85 => 24,  78 => 19,  76 => 18,  72 => 17,  66 => 14,  63 => 13,  61 => 11,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<title>
\t\t\tLes locavores - Admin
\t\t{% block title  %}
\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('/images/logo-locavor-miniature.png') }}\">

\t\t<link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\"/>
\t\t<link href=\"{{ asset('admin/css/styles.css') }}\" rel=\"stylesheet\"/> 
\t\t{% block style %}{% endblock %}
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body class=\"sb-nav-fixed\">
\t\t<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
\t\t\t<!-- Navbar Brand-->
\t\t\t<a class=\"navbar-brand ps-5 pt-2\" href=\"{{ path('admin_index')}}\">
\t\t\t\t\t\t<img src=\"{{ asset('/images/logo-les-locavores.svg') }}\" class=\"brand-logo\" alt=\"logo les locavores\" width=\"95px\">
\t\t\t\t\t\t</a>
\t\t\t<!-- Sidebar Toggle-->
\t\t\t<button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>

\t\t\t<!-- Navbar-->
\t\t\t<ul class=\"navbar-nav w-100 ms-auto me-3 me-lg-4\">
\t\t\t\t<li class=\"nav-item dropdown ms-auto\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"fas fa-user fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('profil.admin') }}\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"/></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t\t<div id=\"layoutSidenav\">
\t\t\t<div id=\"layoutSidenav_nav\">
\t\t\t\t<nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
\t\t\t\t\t<div class=\"sb-sidenav-menu\">
\t\t\t\t\t\t<div class=\"nav\">
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Administration</div>
\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard-list\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tProducteurs
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"allAgri.admin\") }}\">Liste des producteurs</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"addAgri.admin\") }}\">Ajouter un producteur</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"attAgri.admin\") }}\">Producteurs en attente de validation</a>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts2\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-columns\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tCatégories
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseLayouts2\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"addCategorie.admin\") }}\">Ajouter une catégorie</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"showCategorie.admin\") }}\">Liste des catégories</a>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"updateContact.admin\") }}\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-mail-bulk\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"app_register_admin\") }}\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success\">Enregistrer un nouveau compte admin</button>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-sidenav-footer\">
\t\t\t\t\t\t<div class=\"small\">Connecté en tant que</div>
\t\t\t\t\t\tAdministrateur
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>


\t\t\t<div id=\"layoutSidenav_content\">
\t\t\t\t<main>
\t\t\t\t\t<div class=\"container-fluid px-4 div_content\">
\t\t\t\t\t\t<h1 class=\"titre mt-md-3\"> {% block h1 %}{% endblock %}
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t
{% block linkAddBase %}
{% endblock %}
\t\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</main>
\t\t\t\t\t<footer class=\"py-4 bg-light mt-auto\">
\t\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between small\">
\t\t\t\t\t\t\t\t<div class=\"text-muted\">Copyright &copy; Your Website 2021</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t\t&middot;
\t\t\t\t\t\t\t\t\t<a href=\"#\">Terms &amp; Conditions</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"{{ asset('admin/js/scripts.js') }}\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\" crossorigin=\"anonymous\"></script>

\t\t\t<script src=\"{{ asset('admin/js/datatables-simple-demo.js') }}\"></script>
\t\t\t{% block javascripts %}{% endblock %}

\t\t</body>
\t</html>
", "layout-admin.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\layout-admin.html.twig");
    }
}

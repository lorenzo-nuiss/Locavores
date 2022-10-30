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

/* layout-agri.html.twig */
class __TwigTemplate_a4dd47c58ff212e68fff905a3dbcdb6af0c4fb9b127dbc1dc04b49042fcaef98 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'style' => [$this, 'block_style'],
            'navbarPageStore' => [$this, 'block_navbarPageStore'],
            'navbarPageContact' => [$this, 'block_navbarPageContact'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" /> 
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>

\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-locavor-miniature.png"), "html", null, true);
        echo "\">

\t\t";
        // line 21
        $this->displayBlock('style', $context, $blocks);
        // line 23
        echo "\t</head>


\t<body>
\t\t<div class=\"wrapper d-flex user\">
\t\t\t<nav class=\"d-flex flex-column flex-shrink-0 sidebar d-none d-lg-block\" id=\"sidebar\">
\t\t\t\t\t<div class=\"contain-logo\">
\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_index");
        echo "\" class=\"pt-3 pb-3 link-dark text-decoration-none logo-container\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Icon-only\">
\t\t\t\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-locavor-miniature.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo les locavores\">

\t\t\t\t\t<span class=\"name-site\">Locavores
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t<ul class=\"nav nav-pills nav-flush flex-column mb-auto text-center\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_index");
        echo "\" class=\"py-2 nav-link
\t\t\t\t\t";
        // line 40
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", [0 => "_route"], "method", false, false, false, 40), "agriculteur_index"))) ? ("active") : (""));
        echo "
\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<i class=\"bi bi-house-fill\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\">Accueil</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 47
        $this->displayBlock('navbarPageStore', $context, $blocks);
        // line 53
        echo "\t\t\t\t\t\t\t<i class=\"bi bi-basket-fill\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\">Magasin</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 63
        echo "
\t\t\t\t\t<li>
\t\t\t\t\t";
        // line 65
        $this->displayBlock('navbarPageContact', $context, $blocks);
        // line 69
        echo "
\t\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\">Contact</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"nav-link py-2 border-top\">
\t\t\t\t\t\t\t<i class=\"bi bi-door-open-fill\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\">Déconnexion</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>




\t\t\t<header class=\"d-lg-none\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
\t\t\t\t\t<div class=\"container-fluid p-1\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-les-locavores.svg"), "html", null, true);
        echo "\" class=\"brand-logo\" alt=\"logo les locavores\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-lg-3\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_index");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_profil");
        echo "\">Magasin</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Deconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>


\t\t\t<div class=\"container-fluid ps-lg-5 pe-md-0\">
            ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 269
        echo "
\t\t\t</div>

\t\t</div>

\t\t<!-- FOOTER -->

    ";
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VisiteurController::footerAction"));
        // line 278
        echo "

\t\t<!-- FIN FOOTER -->


\t\t<!-- fonction pour afficher la nav au scroll -->

\t\t";
        // line 285
        $this->displayBlock('js', $context, $blocks);
        // line 286
        echo "\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js\" integrity=\"sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF\" crossorigin=\"anonymous\"></script>
\t</body>

</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t\tEspace Agriculteur
\t\t\t";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sass/style.css"), "html", null, true);
        echo "\">

\t\t";
    }

    // line 21
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t\t";
    }

    // line 47
    public function block_navbarPageStore($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "\t\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_profil");
        echo "\" class=\"nav-link py-2 border-top
\t\t\t\t\t";
        // line 49
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), "agriculteur_index"))) ? ("") : ("active"));
        echo "

\t\t\t\t\t\t\">
\t\t\t\t\t\t";
    }

    // line 65
    public function block_navbarPageContact($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "
\t\t\t\t\t\t<a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link py-2 border-top\">
\t\t\t\t\t\t";
    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "\t\t\t\t<section class=\"bgimage banner\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<h1>Lorem ipsum dolor sit amet consectetur.</h1>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis is a template for a simple marketing or informational
\t\t\t\t\t\t\t\t\t                        website. It includes a large callout called the hero unit and
\t\t\t\t\t\t\t\t\t                        three supporting pieces of content. Use it as a starting point to
\t\t\t\t\t\t\t\t\t                        create something more unique.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn1\">Nous contacter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<!--   LES SERVICES   -->
\t\t\t\t<main class=\"container margin-t\">
\t\t\t\t\t<div class=\"justify-content-center service-text\">
\t\t\t\t\t\t<h2 class=\"typo\">Qu'est ce qui vous interesse ?</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
\t\t\t\t\t\t\t                numquam repellat cum rerum unde nisi magnam consequuntur facilis
\t\t\t\t\t\t\t                corrupti sequi, aliquam quo nihil recusandae blanditiis earum quod
\t\t\t\t\t\t\t                repudiandae aspernatur labore architecto modi odit? Ab aut quae enim?
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"feature my-3\">
\t\t\t\t\t\t<div class=\"ligne1 retr\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!--  -->

\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"card bg-dark text-white\" style=\"background-image: linear-gradient(to top,rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1) 51%, rgba(0, 0, 0, 0.7)),url(./image/Agriculture-biologique-notre-avenir.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-img-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Fruits et legumes</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ligne1\">2</div>
\t\t\t\t\t\t<div class=\"ligne1\">3</div>

\t\t\t\t\t\t<div class=\"ligne2\">4</div>
\t\t\t\t\t\t<div class=\"ligne2\">5</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!--  FIN LES SERVICES   -->

\t\t\t\t\t<!--   LES AVANTAGES   -->

\t\t\t\t\t<section class=\"advantage margin-t\">
\t\t\t\t\t\t<div class=\"semi-banner row\">
\t\t\t\t\t\t\t<div class=\"col-12 d-flex justify-content-center align-self-center\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white text-large\">Les avantages</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row list-advantage d-flex justify-content-center\">
\t\t\t\t\t\t\t<div class=\"list-adantage-1 col-4\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-droplet-half\"></i>
\t\t\t\t\t\t\t\t<h4>Ecologique</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur adipisicing elit neque
\t\t\t\t\t\t\t\t\t                        voluptatibus facere veritatis
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-adantage-2 col-4\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-hand-thumbs-up-fill\"></i>
\t\t\t\t\t\t\t\t<h4>Qualité</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur adipis icing elit neque
\t\t\t\t\t\t\t\t\t                        voluptatibus facere veritatis
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-adantage-3 col-4\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-gear-wide-connected\"></i>
\t\t\t\t\t\t\t\t<h4>Equitable</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur adipis icing elit nsunt
\t\t\t\t\t\t\t\t\t                        sint asperiores bhbnu!
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!--  FIN LES AVANTAGES   -->

\t\t\t\t\t<!--  LE PROCESS   -->
\t\t\t\t\t<section class=\"process row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"image col-12 col-sm-12 col-md-5 col-lg-5 col-xl-6\">
\t\t\t\t\t\t\t<!-- <img src=\"./image/Fermier-plantation-de-graines.jpg\" alt=\"\"> -->
\t\t\t\t\t\t\t<img src=\"./image/Avocat-decoupe.png\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline col-12 col-sm-12 col-md-7 col-lg-7 col-xl-6\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Consultez le site</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\tRegardez ce que les agriculteurs ont a vous proposer
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t<span>Etape 1</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Consultez le site</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\tRegardez ce que les agriculteurs ont a vous proposer
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t<span>Etape 2</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Codify</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">Let's make coolest things in css</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t<span>Etape 3</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!--  FIN PROCESS   -->
\t\t\t\t</main>

\t\t\t\t<!--  DEBUT CTA   -->
\t\t\t\t<section class=\"cta margin-t jumbotron jumbotron-fluid container d-flex justify-content-center align-self-center\">
\t\t\t\t\t<div class=\"col content\">
\t\t\t\t\t\t<h3 class=\"text-white text-large \">
\t\t\t\t\t\t\tVous etes interessez ou vous avez une question ?
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>Notre equipe se fera une joie de vous repondre</p>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn1\">Nous contacter</button>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!--  FIN CTA   -->
            ";
    }

    // line 285
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout-agri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 285,  291 => 118,  287 => 117,  281 => 67,  278 => 66,  274 => 65,  266 => 49,  261 => 48,  257 => 47,  253 => 22,  249 => 21,  242 => 16,  238 => 14,  234 => 13,  229 => 9,  225 => 8,  216 => 286,  214 => 285,  205 => 278,  203 => 276,  194 => 269,  192 => 117,  179 => 107,  173 => 104,  166 => 100,  161 => 98,  150 => 90,  146 => 89,  129 => 75,  121 => 69,  119 => 65,  115 => 63,  109 => 53,  107 => 47,  97 => 40,  93 => 39,  82 => 31,  78 => 30,  69 => 23,  67 => 21,  61 => 19,  59 => 13,  55 => 11,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-agri.html.twig", "/home/users7/c/czh4993/www/templates/layout-agri.html.twig");
    }
}

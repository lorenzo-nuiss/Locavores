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

/* base.html.twig */
class __TwigTemplate_acd2c3e4842808b1de03977d6d1f320095fae654d36c076b8f1b6133f8cc1949 extends Template
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
            'metaDescr' => [$this, 'block_metaDescr'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'style' => [$this, 'block_style'],
            'navbar' => [$this, 'block_navbar'],
            'navbarActive' => [$this, 'block_navbarActive'],
            'body' => [$this, 'block_body'],
            'jsheader' => [$this, 'block_jsheader'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t";
        // line 7
        echo "\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/> 
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t\t";
        // line 10
        $this->displayBlock('metaDescr', $context, $blocks);
        // line 14
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "\t\t\t\t";
        $this->displayBlock('style', $context, $blocks);
        // line 22
        echo "
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/tarteaucitron/tarteaucitron.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
        tarteaucitron.init({

    \t  \"hashtag\": \"#tarteaucitron\", /* Open the panel with this hashtag */
    \t  \"cookieName\": \"tarteaucitron\", /* Cookie name */
    
    \t  \"orientation\": \"middle\", /* Banner position (top - bottom) */
       
          \"groupServices\": false, /* Group services by category */
                           
    \t  \"showAlertSmall\": false, /* Show the small banner on bottom right */
    \t  \"cookieslist\": false, /* Show the cookie list */
                           
          \"closePopup\": true, /* Show a close X on the banner */

          \"showIcon\": false, /* Show cookie icon to manage cookies */
          //\"iconSrc\": \"\", /* Optionnal: URL or base64 encoded image */
          \"iconPosition\": \"BottomRight\", /* BottomRight, BottomLeft, TopRight and TopLeft */

    \t  \"adblocker\": false, /* Show a Warning if an adblocker is detected */
                           
          \"DenyAllCta\" : true, /* Show the deny all button */
          \"AcceptAllCta\" : true, /* Show the accept all button when highPrivacy on */
          \"highPrivacy\": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    \t  \"handleBrowserDNTRequest\": false, /* If Do Not Track == 1, disallow all */

    \t  \"removeCredit\": false, /* Remove credit link */
    \t  \"moreInfoLink\": true, /* Show more info link */

          \"useExternalCss\": false, /* If false, the tarteaucitron.css file will be loaded */
          \"useExternalJs\": false, /* If false, the tarteaucitron.js file will be loaded */

    \t  //\"cookieDomain\": \".my-multisite-domaine.fr\", /* Shared cookie for multisite */
                          
          \"readmoreLink\": false, /* Change the default readmore link */

          \"mandatory\": true, /* Show a message about mandatory cookies */
        });
        </script>


\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script>
\t\t        tarteaucitron.user.gtagUa = 'G-GYKXY9JZVV';
        // tarteaucitron.user.gtagCrossdomain = ['example.com', 'example2.com'];
        tarteaucitron.user.gtagMore = function () { /* add here your optionnal gtag() */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('gtag');
        </script>


\t</head>


\t<body>
\t\t";
        // line 80
        $this->displayBlock('navbar', $context, $blocks);
        // line 87
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "\t\t<!-- FOOTER -->
\t    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VisiteurController::footerAction"));
        // line 91
        echo "
\t\t<!-- FIN FOOTER -->

\t\t";
        // line 94
        $this->displayBlock('jsheader', $context, $blocks);
        // line 107
        echo "\t\t";
        $this->displayBlock('js', $context, $blocks);
        // line 109
        echo "
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js\" integrity=\"sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF\" crossorigin=\"anonymous\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les Locavores";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_metaDescr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        // line 11
        echo "\t\t<meta name=\"description\" content=\"Les Locavores met en avant les terroirs de France et vous permet de trouver des 
\t\tproducteurs locaux qui correspondent à vos besoins.\">
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sass/style.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo-locavor-miniature.png"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 21
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 81
        echo "\t\t";
        $this->displayBlock('navbarActive', $context, $blocks);
        // line 83
        echo "\t    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VisiteurController::headerAction"));
        // line 85
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_navbarActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarActive"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarActive"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_jsheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsheader"));

        // line 95
        echo "\t\t\t<script>
\t\t\t\tvar prevScrollpos = window.pageYOffset;
window.onscroll = function () {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
document.getElementById(\"navbar\").style.top = \"0\";
} else {
document.getElementById(\"navbar\").style.top = \"-90px\";
} prevScrollpos = currentScrollPos;
}
\t\t\t</script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 108
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 108,  358 => 107,  337 => 95,  327 => 94,  309 => 87,  291 => 81,  280 => 85,  277 => 83,  274 => 81,  264 => 80,  254 => 21,  244 => 20,  232 => 18,  228 => 17,  224 => 15,  214 => 14,  202 => 11,  192 => 10,  173 => 8,  158 => 109,  155 => 107,  153 => 94,  148 => 91,  146 => 89,  143 => 88,  140 => 87,  138 => 80,  78 => 23,  75 => 22,  72 => 20,  69 => 14,  67 => 10,  62 => 8,  59 => 7,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t{# meta name view port #}
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/> 
\t\t<title>{% block title %}Les Locavores{% endblock %}</title>

\t\t\t{% block metaDescr %}
\t\t<meta name=\"description\" content=\"Les Locavores met en avant les terroirs de France et vous permet de trouver des 
\t\tproducteurs locaux qui correspondent à vos besoins.\">
\t\t\t{% endblock %}
\t\t{% block stylesheets %}
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/sass/style.css') }}\">
\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('/images/logo-locavor-miniature.png') }}\">
\t\t{% endblock %}
\t\t\t\t{% block style %}
\t\t{% endblock %}

        <script src=\"{{ asset('/tarteaucitron/tarteaucitron.js') }}\"></script>

        <script type=\"text/javascript\">
        tarteaucitron.init({

    \t  \"hashtag\": \"#tarteaucitron\", /* Open the panel with this hashtag */
    \t  \"cookieName\": \"tarteaucitron\", /* Cookie name */
    
    \t  \"orientation\": \"middle\", /* Banner position (top - bottom) */
       
          \"groupServices\": false, /* Group services by category */
                           
    \t  \"showAlertSmall\": false, /* Show the small banner on bottom right */
    \t  \"cookieslist\": false, /* Show the cookie list */
                           
          \"closePopup\": true, /* Show a close X on the banner */

          \"showIcon\": false, /* Show cookie icon to manage cookies */
          //\"iconSrc\": \"\", /* Optionnal: URL or base64 encoded image */
          \"iconPosition\": \"BottomRight\", /* BottomRight, BottomLeft, TopRight and TopLeft */

    \t  \"adblocker\": false, /* Show a Warning if an adblocker is detected */
                           
          \"DenyAllCta\" : true, /* Show the deny all button */
          \"AcceptAllCta\" : true, /* Show the accept all button when highPrivacy on */
          \"highPrivacy\": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    \t  \"handleBrowserDNTRequest\": false, /* If Do Not Track == 1, disallow all */

    \t  \"removeCredit\": false, /* Remove credit link */
    \t  \"moreInfoLink\": true, /* Show more info link */

          \"useExternalCss\": false, /* If false, the tarteaucitron.css file will be loaded */
          \"useExternalJs\": false, /* If false, the tarteaucitron.js file will be loaded */

    \t  //\"cookieDomain\": \".my-multisite-domaine.fr\", /* Shared cookie for multisite */
                          
          \"readmoreLink\": false, /* Change the default readmore link */

          \"mandatory\": true, /* Show a message about mandatory cookies */
        });
        </script>


\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script>
\t\t        tarteaucitron.user.gtagUa = 'G-GYKXY9JZVV';
        // tarteaucitron.user.gtagCrossdomain = ['example.com', 'example2.com'];
        tarteaucitron.user.gtagMore = function () { /* add here your optionnal gtag() */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('gtag');
        </script>


\t</head>


\t<body>
\t\t{% block navbar %}
\t\t{% block navbarActive %}
{% endblock %}
\t    {{ render(controller(
        'App\\\\Controller\\\\VisiteurController::headerAction'
    )) }}
\t\t{% endblock %}
\t\t{% block body %}{% endblock %}
\t\t<!-- FOOTER -->
\t    {{ render(controller(
        'App\\\\Controller\\\\VisiteurController::footerAction'
    )) }}
\t\t<!-- FIN FOOTER -->

\t\t{% block jsheader %}
\t\t\t<script>
\t\t\t\tvar prevScrollpos = window.pageYOffset;
window.onscroll = function () {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
document.getElementById(\"navbar\").style.top = \"0\";
} else {
document.getElementById(\"navbar\").style.top = \"-90px\";
} prevScrollpos = currentScrollPos;
}
\t\t\t</script>
\t\t{% endblock %}
\t\t{% block js %}
\t\t{% endblock %}

\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js\" integrity=\"sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF\" crossorigin=\"anonymous\"></script>
\t</body>
</html>
", "base.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\base.html.twig");
    }
}

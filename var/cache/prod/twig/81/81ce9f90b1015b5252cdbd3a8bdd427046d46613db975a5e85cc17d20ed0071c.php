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

/* visiteur/home.html.twig */
class __TwigTemplate_9bd5f9ba0cff845fcdb1de8699e055bfab661d5ab2a6e37a249821acf0536bcf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbarPageHome' => [$this, 'block_navbarPageHome'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Découvrez les producteurs de votre région -
";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t\t\t";
    }

    // line 11
    public function block_navbarPageHome($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
<section class=\"bgimage banner\">
    <div class=\"container\">
        <div class=\"row d-flex align-items-center\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <h1>Découvrez vos producteurs locaux</h1>
                <p>
                    Profitez de produit de qualité sans se ruiner tout en soutenant nos producteurs c'est possible ! </br>
                     Nous mettons en relation les producteurs et les consommateurs pour que tout le monde en profite. Eco-responsable, économique, favorise l'équitabilité 
                    ne pas passer par les grandes surfaces à de nombreux avantages.
                </p>
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn1\">Nous contacter</a>
            </div>
        </div>
    </div>
</section>

<!--   LES SERVICES   -->
<main class=\"container margin-t\" id=\"producteurs\">
    <div class=\"justify-content-center service-text\">
        <h2 class=\"typo\">Qu'est ce qui vous interesse ?</h2>
        <p>
        Ici vous ne trouverez pas de clémentines en été, ni de fraises en hiver. Nos producteurs font des produits de saison et respectent le produit. 
           Naviguez parmi les différentes catégories proposées et consultez les producteurs de vos régions.
        </p>
    </div>
    <section class=\"feature my-3\">
        \t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 48
            echo "        <div class=\"ligne retr\">
            <div>
                <!--  -->
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listAgriByCategorie", ["categorie_name" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 51), [" " => "_"])]), "html", null, true);
            echo "\">
                    <div class=\"card bg-dark text-white\" 
                    style=\"background-image: linear-gradient(to top,rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1) 51%, rgba(0, 0, 0, 0.7)),
                    url(";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./upload/" . twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 54))), "thumbMedium"), "html", null, true);
            echo ");\">

                        <div class=\"card-img-overlay\">
                            <h5 class=\"card-title\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 57), "html", null, true);
            echo "</h5>
                        </div>
                    </div>
                </a>

            </div>
            <!--  -->
        </div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
    </section>
    <!--  FIN LES SERVICES   -->

    <!--   LES AVANTAGES   -->

    <section class=\"advantage margin-t\">
        <div class=\"semi-banner row\">
            <div class=\"col-12 d-flex justify-content-center align-self-center\">
                <h3 class=\"text-white text-large\">Les avantages</h3>
            </div>
        </div>

        <div class=\"row list-advantage d-flex justify-content-center\">
            <div class=\"list-adantage-1 col-4\">
                <i class=\"bi bi-droplet-half\"></i>
                <h4>Ecologique</h4>
                <p>
                    Lorsque l’on consomme un aliment produit localement, on évite de nombreuses pollutions inutiles (transports, conservation, etc ...).
                </p>
            </div>
            <div class=\"list-adantage-2 col-4\">
                <i class=\"bi bi-hand-thumbs-up-fill\"></i>
                <h4>Qualité</h4>
                <p>
                    Vous êtes en contact direct avec le producteur, ce qui vous assurre des produits ultra-frais et savoureux. 
                </p>
            </div>
            <div class=\"list-adantage-3 col-4\">
                <i class=\"bi bi-gear-wide-connected\"></i>
                <h4>Equitable</h4>
                <p>
                   En plus de savoir ce que vous mangez, consommer locale c'est moins de charge à payer pour nos producteurs, et ça contribue aussi à préserver le savoir-faire artisanal.
                </p>
            </div>
        </div>
    </section>
    <!--  FIN LES AVANTAGES   -->

    <!--  LE PROCESS   -->
    <section class=\"process row\">
        <div class=\"image col-12 col-sm-12 col-md-5 col-lg-5 col-xl-6\">
            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Avocat-decoupe.png"), "html", null, true);
        echo "\" alt=\"image illustration d'etapes\" />
        </div>
        <div class=\"timeline col-12 col-sm-12 col-md-7 col-lg-7 col-xl-6\">
            <ul>
                <li>
                    <span></span>
                    <div>
                        <div class=\"title\">Consultez les producteurs locaux</div>
                        <div class=\"info\">
                            Regardez ce que les producteurs vendent.
                        </div>
                    </div>
                    <span class=\"number\">
                        <span>Etape 1</span>
                    </span>
                </li>
                <li>
                    <div>
                        <span></span>
                        <div class=\"title\">Séléctionnez ceux qui vous interesse</div>
                        <div class=\"info\">
                            Selon vos besoins bien sur.
                        </div>
                    </div>
                    <span class=\"number\">
                        <span>Etape 2</span>
                    </span>
                </li>
                <li>
                    <div>
                        <span></span>
                        <div class=\"title\">Allez à leurs rencontres</div>
                        <div class=\"info\">Soyez attentifs à la description du producteur pour savoir comment le joindre.</div>
                    </div>
                    <span class=\"number\">
                        <span>Etape 3</span>
                    </span>
                </li>
            </ul>
        </div>
    </section>
    <!--  FIN PROCESS   -->
</main>

<!--  DEBUT CTA   -->
<section class=\"cta margin-t jumbotron jumbotron-fluid container d-flex justify-content-center align-self-center\">
    <div class=\"col content\">
        <h3 class=\"text-white text-large \">
            Vous etes interessez ou vous avez une question ?
        </h3>
        <p>Notre equipe se fera une joie de vous répondre.</p>
        <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn1\">Nous contacter</a>
    </div>
</section>
<!--  FIN CTA   -->

";
    }

    public function getTemplateName()
    {
        return "visiteur/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 159,  188 => 108,  144 => 66,  129 => 57,  123 => 54,  117 => 51,  112 => 48,  108 => 47,  89 => 31,  76 => 20,  72 => 19,  65 => 12,  61 => 11,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "visiteur/home.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\visiteur\\home.html.twig");
    }
}

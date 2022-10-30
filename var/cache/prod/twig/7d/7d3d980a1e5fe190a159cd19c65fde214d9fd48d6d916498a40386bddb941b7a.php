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

/* agriculteur/profil/profilAgri.html.twig */
class __TwigTemplate_ec26f82e906ab506a5afb19b3955d68283ed0a6ed775bd35b9a2ee45e35054bf extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("layout-agri.html.twig", "agriculteur/profil/profilAgri.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<style>
    li img {
        width: 100%;
    }

    .lSAction > a  {
        opacity: 0.8 !important;
    }
</style>
<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/lightslider.css"), "html", null, true);
        echo "\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightslider.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Magasin
";
    }

    // line 21
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue
";
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<div class=\"container\">
    <div class=\"presentation row\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 27
            echo "                <div class=\"col-md-6 mx-auto text-center alert alert-success d-flex mt-md-3\"  role=\"alert\">
                    <div class=\"flex-grow-1\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    </div>

    <section class=\"banniere row mt-5 pt-sm-5 pt-lg-0\">
<div class=\"col-xl-4 col-lg-4 col-md-8 col-sm-12 d-flex justify-content-evenly flex-column\">
<h2 class=\"large marron\">Votre magasin</h2>

<div class=\"form-important\">
        <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43), "disponible", [], "any", false, false, false, 43)) ? ("checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Disponible</label>
        </div>
        <p class=\"mt-3 pe-4\">Attention si vous indiquez que vous êtes indisponible, votre magasin apparaitra comme etant indisponible pour les visiteurs</p>
    </div>
</div>
<div class=\"col-xl-8 col-lg-8 col-md-10 col-sm-12 container-img\">
             <img class=\"photo-profil\" id=\"photo\"
             ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "photo", [], "any", false, false, false, 51)) {
            echo " 
             src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "photo", [], "any", false, false, false, 52))), "html", null, true);
            echo "\"
             ";
        } else {
            // line 53
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Photo-agriculteur.jpg"), "html", null, true);
            echo "\"
              ";
        }
        // line 55
        echo "               style=\"width:100%\" alt=\"Photo de profil\">
               <div class=\"d-flex justify-content-around content-form\">
                <div>

";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 60), 'errors');
        echo "
";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 61), 'widget', ["attr" => ["onChange" => "loadFile(event)"]]);
        // line 62
        echo "
</div>
<div class=\"\">
<input type=\"submit\" class=\"btn btn1 btn_sm\" value=\"Sauvegarder\">
";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
               </div>
</div>

    </section>
    ";
        // line 73
        echo "    <section class=\"banniere\">
        <div class=\"row justify-content-center\">
  
        </div>
    </section>


    ";
        // line 81
        echo "    <div class=\"d-flex lign-items-center my-3\">

    </div>
    ";
        // line 85
        echo "    <div class=\"row block-cards my-5\">
        <div class=\"col-xl-6 col-md-8 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h3 class=\"card-title typo mb-5\">Votre ferme <i class=\"bi bi-shop ps-3 \"></i></h3>
                    <div class=\"d-flex\">
                        <ul>
                            <li>
                                Nom :<span>
                                    ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true);
        echo "
                                </span>
                            </li>
                            <li>Mail :<span>
                                    ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 98), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "</span>
                            </li>
                            <li>
                                Nom de votre établissement:<span>
                                    ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), "nomDomaine", [], "any", false, false, false, 102), "html", null, true);
        echo "
                                </span>
                            </li>
                            <li>Adresse :<span>
                                    ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 106), "adresse", [], "any", false, false, false, 106), "html", null, true);
        echo "</span>
                            </li>

                        </ul>
                        <ul>
                            <li>Ville :<span>
                                    ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 112), "ville", [], "any", false, false, false, 112), "html", null, true);
        echo "</span>
                            </li>
                            <li>Code Postal :<span>
                                    ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 115), "codePostal", [], "any", false, false, false, 115), "html", null, true);
        echo "</span>
                            </li>
                            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 117), "telPortable", [], "any", false, false, false, 117)) {
            // line 118
            echo "                            <li>Téléphone portable :<span>
                                    ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119), "telPortable", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
                            </li>
                            ";
        }
        // line 122
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 122), "telFixe", [], "any", false, false, false, 122)) {
            // line 123
            echo "                            <li>Téléphone :<span>
                                    ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 124), "telFixe", [], "any", false, false, false, 124), "html", null, true);
            echo "</span>
                            </li>
                            ";
        }
        // line 127
        echo "                        </ul>
                    </div>
                    <p>Descriptif :
                    </br>
                    <span>
                        ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 132), "descriptif", [], "any", false, false, false, 132), "html", null, true);
        echo "</span>
                    </p>
                    <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriculteur_editProfil");
        echo "\" class=\"btn btn1 btn_sm\"><i class=\"bi bi-pencil-square me-1\"></i>Modifier</a>
                    <hr>
                    <p><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"link\"> Changer votre mot de passe</a></p>
                </div>
            </div>
        </div>


        <div class=\"col-xl-6 col-md-12 col-sm-12 mt-sm-5 mt-xl-0\">
            <div class=\"card categorie\">
                <div class=\"card-body p-4\">
                    <h3 class=\"card-title typo\">Gérez vos catégories <i class=\"ps-3 bi bi-list-ul\"></i></h3>
                    ";
        // line 147
        echo "                    ";
        $context["categorieOut"] = [];
        // line 148
        echo "                    ";
        $context["i"] = 0;
        // line 149
        echo "
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["catRepo"]) {
            // line 151
            echo "
                    ";
            // line 153
            echo "                    ";
            if (twig_in_filter($context["catRepo"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 153), "categorie", [], "any", false, false, false, 153))) {
                // line 154
                echo "                    <div class=\"item ps-3\">
                    <div class=\"row align-items-center my-4\">
                        <h4 class=\"col typo\"> <i class=\"bi bi-dot\"></i>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 156), "html", null, true);
                echo "</h4>
                        <div class=\"col\">
                            <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriCategorie_addImages", ["userCategorie" => "edit", "id" => twig_get_attribute($this->env, $this->source, $context["catRepo"], "id", [], "any", false, false, false, 158), "slug" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 158), [" " => "_"])]), "html", null, true);
                echo "\" class=\"btn btn1 btn_sm col\"><i class=\"bi bi-pencil-square\"></i> Modifier</a>
                        </div>
                    </div>
                            ";
                // line 162
                echo "                        <ul id=\"content-slider";
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\" class=\"content-slider px-0\">

                            ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 164), "images", [], "any", false, false, false, 164));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 165
                    echo "                            ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["image"], "categorie", [], "any", false, false, false, 165), $context["catRepo"]))) {
                        // line 166
                        echo "                            <li>
                                <img src=\"";
                        // line 167
                        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/produit/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 167))), "thumb"), "html", null, true);
                        echo "\" alt=\"Les produits ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 167), "html", null, true);
                        echo "\" width=\"auto\">
                            </li>
                            ";
                    }
                    // line 170
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 172
                echo "
                        </ul>
                        </div>
                        <hr class=\"my-5\">

                            ";
            } elseif (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 177
($context["app"] ?? null), "user", [], "any", false, false, false, 177), "categorie", [], "any", false, false, false, 177), twig_get_attribute($this->env, $this->source, $context["catRepo"], "nom", [], "any", false, false, false, 177))) {
                // line 178
                echo "                            ";
                $context["categorieOut"] = twig_array_merge(($context["categorieOut"] ?? null), [0 => $context["catRepo"]]);
                // line 179
                echo "                            ";
            }
            // line 180
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catRepo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                            <ul>
                                ";
        // line 182
        if (($context["categorieOut"] ?? null)) {
            // line 183
            echo "                            <li>
                            <h4 class=\"typo\">Autres catégories</h4>
                            </li>
                                ";
        }
        // line 187
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorieOut"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 188
            echo "                                <li class=\"mb-2\">
                                    <a class=\"btn btn2 btn_sm link-vide-categorie\" href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agriCategorie_addImages", ["userCategorie" => "new", "id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 189), "slug" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 189), [" " => "_"])]), "html", null, true);
            echo "\">
                                     <i class=\"bi bi-plus-square\"></i> Ajouter <span class=\"nom-categorie-vide\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 190), "html", null, true);
            echo "</span></a>
                                </li>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                                ";
        // line 195
        echo "                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            \$(document).ready(function () {
                ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 205), "categorie", [], "any", false, false, false, 205));
        foreach ($context['_seq'] as $context["key"] => $context["img"]) {
            // line 206
            echo "                \$('#content-slider";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "').lightSlider({
                    item: 4,
                    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                    keyPress: true,
                    slideMove: 2,
                    speed: 600,
                    responsive: [
                        {
                            breakpoint: 800,
                            settings: {
                                item: 3,
                                slideMove: 1,
                                slideMargin: 6,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                item: 2,
                                slideMove: 1
                            }
                        }
                    ]
                });
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "
            });
        </script>

        ";
    }

    // line 236
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 237
        echo "
        <script>
            window.onload = () => {
                let activer = document.querySelectorAll(\"[type=checkbox]\")
                for (let bouton of activer) {
                    bouton.addEventListener(\"click\", function () {
                        let xmlhttp = new XMLHttpRequest;

                        xmlhttp.open(\"get\", \"/agriculteur/disponible\")
                        xmlhttp.send()
                    })
                }
            }
        </script>

        <script>
            let loadFile = function (event) {
                let image = document.getElementById('photo');
                image.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
        <script src=\"https://unpkg.com/swiper@7/swiper-bundle.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "agriculteur/profil/profilAgri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 237,  488 => 236,  480 => 231,  448 => 206,  444 => 205,  432 => 195,  430 => 194,  420 => 190,  416 => 189,  413 => 188,  408 => 187,  402 => 183,  400 => 182,  397 => 181,  391 => 180,  388 => 179,  385 => 178,  383 => 177,  376 => 172,  373 => 171,  367 => 170,  359 => 167,  356 => 166,  353 => 165,  349 => 164,  343 => 162,  337 => 158,  332 => 156,  328 => 154,  325 => 153,  322 => 151,  318 => 150,  315 => 149,  312 => 148,  309 => 147,  296 => 136,  291 => 134,  286 => 132,  279 => 127,  273 => 124,  270 => 123,  267 => 122,  261 => 119,  258 => 118,  256 => 117,  251 => 115,  245 => 112,  236 => 106,  229 => 102,  222 => 98,  215 => 94,  204 => 85,  199 => 81,  190 => 73,  181 => 66,  175 => 62,  173 => 61,  169 => 60,  165 => 59,  159 => 55,  153 => 53,  148 => 52,  144 => 51,  133 => 43,  122 => 34,  111 => 29,  107 => 27,  103 => 26,  99 => 24,  95 => 23,  87 => 21,  79 => 19,  72 => 16,  67 => 14,  54 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agriculteur/profil/profilAgri.html.twig", "/home/users7/c/czh4993/www/templates/agriculteur/profil/profilAgri.html.twig");
    }
}

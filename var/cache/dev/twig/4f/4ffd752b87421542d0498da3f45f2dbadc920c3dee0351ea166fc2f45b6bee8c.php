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

/* visiteur/PolitiqueDeConf.html.twig */
class __TwigTemplate_41fc5d907b258cfd7f339c9be5d70f8d9f5b52d14bf79207c43344c65081d09b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/PolitiqueDeConf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/PolitiqueDeConf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/PolitiqueDeConf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Politique de confidentialité -
";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_metaDescr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescr"));

        // line 9
        echo "\t\t<meta name=\"description\" content=\"Politique de confidentialité du site les locavores\">
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<main class=\"container mt-5 mb-5\">
<h1 class=\"pt-3 mb-4\">POLITIQUE DE CONFIDENTIALITÉ</h1>

<h3>DONNÉES PERSONNELLES</h3>

<h4>Définitions</h4>
<p>
<b>
L'Éditeur 
</b>
: La personne, physique ou morale, qui édite les services de communication au public 
en ligne.

<b>
Le Site 
</b>
: L'ensemble des sites, pages Internet et services en ligne proposés par l'Éditeur.
L'Utilisateur : La personne utilisant le Site et les services.
</p>
<h4>
1- Nature des données collectées
</h4>
<p>
<b>
Dans le cadre de l'utilisation des Sites, l'Éditeur est susceptible de collecter les catégories 
de données suivantes concernant ses Utilisateurs :
</b>
Données relatives à la vie professionnelle (CV, scolarité, formation professionnelle, 
distinctions...)
</p>

<h4>
2- Communication des données personnelles à des 
tiers
</h4>
<p>
<b>
Pas de communication à des tiers
</b>
Vos données ne font l'objet d'aucune communication à des tiers. Vous êtes toutefois informés 
qu'elles pourront être divulguées en application d'une loi, d'un règlement ou en vertu d'une 
décision d'une autorité réglementaire ou judiciaire compétente.
</p>
<h4>
3- Information préalable pour la communication des 
données personnelles à des tiers en cas de fusion / 
absorption
</h4>
<p>
Information préalable et possibilité d’opt-out avant et après la fusion / acquisition
Dans le cas où nous prendrions part à une opération de fusion, d’acquisition ou à toute autre 
forme de cession d’actifs, nous nous engageons à garantir la confidentialité de vos données 
personnelles et à vous informer avant que celles-ci ne soient transférées ou soumises à de 
nouvelles règles de confidentialité.
</p>

<h4>
4- Agrégation des données
</h4>
<p>
<b>
Agrégation avec des données non personnelles
</b>
Nous pouvons publier, divulguer et utiliser les informations agrégées (informations relatives à 
tous nos Utilisateurs ou à des groupes ou catégories spécifiques d'Utilisateurs que nous 
combinons de manière à ce qu'un Utilisateur individuel ne puisse plus être identifié ou 
mentionné) et les informations non personnelles à des fins d'analyse du secteur et du marché, 
de profilage démographique, à des fins promotionnelles et publicitaires et à d'autres fins 
commerciales.

<b>
Agrégation avec des données personnelles disponibles sur les comptes sociaux de 
l'Utilisateur
</b>
Si vous connectez votre compte à un compte d’un autre service afin de faire des envois croisés, 
ledit service pourra nous communiquer vos informations de profil, de connexion, ainsi que toute 
autre information dont vous avez autorisé la divulgation. Nous pouvons agréger les informations 
relatives à tous nos autres Utilisateurs, groupes, comptes, aux données personnelles disponibles 
sur l’Utilisateur.
</p>

<h4>
5- Collecte des données d'identité
</h4>
<p>
<b>
Consultation libre
</b>
La consultation du Site ne nécessite pas d'inscription ni d'identification préalable. Elle peut 
s'effectuer sans que vous ne communiquiez de données nominatives vous concernant (nom, 
prénom, adresse, etc). Nous ne procédons à aucun enregistrement de données nominatives 
pour la simple consultation du Site.
</p>

<h4>
6- Collecte des données d'identification
</h4>
<p>
<b>
Utilisation de l'identifiant de l'utilisateur pour proposition de mise en relation et offres 
commerciales
</b>
Nous utilisons vos identifiants électroniques pour rechercher des relations présentes par 
connexion, par adresse mail ou par services. Nous pouvons utiliser vos informations de contact 
pour permettre à d'autres personnes de trouver votre compte, notamment via des services tiers 
et des applications clientes. Vous pouvez télécharger votre carnet d'adresses afin que nous 
soyons en mesure de vous aider à trouver des connaissances sur notre réseau ou pour 
permettre à d'autres Utilisateurs de notre réseau de vous trouver. Nous pouvons vous proposer 
des suggestions, à vous et à d'autres Utilisateurs du réseau, à partir des contacts importés de 
votre carnet d’adresses. Nous sommes susceptibles de travailler en partenariat avec des 
sociétés qui proposent des offres incitatives. Pour prendre en charge ce type de promotion et 
d'offre incitative, nous sommes susceptibles de partager votre identifiant électronique.
</p>

<h4>
7- Collecte des données du terminal
</h4>
<p>
Aucune collecte des données techniques
Nous ne collectons et ne conservons aucune donnée technique de votre appareil (adresse IP, 
fournisseur d'accès à Internet...).

<h4>
8- Cookies
</h4>
<b>
Durée de conservation des cookies
</b>
Conformément aux recommandations de la CNIL, la durée maximale de conservation des 
cookies est de 13 mois au maximum après leur premier dépôt dans le terminal de l'Utilisateur, 
tout comme la durée de la validité du consentement de l’Utilisateur à l’utilisation de ces cookies. 
La durée de vie des cookies n’est pas prolongée à chaque visite. Le consentement de 
l’Utilisateur devra donc être renouvelé à l'issue de ce délai.
<b>
Finalité cookies
</b>
Les cookies peuvent être utilisés pour des fins statistiques notamment pour optimiser les 
services rendus à l'Utilisateur, à partir du traitement des informations concernant la fréquence 
d'accès, la personnalisation des pages ainsi que les opérations réalisées et les informations 
consultées.
Vous êtes informé que l'Éditeur est susceptible de déposer des cookies sur votre terminal. Le 
cookie enregistre des informations relatives à la navigation sur le service (les pages que vous 
avez consultées, la date et l'heure de la consultation...) que nous pourrons lire lors de vos visites 
ultérieures.
Vous reconnaissez avoir été informé que l'Éditeur peut avoir recours à des cookies, et l'y 
autorisez. Si vous ne souhaitez pas que des cookies soient utilisés sur votre terminal, la 
plupart des navigateurs vous permettent de désactiver les cookies en passant par les 
options de réglage. Toutefois, vous êtes informé que certains services sont susceptibles de 
ne plus fonctionner correctement.
Association possible des cookies avec des données personnelles pour permettre le 
fonctionnement du service
L'Éditeur peut être amenée à recueillir des informations de navigation via l'utilisation de 
cookies.

<h4>
9 - Conservation des données techniques
</h4>

<b>
Durée de conservation des données techniques
</b>
Les données techniques sont conservées pour la durée strictement nécessaire à la réalisation 
des finalités visées ci-avant.

<h4>
10- Délai de conservation des données 
personnelles et d'anonymisation
</h4>

<b>
Conservation des données pendant la durée de la relation contractuelle
</b>
Conformément à l'article 6-5° de la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux 
fichiers et aux libertés, les données à caractère personnel faisant l'objet d'un traitement ne sont 
pas conservées au-delà du temps nécessaire à l'exécution des obligations définies lors de la 
conclusion du contrat ou de la durée prédéfinie de la relation contractuelle.

<b>
Conservation des données anonymisées au delà de la relation contractuelle / après la 
suppression du compte
</b>
Nous conservons les données personnelles pour la durée strictement nécessaire à la réalisation 
des finalités décrites dans les présentes Politiques de confidentialité. Au-delà de cette durée, 
elles seront anonymisées et conservées à des fins exclusivement statistiques et ne donneront 
lieu à aucune exploitation, de quelque nature que ce soit.

<b>
Suppression des données après suppression du compte
</b>
Des moyens de purge de données sont mis en place afin d'en prévoir la suppression effective 
dès lors que la durée de conservation ou d'archivage nécessaire à l'accomplissement des 
finalités déterminées ou imposées est atteinte. Conformément à la loi n°78-17 du 6 janvier 1978 
relative à l'informatique, aux fichiers et aux libertés, vous disposez par ailleurs d'un droit de 
suppression sur vos données que vous pouvez exercer à tout moment en prenant contact avec 
l'Éditeur.

<h4>
11- Suppression du compte
</h4>
<b>
Suppression du compte à la demande
</b>
L'Utilisateur a la possibilité de supprimer son Compte à tout moment, par simple demande à 
l'Éditeur OU par le menu de suppression de Compte présent dans les paramètres du Compte le 
cas échéant.

<b>
Suppression du compte en cas de violation de la Politique de Confidentialité
</b>
En cas de violation d'une ou de plusieurs dispositions de la Politique de Confidentialité ou de tout 
autre document incorporé aux présentes par référence, l'Éditeur se réserve le droit de mettre fin 
ou restreindre sans aucun avertissement préalable et à sa seule discrétion, votre usage et accès 
aux services, à votre compte et à tous les Sites.

<h4>
12- Indications en cas de faille de sécurité décelée 
par l'Éditeur
</h4>
<b>
Information de l'Utilisateur en cas de faille de sécurité
</b>
Nous nous engageons à mettre en oeuvre toutes les mesures techniques et organisationnelles 
appropriées afin de garantir un niveau de sécurité adapté au regard des risques d'accès 
accidentels, non autorisés ou illégaux, de divulgation, d'altération, de perte ou encore de 
destruction des données personnelles vous concernant. Dans l'éventualité où nous prendrions 
connaissance d'un accès illégal aux données personnelles vous concernant stockées sur nos 
serveurs ou ceux de nos prestataires, ou d'un accès non autorisé ayant pour conséquence la 
réalisation des risques identifiés ci-dessus, nous nous engageons à :
Vous notifier l'incident dans les plus brefs délais ;
Examiner les causes de l'incident et vous en informer ;
Prendre les mesures nécessaires dans la limite du raisonnable afin d'amoindrir les effets négatifs 
et préjudices pouvant résulter dudit incident.

<b>
Limitation de la responsabilité
</b>
En aucun cas les engagements définis au point ci-dessus relatifs à la notification en cas de faille 
de sécurité ne peuvent être assimilés à une quelconque reconnaissance de faute ou de 
responsabilité quant à la survenance de l'incident en question.

<h4>
13- Transfert des données personnelles à l'étranger
</h4>
<b>
Pas de transfert en dehors de l'Union européenne
</b>
L'Éditeur s'engage à ne pas transférer les données personnelles de ses Utilisateurs en dehors 
de l'Union européenne.
https://www.cnil.fr/fr/la-protection-des-donnees-dans-le-mondehttps://www.cnil.fr/fr/la-protectiondes-donnees-dans-le-monde
<h4>
14- Modification de la politique de confidentialité
</h4>
<b>
En cas de modification de la présente Politique de Confidentialité, engagement de ne pas 
baisser le niveau de confidentialité de manière substantielle sans l'information préalable 
des personnes concernées
</b>
Nous nous engageons à vous informer en cas de modification substantielle de la présente 
Politique de Confidentialité, et à ne pas baisser le niveau de confidentialité de vos données de 
manière substantielle sans vous en informer et obtenir votre consentement.

<h4>
15- Droit applicable et modalités de recours
</h4>

<b>
Clause d'arbitrage
</b>
Vous acceptez expressément que tout litige susceptible de naître du fait de la présente Politique 
de Confidentialité, notamment de son interprétation ou de son exécution, relèvera d'une 
procédure d'arbitrage soumise au règlement de la plateforme d'arbitrage choisie d'un commun 
accord, auquel vous adhérerez sans réserve.

<h4>
16- Portabilité des données 
</h4>
<b>
Portabilité des données
</b>
L'Éditeur s'engage à vous offrir la possibilité de vous faire restituer l'ensemble des données 
vous concernant sur simple demande. L'Utilisateur se voit ainsi garantir une meilleure 
maîtrise de ses données, et garde la possibilité de les réutiliser. Ces données devront être 
fournies dans un format ouvert et aisément réutilisable. 

</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/PolitiqueDeConf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 12,  106 => 11,  95 => 9,  85 => 8,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Politique de confidentialité -
{{parent()}}
\t\t\t{% endblock %}

\t\t\t{% block metaDescr %}
\t\t<meta name=\"description\" content=\"Politique de confidentialité du site les locavores\">
\t\t\t{% endblock %}
{% block body %}

<main class=\"container mt-5 mb-5\">
<h1 class=\"pt-3 mb-4\">POLITIQUE DE CONFIDENTIALITÉ</h1>

<h3>DONNÉES PERSONNELLES</h3>

<h4>Définitions</h4>
<p>
<b>
L'Éditeur 
</b>
: La personne, physique ou morale, qui édite les services de communication au public 
en ligne.

<b>
Le Site 
</b>
: L'ensemble des sites, pages Internet et services en ligne proposés par l'Éditeur.
L'Utilisateur : La personne utilisant le Site et les services.
</p>
<h4>
1- Nature des données collectées
</h4>
<p>
<b>
Dans le cadre de l'utilisation des Sites, l'Éditeur est susceptible de collecter les catégories 
de données suivantes concernant ses Utilisateurs :
</b>
Données relatives à la vie professionnelle (CV, scolarité, formation professionnelle, 
distinctions...)
</p>

<h4>
2- Communication des données personnelles à des 
tiers
</h4>
<p>
<b>
Pas de communication à des tiers
</b>
Vos données ne font l'objet d'aucune communication à des tiers. Vous êtes toutefois informés 
qu'elles pourront être divulguées en application d'une loi, d'un règlement ou en vertu d'une 
décision d'une autorité réglementaire ou judiciaire compétente.
</p>
<h4>
3- Information préalable pour la communication des 
données personnelles à des tiers en cas de fusion / 
absorption
</h4>
<p>
Information préalable et possibilité d’opt-out avant et après la fusion / acquisition
Dans le cas où nous prendrions part à une opération de fusion, d’acquisition ou à toute autre 
forme de cession d’actifs, nous nous engageons à garantir la confidentialité de vos données 
personnelles et à vous informer avant que celles-ci ne soient transférées ou soumises à de 
nouvelles règles de confidentialité.
</p>

<h4>
4- Agrégation des données
</h4>
<p>
<b>
Agrégation avec des données non personnelles
</b>
Nous pouvons publier, divulguer et utiliser les informations agrégées (informations relatives à 
tous nos Utilisateurs ou à des groupes ou catégories spécifiques d'Utilisateurs que nous 
combinons de manière à ce qu'un Utilisateur individuel ne puisse plus être identifié ou 
mentionné) et les informations non personnelles à des fins d'analyse du secteur et du marché, 
de profilage démographique, à des fins promotionnelles et publicitaires et à d'autres fins 
commerciales.

<b>
Agrégation avec des données personnelles disponibles sur les comptes sociaux de 
l'Utilisateur
</b>
Si vous connectez votre compte à un compte d’un autre service afin de faire des envois croisés, 
ledit service pourra nous communiquer vos informations de profil, de connexion, ainsi que toute 
autre information dont vous avez autorisé la divulgation. Nous pouvons agréger les informations 
relatives à tous nos autres Utilisateurs, groupes, comptes, aux données personnelles disponibles 
sur l’Utilisateur.
</p>

<h4>
5- Collecte des données d'identité
</h4>
<p>
<b>
Consultation libre
</b>
La consultation du Site ne nécessite pas d'inscription ni d'identification préalable. Elle peut 
s'effectuer sans que vous ne communiquiez de données nominatives vous concernant (nom, 
prénom, adresse, etc). Nous ne procédons à aucun enregistrement de données nominatives 
pour la simple consultation du Site.
</p>

<h4>
6- Collecte des données d'identification
</h4>
<p>
<b>
Utilisation de l'identifiant de l'utilisateur pour proposition de mise en relation et offres 
commerciales
</b>
Nous utilisons vos identifiants électroniques pour rechercher des relations présentes par 
connexion, par adresse mail ou par services. Nous pouvons utiliser vos informations de contact 
pour permettre à d'autres personnes de trouver votre compte, notamment via des services tiers 
et des applications clientes. Vous pouvez télécharger votre carnet d'adresses afin que nous 
soyons en mesure de vous aider à trouver des connaissances sur notre réseau ou pour 
permettre à d'autres Utilisateurs de notre réseau de vous trouver. Nous pouvons vous proposer 
des suggestions, à vous et à d'autres Utilisateurs du réseau, à partir des contacts importés de 
votre carnet d’adresses. Nous sommes susceptibles de travailler en partenariat avec des 
sociétés qui proposent des offres incitatives. Pour prendre en charge ce type de promotion et 
d'offre incitative, nous sommes susceptibles de partager votre identifiant électronique.
</p>

<h4>
7- Collecte des données du terminal
</h4>
<p>
Aucune collecte des données techniques
Nous ne collectons et ne conservons aucune donnée technique de votre appareil (adresse IP, 
fournisseur d'accès à Internet...).

<h4>
8- Cookies
</h4>
<b>
Durée de conservation des cookies
</b>
Conformément aux recommandations de la CNIL, la durée maximale de conservation des 
cookies est de 13 mois au maximum après leur premier dépôt dans le terminal de l'Utilisateur, 
tout comme la durée de la validité du consentement de l’Utilisateur à l’utilisation de ces cookies. 
La durée de vie des cookies n’est pas prolongée à chaque visite. Le consentement de 
l’Utilisateur devra donc être renouvelé à l'issue de ce délai.
<b>
Finalité cookies
</b>
Les cookies peuvent être utilisés pour des fins statistiques notamment pour optimiser les 
services rendus à l'Utilisateur, à partir du traitement des informations concernant la fréquence 
d'accès, la personnalisation des pages ainsi que les opérations réalisées et les informations 
consultées.
Vous êtes informé que l'Éditeur est susceptible de déposer des cookies sur votre terminal. Le 
cookie enregistre des informations relatives à la navigation sur le service (les pages que vous 
avez consultées, la date et l'heure de la consultation...) que nous pourrons lire lors de vos visites 
ultérieures.
Vous reconnaissez avoir été informé que l'Éditeur peut avoir recours à des cookies, et l'y 
autorisez. Si vous ne souhaitez pas que des cookies soient utilisés sur votre terminal, la 
plupart des navigateurs vous permettent de désactiver les cookies en passant par les 
options de réglage. Toutefois, vous êtes informé que certains services sont susceptibles de 
ne plus fonctionner correctement.
Association possible des cookies avec des données personnelles pour permettre le 
fonctionnement du service
L'Éditeur peut être amenée à recueillir des informations de navigation via l'utilisation de 
cookies.

<h4>
9 - Conservation des données techniques
</h4>

<b>
Durée de conservation des données techniques
</b>
Les données techniques sont conservées pour la durée strictement nécessaire à la réalisation 
des finalités visées ci-avant.

<h4>
10- Délai de conservation des données 
personnelles et d'anonymisation
</h4>

<b>
Conservation des données pendant la durée de la relation contractuelle
</b>
Conformément à l'article 6-5° de la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux 
fichiers et aux libertés, les données à caractère personnel faisant l'objet d'un traitement ne sont 
pas conservées au-delà du temps nécessaire à l'exécution des obligations définies lors de la 
conclusion du contrat ou de la durée prédéfinie de la relation contractuelle.

<b>
Conservation des données anonymisées au delà de la relation contractuelle / après la 
suppression du compte
</b>
Nous conservons les données personnelles pour la durée strictement nécessaire à la réalisation 
des finalités décrites dans les présentes Politiques de confidentialité. Au-delà de cette durée, 
elles seront anonymisées et conservées à des fins exclusivement statistiques et ne donneront 
lieu à aucune exploitation, de quelque nature que ce soit.

<b>
Suppression des données après suppression du compte
</b>
Des moyens de purge de données sont mis en place afin d'en prévoir la suppression effective 
dès lors que la durée de conservation ou d'archivage nécessaire à l'accomplissement des 
finalités déterminées ou imposées est atteinte. Conformément à la loi n°78-17 du 6 janvier 1978 
relative à l'informatique, aux fichiers et aux libertés, vous disposez par ailleurs d'un droit de 
suppression sur vos données que vous pouvez exercer à tout moment en prenant contact avec 
l'Éditeur.

<h4>
11- Suppression du compte
</h4>
<b>
Suppression du compte à la demande
</b>
L'Utilisateur a la possibilité de supprimer son Compte à tout moment, par simple demande à 
l'Éditeur OU par le menu de suppression de Compte présent dans les paramètres du Compte le 
cas échéant.

<b>
Suppression du compte en cas de violation de la Politique de Confidentialité
</b>
En cas de violation d'une ou de plusieurs dispositions de la Politique de Confidentialité ou de tout 
autre document incorporé aux présentes par référence, l'Éditeur se réserve le droit de mettre fin 
ou restreindre sans aucun avertissement préalable et à sa seule discrétion, votre usage et accès 
aux services, à votre compte et à tous les Sites.

<h4>
12- Indications en cas de faille de sécurité décelée 
par l'Éditeur
</h4>
<b>
Information de l'Utilisateur en cas de faille de sécurité
</b>
Nous nous engageons à mettre en oeuvre toutes les mesures techniques et organisationnelles 
appropriées afin de garantir un niveau de sécurité adapté au regard des risques d'accès 
accidentels, non autorisés ou illégaux, de divulgation, d'altération, de perte ou encore de 
destruction des données personnelles vous concernant. Dans l'éventualité où nous prendrions 
connaissance d'un accès illégal aux données personnelles vous concernant stockées sur nos 
serveurs ou ceux de nos prestataires, ou d'un accès non autorisé ayant pour conséquence la 
réalisation des risques identifiés ci-dessus, nous nous engageons à :
Vous notifier l'incident dans les plus brefs délais ;
Examiner les causes de l'incident et vous en informer ;
Prendre les mesures nécessaires dans la limite du raisonnable afin d'amoindrir les effets négatifs 
et préjudices pouvant résulter dudit incident.

<b>
Limitation de la responsabilité
</b>
En aucun cas les engagements définis au point ci-dessus relatifs à la notification en cas de faille 
de sécurité ne peuvent être assimilés à une quelconque reconnaissance de faute ou de 
responsabilité quant à la survenance de l'incident en question.

<h4>
13- Transfert des données personnelles à l'étranger
</h4>
<b>
Pas de transfert en dehors de l'Union européenne
</b>
L'Éditeur s'engage à ne pas transférer les données personnelles de ses Utilisateurs en dehors 
de l'Union européenne.
https://www.cnil.fr/fr/la-protection-des-donnees-dans-le-mondehttps://www.cnil.fr/fr/la-protectiondes-donnees-dans-le-monde
<h4>
14- Modification de la politique de confidentialité
</h4>
<b>
En cas de modification de la présente Politique de Confidentialité, engagement de ne pas 
baisser le niveau de confidentialité de manière substantielle sans l'information préalable 
des personnes concernées
</b>
Nous nous engageons à vous informer en cas de modification substantielle de la présente 
Politique de Confidentialité, et à ne pas baisser le niveau de confidentialité de vos données de 
manière substantielle sans vous en informer et obtenir votre consentement.

<h4>
15- Droit applicable et modalités de recours
</h4>

<b>
Clause d'arbitrage
</b>
Vous acceptez expressément que tout litige susceptible de naître du fait de la présente Politique 
de Confidentialité, notamment de son interprétation ou de son exécution, relèvera d'une 
procédure d'arbitrage soumise au règlement de la plateforme d'arbitrage choisie d'un commun 
accord, auquel vous adhérerez sans réserve.

<h4>
16- Portabilité des données 
</h4>
<b>
Portabilité des données
</b>
L'Éditeur s'engage à vous offrir la possibilité de vous faire restituer l'ensemble des données 
vous concernant sur simple demande. L'Utilisateur se voit ainsi garantir une meilleure 
maîtrise de ses données, et garde la possibilité de les réutiliser. Ces données devront être 
fournies dans un format ouvert et aisément réutilisable. 

</main>

{% endblock %}", "visiteur/PolitiqueDeConf.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\visiteur\\PolitiqueDeConf.html.twig");
    }
}

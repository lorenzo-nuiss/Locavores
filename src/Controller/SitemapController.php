<?php

namespace App\Controller;

use App\Entity\Agriculteur;
use App\Entity\Categorie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SitemapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(Request $request)
    {
        // Nous récupérons le nom d'hôte depuis l'URL
        $hostname = $request->getSchemeAndHttpHost();


        // On initialise un tableau pour lister les URLs
$urls = [];

// On ajoute les URLs "statiques"
$urls[] = ['loc' => $this->generateUrl('home')];
$urls[] = ['loc' => $this->generateUrl('contact')];
$urls[] = ['loc' => $this->generateUrl('mention')];
$urls[] = ['loc' => $this->generateUrl('politiqueConfidentialite')];

$urls[] = ['loc' => $this->generateUrl('app_registere')];
$urls[] = ['loc' => $this->generateUrl('app_login')];

// On ajoute les URLs dynamiques des articles dans le tableau
foreach ($this->getDoctrine()->getRepository(Categorie::class)->findAll() as $categorie) {

    $urls[] = [
        'loc' => $this->generateUrl('listAgriByCategorie', [
            'categorie_name' => $categorie->getNom(),
        ]),
    ];
}

foreach ($this->getDoctrine()->getRepository(Agriculteur::class)->findBy(['etat'=> 'valide']) as $agriculteur) {

    $urls[] = [
        'loc' => $this->generateUrl('showAgriVisiteur', [
            'name' => $agriculteur->getNom(),
            'id' => $agriculteur->getId(),
        ]),
    ];
}


        // Fabrication de la réponse XML
        $response = new Response(
            $this->renderView('sitemap/index.html.twig', ['urls' => $urls,
                'hostname' => $hostname]),
            200
        );

        // Ajout des entêtes
        $response->headers->set('Content-Type', 'text/xml');

        // On envoie la réponse
        return $response;


    }
}

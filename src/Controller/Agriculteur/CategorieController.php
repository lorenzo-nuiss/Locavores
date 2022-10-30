<?php

namespace App\Controller\Agriculteur;

use App\Entity\Images;
use App\Entity\Categorie;
use App\Form\CategorieImagesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/agriculteur/categorie", name="agriCategorie_")
 */
class CategorieController extends AbstractController
{

    /**
    * @Route("/", name="index")
    */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }


    // fonction pour que l agriculteur puisse ajouter ses images dans les categories
    /**
     * @Route("/ajout_images/{userCategorie}/{id<\d+>}/{slug}", name="addImages")
     */
    public function imageProd(Request $request, Categorie $categorie, $userCategorie, $slug, $id)
    {

        $form = $this->createForm(CategorieImagesType::class, $categorie);
        $form->handleRequest($request);
        $agri = $this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('images')->getData();

            if ($userCategorie == 'new') {
                $agri->addCategorie($categorie);
            }
            foreach ($files as $image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('ImagesProduits'),
                    $fichier
                );
                $img = new Images;
                $img->setNom($fichier);
                $img->setAgriculteur($agri);
                $categorie->addImage($img);

                $cnx = $this->getDoctrine()->getManager();
                $cnx->persist($categorie);
                $cnx->flush();

                $this->addFlash("success", "l'image a bien été ajouté");
            }
        }
        return $this->render('agriculteur/produit/addImages.html.twig', [
            'form' => $form->createView(),
            'slug' => $slug,
            'categ' => $categorie
        ]);
    }


    /**
     * @Route("categorie/supprimer/{id<\d+>}", name="delete", methods={"POST"})
     */

    public function delete(Request $request, Categorie $categorie, $id): Response
    {
        if ($this->isCsrfTokenValid('delete' . $categorie->getId(), $request->request->get('_token'))) {
            $agri = $this->getUser();
            $images = $categorie->getImages();
            $nomcat = $categorie->getNom();
            $cnx = $this->getDoctrine()->getManager();
            if ($images) {
                foreach ($images as $image) {
                    $cnx->remove($image);

                    $nom = $this->getParameter("ImagesProduits") . '/' . $image->getNom();
                    if (file_exists($nom)) {
                        unlink($nom);
                    }
                }
            }
            $categorie->removeAgriculteur($agri);
            $cnx->persist($agri);
            $cnx->flush();
            $this->addFlash("success", "Vous n'êtes plus actif dans la catégorie " . $nomcat);
            return $this->redirectToRoute('agriculteur_profil');
        }

        return $this->redirectToRoute('agriCategorie_addImages', [], Response::HTTP_SEE_OTHER);
    }

    // -------- supprimer l image d un produit dans une categoire ----------
    /**
     * @Route("/produit/supprimer_images/{id<\d+>}", name="deleteImages", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            $nom = $image->getNom();
            unlink($this->getParameter('ImagesProduits') . '/' . $nom);

            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            $this->addFlash("success", "la photo a bien été supprmié");
            return new JsonResponse(['success' => 1]);
        } else {
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }

}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonces;
use App\Entity\Category;








class AnnoncesController extends AbstractController
{

    /**
     * @Route("/annonce/{id}", name="annonce_detail")
     */
    public function detailAnnonce($id)
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $annonce = $this->getDoctrine()->getRepository(Annonces::class)->find($id);

        return $this->render('annonces/detail.html.twig', [
            
            'categories' => $categories,
            'annonce' => $annonce
            
        ]);
    }
  
    

}

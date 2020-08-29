<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Category;
use App\Entity\Annonces;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $annonces = $this->getDoctrine()->getRepository(Annonces::class)->findAll();

        return $this->render('homepage/index.html.twig',[
            'categories' => $categories,
            'annonces' => $annonces
        ]);
    }
}

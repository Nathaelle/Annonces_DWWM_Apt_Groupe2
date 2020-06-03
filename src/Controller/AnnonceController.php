<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonces", name="annonces")
     */
    public function showAllAnnonces()
    {
        return $this->render('annonce/annonces.html.twig', [
            
        ]);
    }

    /**
     * @Route("/annonce", name="annonce")
     */
    public function showAnnonce()
    {
        return $this->render('annonce/annonce.html.twig', [
            
        ]);
    }
}

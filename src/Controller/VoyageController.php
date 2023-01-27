<?php

namespace App\Controller;

use App\Entity\Voyage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoyageController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        Voyage::creerVoyages();
        return $this->render('voyage/index.html.twig');
    }

    #[Route('/voyages', name: 'pays')]
    public function voyages(): Response
    { 
        Voyage::creerVoyages();
        return $this->render('voyage/voyages.html.twig', [
           "nom" => $voyages, "voyages" => Voyage::$voyages
        ]);
    }


}

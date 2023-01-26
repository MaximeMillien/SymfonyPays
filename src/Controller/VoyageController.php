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
        return $this->render('voyage/index.html.twig');
    }

    #[Route('/voyages', name: 'pays')]
    public function voyages(): Response
    { 
        Voyage::creerVoyages();
        return $this->render('voyage/voyages.html.twig', [
            "voyages" => Voyage::$voyages
        ]);
    }

    #[Route('/voyages', name: 'afficherVoyage')]
    public function afficherVoyage($pays): Response
    {
        Voyage::creerVoyages();
        $pays = Voyage::getVoyagesParNom($pays);
        return $this->render('voyage/voyage.html.twig', [
            "pays" => $pays
        ]);
    }
}

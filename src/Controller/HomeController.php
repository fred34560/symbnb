<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

    /**
     * Undocumented function
     *
     * @Route ("/", name="homepage")
     */
    public function home() {

        return $this->render('home.html.twig', [
            'title' => 'Bienvenue sur mon site'
        ]);





    }
    
}
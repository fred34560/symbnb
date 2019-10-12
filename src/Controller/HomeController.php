<?php
namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

    /**
     * Undocumented function
     *
     * @Route ("/", name="homepage")
     */
    public function home(AdRepository $adRepo, UserRepository $userRepo) {

        return $this->render('home.html.twig', [
            'ads' => $adRepo->findBestAds(3),
            'users' => $userRepo->findBestUsers(2)
        ]);





    }
    
}
<?php

namespace App\Controller;

use App\Repository\ChequeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(ChequeRepository $chequeRepository): Response
    {
        dump($chequeRepository->findAllCount());
        return $this->render('dashboard/index.html.twig', [
            'stat' => $chequeRepository->findAllCheque(),
            'total' => $chequeRepository->findAllCount()
        ]);
    }
}

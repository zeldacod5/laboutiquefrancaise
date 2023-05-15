<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountAdressController extends AbstractController
{
    #[Route('/compte/adresses', name: 'account_adress')]
    public function index(): Response
    {
        return $this->render('account/adress.html.twig');
    }
}

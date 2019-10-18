<?php

namespace App\Controller;

use App\Entity\Prospects;
use App\Form\ProspectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $prospect = new Prospects();
        $form = $this->createForm(ProspectType::class,$prospect);
        $form->handleRequest($request);

        return $this->render('home/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Prospects;
use App\Form\ProspectType;
use App\Notification\ContactNotification;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnalyseController extends AbstractController
{
    /**
     * @Route("/am-analyse", name="am_analyse")
     * @param Request $request
     * @param ObjectManager $manager
     * @param ContactNotification $notification
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $prospect = new Prospects();
        $form =$this->createForm(ProspectType::class, $prospect);
        $form->handleRequest($request);

        return $this->render('analyse/analyse.html.twig',[
            'form'=> $form->createView()
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Prospects;
use App\Form\ProspectType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Notification\ContactNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/am-contact", name="am_contact")
     * @param Request $request
     * @param ContactNotification $notification
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, ContactNotification $notification, ObjectManager $manager)
    {
        $prospect = new Prospects();
        $form = $this->createForm(ProspectType::class, $prospect);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($prospect);
            $manager->flush();

            $notification->notify($prospect);
            $this->addFlash('success','votre demande a bien été transmise');
            return $this->redirectToRoute('am_contact');
        }
        return $this->render('contact/contact.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}

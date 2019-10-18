<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
//    /**
//     * @Route("", name="services")
//     */
//    public function index()
//    {
//        return $this->render('services/service.html.twig';
//    }

    /**
     *@return \Symfony\Component\HttpFoundation\Response
     * @Route("/am-seo", name="am_seo")
     */
    public function seo()
    {
        return $this->render('services/seo.html.twig');
    }

    /**
     *@return \Symfony\Component\HttpFoundation\Response
     * @Route("/am-seo-payant", name="am_seo_paid")
     */
    public function seoPaid()
    {
        return $this->render('services/seo-payant.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/am-social-media", name="am_social_media")
     */
    public function socialMedia()
    {
        return $this->render('services/social_Media.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/am-email-marketing", name="am_email_marketing")
     */
    public function EmailMarketing()
    {
        return $this->render('services/email_marketing.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/am-web-design", name="am_web_design")
     */
    public function webDesign()
    {
        return $this->render('services/web_design.html.twig');
    }
}

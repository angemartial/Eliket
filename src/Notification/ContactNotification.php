<?php
namespace App\Notification;

use App\Entity\Prospects;
use Twig\Environment;

/**
 * Created by PhpStorm.
 * User: ANGEM
 * Date: 08/10/2019
 * Time: 14:47
 */
class ContactNotification
{
    /**
     * @var \Swift_mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;

    }

    public function notify(Prospects $prospects)
    {
        $message = (new \Swift_Message('Contact-info '))
            ->setFrom('noreply@ammedia.com')
            ->setTo('info@ammedia.com')
            ->SetReplyTo($prospects->getEmail())
            ->setBody($this->renderer->render('emails/contactFromProspects.html.twig', [
                'prospect'=> $prospects
            ]),'text/html');
        $this->mailer->send($message);

    }
}
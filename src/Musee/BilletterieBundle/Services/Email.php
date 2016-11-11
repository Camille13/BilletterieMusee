<?php

// src/Musee/BilletterieBundle/Services/Email.php

namespace Musee\BilletterieBundle\Services;

use Doctrine\ORM\EntityManagerInterface;

class Email {

    private $mailer;
    private $em;

    public function __construct(EntityManagerInterface $em, \Twig_Environment $twig, \Swift_Mailer $mailer) {
        $this->em = $em;
        $this->twig = $twig;
        $this->mailer = $mailer;
    }

    public function envoieEmail($id, $dateFormat, $pdf) {
        $cmd = $this->em->getRepository('MuseeBilletterieBundle:Commande')->find($id);
        $message = \Swift_Message::newInstance();
        $cid = $message->embed(\Swift_Image::fromPath('http://localhost/Symfony/web/img/logo.png'));
        $message->setSubject('Vos billets d\'entrée')->setFrom('Billetterie@MuseeduLouvre.com');
        $message->setTo($cmd->getEmail())
                ->setBody($this->twig->render('MuseeBilletterieBundle:Email:email.html.twig', array('cid' => $cid, 'cmd' => $cmd, 'visiteurs' => $cmd->getLigneCommande(), 'date' => $dateFormat)), 'text/html');
        $message->attach(\Swift_Attachment::newInstance($pdf, 'billets.pdf'));
        $this->mailer->send($message);
       
    }

 

}

<?php

namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class ContactNotification{

    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var Environement
     */
    private $renderer;


    public function __construct(MailerInterface $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }
    public function notify(Contact $contact){
        $message = (new TemplatedEmail())
        ->from(new Address($contact->getEmail(), 'Message'))
        // j'envoie a l'admin, ici jecris sonr adresse mail en dur 
        // ->to('service.locavor@gmail.com')
        ->to('lorenzodreamfactory@gmail.com')


        ->subject('Message en attente')
        ->htmlTemplate(
'email/visiteur_message.html.twig')
        ->context([
            'contact' => $contact,
            'date' => new \DateTime,
        ]);  
        $this->mailer->send($message);

    }
}
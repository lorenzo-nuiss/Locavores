<?php

namespace App\EventSubscriber;

use Psr\Log\LoggerInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HoneyPotSubscriber implements EventSubscriberInterface
{

    private LoggerInterface $logger;

    private RequestStack $requestStack;

    public function __construct(
        LoggerInterface $logger,
        RequestStack $requestStack
    ) {
        $this->logger = $logger;
        $this->requestStack = $requestStack;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SUBMIT => 'checkHoneyJar'
        ];
    }

    public function checkHoneyJar(FormEvent $event): void
    {
        $request = $this->requestStack->getCurrentRequest();

        if (!$request) {
            return;
        }

        $data = $event->getData();
        if (!array_key_exists('pays', $data) || !array_key_exists('age', $data)) {
            throw new HttpException(400, "Vous n'êtes pas autoriser a modifier le formulaire");
        }
        [
            'pays' => $pays,
            'age' => $age
        ] = $data;
        if ($pays !== "" || $age !== "") {
            $this->logger->info("Une potentielle tentative de robot spammeur ayant l'adresse IP suivante '{$request->getClientIp()}' a eu lieu. Des champs de sécutité 
    ont été intercepeté");
            throw new HttpException(403, "Go away dirty bot !");
        }
    }
}

<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class EmailValidateChecker implements UserCheckerInterface{


    public function checkPreAuth(UserInterface $user)
    {
return $this->checkAuth($user); 
    }

    public function checkPostAuth(UserInterface $user){
return $this->checkAuth($user); 
    }

    private function checkAuth(UserInterface $user){


            if (property_exists($user, 'getActivationToken')) {
                if ($user->getActivationToken()) {
                    // throw new \Exception("Vous n'avez pas encore activer votre compte");
                    throw new CustomUserMessageAccountStatusException("Un mail de confirmation vous a été envoyer lors de votre inscription, Veuilliez cliquer sur le lien afin de finaliser votre inscription");       
                }
            }
        
    
    }
}

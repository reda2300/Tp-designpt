<?php

namespace EsgiIw\TpDesignPattern\Model;

class BusinessEventValidator extends EventValidator
{
    protected function checkEligibility(User $user): bool
    {
        // Vérifie si l'utilisateur est membre du BD
    }

    protected function validateRegistration(User $user): bool
    {
        // Valide l'inscription à un événement professionnel
    }
}
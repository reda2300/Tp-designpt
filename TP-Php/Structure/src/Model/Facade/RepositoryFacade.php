<?php

namespace EsgiIw\TpDesignPattern\Model\Facade;

use EsgiIw\TpDesignPattern\Model\EventRepository;

class RepositoryFacade
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    // Méthodes pour encapsuler les opérations du repository
}
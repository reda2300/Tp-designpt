<?php

namespace EsgiIw\TpDesignPattern\Model;

class Event
{
    private $id;
    private $name;
    private $date;

    public function __construct(int $id, string $name, string $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
    }

    // Getters et setters pour les propriétés de l'événement
}
<?php

namespace EsgiIw\TpDesignPattern\Model;

class EmailAlertContent implements AlertContentInterface
{
    public function getContent(): string
    {
        
        return "Hola.";
    }
}
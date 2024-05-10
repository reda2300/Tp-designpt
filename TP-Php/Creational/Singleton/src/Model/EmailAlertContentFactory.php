<?php

namespace EsgiIw\TpDesignPattern\Model;

class EmailAlertContentFactory
{
    public function createContent(): AlertContentInterface
    {
        return new EmailAlertContent();
    }
}
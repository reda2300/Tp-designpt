<?php

namespace EsgiIw\TpDesignPattern\Model;

class SmsAlertContent implements AlertContentInterface
{
    public function getContent(): string
    {
        
        return "Test test.";
    }
}